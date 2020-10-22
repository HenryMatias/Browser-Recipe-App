// To recipes in application menu
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
        document.getElementById("delete-all-shoplist").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transform = "translateX(120%)";
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
    };


// To shoplist in application menu
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
        document.getElementById("delete-all-shoplist").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transitionDuration = "0.5s";
        document.getElementById("searchcontent").style.transform = "translateX(120%)";
        document.getElementById("maincontent").style.transitionDuration = "0.5s";
        document.getElementById("maincontent").style.borderRadius = "0px 50px 0px 0px";
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
    };


// To search in application menu
document.getElementById("hae-tab").addEventListener("click", toSearch);
    function toSearch() {
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
    };


// To shoplist in application menu
document.getElementById("asetukset-tab").addEventListener("click", toSettings);
    function toSettings() {
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
    };
    