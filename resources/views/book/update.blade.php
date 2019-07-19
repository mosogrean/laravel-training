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
                 <h3>Form Edit Book {{$id}}</h3>
            </div>
            <div class="row">
                <div class="col-md-12">

                <div class="row">
                </div>
                    <form action="{{route('book.update')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="price">New Price</label>
                            <input type="number" class="form-control" id="price" placeholder="price" name="price" required>
                        </div>
                        <input id='id' name='id' value='{{$id}}' type='hidden'>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('dashboard')}}"><input type="button" class="btn btn-danger" value="Cancel"></a>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>