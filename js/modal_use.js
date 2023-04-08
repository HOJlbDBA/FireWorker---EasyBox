if ($(window).width() > '1250'){
    //Модалальное окно Большого бокса +
    $('#_bigbox').click(function(){
        var modal = $modal({
            title: 'Большой бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Big" подойдёт даже для большой компании! Бокса такого размера хватит на несколько человек, а содержимое оставит нереальные впечатления. Сладости, гаджеты, канцелярия и секретное наполнение. Что попадётся именно тебе - тайна до самого открытия.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 7999 ₽</p></div><div><p><img src="img/gifts/bigbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "bigbox.php"
    })
    })
    //Модалальное окно Гаджет бокса +
    $('#_gadgetbox').click(function(){
        var modal = $modal({
            title: 'Гаджет бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Gadget" вариант для активных пользователей современных устройств. Такое разнообразие вещей, которые смогут сделать времяпровождение за монитором проще и интереснее.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 6999 ₽</p></div><div><p><img src="img/gifts/gadgetbox.jpg" alt="" /><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "gadgetbox.php"
    })

    })
    //Модалальное окно Сладкого бокса +
    $('#_candybox').click(function(){
        var modal = $modal({
            title: 'Сладкий бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Candy" сведёт с ума любого сладкоежку. Разнообразие вкусняшек с разных уголков мира делает каждый бокс неповторимым. Американские кислые мармеладки или может конфеты из Турции? Наполнение твоего бокса останется в секрете до самого вскрытия...</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 1999 ₽</p></div><div><p><img src="img/gifts/candybox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "candybox.php"
    })
    })
    //Модалальное окно Для него бокса +
    $('#_manbox').click(function(){
        var modal = $modal({
            title: 'Бокс для него',
            content: '<div class="modalBox"><div> <p>Изи бокс "For him" разработан для самых дорогих мужчин, парней, мальчиков. Подарок включает в себя различное наполнение, среди которых: канцелярия, сладости, вещи единого размера (oversize), парфюм.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 3999 ₽</p></div><div><p><img src="img/gifts/manbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "manbox.php"
    })
    })
    //Модалальное окно Для нее бокса +
    $('#_womanbox').click(function(){
        var modal = $modal({
            title: 'Бокс для нее',
            content: '<div class="modalBox"><div> <p>Изи бокс "For her" подборка для самых дорогих женщин, девушек, девочек. Подарок включает в себя уходовые средства, сладости, канцелярию, парфюм, вещи единого размера (oversize).</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 3999 ₽</p></div><div><p><img src="img/gifts/womanbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "womanbox.php"
    })
    })
    //Модалальное окно Детского бокса +
    $('#_kidbox').click(function(){
        var modal = $modal({
            title: 'Детский бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Kids" специально для самых юных любителей сюрпризов. Здесь вы найдёте трендовые игрушки, сладости, канцелярию, рюкзаки, подставки для телефона и многое другое с персонажами из мультиков.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 2999 ₽</p></div><div><p><img src="img/gifts/kidbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "kidbox.php"
    })
    })
    //Модалальное окно Микс бокса +
    $('#_mixbox').click(function(){
        var modal = $modal({
            title: 'Микс бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Mix" включает в себя целое разнообразие сюрпризов, среди которых есть гаджеты, сладости и аксессуары. Что попадётся именно вам является тайной до самого открытия. Среди подарков: беспроводные наушники, портативные колонки, чехлы, канцелярия, сладости со всех уголков планеты и многое другое.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 3999 ₽</p></div><div><p><img src="img/gifts/mixbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "mixbox.php"
    })
    })
    //Модалальное окно Нарядного бокса +
    $('#_accessoriesbox').click(function(){
        var modal = $modal({
            title: 'Нарядный бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Accessories" сборище различных ништяков, которые подходят как для него, так и для нее. Ремни, очки, головные уборы, цепочки, значки, футболки, кулоны и 100 различных вариантов того, что может ждать вас в боксе. Больше не нужно гадать, что подарить!</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 2999 ₽</p></div><div><p><img src="img/gifts/accessoriesbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "accessoriesbox.php"
    })
    })
    //Модалальное окно Красивого бокса +
    $('#_beautybox').click(function(){
        var modal = $modal({
            title: 'Красивый бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Beauty" разнообразие косметических средств для твоего трендового макияжа. Лучшие бренды косметики и рандомное наполнение - настоящие составляющие приятных эмоций! От карандаша для губ до палетки теней и лучших средств для кожи.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 3499 ₽</p></div><div><p><img src="img/gifts/beautybox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "beautybox.php"
    })
    })
    //Модалальное окно Цветного бокса +
    $('#_colorbox').click(function(){
        var modal = $modal({
            title: 'Цветной бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Color" - это настоящее безумие... Ведь цветовая гамма бокса может быть абсолютно различной. От нюдовых оттенков до тёмных тонов. Все содержимое будет только одного цвета, сможешь угадать какой достанется именно тебе?</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 3999 ₽</p></div><div><p><img src="img/gifts/colorbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "colorbox.php"
    })
    })
    //Модалальное окно Гарри бокса +
    $('#_harrybox').click(function(){
        var modal = $modal({
            title: 'Бокс Гарри Поттера',
            content: '<div class="modalBox"><div> <p>Изи бокс "Harry Potter" наполнение для самых преданных фанатов легендарной вселенной. Оказаться в фантастическом мире можно даже не выходя из дома и по очень выгодной цене.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 3999 ₽</p></div><div><p><img src="img/gifts/harrybox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "harrybox.php"
    })
    })
    //Модалальное окно Денежного бокса +
    $('#_moneybox').click(function(){
        var modal = $modal({
            title: 'Денежный бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "Money" настоящее сокровище для пиратов. Любители кэша приготовтесь к покупке самого оригинального бокса, который точно не оставит вас равнодушными. 7 подарков с денежными атрибутами и бонус в виде реальных денег от 50 до 500 рублей. Готовы попытать удачу?</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 2499 ₽</p></div><div><p><img src="img/gifts/moneybox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "moneybox.php"
    })
    })
    //Модалальное окно Бокса для питомца +
    $('#_petsbox').click(function(){
        var modal = $modal({
            title: 'Бокс для питомца',
            content: '<div class="modalBox"><div> <p>Изи бокс "Pets" для любимых домашних питомцев. Мы позаботились даже о самых плюшевых членах семьи и теперь сделать их счастливее можно ещё проще! Лакомства известных производителей, качественные игрушки, средства для ухода, аксессуары, корма. Подберём наполнение для каждого хвостика.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 2799 ₽</p></div><div><p><img src="img/gifts/petsbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "petsbox.php"
    })
    })
    //Модалальное окно Школьного бокса
    $('#_schoolbox').click(function(){
        var modal = $modal({
            title: 'Школьный бокс',
            content: '<div class="modalBox"><div> <p>Изи бокс "School" для самых прилежных обучающихся. Тут все необходимое для школьных будней. Именно то, что скрасит даже самые скучный урок. Блокноты, ручки, ластики, ланч-боксы, дневники, линейки и даже сладкие перекусы. Тот самый бокс, который будет актуален с 1 сентября и целый год.</p><p>Мы используем лучшие наполнения для наших клиентов. Цена соответствует содержимому бокса и является выгодной для Вас.</p><p style="font-weight: bold;">Цена: 3999 ₽</p></div><div><p><img src="img/gifts/schoolbox.jpg"/><figcaption id="mod_fig" style="margin-top: 2px; font-style: italic;">Easy box - путеводитель ваших эмоций и впечатлений💛</figcaption></p></div></div>',
            footerButtons: [
                { class: 'btn btn__ok', text: 'Подробнее', handler: 'modalHandlerOk'},
            ]
          });
          modal.show();
          $('.btn').click(function(){
            location.href = "schoolbox.php"
    })
    })
}