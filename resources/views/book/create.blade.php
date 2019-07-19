<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
<br/>
            <div class="row">
                 <h3>Form Add Book</h3>
            </div>
            <div class="row">
                <div class="col-md-12">

                <div class="row">
                </div>
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
                        <!-- <form action="{{route('dashboard')}}" method="get">
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form> -->
                        <a href="{{route('dashboard')}}"><input type="button" class="btn btn-danger" value="Cancel"></a>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>