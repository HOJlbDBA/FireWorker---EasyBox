<?php
    $title = "EasyBox — Покупка";
    $css = "style.css";
    require_once "block/head.php";
?>
<style>
    form{
        margin:0 auto;
        display:flex;
        flex-wrap:wrap;
        width:400px;
    }
    #formGET{
        height:500px;
        text-align:center;
        font-size:24px;
    }
    .btn{
        width:400px;
        height:50px;
        text-align:center;
    }
    .korzinaVert{
        display:none;
    }
    #imgKor{
        display:none;
    }
    @media (max-width: 565px) {
        p{font-size:16px;}
        .btn{width:320px; height:40px; font-size: 12px;}
        form{width:350px;}
    }
    @media (max-width: 400px) {
        #texthold{font-size: 7px;}
        .btn{width:230px; height:30px; padding: 0px 30px;}
        form{width:230px;}
    }
</style>
    <main>
        <div id="formGET">
        <h1>Покупка</h1>
        <form action="cong.php" method="GET">
            <p>Введите ваше ФИО:</p>
            <input class="btn" type="text" name="name" placeholder="Иванов Иван Иванович" id="texthold"> 
            <p>Введите вашу почту:</p>
            <input class="btn" type="text" name="email" placeholder="easybox@mail.ru" id="texthold">
            <p>Введите ваш телефон:</p>
            <input class="btn" type="text" name="phone" placeholder="+7(495)111-11-11" id="texthold">
            <input class="btn" id="zakaz" type="submit" value="Заказать"><input class="btn" type="reset" value="Очистить">
        </form>
    </div>
    </main>
<?php
    $jsJQ = "js/jquery-3.6.3.min.js";
    $AngryC = "js/angry-cart.js?v=1";
    $jsFB = "js/firebase.js";
    $jsKorzina = "js/korzina.js?v=2";
    require_once "block/footer.php";
?>
<script>
    let text = $('.ErrPM3 p').text()
    if($('.ErrPM3 p').text() == 'Письмо с чеком отправлено на вашу почту'){
        $('.ErrPM3').css('background-color','#97e24198')
            }else{
                $('.ErrPM3').css('background-color','#e2544198')
            }
    jQuery(document).ready(function($) {
        if(text != ""){
    if ($('.ErrPM3').css('opacity') == '1') {
    $('.ErrPM3').fadeIn(1000)
    $('.ErrPM3').fadeOut(3000)
}   else{
    $('.ErrPM3').stop(true)
    $('.ErrPM3').fadeOut(0)
    $('.ErrPM3').fadeIn(1000)
    $('.ErrPM3').fadeOut(3000)
}}})
</script>