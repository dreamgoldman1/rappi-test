$(document).ready(function () {
    $('.agregar-carrito').click(function () {
        var productId = $(this).parent('h4').children('.product-id').text();
        $.ajax({
            //url: window.location.protocol + "//" + window.location.hostname + "/app_dev.php/agregar-carrito/" + productId,
            url: window.location.protocol + "//" + window.location.hostname + "/agregar-carrito/" + productId,
            context: document.body
        }).done(function (data) {
            $.ajax({
                //url: window.location.protocol + "//" + window.location.hostname + "/app_dev.php/contar-carrito",
                url: window.location.protocol + "//" + window.location.hostname + "/contar-carrito",
                dataType: "json",
            }).done(function (data) {
                $('.numItems').text(data.count);
                $('.totalCarrito').text('$'+data.totalCarrito.toLocaleString('es-CO', {minimumFractionDigits: 0}));
            });
        });
    });
});