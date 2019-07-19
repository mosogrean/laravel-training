<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Book;

class DashboardTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGuestCanSeeDashboardPage() 
    {
        $response = $this->get(route('dashboard'))->assertSuccessful();
        $response->assertStatus(200);
    }

    // public function testGuestInsertBook() 
    // {
    //     $this->get(route('dashboard'))->assertSuccessful();
    //     $this->post(route('dashboard.store', [
    //         'writer' => 'mos',
    //         'book_name' => 'laravel',
    //         'price' => 50,
    //         'type' => 'programming',
    //     ]))->assertRedirect(route('dashboard'));

    //     $books = Book::get()->first();
    //     $this->assertEquals($books->writer, 'mos');
    //     $this->assertEquals($books->book_name, 'laravel');
    //     $this->assertEquals($books->price, 50);
    //     $this->assertEquals($books->type, 'programming');
    // }

    public function testGuestInsertBook()
    {
        // arrange
        $this->get(route('book.index'))
            ->assertViewIs('book.create')
            ->assertSuccessful()
            ->assertStatus(200);

        // act
        $this->post(route('book.store', [
            '_token' => \Session::token(),
            'writer' => 'mos',
            'book_name' => 'laravel',
            'price' => 50,
            'type' => 'programming',
        ]))->assertRedirect(route('dashboard'));

        // assert
        $books = Book::get()->first();
        $this->assertEquals($books->writer, 'mos');
        $this->assertEquals($books->book_name, 'laravel');
        $this->assertEquals($books->price, 50);
        $this->assertEquals($books->type, 'programming');
    }

    public function testGuestQueryBook() 
    {
        $books = factory(Book::class, 2)->create();
        $this->get(route('dashboard'))
            ->assertSee($books[0]->id)
            ->assertSee($books[0]->writer)
            ->assertSee($books[0]->book_name)
            ->assertSee($books[1]->id)
            ->assertSee($books[1]->writer)
            ->assertSee($books[1]->book_name)
            ->assertSuccessful();

    }

    public function testUpdateBook()
    {
        $first_book = factory(Book::class)->create();

        $this->get(route('book.edit', $first_book->id))
        ->assertViewIs('book.update')
        ->assertSuccessful()
        ->assertStatus(200);

        $this->post(route('book.update', [
            '_token' => \Session::token(),
            'id' => $first_book->id,
            'price' => 30,
        ]))->assertRedirect(route('dashboard'));

        $book = Book::get()->first();

        $this->assertNotEquals($book->price, $first_book->price);
        $this->assertEquals($book->price, 30);
    }

    public function testDeleteBook()
    {
        $book = factory(Book::class)->create();

        $this->post(route('book.delete', [
            '_token' => \Session::token(),
            'id' => $book->id,
        ]))->assertRedirect(route('dashboard'));

        $this->assertDatabaseMissing('books', [
            'id' => $book->id
        ]);
    }
}
