$(document).ready(function () {
    $(".delete-all-item").on("click", function () {
        $(".item").remove();
    });
    $(".delete-selected").on("click", function () {
        $("input[type='checkbox']:checked").parents(".item").remove();
    });
    $(".delete-selected").hide();
    $(".item .button #selected-item").on("click",function(){
        let markedForDelete=$("input[type='checkbox']:checked").length;
        if(markedForDelete>0){
            $(".delete-all-item").hide();
            $(".delete-selected").show();
        }else{
            $(".delete-all-item").show();
            $(".delete-selected").hide();
        }
    });
    $(".delete-item").on("click", function () {
        $(this).parents(".item").remove();
    });
    $(".minius-btn").on("click", function () {
        let quantity=parseInt($(this).next().val());
        let price=parseInt($(this).parent().next().text().match(/[0-9]{1,}/))/quantity;
        quantity--;
        if(quantity<1){quantity=1};
        $(this).next().val(quantity);
        $(this).parent().next().text('$'+(price*quantity));
    });
    $(".plus-btn").on("click", function () {
        let quantity=parseInt($(this).prev().val());
        let price=parseInt($(this).parent().next().text().match(/[0-9]{1,}/))/quantity;
        quantity++;
        $(this).prev().val(quantity);
        $(this).parent().next().text('$'+(price*quantity));
    });
    $(".quantity input").on("click select", function () {
        let quantity=parseInt($(this).val());
        let price=parseInt($(this).parent().next().text().match(/[0-9]{1,}/))/quantity;
        $(".quantity input").on("keyup", function () {
            let quantity=parseInt($(this).val());
            if($(this).val()!=''){
                $(this).parent().next().text('$'+(price*quantity));
            }
        });
    });
});