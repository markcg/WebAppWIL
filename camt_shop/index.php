<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
        <title>CAMT Shop</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="">CAMT SHOP</h1>
                </div>
                <div class="col-md-12">
                    <div class="header-menu"><a href="product_add.php"><button class="btn"><strong>Add Product</strong></button></a></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-8 col-md-11" >
                        <input class="form-control" id="search" type="text" placeholder="Search">
                    </div>
                    <div class=" col-md-1 col-sm-1">
                        <button type="button" onclick="search_by_keyword()" class="btn btn-default">SEARCH</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container result-frame">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 210px;"></th>
                                <th>ITEM</th>
                                <th>PRICE</th>
                                <th>AVAILABLE</th>
                                <th>RATING</th>
                            </tr>
                        </thead>
                        <tbody id="products">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row"></div>
            <div class="col-md-12">
                <div class="header-menu"><a><button class="btn"><strong>Add Product</strong></button></a></div>
            </div>
        </div>
        <script src="camt-shop-system.js" type="text/javascript"></script>
        <script>home.initialize();</script>
    </body>
</html>
