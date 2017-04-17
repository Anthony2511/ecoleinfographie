w.asideBlog = {

    // Require vendor/lightSlider

    init: function () {
        this.blogSearch();
        this.categoryTrigger();
        this.allTags();
        console.log('asideJs charged')
    },



    blogSearch: function floatLabels() {
        var inputFields = $('.blog-search__input');
        inputFields.each(function(){
            var singleInput = $(this);
            //check if user is filling one of the form fields
            checkVal(singleInput);
            singleInput.on('change keyup click focus', function(){
                checkVal(singleInput);
            });
        });


        function checkVal(inputField) {
            ( inputField.val() == '' ) ? inputField.parent().removeClass('float') : inputField.parent().addClass('float');
        };
        inputFields.on('click', (function () {
            $(this).parent().addClass('float');
        }));
    },

    categoryTrigger: function () {
        var buttonCat = $('.blog-category__list'),
            sublistCat = $('.blog-category__sublist'),
            totalHeight = buttonCat.outerHeight() + sublistCat.outerHeight();

        buttonCat.click(function () {
            if($(this).hasClass('triggerOpen')){
                $(this).removeClass('triggerOpen');
                $(this).css('height', '69px');
            } else{
                $(this).addClass('triggerOpen');
                $(this).css('height', totalHeight);
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
