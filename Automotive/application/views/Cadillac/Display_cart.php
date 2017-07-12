<div class="row" id="shoppingCart">

    <div class="col-sm-12">

    <div id="text">
        <?php $cart_check = $this->cart->contents();
        // If cart is empty, this will show below message.
        if(empty($cart_check)) {
            echo '<h3 class="text-center">Your shopping cart is empty</h3>';
        } ?> </div>





    <table id="table" border="0"  class="table table-responsive" style="color: black;background-color: whitesmoke">

        <?php

        // All values of cart store in "$cart".
        if ($cart = $this->cart->contents()): ?>
            <tr id= "main_heading">
                <td>Id</td>
                <td>Name</td>
                <td>Price</td>
                <td>Qty</td>
                <td>Amount</td>
                <td>Cancel Product</td>
            </tr>
            <?php
// Create form and send all values in "shopping/update_cart" function.
            echo form_open('shopping-system/Cart/update_cart');
            $grand_total = 0;
            $i = 1;

            foreach ($cart as $item):
// echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
// Will produce the following output.
// <input type="hidden" name="cart[1][id]" value="1" />

                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                ?>
                <tr>
                <td>
                    <?php echo $i++; ?>
                </td>
                <td>
                    <?php echo $item['name']; ?>
                </td>
                <td>
                    $ <?php echo number_format($item['price'], 2); ?>
                </td>
                <td>
                    <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                </td>
                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                <td>
                    $ <?php echo number_format($item['subtotal'], 2) ?>
                </td>
                <td>

                    <?php

                    /////////////////////////// cancle image.

                   // $path = "<img src=../public/Home/image/shopping-cart-cancel-button.png>";
                    //
                    $clearButton="<button type='button' class='btn btn-primary'><i class=\"fa fa-trash-o\"></i> </button>";
                    echo anchor('shopping-system/Cart/remove/' . $item['rowid'],$clearButton); ?>

                </td>

            <?php endforeach; ?>

            </tr>

            <tr>

                <td><b>Order Total:  JOD<?php

                        //Grand Total.
                        echo number_format($grand_total, 2); ?></b></td>

                <?php  ?>

                <td colspan="5" align="right"><input style="background-color: #0f0f0f;color: whitesmoke"  class ='btn bnt-primary' type="button" value="Clear Cart" onclick="clear_cart()">

                    <?php //submit button. ?>
                    <!--==================================== update cart ==================================================-->
                    <input class ='btn bnt-primary' type="submit" value="Update Cart" style="background-color: #0f0f0f;color: whitesmoke" id="update">
                    <?php echo form_close(); ?>
                    <!--========================================                          palec order ==============================================-->

                    <input class ='btn bnt-primary' type="button" value="Place Order" onclick="window.location ='<?php echo base_url(); ?>shopping-system/Orders/billing_view'" style="background-color: #0f0f0f;color: whitesmoke"></td>

            </tr>

        <?php endif; ?>

    </table>

</div>
</div>

