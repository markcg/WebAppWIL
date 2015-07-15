<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST["name"]) && empty($_POST["price"]) && empty($_POST["quantity"]) && empty($_POST["image"])) {
        $status = "<font color='red'>Information is missing</font>";
    }
    if (isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["quantity"]) && isset($_POST["image"])) {
        $DBCONNECT = mysqli_connect("localhost", "root", "", "camt-shop", "3306");
        $query = "INSERT INTO `product`(`name`, `price`, `quantity`, `image`) "
                . "VALUES ('"
                . $_POST["name"]
                . "','" . $_POST["price"]
                . "','" . $_POST["quantity"]
                . "','" . $_POST["image"]
                . "')";
        $result = mysqli_query($DBCONNECT, $query);
        if (!$result) {
            die('Invalid query: ' . mysql_error());
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>CAMT Shop</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class=""><a href="/">CAMT SHOP</a></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <?php
                    if (isset($status) || !empty($status)) {
                        echo $status;
                    }
                    ?>
                </div>
                <div class="col-md-12">
                    <form method="POST" action="product_add.php" id="AddForm">
                        <div style="margin: 0 auto; width: 400px;">
                            <h1>Add Product</h1>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Product name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Price</label>
                                <input type="number" name="price" placeholder="Product price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Quantity</label>
                                <input type="number" name="quantity" placeholder="Product quantity" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Image</label>
                                <input type="text" name="image" placeholder="Product Image" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control" value="Add Product">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="camt-shop-system.js" type="text/javascript"></script>
        <script>$("#AddForm").validate();</script>
    </body>
</html>
