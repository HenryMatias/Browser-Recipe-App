(function ($, root, undefined) {
	
    $(function () {
        
        'use strict';

        // To recipes in application menu
        $('#etusivu-tab').on('click', function() {
            $('#pagecontent').css({ 'margin-left' : '0vw',  'margin-right' : '0vw', 'transition-duration' : '0.4s', 'border-radius' : '30px 0px 0px 30px' });
            $('#contentheading').css({ 'transition-duration' : '0.5s', 'right' : '9%', 'color' : colornew1});
            $('#contentheading').text('Reseptini');
            $('#modalbutton').css({ 'transition-duration' : '0.7s', 'transform' : 'rotate(0deg)', 'background-color': colornew1 });
            $('#modalbutton').attr('data-target','#exampleModal');
            $('#all-food-filter, #salty-food-filter, #sweet-food-filter').css({'transform' : 'translateY(0px)', 'transition-duration' : '0.5s'});
            $('#delete-all-shoplist').css({ 'transform' : 'translateY(60px)', 'transition-duration' : '0.5s' });
            $('#searchcontent').css({ 'transform' : 'translateX(120%)', 'transition-duration' : '0.5s' });
            $('#maincontent').css({ 'border-radius' : '50px 0px 0px 0px', 'transition-duration' : '0.5s', 'opacity' : '1', 'pointer-events' : 'auto', 'height' : 'auto' });
            $('#headeroneid').css({ 'height' : '36vh', 'transition-duration' : '0.5s', 'padding' : '30px 0px 0px 30px' });
            $('#settings').css({ 'opacity' : '0', 'transition-duration' : '0.5s', 'top' : '100%', 'display' : 'none' });
        })

        // To shoplist in application menu
        $('#ostoslista-tab').on('click', function() {
            $('#pagecontent').css({ 'margin-left' : '0vw',  'margin-right' : '0vw', 'transition-duration' : '0.4s', 'border-radius' : '0px 30px 30px 0px' });
            $('#contentheading').css({ 'transition-duration' : '0.5s', 'right' : '43%', 'color' : colornew2});
            $('#contentheading').text('Ostoslista');
            $('#modalbutton').css({ 'transition-duration' : '0.7s', 'transform' : 'rotate(180deg)', 'background-color': colornew2 });
            $('#modalbutton').attr('data-target','#newlistitem');
            $('#all-food-filter, #salty-food-filter, #sweet-food-filter').css({'transform' : 'translateY(60px)', 'transition-duration' : '0.5s'});
            $('#delete-all-shoplist').css({ 'transform' : 'translateY(0px)', 'transition-duration' : '0.5s' });
            $('#searchcontent').css({ 'transform' : 'translateX(120%)', 'transition-duration' : '0.5s' });
            $('#maincontent').css({ 'border-radius' : '0px 50px 0px 0px', 'transition-duration' : '0.5s', 'opacity' : '1', 'pointer-events' : 'auto', 'height' : 'auto' });
            $('#headeroneid').css({ 'height' : '36vh', 'transition-duration' : '0.5s', 'padding' : '30px 0px 0px 30px' });
            $('#settings').css({ 'opacity' : '0', 'transition-duration' : '0.5s', 'top' : '100%', 'display' : 'none' });
        })

        // To search in application menu
        $('#hae-tab').on('click', function() {
            $('#pagecontent').css({ 'margin-left' : '5vw',  'margin-right' : '0vw', 'transition-duration' : '0.4s', 'border-radius' : '30px 0px 0px 30px' });
            $('#contentheading').css({ 'transition-duration' : '0.5s', 'right' : '9%', 'color' : colornew1});
            $('#contentheading').text('Reseptini');
            $('#modalbutton').css({ 'transition-duration' : '0.7s', 'transform' : 'rotate(0deg)', 'background-color': colornew1 });
            $('#modalbutton').attr('data-target','#exampleModal');
            $('#all-food-filter, #salty-food-filter, #sweet-food-filter').css({'transform' : 'translateY(60px)', 'transition-duration' : '0.5s'});
            $('#delete-all-shoplist').css({ 'transform' : 'translateY(60px)', 'transition-duration' : '0.5s' });
            $('#searchcontent').css({ 'transform' : 'translateX(0%)', 'transition-duration' : '0.5s' });
            $('#maincontent').css({ 'border-radius' : '50px 0px 0px 0px', 'transition-duration' : '0.5s', 'opacity' : '1', 'pointer-events' : 'auto', 'height' : 'auto' });
            $('#headeroneid').css({ 'height' : '36vh', 'transition-duration' : '0.5s', 'padding' : '30px 0px 0px 30px' });
            $('#settings').css({ 'opacity' : '0', 'transition-duration' : '0.5s', 'top' : '100%', 'display' : 'none' });
        })

        // To shoplist in application menu
        $('#asetukset-tab').on('click', function() {
            $('#modalbutton').attr('data-target','#');
            $('#maincontent').css({ 'border-radius' : '0px 0px 0px 0px', 'transition-duration' : '0.2s', 'opacity' : '0', 'pointer-events' : 'none', 'height' : '0px' });
            $('#headeroneid').css({ 'height' : '0vh', 'transition-duration' : '0.2s', 'padding' : '0px' });
            $('#settings').css({ 'opacity' : '1', 'transition-duration' : '0.5s', 'top' : '0%', 'display' : 'block' });
        })
        
    });

})(jQuery, this);

    