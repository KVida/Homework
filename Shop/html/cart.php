<? if (!empty($_COOKIE['product_cart'])) : ?>
    <?php
        $cart_products = array();
        $cart_products = unserialize($_COOKIE['product_cart']);
    ?>
    <? foreach ($cart_products as $id => $amount) : ?>
        <div class="cart_box">
            <div class='product_img_cart'>
                <img src='../files/images/<? echo $products[$id]->image->filename; ?>' alt=' <? echo $products[$id]->image->filename; ?>'/> 
            </div>

            <div class='product_name_catr'> <? echo $products[$id]->name; ?> </div>

            <? $product_price = ceil($products[$id]->variant->price); ?>
            <div class='product_price_catr'> <? echo $product_price; ?> </div>

            <input class='amount' type='number' name='amount_new' value="<? echo $amount; ?>">
            
            <? $products_price = $product_price * $amount;?>
            <div class='product_price_catr'> <? echo $products_price; ?> </div>
            <div class="clearfix"></div>
        </div>
    <? endforeach; ?>
<? else :?> 
    <? echo 'Корзина пуста.'; ?>
<? endif; ?>

