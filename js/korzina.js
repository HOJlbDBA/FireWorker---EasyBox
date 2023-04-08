let cart = new AngryCart({
    counter: '#cartCount',
    totalPrice: '#totalPrice',
    });
    function angryCPR() {
    let myCart = JSON.parse(localStorage.getItem(angryCartKey)), // "angryCartKey" - ключ корзины в localStorage (const)
        renderBlock = document.getElementById('cartPreview');

    /* Очищаем блок перед выводом */
    renderBlock.innerHTML = '';

    /* Выводим товары из корзины */
    Array.from(myCart).forEach( function(product) {
        renderBlock.insertAdjacentHTML('beforeEnd', `
            <div style="margin-bottom:5px;" class="d-flex">
                <p style="display:inline;"><strong>${product.data.title}</strong> <span class="text-muted">x ${product.quantity}</span> - <span class="text-warning">${product.data.price} руб</span></p>
                <button class="delete_one" onclick="cart.removeFromCart(${product.product_id})">x</button>
            </div>
        `);
    });
}
$('.b_buy').click(function(){
    if ($('.buyPM').css('opacity') == '1') {
    $('.buyPM').fadeIn(1000)
    $('.buyPM').fadeOut(3000)
}   else{
    $('.buyPM').stop(true)
    $('.buyPM').fadeOut(0)
    $('.buyPM').fadeIn(1000)
    $('.buyPM').fadeOut(3000)
}
})
$('#hide').click(function(){
    if ($('.korzinaVert').css('bottom') == '-451px') {
        $('#hide').html('🢃')
        $('.korzinaVert').transition({
            bottom:"0px"
          },1000)
    }
    if($('.korzinaVert').css('bottom') == '0px'){
        $('#hide').html('🢁')
        $('.korzinaVert').transition({
            bottom:"-451px"
          },1000)
    }
})
$('#imgKor').click(function(){
    if ($('.korzinaVert').css('bottom') == '-500px') {
        $('.korzinaVert').transition({
            bottom:"0px"
          },1000)
    }
    if($('.korzinaVert').css('bottom') == '0px'){
        $('.korzinaVert').transition({
            bottom:"-500px"
          },1000)
    }
})