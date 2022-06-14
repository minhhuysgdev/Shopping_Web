    
$(".diamond-grid").diamonds({
    size : 220, // Size of diamonds in pixels. Both width and height. 
    gap : 5, // Pixels between each square.
    hideIncompleteRow : false, // Hide last row if there are not enough items to fill it completely.
    autoRedraw : true, // Auto redraw diamonds when it detects resizing.
    itemSelector : ".item" // the css selector to use to select diamonds-items.
});
$('a.logout').click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");
        $.ajax({
            url: href,
            type: "GET",
            data: {},
            success: function() {
                $("#login").load("http://localhost:81/PHP/DOAN-CARONO/ #login1");
                location.reload(true);
            }
        })
    })