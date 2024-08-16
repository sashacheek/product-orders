<!-- Sasha Cheek Assignment 10 -->
<?php include 'header.php'?>
            <form  id="order_form" name="order_form" action="order_process.php" method="post">
                <div>
                    <label for="product">Product</label>
                    <select name="product" id="product">
                        <option value="ipad">iPad</option>
                        <option value="iphone">iPhone 6S</option>
                        <option value="galaxy">Galaxy 5S</option>
                        <option value="moto">Moto X</option>
                    </select><span id="err1"></span>
                </div>
                <div>
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity"><span id="err2"></span>
                </div>
                <div>
                    <label for="unit_price">Unit Price</label>
                    <input type="number" id="unit_price" name="unit_price" step=".01"><span id="err3"></span>
                </div>
                <div>
                    <label for="discount_rate">Discount</label>
                    <input type="number" id="discount_rate" name="discount_rate" min="0" max="100"><span id="err4"></span>
                </div>
                <div>
                    <label for="order_date">Date</label>
                    <input type="date" id="order_date" name="order_date"><span id="err5"></span>
                </div>
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" size="10"><span id="err6"></span>
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" size="10"><span id="err7"></span>
                </div>
                <div>
                    <label for="payment_type">Payment type</label>
                    <select name="payment_type" id="payment_type">
                        <option value="visa">Visa</option>
                        <option value="mastercard">MasterCard</option>
                        <option value="discover">Discover</option>
                        <option value="amex">Amex</option>
                        <option value="other">Other</option>
                    </select><span id="err8"></span>
                </div>
                <div>
                    <label for="card_number">Card Number</label>
                    <input id=card_number name="card_number" type="number" min="0" max="9999999999999999"><span id="err9"></span>
                </div>
                <div>
                    <label for="security_code">Security Code</label>
                    <input id=security_code name="security_code" type="text" minlength="8" maxlength="8"><span id="err10"></span>
                </div>
                <div>
                    <label for="comments">Comments:</label>
                    <div id="comment-box">
                        <textarea name="comments" id="comments" cols="25" rows="4"></textarea>
                        <span id="character_count">0/100</span>
                    </div>
                </div>
                <div>
                    <label for="terms-and-conditions">Terms and Agreement</label>
                    <input type="checkbox" id="terms-and-conditions">
                </div>
                <div>
                    <label for="order_button"></label>
                    <input type="submit" id="order_button" name="order_button" class="button" value="Place Order">
                    <input type="button" id="reset_button" class="button" value="Reset">
                </div>
            </form>
            <div class="output" id="output"></div>
        <?php include 'footer.php'?>