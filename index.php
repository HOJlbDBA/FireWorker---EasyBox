<?php
    $title = "EasyBox — Главная";
    $cssSlick = "css/slick.css";
    $cssSlickTheme = "css/slick-theme.css";
    $css = "style.css?v=2";
    $cssModal = "css/modal.css";
    $cssUnslider = "css/unslider.css";
    $cssUnsliderDots = "css/unslider-dots.css";
    require_once "block/head.php";
?>
<main>
    <div class="my-slider center-block-main">
        <ul>
            <li>
                <img src="img/slidesImg/slide1.jpg" alt="">
            </li>
            <li>
                <img src="img/slidesImg/slide2.jpg" alt="">
            </li>
            <li>
                <img src="img/slidesImg/slide3.jpg" alt="">
            </li>
        </ul>
    </div>
    <h1 id="pageInd">Новинки</h1>
    <section>
        <div class="multiple-items">
            <div>
            <img src="img/slidesImg/newbox1.jpg" alt="">
            </div>
            <div>
            <img src="img/slidesImg/newbox2.jpg" alt="">
            </div>
            <div>
            <img src="img/slidesImg/newbox3.jpg" alt="">
            </div>
            <div>
            <img src="img/slidesImg/newbox4.jpg" alt="">
            </div>
            <div>
            <img src="img/slidesImg/newbox5.jpg" alt="">
            </div>
            <div>
            <img src="img/slidesImg/newbox6.jpg" alt="">
            </div>
        </div>
        <div class="slick-slide"></div>
        </section>
    <h1 id="pageInd">Лидеры продаж</h1>
    <div class="blockCart">
    <?php  $sql = mysqli_query($link, 'SELECT `img`, `name`, `price` FROM `liditems`');
        while ($result = mysqli_fetch_array($sql)) {
         echo "<div class=\"cart\">
            <figure>
                <p><img id=\"_{$result['img']}\" src=\"img/gifts/{$result['img']}.jpg\"/></p>
                <figcaption>{$result['name']}</figcaption>
                <figcaption class=\"cost\">{$result['price']} ₽</figcaption>
            </figure>
        </div>";
    }?>
    </div>
</main>
<?php
    $jsJQ = "js/jquery-3.6.3.min.js";
    $jsTrans = "js/jquery.transit.min.js";
    $jsProverka = "js/proverka.js";
    $jsSlides = "js/slides.js";
    $jsUnslider = "js/unslider-min.js";
    $jsSlick = "js/slick.js";
    $AngryC = "js/angry-cart.js?v=1";
    $jsFB = "js/firebase.js";
    $jsModal = "js/modal.js";
    $jsModalUse = "js/modal_use.js?v=2";
    $jsKorzina = "js/korzina.js";
    require_once "block/footer.php";
?>
<script>
        if ($(window).width() <= '1250'){
            $('#_bigbox').click(function(){
            location.href = "bigbox.php"
    })
            $('#_gadgetbox').click(function(){
            location.href = "gadgetbox.php"
    })
            $('#_candybox').click(function(){
            location.href = "candybox.php"
    })
            $('#_manbox').click(function(){
            location.href = "manbox.php"
    })
            $('#_womanbox').click(function(){
            location.href = "womanbox.php"
    })
            $('#_kidbox').click(function(){
            location.href = "kidbox.php"
    })
}
</script>