<div class="all_products">
    <? if($products) :?>
        <ul>
            <? $i = 0; ?>
            <? foreach ($products as $product) :?>
                <? if($product->visible):?>
                    <? if ($product->variants[0]->stock > 0) :?>
                        <? ++$i; ?>
                        <? if (($i % 4)) :?>
                        <div class="product_line">
                            <li class="product_item">
                                <div class="image">
                                    <span class="image_date"><?php echo date('m.d.y',strtotime($product -> created)); ?></span>
                                    <img src="<? echo $product->image->filename ?>" alt="<? echo $product->image->filename ?>">  
                                </div>
                                <div class="product_name">                                   
                                    <a href="<? echo '/index.php?r=product&id=' . $product->id; ?>">
                                        <? echo $product->name; ?>
                                    </a>
                                </div>
                                <div class="product_article"> 
                                    <? if ($product->image->position > 0) :?>
                                            <span class="product_article_num">#<? echo $product->image->position; ?></span>
                                        <? else : ?>
                                            <span class="product_article_num">#</span>
                                    <? endif; ?>
                                </div>
                                <div class="products_price">
                                    <p> Цена товара = <? echo ceil($product -> variant -> price); ?> </p>
                                    <? if (count($product -> variants) > 1): ?>
                                        <p class="variants_price">Другие варианты:</p>                                
                                        <select class="preview_select">
                                            <? foreach ($product -> variants as $item) :?>
                                                <? if ($item -> id != $product -> variant -> id): ?>
                                                    <option><? echo $product -> variants[0] -> name . " = " . ceil($item -> price); ?> грн.</option>
                                                <? endif; ?>
                                            <? endforeach; ?>
                                        </select>                                                        
                                    <? endif; ?>
                                </div>
                                
                                <div class="stock">
                                    <p> Колличесво товаров - <? echo $product->variants[0]->stock ?> шт </p>
                                </div>
                                <div class="products_buy_button">
                                    <button type="submit">Купить</button>
                                </div>
                                <!-- <div class="clearfix"></div>    -->    
                            </li>
                        </div>
                        <? else: ?>    
                                <div class="line"></div>
                        <? endif; ?> 
                    <? endif; ?>
                <? endif; ?>                                   
            <? endforeach; ?>
        </ul>
    <? endif; ?>
</div>
