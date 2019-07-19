<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <div class="container">
        <br/>
        <h3>
            Book Store
            <a href="{{route('book.index')}}"><button type="button" class="btn btn-dark" style="float: right;">+ Add Book</button><a>
        </h3>
        <table class="table">
            <thead class="thead-dark">
                <tr align="center">
                <th scope="col">#</th>
                <th scope="col">Book Name</th>
                <th scope="col">Type</th>
                <th scope="col">Writer</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index=>$book)
                <tr align="center">
                <th scope="row">{{ ++$index }}</th>
                <td>{{$book->book_name}}</td>
                <td>{{$book->type}}</td>
                <td>{{$book->writer}}</td>
                <td>{{$book->price}}</td>
                <td>
                    <form action="{{route('book.delete')}}" method="post">
                        @csrf
                        <a href="{{route('book.edit',$book->id)}}">
                            <input type="button" class="btn btn-warning" value='Edit'>
                        </a>
                        <input id='id' name='id' value='{{$book->id}}' type='hidden'>
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
