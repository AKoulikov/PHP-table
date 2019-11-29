<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <title>Авторизация на сайте</title>
  </head>
  <body>
    <div class="container" style = "margin-top: 10%">
        <h1 class="text-center my-3">Авторизация на сайте</h1>
        <div class="row justify-content-md-center">
            <div class="col-5">
                <form action="php/reg_auth.php" method="POST">
     

       
       <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-sign-in" aria-hidden="true"></i></div>
        </div>
        <input name="login" type="text" class="form-control" placeholder="Логин">
      </div>
       
       <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
        </div>
        <input name="password" type="password" class="form-control" placeholder="Пароль">
      </div>
      <input type="submit" class="form-control btn btn-primary">
      
                </form>
            </div>
    </div>
    
<!--    <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
</div>

<div>
    <label for="pass">Password (8 characters minimum):</label>
    <input type="password" id="pass" name="password"
           minlength="8" required>
</div>

<input type="submit" value="Sign in">-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>