<?php
    $title = "EasyBox — Товары";
    $css = "style.css?v=2";
    $cssModal = "css/modal.css";
    require_once "block/head.php";
?>
<main>
    <h1>Товары</h1>
    <div class="blockCart">
    <?php  $sql = mysqli_query($link, 'SELECT `img`, `name`, `price` FROM `items`');
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
    $jsModal = "js/modal.js";
    $jsModalUse = "js/modal_use.js?v=1";
    $AngryC = "js/angry-cart.js?v=1";
    $jsFB = "js/firebase.js";
    $jsKorzina = "js/korzina.js?v=1";
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
            $('#_mixbox').click(function(){
            location.href = "mixbox.php"
    })
            $('#_beautybox').click(function(){
            location.href = "beautybox.php"
    })
            $('#_accessoriesbox').click(function(){
            location.href = "accessoriesbox.php"
    })
            $('#_colorbox').click(function(){
            location.href = "colorbox.php"
    })
            $('#_harrybox').click(function(){
            location.href = "harrybox.php"
    })
            $('#_moneybox').click(function(){
            location.href = "moneybox.php"
    })
            $('#_petsbox').click(function(){
            location.href = "petsbox.php"
    })
            $('#_schoolbox').click(function(){
            location.href = "schoolbox.php"
    })
}
</script>