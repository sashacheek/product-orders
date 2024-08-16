<?php
    $order_id = $_GET['id'];
    include 'connection.php';
    if(isset($_POST['delete']))
    {
        $sqlDelete = "DELETE FROM orders WHERE id = $order_id";
        $result = $conn->query($sqlDelete);
        header("Location: order_search.php?status=Record+Deleted+Successfully");
        exit();
    }
    if(isset($_POST['update']))
    {
        $product = $_POST["product"];
        $quantity = $_POST["quantity"];
        $unit_price = $_POST["unit_price"];
        $discount_amount = $_POST["discount_rate"];
        $order_date = $_POST["order_date"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $payment_type = $_POST["payment_type"];
        $date = $_POST["order_date"];

        $sqlUpdate = "UPDATE orders SET product = '$product', quantity = '$quantity', unit_price = '$unit_price', discount_rate = '$discount_amount', order_date = '$order_date', first_name = '$first_name', last_name = '$last_name', payment_type = '$payment_type' WHERE id = $order_id";
        $result = $conn->query($sqlUpdate);
        header("Location: order_search.php?status=Record+Updated+Successfully");
        exit();
    }
    include 'header.php';

    $sqlSelect = "SELECT * FROM orders WHERE id = $order_id"; 
    $result = $conn->query($sqlSelect);


    while($row = $result->fetch_assoc())
    {
        $censored_card = "************".substr($row['card_number'],12);

        $fieldOutput = "<form id='update-delete-form' method='POST'>";
        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>First Name: </label>";
        $fieldOutput .= "<input type='text' name='first_name' id='first_name' value=" . $row['first_name'] . ">";
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>Last Name: </label>";
        $fieldOutput .= "<input type='text' name='last_name' id='last_name' value=" . $row['last_name'] . ">";
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>Product: </label>";
        $fieldOutput .= '<select name="product" id="product">
        <option value="ipad"';
        if ($row['product'] == "ipad") {$fieldOutput .= 'selected';}
        $fieldOutput .='>iPad</option>
        <option value="iphone"';
        if ($row['product'] == "iphone") {$fieldOutput .= 'selected';}
        $fieldOutput .='>iPhone 6S</option>
        <option value="galaxy"';
        if ($row['product'] == "galaxy") {$fieldOutput .= 'selected';}
        $fieldOutput .='>Galaxy 5S</option>
        <option value="moto"';
        if ($row['product'] == "moto") {$fieldOutput .= 'selected';}
        $fieldOutput .='>Moto X</option>
        </select><span id="err1"></span>';
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>Quantity: </label>";
        $fieldOutput .= "<input type='number' name='quantity' id='quantity' value=" . $row['quantity'] . ">";
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>Unit Price: </label>";
        $fieldOutput .= "<input type='number' name='unit_price' id='unit_price'  step='.01' value=" . $row['unit_price'] . ">";
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>Discont Rate: </label>";
        $fieldOutput .= "<input type='number' name='discount_rate' id='discount_rate' min='0' max='100' value=" . $row['discount_rate'] . ">";
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>Order Date: </label>";
        $fieldOutput .= "<input type='date' name='order_date' id='order_date' value=" . $row['order_date'] . ">";
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>Payment Type: </label>";
        $fieldOutput .= '<select name="payment_type" id="payment_type">
        <option value="visa"';
        if ($row['payment_type'] == "visa") {$fieldOutput .= 'selected';}
        $fieldOutput .= '>Visa</option>
        <option value="mastercard"';
        if ($row['payment_type'] == "mastercard") {$fieldOutput .= 'selected';}
        $fieldOutput .= '>MasterCard</option>
        <option value="discover"';
        if ($row['payment_type'] == "discover") {$fieldOutput .= 'selected';}
        $fieldOutput .= '>Discover</option>
        <option value="amex"';
        if ($row['payment_type'] == "amex") {$fieldOutput .= 'selected';}
        $fieldOutput .= '>Amex</option>
        <option value="other"';
        if ($row['payment_type'] == "other") {$fieldOutput .= 'selected';}
        $fieldOutput .= '>Other</option>
        </select>';
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label>Card Number: </label>";
        $fieldOutput .= "<input type='text' name='card_number' id='card_number' value=" . $censored_card . " disabled>";
        $fieldOutput .= "</div>";

        $fieldOutput .= "<div>";
        $fieldOutput .= "<label></label>";
        $fieldOutput .= '<input type="submit" id="update" name="update" class="button" value="UPDATE">
        <input type="submit" id="delete" name="delete" class="button" value="DELETE">';
        $fieldOutput .= "</div>";
        $fieldOutput .= "<input type='hidden' name='id' value=" . $row['id'] . ">";

        $fieldOutput .= "</form>";
        echo $fieldOutput;

    }
    

    if(isset($_POST['update']))
    {
    // $user_id = $_POST['id'];
    // //Collect Remaining Fields
    // $sqlUpdate = "UPDATE orders SET (field = value, field2=value2) WHERE id = $order_id";
        echo '<script>alert("Updated");</script>';
    }

    include 'footer.php';

?>