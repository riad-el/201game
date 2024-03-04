<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form class="form-inline" action="{{route('play')}}" method="POST">
        
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Choisir Le nombre</label>
          <input type="number" class="form-control" id="inputPassword2" placeholder="Nombre" name="number">
       
        </div>
        @csrf
        <button type="submit" class="btn btn-primary mb-2">Deviner</button>
      </form>
    </div>
    <div class="alert alert-primary" role="alert">
     {{$message}}
    </div>
</body>
</html>