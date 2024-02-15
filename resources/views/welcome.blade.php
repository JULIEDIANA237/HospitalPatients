<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel + Bootstrap 5</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
        <!-- Le css Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body >

    <div class="container">

        <h1 class="text-success" >Login</h1>

        <form>
            <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
</div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </div>

    <!-- Le javascript Bootstrap -->
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>