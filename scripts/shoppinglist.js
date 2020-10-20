    // Tämä funktion hakee rivit ostoslista taulukkoon
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

        var amount = document.getElementById("shoplistid").childElementCount;
        if (amount == 0) {
            document.getElementById("amountofshoprows").style.display = none;
        } else {
            document.getElementById("amountofshoprows").style.display = "block";
            document.getElementById("listamountfooterid").innerHTML = amount;
        }




         // Tämä poistaa tuotteen ostoslistasta visuaalisesti
         
         var buttons = document.getElementsByClassName("deletebutton");

         for (var i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener('click', handleClick, false);
          };
          
          function handleClick() {
            this.parentElement.parentElement.style.height = '0px';
            this.parentElement.parentElement.style.transition = '0.7s';
          };

         

            