w.floatLabel = {
    init: function () {
        this.floatLabel();
    },

    floatLabel: function () {
        (function($){
            function floatLabel(inputType){
                $(inputType).each(function(){
                    var $this = $(this);
                    $this.focus(function(){
                        $this.prev().addClass("active");
                    });
                    $this.blur(function(){
                        if($this.val() === '' || $this.val() === 'blank'){
                            $this.prev().removeClass('active');
                        }
                    });
                });
            }
            floatLabel(".floatLabel");
        })(jQuery)
    },
}
