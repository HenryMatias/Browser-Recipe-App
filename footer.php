</body>

<?php
    include 'assets/sections/color-adjust.php';
    include 'assets/sections/string-translations.php';
?>

<footer>

<ul class="footer-menu nav nav-tabs" role="tablist">
    <li class="menu-item nav-item">
        <a type="button" onclick="toRecipes()" class="nav-link active" id="etusivu-tab" data-toggle="tab" href="#accordion" role="tab" aria-controls="accordion" aria-selected="true">
            <i class="fas fa-home"></i>
            <p><?php pll_e('Etusivu'); ?></p>
        </a>
    </li>
    <li class="menu-item nav-item">
        <a type="button" onclick="toShoplist()" class="nav-link" id="ostoslista-tab" data-toggle="tab" role="tab" href="#recipeareaid" aria-controls="recipeareaid" aria-selected="false">
            <i class="far fa-list-alt"></i>
            <p><?php pll_e('Ostoslista'); ?></p>
            <div id="amountofshoprows" name="amountofshoprows" style="background-color: <?php echo "$color2" ?>;">
                <p id="listamountfooterid">5</p>
            </div>
        </a>
    </li>
    <li class="menu-item nav-item dummy">
    </li>
    <li class="menu-item nav-item">
        <a class="nav-link" id="hae-tab" onclick="toSearch()" data-toggle="tab" href="#searchresult" role="tab" aria-controls="searchresult" aria-selected="false">
            <i class="fas fa-search"></i>
            <p><?php pll_e('Hae'); ?></p>
        </a>
    </li>
    <li class="menu-item nav-item">
        <a class="nav-link" id="asetukset-tab" onclick="toSettings()" data-toggle="tab" href="#asetukset" role="tab" aria-controls="asetukset" aria-selected="false">
            <i class="fas fa-wrench"></i>
            <p><?php pll_e('Asetukset'); ?></p>
        </a>
    </li>
    <div class="menu-item-new" style="background-color: <?php echo "$color1" ?>;" id="modalbutton" type="button" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus"></i>
    </div>
</ul>


<?php
    include 'assets/sections/modal-deleteall.php';
    include 'assets/sections/modal-recipe.php';
    include 'assets/sections/modal-shoplist.php';
?>

<?php
    
?>

</footer>

    <?php wp_footer(); ?>

</html>