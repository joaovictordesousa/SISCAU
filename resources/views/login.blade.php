<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="icon" href="img/logoicon.jpg">
    <title>SISCAU</title>
   
</head>
<body>
  <section>
    <div class="container_login">
      <div class="row">
        <h1>Login</h1>
        <div class="col-md-6 offset-md-3">
         <form method="POST" action="{{route('auth.user')}}">
            @csrf
            <div class="form-group">
             <label for="exampleInputEmail">Email de acesso</label>    
             <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <br><br>
            <div class="form-group">
             <label for="exampleInputEmail">Password</label>
             <input type="Password" name="password" class="form-control" id="exampleInputEmail1">
            </div>
            <br><br>
            <a class="ResetPassword" href="#">Esqueci minha senha</a>
            <br><br>
            <button type="submit" class="btn btn-primary">Login</button>
            <br>
         </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
