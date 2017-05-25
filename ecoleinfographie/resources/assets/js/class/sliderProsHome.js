w.sliderProsHome = {
    conf: {
        sSliderContainer:             'slider-pros__wrapper',
        sSliderContainerActive :      'slider-pros__wrapper--active',

        sSliderItem:                  'slider-pros__article',
        sSliderItemActive:            'slider-pros__article--active',
        sSliderItemLeft:              'slider-pros__article--left',
        sSliderItemRight:             'slider-pros__article--right',
        sSliderItemActive:            'slider-pros__article--active',
        sSliderItemHidden:            'slider-pros__article--hidden',
        sSliderItemAnim:              'slider-pros__article--anim',


        sPagerItem:                   'dots__li',
        sPagerItemActive:             'current',

        sPrev:                        'slideButtons__prev',
        sNext:                        'slideButtons__next',
        sPagerAttr:                   'data-slide',


        iTransitionDuration :   900,

    },

    $slider: null,
    $sliderItem: null,
    $prev: null,
    $next: null,
    $slideInside: null,

    sPosition: null,

    aSlides: [],
    iSliderHeight: 0,
    iDescriptionHeight : 0,
    iCurrent: 0,


    init: function () {
        w.sliderProsHome.getElements();
        w.sliderProsHome.getSlides();
        w.sliderProsHome.setEvent();
        for (var i = 0; i < w.sliderProsHome.aSlides.length; i++) {
            w.sliderProsHome.setNext(w.sliderProsHome.aSlides[i]);
        }
        w.sliderProsHome.setActive(w.sliderProsHome.aSlides[0]);
        w.sliderProsHome.$slider.addClass(w.sliderProsHome.conf.sSliderContainerActive);
    },

    getElements: function () {
        w.sliderProsHome.$slider       = $('.' + w.sliderProsHome.conf.sSliderContainer);
        w.sliderProsHome.$sliderItem   = $('.' + w.sliderProsHome.conf.sSliderItem);
        w.sliderProsHome.$prev         = $('.' + w.sliderProsHome.conf.sPrev);
        w.sliderProsHome.$next         = $('.' + w.sliderProsHome.conf.sNext);
    },

    setEvent: function () {
        w.sliderProsHome.$prev.on('click', w.sliderProsHome.e_clickPrev);
        w.sliderProsHome.$next.on('click', w.sliderProsHome.e_clickNext);
        // tu n'oublies pas de mettre l'event sur les boutons de navigation
        for (var i = 0; i < w.sliderProsHome.aSlides.length; i++) {
            w.sliderProsHome.aSlides[i].eNavBtn.attr(w.sliderProsHome.conf.sPagerAttr, w.sliderProsHome.aSlides[i].iIndex);
            this.aSlides[i].eNavBtn.on('click', w.sliderProsHome.e_clickPager);
        }

    },

    // Event



    e_clickPrev: function (e) {
        e.preventDefault();
        w.sliderProsHome.setPreviousSlide();

        if (!w.sliderProsHome.isAnimating){
            var index = parseInt($(this).attr(w.sliderProsHome.conf.sPagerAttr));
            w.sliderProsHome.setCustomSlide(index);
        }
    },

    e_clickNext: function (e) {
        e.preventDefault();
        w.sliderProsHome.setNextSlide();
    },

    e_clickPager: function (e) {
        e.preventDefault();

        if (!w.sliderProsHome.isAnimating){
            var index = parseInt($(this).attr(w.sliderProsHome.conf.sPagerAttr));
            w.sliderProsHome.setCustomSlide(index);
        }
    },

    // Functions
    getSlides: function () {
        w.sliderProsHome.$sliderItem.each(function(index, el){

            var o = {};

            o.eSlide = $(el);
            o.sId = o.eSlide.attr('id');
            o.eNavBtn = $('a[href="#' + o.sId + '"]');
            o.iIndex = index;
            o.isActive = false;
            o.isLeft = false;
            o.isRight = false;

            w.sliderProsHome.aSlides.push(o);

        });
    },



    setPreviousSlide : function(){
        w.sliderProsHome.sPosition = 'before';
        var index = w.sliderProsHome.getPreviousIndex();

        w.sliderProsHome.setSlide(index);
    },

    setNextSlide : function(){
        w.sliderProsHome.sPosition = 'after';
        var index = w.sliderProsHome.getNextIndex();
        w.sliderProsHome.setSlide(index);
    },

    setCustomSlide : function(index){


        if(index < w.sliderProsHome.iCurrent)
        {  w.sliderProsHome.sPosition = 'before';   }
        else if(index > w.sliderProsHome.iCurrent)
        {  w.sliderProsHome.sPosition = 'after';  }


        w.sliderProsHome.setSlide(index);
    },

    setSlide: function(index){

        if(w.sliderProsHome.sPosition  && w.sliderProsHome.iCurrent != index)
        {
            w.sliderProsHome.isAnimating = true;
            w.sliderProsHome.$sliderItem.removeClass(w.sliderProsHome.conf.sSliderItemAnim);
            w.sliderProsHome.prepareSlide(index);
            setTimeout(function(){
                w.sliderProsHome.moveSlide(index);
                w.sliderProsHome.iCurrent = index;

            }, 100);
        }
    },

    prepareSlide: function(index){
        for (var i = 0; i < w.sliderProsHome.aSlides.length; i++) {

            if(w.sliderProsHome.aSlides[i].iIndex === index) {
                switch (w.sliderProsHome.sPosition) {
                    case "after":
                        w.sliderProsHome.setNext(w.sliderProsHome.aSlides[i]);
                        break;

                    case "before":
                        w.sliderProsHome.setPrevious(w.sliderProsHome.aSlides[i]);
                        break;
                }
            }

            else if(w.sliderProsHome.aSlides[i].iIndex === w.sliderProsHome.iCurrent){  w.sliderProsHome.setActive(w.sliderProsHome.aSlides[i]);}
            else{  w.sliderProsHome.setHidden(w.sliderProsHome.aSlides[i]);  }
        }
    },

    moveSlide: function(index){
        w.sliderProsHome.$sliderItem.addClass( w.sliderProsHome.conf.sSliderItemAnim );
        for (var i = 0; i < w.sliderProsHome.aSlides.length; i++) {
            if(w.sliderProsHome.aSlides[i].iIndex === w.sliderProsHome.iCurrent) {
                switch (w.sliderProsHome.sPosition) {
                    case "after":
                        w.sliderProsHome.setPrevious(w.sliderProsHome.aSlides[i]);
                        break;

                    case "before":
                        w.sliderProsHome.setNext(w.sliderProsHome.aSlides[i]);
                        break;
                }
            }

            else if(w.sliderProsHome.aSlides[i].iIndex === index){  w.sliderProsHome.setActive(w.sliderProsHome.aSlides[i]);  }
            else{  w.sliderProsHome.setHidden(w.sliderProsHome.aSlides[i]);  }
        }

        setTimeout(function() {
            w.sliderProsHome.isAnimating = false;
        }, w.sliderProsHome.iTransitionDuration);
    },

    setPrevious: function(o){
        if(!o.isLeft) {
            w.sliderProsHome.resetSlide(o);
            o.eSlide.addClass(w.sliderProsHome.conf.sSliderItemLeft);
            o.isLeft = true;
            o.isRight = false;
            o.isActive = false;
        }
    },

    setNext: function(o){
        if(!o.isRight){
            w.sliderProsHome.resetSlide(o);
            o.eSlide.addClass(w.sliderProsHome.conf.sSliderItemRight);
            o.isLeft = false;
            o.isRight = true;
            o.isActive = false;
        }
    },

    setActive: function(o){
        if(!o.isActive){
            w.sliderProsHome.resetSlide(o);
            o.eNavBtn.addClass(w.sliderProsHome.conf.sPagerItemActive);
            o.eSlide.addClass(w.sliderProsHome.conf.sSliderItemActive);
            o.isLeft = false;
            o.isRight = false;
            o.isActive = true;
        }
    },

    setHidden: function(o){
        w.sliderProsHome.resetSlide(o);
        o.eSlide.addClass(w.sliderProsHome.conf.sSliderItemHidden);
        o.isLeft = false;
        o.isRight = false;
        o.isActive = false;
    },

    resetSlide: function(o){
        o.eSlide
            .removeClass(w.sliderProsHome.conf.sSliderItemLeft)
            .removeClass(w.sliderProsHome.conf.sSliderItemRight)
            .removeClass(w.sliderProsHome.conf.sSliderItemHidden)
            .removeClass(w.sliderProsHome.conf.sSliderItemActive);

        o.eNavBtn.removeClass(w.sliderProsHome.conf.sPagerItemActive);

    },





    //Get Index
    getIndexById: function (id) {
        var o = null;
        $.each(w.sliderProsHome.aSlides, function (index) {
            if(this.sId == id){
                o = this.iIndex;
            }
        });
        return o;
    },



    getPreviousIndex: function(){
        if(w.sliderProsHome.iCurrent === 0)
        {  return (w.sliderProsHome.aSlides.length - 1);  }
        else
        {  return (w.sliderProsHome.iCurrent - 1);  }
    },

    getNextIndex: function(){
        if(w.sliderProsHome.iCurrent === (w.sliderProsHome.aSlides.length - 1))
        {  return 0;  }
        else
        {  return (w.sliderProsHome.iCurrent + 1);  }
    },

}
