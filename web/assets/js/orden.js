$(document).ready(function () {
    var pathArray = window.location.href.split('/');
    if (pathArray[3] == '' || pathArray[3] == null){
        pathArray[3] = 'productos';
    }
    $('#filtros').change(function(){
        var filtro = $("#filtros").val();
        //window.location.href = window.location.protocol + "//" + window.location.hostname + "/app_dev.php/" + pathArray[4] + "/" + filtro;
        window.location.href = window.location.protocol + "//" + window.location.hostname + "/" + pathArray[3] + "/" + filtro;
    });
});

