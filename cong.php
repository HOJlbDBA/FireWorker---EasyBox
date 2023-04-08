<?php
    require_once "functions.php";
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $title = "Спасибо, что выбрали EASYBOX";
    $message = "$name, вот ваша покупка: <br><br> В будущем здесь будет чек <br><br> Easy box - путеводитель ваших эмоций и впечатлений💛";
    $fromEmail = "EasyBox@mail.ru";

if($name != '' && $phone != '' && $email != ''){
    if((strlen($name)>=20 && strlen($name)<=100) && (preg_match('/^[а-яёА-ЯЁ\s\-]+$/u', $name)) || (strlen($name)>=10 && strlen($name)<=50) && (preg_match('/^[a-zA-Z\s\-]+$/u', $name))){
        if(preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", $phone)){
            if(preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i", $email)){
                $query = "INSERT INTO `users` (`id`, `name`, `email`, `phone`) VALUES (NULL, '$name', '$email', '$phone')";
                $rezult = mysqli_query($link,$query);
                if($rezult){
                    $s = "Письмо с чеком отправлено на вашу почту";
                    mail($email, $title, $message, 'From:'.$fromEmail. "\r\n" . "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8");
                }else{
                    $s = "Произошла ошибка, попробуйте позже";
                }
            }else{
                $s = 'Введите корректно свою почту!';
            }
           
        }else{
            $s = 'Введите корректно свой номер!';
        }

    }else{
        $s = 'Введите корректно свое ФИО!';
    }
}else{
    $s = "Заполните поля формы!";
}
require_once 'form.php';
?>