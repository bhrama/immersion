$("#getting-started")
    .countdown("2017/01/01", function(event) {
        $(this).text(
            event.strftime('%D days %H:%M:%S')
        );
    });

$(function() {
    $("#carrossel"). jCarouselLite({
        btnPrev: '.prev',
        btnNext: '.next',
        visible: 4
    })
})



