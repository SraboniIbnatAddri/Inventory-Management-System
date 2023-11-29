<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
            <a href="{{url('/')}}" class="btn btn-primary my-3">Show Data</a>
            @if(Session::has('msg'))
                <p class = alert alert-succcess>{{ Session::get('msg') }}</p>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{url('/store-data')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type ="text" class="form control my-3" name="name"placeholder="please enter name">
                </div>
                <div class="form-group">
                    <label for="">Quantity</label>
                    <input type ="quantity" class="form control my-3" name="quantity"placeholder="please enter quantity">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type ="price" class="form control my-3" name="price"placeholder="please enter total price">
                </div>
                <input type="submit" class="btn btn-primary my-3" value="submit">
            </form>

        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>