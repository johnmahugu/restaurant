<?php
require_once "inc/global.php";

$orderCont = new Order();

switch($_GET['task']){
    case "add":
        // masa siparişine ürün ekleme
        $orderCont->addProductToTableOrder($_GET['productId'], $_GET['tableId']);
        break;
    case "delete":
        // siparişten ürün silme
        $orderCont->deleteProductFromOrder($_GET['orderProductId']);
        break;
}

header("Location: table.php?id=".$_GET['tableId'] );