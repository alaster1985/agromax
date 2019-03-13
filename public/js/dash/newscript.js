$(document).ready(function () {

    //show extra  input for new product

    $("[name = 'productId']").on("click", function () {
        // $("[name = 'productId']").on("change", function () {
            if ($("[name = 'productId']").val() === 'new') {
                $(".newProduct").css("display", "table");
            } else {
                $(".newProduct").css("display", "none");
            }
        // });
    });


});

