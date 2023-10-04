<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <Style>
        .error{
            color: red;
        }
        </style>
    </head>
    <body>
        <form action="1.php" method="post">
        <p>Почта:<span class="error">*</span> <input type="email" name="mail" placeholder= "E-Mail" required></p> 
            <p>Логин:<span class="error">*</span> <input type="text" name="name"  placeholder= "Логин" required></p>
            <p>Пароль:<span class="error">*</span> <input type="password" name="password"  placeholder= "Пароль" required></p>
            <p>Подтверждение пароля:<span class="error">*</span> <input type="password" name="password1"  placeholder= "Потверждение пароля"  required></p>
            <p><span class="error"> * обязательное поле </span></p>
            <p><input type="submit" value="Зарегестрироваться" required></p> 
           
        </form>
    </body>
</html>