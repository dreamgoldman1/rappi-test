$(document).ready(function () {
    $(".group-url").hide();
    $(".group-file").hide();
    $(".group-button").hide();
    $(".fuente").change(function(){
        if ($(".fuente:checked").val() == 'url'){
            $(".group-url").show();
            $(".group-file").hide();
            $(".group-button").show();
        }else if ($(".fuente:checked").val() == 'file'){
            $(".group-url").hide();
            $(".group-file").show();
            $(".group-button").show();
        }
    });
});

