<?php
    include 'header.php';

    $lname_search = $_POST["lname_search"];

    if (empty($lname_search)) {
        echo "<p class='order-confirmation'>Error: missing data</p>";
    } else {
        include 'connection.php';
        $sql = "SELECT * FROM orders WHERE last_name = '$lname_search'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<p class='order-confirmation'>ORDERS FOUND:</p>";

            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $product = $row["product"];
                $quantity = $row["quantity"];
                $unit_price = $row["unit_price"];
                $discount_amount = $row["discount_rate"];
                $order_date = $row["order_date"];
                $first_name = $row["first_name"];
                $last_name = $row["last_name"];
                $payment_type = $row["payment_type"];
                $card_number = $row["card_number"];
                $security_code = $row["security_code"];

    
                $order_total = $unit_price * $quantity * (100 - $discount_amount) * .01;
                $censored_card = "************".substr($card_number,12);
    
                $order_display = "<table id=\"order-table\">";
                $order_display .= "<tr>"."<td class=\"category-display\">ID:</td>"."<td>$id</td>"."<tr>";
                $order_display .= "<tr>"."<td class=\"category-display\">First Name:</td>"."<td>$first_name</td>"."<tr>";
                $order_display .= "<tr>"."<td class=\"category-display\">Last Name:</td>"."<td><a href=edit_record.php?id=" . $row['id'] . ">" . $row['last_name'] . "</a></td><tr>";
                $order_display .= "<tr>"."<td class=\"category-display\">Product:</td>"."<td>$product</td>"."<tr>";
                $order_display .= "<tr>"."<td class=\"category-display\">Unit Price:</td>"."<td>$unit_price</td>"."<tr>";
                $order_display .= "<tr>"."<td class=\"category-display\">Discount Rate:</td>"."<td>$discount_amount</td>"."<tr>";
                $order_display .= "<tr>"."<td class=\"category-display\">Order Total:</td>"."<td>$order_total</td>"."<tr>";
                $order_display .= "<tr>"."<td class=\"category-display\">Payment Type:</td>"."<td>$payment_type</td>"."<tr>";
                $order_display .= "</table>";
    
                echo $order_display;
            }
        } else {
            echo "<p class='order-confirmation'>Sorry, no matches found</p>";
        }
    }
    
    include 'footer.php';
?>