<div class="product_box">
    <div class="product_img">
        <img src="../files/images/<? echo $product->image->filename ?>" alt="<? echo $product->image->filename ?>"/>
    </div>

    <div class="product_characteristics">
        <div class="product_name">
            <h3> <? echo $product->name; ?> </h3>
        </div>
            
        <div class="product_price">
            <div><p>Цена: <? echo ceil($product->variant->price); ?> грн </p> </div>
            <div class="product_price_select">
                <? if (count($product->variants) > 1): ?>
                    <p class="variants_price">Другие варианты:</p>
                    <select class="product_preview_select">
                        <? foreach ($product->variants as $item) :?>
                            <? if ($item->id != $product->variant->id): ?>
                                <option><? echo $product->variants[0]->name . " = " . ceil($item->price); ?> грн.</option>
                            <? endif; ?>
                        <? endforeach; ?>
                    </select>
                <? endif; ?>
            </div>
        </div>

        <div class="product_article">
            <? if ($product->image->position > 0) :?>
                <span class="product_article_num">#<? echo $product->image->position; ?></span>
            <? else : ?>
                <span class="product_article_num">#</span>
            <? endif; ?>
        </div>
        <div class="clearfix"></div>
        <div class="product_description">
            <p>Описание товара:</p>
            <p><? echo $product->description; ?></p>
        </div>
    </div>
    <div class="product_buy_form"> 
        <form method="post" action="index.php?r=handler">
            <input type="hidden" name="product_id" value="<? echo $product->id; ?>">

            <label>Кол-во: </label>
            <select type='number' name='amount'> 
                <?php 
                    $amount_number = 1; 
                    for ($i = 0; $i < 50; $i++) { 
                        $new_amount_number= $amount_number + $i; 
                        echo '<option value='.$new_amount_number.'>'.$new_amount_number.'</option>';  
                    } 
                ?> 
            </select>

            <input class="button_buy" type="submit" value="Купить">
        </form>

    </div>
    <div class="product_wish_form"> 
        <form method="post" action="index.php?r=handler_wish">
            <input type="hidden" name="wish_product_id" value="<? echo $product->id; ?>">

            <input class="button_buy" type="submit" value="В избранное">
        </form>

    </div>
    <div class="clearfix"></div>
</div>