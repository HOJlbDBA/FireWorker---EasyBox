<div class="korzinaVert">
            <h3 style="text-align:center; margin: 10px 0;">Корзина</h3><span id="hide">🢁</span>
            <hr style="margin-bottom: 10px">
        <div class="bodyKorzina">
                <div id="cartPreview" class="pb-5"></div>
                <button class="clear_but delete" onclick="cart.clearCart()">Очистить</button>
                <button class="buy">Купить</button>
            <div class="bottom_korz">
                <div id="rez_korz">Всего: <span id="totalPrice">0</span> ₽ <span style="display:none;" id="cartCount">0</span></div>
            </div>
        </div>
    </div>
    <div style="display:flex; justify-content:center;">
        <div id="imgKor" style="width:55px; height:55px; background-color:rgba(176, 164, 247, 0.7);border-radius:50%;">
            <img id="imgKor" src="img/korzina.png" alt="">
        </div>
    </div>
<footer>
    <div class="blockContact">
        <div class="contact">
           <h3>Покупателям</h3>
           <ul class="list" id="list">
            <li><a href="faq.php">Как сделать заказ</a></li>
            <li><a href="faq.php">Способ оплаты</a></li>
            <li><a href="faq.php">Доставка</a></li>
            <li><a href="faq.php">Возврат денежных средств</a></li>
            <li><a href="faq.php">Правила продажи</a></li>
            <li><a href="faq.php">Вопросы и ответы</a></li>
           </ul>
        </div>
        <div class="contact">
            <h3>Партнерам</h3> 
            <ul class="list" id="list">
                <li><a href="faq.php">Курьерам</a></li>
                <li><a href="faq.php">Перевозчикам</a></li>
                <li><a href="faq.php">Партнерский пункт выдачи</a></li>
                <li><a href="faq.php">Франшизный пункт выдачи</a></li>
            </ul>
        </div>
        <div class="contact">
           <h3>Компания</h3> 
           <ul class="list" id="list">
            <li><a href="faq.php">О нас</a></li>
            <li><a href="faq.php">Реквизиты</a></li>
            <li><a href="faq.php">Контакты</a></li>
           </ul>
        </div>
        <div class="contact">
           <h3>Мы в соцсетях</h3> 
            <div class="futlogo">
                <ul class="list" id="list">
                 <li><a href="#"><img src="img/vklogo.png" alt=""> Мы в VK</a></li>
                 <li><a href="#"><img src="img/tglogo.png" alt=""> Мы в Telegram</a></li>
                 <li><a href="#"><img src="img/whatsapp.png" alt=""> Мы в Whatsapp</a></li>
                </ul>
            </div>
        </div>
        <div class="contact">
            <h3>Мобильные устройства</h3>
            <ul class="list" id="list">
                <li><a href="#">Google Play</a></li>
                <li><a href="#">App Store</a></li>
                <li><a href="#">AppGallery</a></li>
            </ul>
         </div>
    </div>
        
    <div class="cop">
       <p>2023 © EasyBox — путеводитель ваших эмоций и впечатлений 💛.
        Все права защищены. Доставка по всей России.</p> 
    </div>
</footer>
<div class="buyPM">
    <p>Вы успешно добавили товар в корзину!</p>
</div>
<div class="ErrPM">
    <p>Вы ввели неправильный промокод!</p>
</div>
<div class="ErrPM2">
    <p>Вы уже использовали данный промокод!</p>
</div>
<div class="ErrPM3">
    <p><?php if(isset($s)){echo $s;} ?></p>
</div>
<script src="<?=$jsJQ?>"></script>
<script src="<?=$jsTrans?>"></script>
<script src="<?=$jsProverka?>"></script>
<script src="<?=$jsRuletka?>"></script>
<script src="<?=$jsSlides?>"></script>
<script src="<?=$jsUnslider?>"></script>
<script src="<?=$jsSlick?>"></script>
<script src="<?=$jsModal?>"></script>
<script src="<?=$jsModalUse?>"></script>
<script src="<?=$AngryC?>"></script>
<script src="<?=$jsFB?>"></script>
<script src="<?=$jsKorzina?>"></script>
</body>
</html>
<script>
    $('.buy').click(function(){
        location.href = "form.php"
    })
</script>