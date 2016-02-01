$(document).ready(function(){
    //alert('ok');
    var menuPos = 0;
    var mItems = $('#navigator > li');
    $('.nav_cor_r').click(function(){
        if(menuPos >= 3){return;}
        ml = parseInt($(mItems[0]).css('margin-left'));
        //$(mItems[0]).animate({marginLeft: ml - 235}, 500);
        $(mItems[menuPos]).animate({width: 0}, 500);
        
        $(mItems[menuPos + 4]).css('width', '0');
        $(mItems[menuPos + 4]).css('overflow', 'hidden');
        $(mItems[menuPos + 4]).css('display', 'inline-block');
        $(mItems[menuPos + 4]).animate({width: 235}, 500);
        $(mItems[menuPos]).animate({opacity: 0}, 500);
        
        menuPos++;
        //$('#navigator').css('margin-left', '-235px');
    });
});

