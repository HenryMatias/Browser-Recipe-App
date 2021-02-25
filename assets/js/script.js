// Voidaan testata hakeeko tiedoston --> alert("hi from main.js");

    // Tämä lause estää formin lähetyksen kun sivu päivitetään

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }


<<<<<<< HEAD
    // Tämä funktio vaihtaa näkymää reseptien ja ostoslistan välillä

    
    function toShoplist() {
        
        document.getElementById("pagecontent").style.transitionDuration = "0.4s";
        document.getElementById("pagecontent").style.marginLeft = "0vh";
        document.getElementById("pagecontent").style.marginRight = "10vw";
        document.getElementById("pagecontent").style.borderRadius = "0px 30px 30px 0px";
        document.getElementById("contentheading").style.transitionDuration = "0.5s";
        document.getElementById("contentheading").style.color = colornew2;
        document.getElementById("contentheading").style.right = "43%";
        document.getElementById("contentheading").innerHTML = "Ostoslista";
        document.getElementById("modalbutton").setAttribute("data-target", "#newlistitem");
        document.getElementById("modalbutton").style.transitionDuration = "0.7s";
        document.getElementById("modalbutton").style.transform = "rotate(180deg)";
        document.getElementById("modalbutton").style.backgroundColor = colornew2;
        document.getElementById("all-food-filter").style.transform = "translateY(60px)";
        document.getElementById("all-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("salty-food-filter").style.transform = "translateY(60px)";
        document.getElementById("salty-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("sweet-food-filter").style.transform = "translateY(60px)";
        document.getElementById("sweet-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("delete-all-shoplist").style.transform = "translateY(0px)";
=======
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


        

// To recipes in application menu
if (document.getElementById("etusivu-tab")) {
    document.getElementById("etusivu-tab").addEventListener("click", toRecipes);
    function toRecipes() {
        document.getElementById("pagecontent").style.transitionDuration = "0.4s";
        document.getElementById("pagecontent").style.marginLeft = "10vw";
        document.getElementById("pagecontent").style.marginRight = "0vw";
        document.getElementById("pagecontent").style.borderRadius = "30px 0px 0px 30px";
        document.getElementById("contentheading").style.transitionDuration = "0.5s";
        document.getElementById("contentheading").style.color = colornew1;
        document.getElementById("contentheading").style.right = "9%";
        document.getElementById("contentheading").innerHTML = "Reseptini";
        document.getElementById("modalbutton").setAttribute("data-target", "#exampleModal");
        document.getElementById("modalbutton").style.transitionDuration = "0.7s";
        document.getElementById("modalbutton").style.transform = "rotate(0deg)";
        document.getElementById("modalbutton").style.backgroundColor = colornew1;
        document.getElementById("all-food-filter").style.transform = "translateY(0px)";
        document.getElementById("all-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("salty-food-filter").style.transform = "translateY(0px)";
        document.getElementById("salty-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("sweet-food-filter").style.transform = "translateY(0px)";
        document.getElementById("sweet-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("delete-all-shoplist").style.transform = "translateY(60px)";
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
        document.getElementById("delete-all-shoplist").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transform = "translateX(120%)";
        document.getElementById("maincontent").style.transitionDuration = "0.5s";
<<<<<<< HEAD
        document.getElementById("maincontent").style.borderRadius = "0px 50px 0px 0px";
=======
        document.getElementById("maincontent").style.borderRadius = "50px 0px 0px 0px"
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
        document.getElementById("maincontent").style.opacity = "1";
        document.getElementById("maincontent").style.pointerEvents = "auto";
        document.getElementById("maincontent").style.height = "auto";
        document.getElementById("headeroneid").style.transitionDuration = "0.5s";
        document.getElementById("headeroneid").style.height = "36vh";
        document.getElementById("headeroneid").style.padding = "30px 0px 0px 30px";
        document.getElementById("settings").style.transitionDuration = "0.5s";
        document.getElementById("settings").style.opacity = "0";
        document.getElementById("settings").style.top = "100%";
        document.getElementById("settings").style.display = "none";
<<<<<<< HEAD
    }
    

    function toRecipes() {

        document.getElementById("pagecontent").style.transitionDuration = "0.4s";
        document.getElementById("pagecontent").style.marginLeft = "10vw";
        document.getElementById("pagecontent").style.marginRight = "0vw";
        document.getElementById("pagecontent").style.borderRadius = "30px 0px 0px 30px";
        document.getElementById("contentheading").style.transitionDuration = "0.5s";
        document.getElementById("contentheading").style.color = colornew1;
        document.getElementById("contentheading").style.right = "9%";
        document.getElementById("contentheading").innerHTML = "Reseptini";
        document.getElementById("modalbutton").setAttribute("data-target", "#exampleModal");
        document.getElementById("modalbutton").style.transitionDuration = "0.7s";
        document.getElementById("modalbutton").style.transform = "rotate(0deg)";
        document.getElementById("modalbutton").style.backgroundColor = colornew1;
        document.getElementById("all-food-filter").style.transform = "translateY(0px)";
        document.getElementById("all-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("salty-food-filter").style.transform = "translateY(0px)";
        document.getElementById("salty-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("sweet-food-filter").style.transform = "translateY(0px)";
        document.getElementById("sweet-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("delete-all-shoplist").style.transform = "translateY(60px)";
=======
    };
};


// To shoplist in application menu
if (document.getElementById("ostoslista-tab")) {
    document.getElementById("ostoslista-tab").addEventListener("click", toShoplist);
    function toShoplist() {
        document.getElementById("pagecontent").style.transitionDuration = "0.4s";
        document.getElementById("pagecontent").style.marginLeft = "0vh";
        document.getElementById("pagecontent").style.marginRight = "10vw";
        document.getElementById("pagecontent").style.borderRadius = "0px 30px 30px 0px";
        document.getElementById("contentheading").style.transitionDuration = "0.5s";
        document.getElementById("contentheading").style.color = colornew2;
        document.getElementById("contentheading").style.right = "43%";
        document.getElementById("contentheading").innerHTML = "Ostoslista";
        document.getElementById("modalbutton").setAttribute("data-target", "#newlistitem");
        document.getElementById("modalbutton").style.transitionDuration = "0.7s";
        document.getElementById("modalbutton").style.transform = "rotate(180deg)";
        document.getElementById("modalbutton").style.backgroundColor = colornew2;
        document.getElementById("all-food-filter").style.transform = "translateY(60px)";
        document.getElementById("all-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("salty-food-filter").style.transform = "translateY(60px)";
        document.getElementById("salty-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("sweet-food-filter").style.transform = "translateY(60px)";
        document.getElementById("sweet-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("delete-all-shoplist").style.transform = "translateY(0px)";
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
        document.getElementById("delete-all-shoplist").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transform = "translateX(120%)";
        document.getElementById("maincontent").style.transitionDuration = "0.5s";
<<<<<<< HEAD
        document.getElementById("maincontent").style.borderRadius = "50px 0px 0px 0px"
=======
        document.getElementById("maincontent").style.borderRadius = "0px 50px 0px 0px";
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
        document.getElementById("maincontent").style.opacity = "1";
        document.getElementById("maincontent").style.pointerEvents = "auto";
        document.getElementById("maincontent").style.height = "auto";
        document.getElementById("headeroneid").style.transitionDuration = "0.5s";
        document.getElementById("headeroneid").style.height = "36vh";
        document.getElementById("headeroneid").style.padding = "30px 0px 0px 30px";
        document.getElementById("settings").style.transitionDuration = "0.5s";
        document.getElementById("settings").style.opacity = "0";
        document.getElementById("settings").style.top = "100%";
        document.getElementById("settings").style.display = "none";
<<<<<<< HEAD
    }

    function toSearch() {

=======
    };
};



// To search in application menu
if (document.getElementById("hae-tab")) {
    document.getElementById("hae-tab").addEventListener("click", toSearch);
    function toSearch() {
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
        document.getElementById("pagecontent").style.transitionDuration = "0.4s";
        document.getElementById("pagecontent").style.marginLeft = "10vw";
        document.getElementById("pagecontent").style.marginRight = "0vw";
        document.getElementById("pagecontent").style.borderRadius = "30px 0px 0px 30px";
        document.getElementById("contentheading").style.transitionDuration = "0.5s";
        document.getElementById("contentheading").style.color = colornew1;
        document.getElementById("contentheading").style.right = "9%";
        document.getElementById("contentheading").innerHTML = "Reseptini";
        document.getElementById("modalbutton").setAttribute("data-target", "#exampleModal");
        document.getElementById("modalbutton").style.transitionDuration = "0.7s";
        document.getElementById("modalbutton").style.transform = "rotate(0deg)";
        document.getElementById("modalbutton").style.backgroundColor = colornew1;
        document.getElementById("all-food-filter").style.transform = "translateY(60px)";
        document.getElementById("all-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("salty-food-filter").style.transform = "translateY(60px)";
        document.getElementById("salty-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("sweet-food-filter").style.transform = "translateY(60px)";
        document.getElementById("sweet-food-filter").style.transitionDuration = "0.5s";
        document.getElementById("delete-all-shoplist").style.transform = "translateY(60px)";
        document.getElementById("delete-all-shoplist").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transform = "translateX(0%)";
        document.getElementById("maincontent").style.transitionDuration = "0.5s";
        document.getElementById("maincontent").style.borderRadius = "50px 0px 0px 0px"
        document.getElementById("maincontent").style.opacity = "1";
        document.getElementById("maincontent").style.pointerEvents = "auto";
        document.getElementById("maincontent").style.height = "auto";
        document.getElementById("headeroneid").style.transitionDuration = "0.5s";
        document.getElementById("headeroneid").style.height = "36vh";
        document.getElementById("headeroneid").style.padding = "30px 0px 0px 30px";
        document.getElementById("settings").style.transitionDuration = "0.5s";
        document.getElementById("settings").style.opacity = "0";
        document.getElementById("settings").style.top = "100%";
        document.getElementById("settings").style.display = "none";
<<<<<<< HEAD
    }

    function toSettings() {

=======
    };
};



// To shoplist in application menu
if (document.getElementById("hae-tab")) {
    document.getElementById("asetukset-tab").addEventListener("click", toSettings);
    function toSettings() {
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
        document.getElementById("headeroneid").style.transitionDuration = "0.2s";
        document.getElementById("headeroneid").style.height = "0vh";
        document.getElementById("headeroneid").style.padding = "0px";
        document.getElementById("maincontent").style.transitionDuration = "0.2s";
        document.getElementById("maincontent").style.borderRadius = "0px 0px 0px 0px"
        document.getElementById("maincontent").style.opacity = "0";
        document.getElementById("maincontent").style.pointerEvents = "none";
        document.getElementById("maincontent").style.height = "0px";
        document.getElementById("modalbutton").setAttribute("data-target", "#");
        document.getElementById("settings").style.transitionDuration = "0.5s";
        document.getElementById("settings").style.opacity = "1";
        document.getElementById("settings").style.top = "0%";
        document.getElementById("settings").style.display = "block";
<<<<<<< HEAD

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
      }





        (function ($, root, undefined) {
	
            $(function () {
                
                'use strict';
                
                // DOM ready, take it away

                $(".remove").ajaxForm({url: '#recipeareaid', type: 'post'})

                
            });
            
        })(jQuery, this);


        

=======
    };
};

    
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
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


<<<<<<< HEAD
    // Tämä funktion hakee vaiheet taulukkoon luotaessa uutta reseptiä
=======
// Tämä funktion hakee vaiheet taulukkoon luotaessa uutta reseptiä
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
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
<<<<<<< HEAD
    // Tämä funktion hakee rivit ostoslista taulukkoon
=======
    // This function gets values from the row to the table
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
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

<<<<<<< HEAD

        // Tämä laskee ostoslistan tuotteiden lukumäärän valikkoon

        var amount = document.getElementById("shoplistid").childElementCount;
        if (amount == 0) {
            document.getElementById("amountofshoprows").style.display = none;
        } else {
            document.getElementById("amountofshoprows").style.display = "block";
            document.getElementById("listamountfooterid").innerHTML = amount;
        }
=======
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
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea




         // Tämä poistaa tuotteen ostoslistasta visuaalisesti
         
         var buttons = document.getElementsByClassName("deletebutton");

         for (var i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener('click', handleClick, false);
<<<<<<< HEAD
          }
=======
          };
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
          
          function handleClick() {
            this.parentElement.parentElement.style.height = '0px';
            this.parentElement.parentElement.style.transition = '0.7s';
<<<<<<< HEAD
          }

         

            
=======
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



    

                
>>>>>>> f7309be41068b8c0d40f2c8b559c07bd2ace26ea
