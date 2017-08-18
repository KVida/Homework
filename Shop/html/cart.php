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
    <form method="post" action="index.php?r=handler_order">
        <?php 
            $Order_number = fopen('files/Order_number.txt','a+');
            rewind($Order_number);

            $numberOrder = array();
            while ($numberLine = fgets($Order_number)) {
                $numberOrder[] = (int) $numberLine;
            }

            $countNumberOrder = count($numberOrder);
            if ($countNumberOrder == 0) {
                $numberOrder[$countNumberOrder] = 1;
            } else {
                $numberOrder[$countNumberOrder] = $numberOrder[$countNumberOrder-1] + 1; 
            }
            fwrite($Order_number, $numberOrder[$countNumberOrder] . "\r\n");
        ?>
        <input type="hidden" name="orderNumber" value="<? echo $numberOrder[$countNumberOrder]; ?>">

        <? foreach ($cart_products as $id => $amount) : ?>
            <input type="hidden" name="productName[]" value="<? echo $products[$id]->name; ?>">
            <input type="hidden" name="productAmount[]" value="<? echo $amount; ?>">
            <input type="hidden" name="productPrice[]" value="<? echo $products_price; ?>">
        <? endforeach; ?>

        <div class="main">
            <div class="userForm">
                <label for="userName">Имя*: </label>
                <input id="userName" type="text" name="userName" required>
            </div>
            <div class="userForm">
                <label for="userSurname">Фамилия*: </label>
                <input id="userSurname" type="text" name="userSurname" required>
            </div>
            <div class="userForm">
                <label for="userEmail">Email*: </label>
                <input id="userEmail" type="email" name="userEmail" required>
            </div>
            <div class="userForm">
                <label for="userPhone">Телефон*: </label>
                <input id="userPhone" type="tel" name="userPhone" placeholder="+38(0XX)XXXXXXX" required>
            </div>
            <div class="userForm">
                <label for="userAddress">Адрес доставки*: </label>
                <input id="userAddress" type="text" name="userAddress" required>
            </div>
            <div class="userForm">
                <label for="userComment">Комментарий к заказу*: </label>
                <input id="userComment" type="text" name="userComment">
            </div>
        </div>
        <p>*- Обязательное поля для заполнения.</p>
        <input type="submit" value="Отправить" />
    </form>
<? else :?> 
    <? echo 'Корзина пуста.'; ?>
<? endif; ?>

 