// Voidaan testata hakeeko tiedoston --> alert("hi from main.js");

    // Tämä lause estää formin lähetyksen kun sivu päivitetään

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }


    function settingCheckbox() {
        var checkBox = document.getElementById("maintheme");
        var secondTheme = document.getElementById("secondtheme");
        var slider = document.getElementById("themeslider");
        var maintheme = document.getElementById("activetheme");
        if (checkBox.checked == false){
            secondTheme.style.opacity = "1";
            secondTheme.style.maxHeight = "200px";
            secondTheme.style.overflow = "visible";
            secondTheme.style.padding = "20px 0px 10px 0px";
            secondTheme.style.transition = "0.4s";
            slider.style.paddingBottom = "10px";
            maintheme.setAttribute("value", "unchecked");
            
        } else {
            secondTheme.style.opacity = "0";
            secondTheme.style.maxHeight = "0px";
            secondTheme.style.overflow = "hidden";
            secondTheme.style.padding = "0px";
            slider.style.paddingBottom = "0px"
            maintheme.setAttribute("value", "checked");
        }
        return;
      };

        (function ($, root, undefined) {
	
            $(function () {
                
                'use strict';
                
                // DOM ready, take it away

                $(".remove").ajaxForm({
                    url: '#recipeareaid',
                    type: 'post',
                    data: { 
                        action: 'singular_delete'
                        },
                });

                /*
                $(".salty").ajaxForm({
                    url: '#accordion',
                    type: 'post',
                    data: { action: 'salty_recipe_fetch' },
                    success: function(data) {
                        jQuery('#accordion').html( data );
                }
                });
                */ 
                
            });

            
            
        })(jQuery, this);


        
