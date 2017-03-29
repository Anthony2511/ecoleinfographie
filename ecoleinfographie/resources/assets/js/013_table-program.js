jQuery(document).ready(function($) {
    $(".link-row").click(function() {
        window.location = $(this).data("href");
    });
});
