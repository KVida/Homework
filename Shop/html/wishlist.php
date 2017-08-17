<? if (!empty($_COOKIE['wishlist'])) : ?>
    <?php
        $wishlist = array();
        $wishlist = unserialize($_COOKIE['wishlist']);
    ?>
    <? foreach ($wishlist as $id) : ?>
        <div class="product_line">
            <li class="product_item">
                <div class="image">
                    <span class="image_date"><?php echo date('m.d.y',strtotime($products[$id]->created)); ?></span>
                    <img src="<? echo $products[$id]->image->filename ?>" alt="<? echo $products[$id]->image->filename ?>">  
                </div>
                <div class="product_name">                                   
                    <a href="<? echo 'index.php?r=product&id=' . $products[$id]->id; ?>">
                        <? echo $products[$id]->name; ?>
                    </a>
                </div>
                <div class="product_article"> 
                    <? if ($products[$id]->image->position > 0) :?>
                            <span class="product_article_num">#<? echo $products[$id]->image->position; ?></span>
                        <? else : ?>
                            <span class="product_article_num">#</span>
                    <? endif; ?>
                </div>
                <div class="products_price">
                    <p> Цена товара = <? echo ceil($products[$id]->variant->price); ?> </p>
                    <? if (count($products[$id]->variants) > 1): ?>
                        <p class="variants_price">Другие варианты:</p>                                
                        <select class="products_preview_select">
                            <? foreach ($products[$id]->variants as $item) :?>
                                <? if ($item->id != $products[$id]->variant->id): ?>
                                    <option><? echo $products[$id]->variants[0]->name . " = " . ceil($item->price); ?> грн.</option>
                                <? endif; ?>
                            <? endforeach; ?>
                        </select>                                                        
                    <? endif; ?>
                </div>
                
                <div class="stock">
                    <p> Колличесво товаров - <? echo $products[$id]->variants[0]->stock ?> шт </p>
                </div>   
            </li>
        </div>
    <? endforeach; ?>
<? else :?> 
    <? echo 'Лист желаний - пуст.'; ?>
<? endif; ?>