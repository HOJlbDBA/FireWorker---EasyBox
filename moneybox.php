<?php
    $title = "EasyBox — Денежный бокс";
    $css = "style.css";
    require_once "block/head.php";
?>
<style>
    .modalBox{
    display: flex;
    justify-content: center;
    flex-wrap:wrap;
}
.modalBox p{
    text-align: justify;
    padding: 15px;
    padding-bottom: 0;
    width: 500px;
    margin-top: 30px;
    margin: 20px;
    line-height: 1.5;
    font-size:18px;
}
.modalBox img{
    border-radius: 10%;
    margin: 0 auto;
}
#mr{
        margin-right:50px;
    }
figcaption{
    margin-top: 2px; font-size:18px; font-style: italic;
}
#p_cena{
    margin-top:70px; font-weight: bold; font-size:26px;
}
@media (max-width: 1375px) {
    #mr{
        margin-right:0;
    }
    p{
        font-size:12px;
    }
}
@media (max-width: 800px) {
    .modalBox p{
        font-size:15px;
    }
    figcaption{
        font-size:14px;
    }
    #p_cena{
    font-size:20px;
}
.btn {
    text-decoration: none;
    color: rgb(0, 0, 0);
    display: inline-block;
    position: relative;
    border: 1px solid;
    border-image: linear-gradient(rgba(241, 184, 255, 0.7), rgba(68, 148, 252, 0.7));
    border-image-slice: 1;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
    overflow: hidden;
    letter-spacing: 2px;
    transition: .8s cubic-bezier(.165, .84, .44, 1);
    width: 150px;
    height: 40px;
    font-size: 12px;
}
#h1_box{
    font-size:26px;
}
}
@media (max-width: 600px) {
    .modalBox p{
        width: 350px;
    }
}
@media (max-width: 430px) {
    .modalBox p{
        width: 270px;
    }
}
</style>
<main>
<h1 id="h1_box" style="margin-bottom: 10px">Денежный бокс</h1>
<div class="modalBox">
<div id="mr">
<img style="margin-top:10px;" src="img/gifts/moneybox.jpg">
<figcaption>Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption>
</div>
    <div>
    <p>Изи бокс "Money" настоящее сокровище для пиратов. Любители кэша приготовтесь к покупке самого оригинального бокса, который точно не оставит вас равнодушными. 
7 подарков с денежными атрибутами и бонус в виде реальных денег от 50 до 500 рублей. Готовы попытать удачу? </p>
    <p>В боксе вас ждёт различное наполнение, среди которых: кружки, канцелярские товары, часы, зарядники, браслеты, фонари с нереальной мощностью и фирменная упаковка нашего бренда.</p>
    <p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p>
<p id="p_cena">Цена: 2499 ₽</p>
<input class="btn b_buy" type="submit" onclick="cart.addToCart(7, {title: 'MoneyBox', price: 2499})" value="В корзину">
</div>
</div>
</main>
<?php
    $jsJQ = "js/jquery-3.6.3.min.js";
    $jsTrans = "js/jquery.transit.min.js";
    $jsProverka = "js/proverka.js";
    $AngryC = "js/angry-cart.js?v=1";
    $jsFB = "js/firebase.js";
    $jsKorzina = "js/korzina.js?v=2";
    require_once "block/footer.php";
?>