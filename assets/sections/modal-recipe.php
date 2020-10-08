<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php pll_e('Uusi Resepti'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="recipename white-bg">
                    <h5 class="input-heading"><?php pll_e('Nimi'); ?></h5>
                    <input type="text" id="newrecipename" name="newrecipename" placeholder="<?php pll_e('Nimi Placeholder'); ?>" required>
                </div>
                <div class="recipename white-bg">
                    <h5 class="input-heading"><?php pll_e('Kategoria'); ?></h5>
                    <select id="recipestyle" name="recipestyle" autocomplete="off">
                        <option><?php pll_e('Valitse Kategoria'); ?>...</option>
                        <option value="suolainen"><?php pll_e('Suolainen'); ?></option>
                        <option value="makea"><?php pll_e('Makea'); ?></option>
                    </select>
                </div>
                    <div class="adding-ingredients">
                        <div class="ingredients white-bg">
                            <h5 class="input-heading"><?php pll_e('Lisaa Aines'); ?></h5>
                            <div class="choose-ingredients">
                                <div class="ingredient">
                                    <input placeholder="<?php pll_e('Ainesosa'); ?>..." type="text" id="ingredient-name" name="ingredient-name">
                                </div>
                                <div class="amount">
                                    <input placeholder="<?php pll_e('Maara'); ?>..." type="number" id="ingredient-amount" name="ingredient-amount" autocomplete="off">
                                </div>
                                <div class="unit">
                                    <select id="ingredient-unit" name="ingredient-unit" autocomplete="off">
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
                                    <input type="hidden" value="0" id="amountofrows" name="amountofrows">
                                </div>
                            </div>
                        </div>
                        <button onclick="addIngredient()" class="add add-first white-bg">+</button>
                    </div>
                    <div class="ready-ingredients white-bg">
                        <p class="input-heading"><?php pll_e('Lisatyt Ainekset'); ?>:</p>
                        <table id="tableid">
                            <!--Tähän taulukkoon tulee listattuna kaikki ainekset-->
                        </table>
                    </div>
                    <div class="instructions">
                        <div class="add-instructions white-bg">
                            <h5 class="input-heading"><?php pll_e('Valmistus Vaiheet'); ?></h5>
                            <textarea placeholder="<?php pll_e('Ohjeet'); ?>..." name="instruction" id="instruction" cols="30" rows="5"></textarea>
                        </div>
                        <div class="add-instructions-button white-bg">
                            <button onclick="addPhase()" class="add add-second white-bg">+</button>
                            <input type="hidden" value="0" id="amountofareas" name="amountofareas">
                        </div>
                    </div>
                    <div class="ready-instructions white-bg">
                        <p class="input-heading"><?php pll_e('Lisatyt Vaiheet'); ?>:</p>
                        <table id="tableid2">
                        <!--Tähän taulukkoon tulee listattuna kaikki vaiheet-->
                        </table>
                    </div>
            </div>
            <div class="modal-footer">
                <div id="checkboxarea">
                    <input type="checkbox" name="valmisresepti" id="valmisresepti" class="valmisresepti" required>
                    <label for="valmisresepti"><?php pll_e('Valmis'); ?></label>
                </div>
                <button class="close-button white-bg" type="button" class="btn" data-dismiss="modal"><?php pll_e('Peruuta'); ?></button>
                <button class="send-button" type="submit" class="btn"><?php pll_e('Laheta'); ?></button>
            </div>
            </form>
        </div>
    </div>
</div>