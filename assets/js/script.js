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
                
            });

            
            
        })(jQuery, this);


        

(function ($, root, undefined) {
	
    $(function () {
        
        'use strict';

        // To recipes in application menu
        $('#etusivu-tab').on('click', function() {
            $('#pagecontent').css({ 'margin-left' : '5vw',  'margin-right' : '0vw', 'transition-duration' : '0.4s', 'border-radius' : '30px 0px 0px 30px' });
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
            $('#pagecontent').css({ 'margin-left' : '0vw',  'margin-right' : '5vw', 'transition-duration' : '0.4s', 'border-radius' : '0px 30px 30px 0px' });
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

    
// Tämä funktion hakee ainekset taulukkoon luotaessa uutta reseptiä
var number = 1;

function addIngredient() {
    //added values
    var newingredient = document.getElementById('ingredient-name').value;
    var newamount = document.getElementById('ingredient-amount').value;
    var newunit = document.getElementById('ingredient-unit').value;

    var node1 = document.createElement("INPUT");
    node1.className = "aineslista-ingredient-class";
    node1.value = newingredient;
    node1.setAttribute("name", "ainesid" + number);
    document.getElementById("tableid").appendChild(node1);

    var node2 = document.createElement("INPUT");
    node2.className = "aineslista-amount-class";
    node2.value = newamount;
    node2.setAttribute("name", "valueid" + number);
    document.getElementById("tableid").appendChild(node2);

    var node3 = document.createElement("INPUT");
    node3.className = "aineslista-unit-class";
    node3.value = newunit;
    node3.setAttribute("name", "unitid" + number);
    document.getElementById("tableid").appendChild(node3);

    number++;

    document.getElementById('ingredient-name').value = "";
    document.getElementById('ingredient-amount').value = "";
    document.getElementById('ingredient-unit').value = "";
    document.getElementById('amountofrows').value++;
    };


// Tämä funktion hakee vaiheet taulukkoon luotaessa uutta reseptiä
var numberphase = 1;

function addPhase() {
    //added values
    var newphase = document.getElementById('instruction').value;

    var node1 = document.createElement("TEXTAREA");
    node1.className = "instruction-class";
    node1.value = newphase;
    node1.setAttribute("name", "vaiheid" + numberphase);
    document.getElementById("tableid2").appendChild(node1);

    numberphase++;

    document.getElementById('instruction').value = "";
    document.getElementById('amountofareas').value++;
    };
    // This function gets values from the row to the table
    var numbershoplist = 1;

    function addShoplistrow() {
        //added values
        var newingredientshoplist = document.getElementById('ingredient-name-shoplist').value;
        var newamountshoplist = document.getElementById('ingredient-amount-shoplist').value;
        var newunitshoplist = document.getElementById('ingredient-unit-shoplist').value;
    
        var node1 = document.createElement("INPUT");
        node1.className = "aineslista-ingredient-class";
        node1.value = newingredientshoplist;
        node1.setAttribute("name", "shopaines" + numbershoplist);
        document.getElementById("tableidshoplist").appendChild(node1);
    
        var node2 = document.createElement("INPUT");
        node2.className = "aineslista-amount-class";
        node2.value = newamountshoplist;
        node2.setAttribute("name", "shopvalue" + numbershoplist);
        document.getElementById("tableidshoplist").appendChild(node2);
    
        var node3 = document.createElement("INPUT");
        node3.className = "aineslista-unit-class";
        node3.value = newunitshoplist;
        node3.setAttribute("name", "shopunit" + numbershoplist);
        document.getElementById("tableidshoplist").appendChild(node3);
    
        numbershoplist++;
    
        document.getElementById('ingredient-name-shoplist').value = "";
        document.getElementById('ingredient-amount-shoplist').value = "";
        document.getElementById('ingredient-unit-shoplist').value = "";
        document.getElementById('amountofshoplistrows').value++;
        };

        // Tämä laskee ostoslistan tuotteiden lukumäärän valikkoon

        if (document.getElementById("shoplistid")) {
          var amount = document.getElementById("shoplistid").childElementCount;
          if (amount == 0) {
              document.getElementById("amountofshoprows").style.display = none;
          } else {
              document.getElementById("amountofshoprows").style.display = "block";
              document.getElementById("listamountfooterid").innerHTML = amount;
          };
        };




         // Tämä poistaa tuotteen ostoslistasta visuaalisesti
         
         var buttons = document.getElementsByClassName("deletebutton");

         for (var i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener('click', handleClick, false);
          };
          
          function handleClick() {
            this.parentElement.parentElement.style.height = '0px';
            this.parentElement.parentElement.style.transition = '0.7s';
          };

         

            
if (document.getElementById("todesktop")) { 
    document.getElementById("todesktop").addEventListener("click", desktopSize);
    function desktopSize() {
        document.getElementById("devicescale").classList.remove("tablet-device");
    };
};


if (document.getElementById("totablet")) {
    document.getElementById("totablet").addEventListener("click", tabletSize);
    function tabletSize() {
        document.getElementById("devicescale").classList.add("tablet-device");
    };
};
