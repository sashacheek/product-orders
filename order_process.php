<?php
    include 'header.php';

    $product = $_POST["product"];
    $quantity = $_POST["quantity"];
    $unit_price = $_POST["unit_price"];
    $discount_amount = $_POST["discount_rate"];
    $order_date = $_POST["order_date"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $payment_type = $_POST["payment_type"];
    $card_number = $_POST["card_number"];
    $security_code = $_POST["security_code"];
    $date = $_POST["order_date"];

    if (empty($product) || empty($quantity) || empty($unit_price) || empty($discount_amount) || empty($order_date) || empty($first_name) || empty($last_name) || empty($payment_type) || empty($card_number) || empty($security_code)) {
        echo "Error: missing data";
    } else {

        include 'connection.php';

        $sql = "INSERT INTO orders (product, quantity, unit_price, discount_rate, order_date, first_name, last_name, payment_type, card_number, security_code) 
        VALUES ('$product', '$quantity', '$unit_price', '$discount_amount', '$order_date','$first_name', '$last_name', '$payment_type', '$card_number', '$security_code')";

        if ($conn->query($sql) === TRUE) {

            echo "<p class='order-confirmation'>New record created successfully</p>";

            $full_name = $first_name." ".$last_name;
            $order_total = $unit_price * $quantity * (100 - $discount_amount) * .01;
            $censored_card = "************".substr($card_number,12);
            $payment_information = $payment_type." ".$censored_card;
            $today_date = date("F d, Y");

            $order_display = "<h2>"."PRODUCT ORDER"."</h2>";
            $order_display .= "<table id=\"order-table\">";
            $order_display .= "<tr>"."<td class=\"category-display\">Name:</td>"."<td>$full_name</td>"."<tr>";
            $order_display .= "<tr>"."<td class=\"category-display\">Product:</td>"."<td>$product</td>"."<tr>";
            $order_display .= "<tr>"."<td class=\"category-display\">Unit Price:</td>"."<td>$unit_price</td>"."<tr>";
            $order_display .= "<tr>"."<td class=\"category-display\">Discount Rate:</td>"."<td>$discount_amount</td>"."<tr>";
            $order_display .= "<tr>"."<td class=\"category-display\">Order Total:</td>"."<td>$order_total</td>"."<tr>";
            $order_display .= "<tr>"."<td class=\"category-display\">Order Date:</td>"."<td>$date</td>"."<tr>";
            $order_display .= "<tr>"."<td class=\"category-display\">Payment Information:</td>"."<td>$payment_information</td>"."<tr>";
            $order_display .= "</table>";
            $order_display .= "<p class='order-confirmation'>Today's date is: $today_date</p>";

            echo $order_display;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    include 'footer.php';
?>