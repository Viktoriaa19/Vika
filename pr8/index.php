<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="otv\2otvet.php" method="post">
        <div class="container">
          <h1>Авторизация</h1>
          <hr>

          <label for="login"><b>Login</b></label><br>
          <input type="text" placeholder="Enter Login or Email" name="login" required><br>

          <label for="psw"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="psw" required><br>

          <button type="submit" class="registerbtn">Войти</button>
        </div>
      </form>
</body>
</html>