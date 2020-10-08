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