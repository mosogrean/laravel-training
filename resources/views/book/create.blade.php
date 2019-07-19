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
    <br>
    <br>
        <div class="container">
            <div class="row">
                 <h3>Form Add Book</h3>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <form action="{{route('book.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="book_name">Book Name</label>
                            <input type="text" class="form-control" id="book_name" placeholder="Book Name" name="book_name" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" placeholder="Type" name="type" required>
                        </div><div class="form-group">
                            <label for="writer">Writer</label>
                            <input type="text" class="form-control" id="writer" placeholder="Writer" name="writer" required>
                        </div><div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" placeholder="Price" name="price" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                        <a href="{{route('dashboard')}}"><button class="btn btn-danger">Cancel</button></a>
                </div>
            </div>
        </div>

    </body>
</html>
