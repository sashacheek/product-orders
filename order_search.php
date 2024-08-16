<?php include 'header.php';
    if (isset($_GET['status'])) {
        echo "<p class='order-confirmation'>";
        echo $_GET['status'];
        echo "</p>";
    }
?>


<h2>ORDER SEARCH</h2>
<form id="search_form" name="search_form" action="search_results.php" method="post">
    <div>
        <label for="">Last Name</label>
        <input type="text" id="lname_search" name="lname_search">
    </div>
    <div>
        <label for="search_button"></label>
        <input type="submit" id="search_button" name="search_button" value="SEARCH" class="button"></button>
    </div>
</form>
<?php include 'footer.php' ?>