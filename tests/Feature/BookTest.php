<?php

namespace Tests\Feature;

use App\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;
    
    public function testGuestCanSeeDashboardPage()
    {
        $response = $this->get(route('dashboard'))->assertSuccessful();
        $response->assertStatus(200);
    }

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

    public function testShowBookOnDashboard()
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
}
