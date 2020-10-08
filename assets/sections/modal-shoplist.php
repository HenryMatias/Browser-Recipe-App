<!-- Modal -->
<div class="modal fade" id="newlistitem" tabindex="-1" role="dialog" aria-labelledby="newlistitemLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php pll_e('Lisaa Ostoslistaan'); ?></h5>
            </div>
            <form method="post" enctype="multipart/form-data">
            <div class="modal-body" id="modal-body-shoppinglist">
            <?php 
                $args = array(
                'post_type' => 'shoplist',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'ASC',
                );
                $shoplists = new WP_Query($args);
                while ($shoplists->have_posts()) {
                $shoplists->the_post();
            ?>
            <input type="hidden" value="<?php echo get_the_ID(); ?>" id="shopwpid" name="shopwpid">
            <?php }
                wp_reset_query();
            ?>
            <div class="adding-ingredients">
                <div class="ingredients white-bg">
                    <h5 class="input-heading"><?php pll_e('Lisaa Tuote'); ?></h5>
                    <div class="choose-ingredients">
                        <div class="ingredient">
                            <input placeholder="<?php pll_e('Ainesosa'); ?>..." type="text" id="ingredient-name-shoplist" name="ingredient-name-shoplist">
                        </div>
                        <div class="amount">
                            <input placeholder="<?php pll_e('Maara'); ?>..." type="number" id="ingredient-amount-shoplist" name="ingredient-amount-shoplist" autocomplete="off">
                        </div>
                        <div class="unit">
                            <select id="ingredient-unit-shoplist" name="ingredient-unit-shoplist" autocomplete="off">
                                <option><?php pll_e('Yksikko'); ?></option>
                                <option value="g">g</option>
                                <option value="kg">kg</option>
                                <option value="ml">ml</option>
                                <option value="cl">cl</option>
                                <option value="dl">dl</option>
                                <option value="l">l</option>
                                <option value="tl">tl</option>
                                <option value="rkl">rkl</option>
                                <option value="kpl">kpl</option>
                                <option value="pkt">pkt</option>
                                <option value="prk">prk</option>
                                <option value="pss">pss</option>
                                <option value="rs">rs</option>
                                <option value="pl">pl</option>
                                <option value="ripaus">ripaus</option>
                            </select>
                            <input type="hidden" value="0" id="amountofshoplistrows" name="amountofshoplistrows">
                        </div>
                    </div>
                </div>
                <button onclick="addShoplistrow()" class="add add-first white-bg">+</button>
            </div>
            <div class="ready-shoplist white-bg">
                <p><?php pll_e('Ostoslista'); ?></p>
                <table id="tableidshoplist">
                    <!--Tähän taulukkoon tulee listattuna kaikki ainekset-->
                </table>
            </div>
            <div class="modal-footer">
                <div id="checkboxareashop">
                    <input type="checkbox" name="valmisostoslista" id="valmisostoslista" class="valmisresepti" required>
                    <label for="valmisostoslista"><?php pll_e('Valmis'); ?></label>
                </div>
                <button class="close-button white-bg" type="button" class="btn" data-dismiss="modal"><?php pll_e('Peruuta'); ?></button>
                <button class="send-button" type="submit" class="btn"><?php pll_e('Laheta'); ?></button>
            </div>
            </form>
        </div>
    </div>
</div>