
    $(function()
    {
        //$('input[name="price"]').mask("#.##0,00",$('input[name="quantity"]'),$('input[name="min_quantity"]'),{reverse: true});
        $('input[name=cod]').mask("#");
        $('.dinheiro').mask("#.##0,00", {reverse: true});
        //$('input[name=price]').mask("#.##0,00", {reverse: true});
        /*$('input[name="quantity"]').mask("#.##0,00", {reverse: true});
        $('input[name="min_quantity"]').mask("#.##0,00", {reverse: true});*/
    });