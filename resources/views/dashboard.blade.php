<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
{{--        {{ dd($books[0]->writer) }}--}}

        <div class="container">
            <br>
            <br>
            <div>
                <div class="row">
                    <div class="col-md-9">
                        <h3>Books Store</h3>
                    </div>
                    <div class="col-md-3" align="right">
                        <a href="{{route('book.index')}}">
                            <button type="button" class="btn btn-primary">+ Add Book</button>
                        </a>
                    </div>
                </div>
            </div>
            <br>
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
<!--                --><?php //$var = 1 ?>
                    @foreach($books as $index => $book)
                        <tr align="center">
{{--                            <th scope="row">{{ $var }}</th>--}}
                            <th scope="row">{{++$index}}</th>
                            <td>{{$book->book_name}}</td>
                            <td>{{$book->type}}</td>
                            <td>{{$book->writer}}</td>
                            <td>{{$book->price}}</td>
                            <td>
                                <a href="#">
                                    <button type="button" class="btn btn-warning">
                                        Edit
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button" class="btn btn-danger">
                                        Delete
                                    </button>
                                </a>
                            </td>
                        </tr>
<!--                        --><?php //$var++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
