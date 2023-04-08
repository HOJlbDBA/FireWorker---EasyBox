<?php
    $title = "EasyBox — Рулетка";
    $css = "style.css?";
    $cssRuletka = "css/ruletka.css?";
    require_once "block/head.php";
?>
<main style="padding-bottom: 20px;">
    <h1>Рулетка</h1>
    <div class="ruletka">
        <!-- главный блок -->
        <div class="deal-wheel">
        <!-- блок с призами -->
        <ul class="spinner"></ul>
        <!-- язычок барабана -->
        <div class="ticker"></div>
        <!-- кнопка -->
        
        <button class="btn-spin" id="btn-st" style="margin-bottom: 0; display:none;">Испытай удачу</button>
        <input class="btn-spin" style="text-align:center;" type="text" name="" id="code" placeholder="Введите промокод">
        
  </div>
    </div>
    <div class="sub">
        <button class="btn" id='sub'>Ввести</button>
    </div>
</main>
<?php
    $jsJQ = "js/jquery-3.6.3.min.js";
    $jsTrans = "js/jquery.transit.min.js";
    $jsProverka = "js/proverka.js";
    $jsRuletka = "js/ruletka.js?";
    $AngryC = "js/angry-cart.js?v=1";
    $jsFB = "js/firebase.js";
    $jsKorzina = "js/korzina.js?v=1";
    require_once "block/footer.php";
?>