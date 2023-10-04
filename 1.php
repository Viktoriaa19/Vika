<?php 
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;
        
        if(empty($_POST['name'])) exit('Поле "Логин" не заполнено');
        if(empty($_POST['password'])) exit('Поле "Пароль" не заполнено');
        if(empty($_POST['password1'])) exit('Поле "Потверждение пароля" не заполнено');
        if(empty($_POST['mail'])) exit('Поле "Почта" не заполнено');
        if(strlen($_POST['password'])< 8) exit ('Пароль не соответствует критерию длины');
        if($_POST['password'] !== $_POST['password1']) exit('Пароли не совпадают');

        echo 'Здравствуйте, '.htmlspecialchars($_POST['name']).'. <br>';
        echo 'Ваш аккаунт создан'.'. <br>';

?>