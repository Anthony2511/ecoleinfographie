w.asideBlog = {

    // Require vendor/lightSlider

    init: function () {
        this.categoryTrigger();
        this.allTags();
    },

    categoryTrigger: function () {
        var btnCat = $('.blog-category__list'),
            sublistCat = $('.blog-category__sublist'),
            labelCategory = $('.blog-category__main-item'),
            btnHeight = 69;
            /*totalHeight = btnCat.outerHeight() + sublistCat.outerHeight();
            totalSublit = btnCat.find('#'*/

        btnCat.click(function () {
            if($(this).hasClass('triggerOpen')){
                $(this).removeClass('triggerOpen');
                $(this).css('height', btnHeight);
            } else{
                $(this).addClass('triggerOpen');
                var totalHeight = $(this).find(sublistCat).outerHeight() + btnHeight;
                $(this).css('height', totalHeight );
            }
        });
    },
    
    allTags: function () {
        var listTags = $('.blog-tags__list'),
            buttonTags = $('.blog-tags__button');

        buttonTags.click(function () {
            if(listTags.hasClass('show-all-tags')){
                listTags.removeClass('show-all-tags');
                buttonTags.text('Voir tous les tags');
            } else {
                listTags.addClass('show-all-tags');
                buttonTags.text('Masquer une partie des tags');
        }});
    }
    
}
