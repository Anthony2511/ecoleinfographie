w.asideBlog = {

    // Require vendor/lightSlider

    init: function () {
        this.blogSearch();
        console.log('asideJs charged')
    },



    blogSearch: function floatLabels() {
        var inputFields = $('.blog-search__input');
        inputFields.each(function(){
            var singleInput = $(this);
            //check if user is filling one of the form fields
            checkVal(singleInput);
            singleInput.on('change keyup click', function(){
                checkVal(singleInput);
            });
        });

        inputFields.click(function () {
            $(this).parent().addClass('float');
        });

        function checkVal(inputField) {
            ( inputField.val() == '' ) ? inputField.parent().removeClass('float') : inputField.parent().addClass('float');
        };
    },



    
}
