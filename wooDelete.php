<?php
/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * <mauran@mauran.me> wrote this file.
 * As long as you retain this notice you can do whatever you want with this
 * stuff. If we meet some day, and you think this stuff is worth it, you can
 * buy me a beer in return --Mauran Muthiah
 * ----------------------------------------------------------------------------
 */

// By default wp_ for standard WP-installations
$prefix = "wp_";

// Database infos here
$host = "localhost";
$username = "askronco";
$password = "askronco";
$db = "askronco";

$conn = new mysqli($host, $username, $password, $db);


if ($conn->connect_error) {
    die("Please enter the correct Database and User Information [Error:1] " . $conn->connect_error);
} 


$sql = "DELETE FROM " . $prefix . "woocommerce_order_itemmeta";

if ($conn->query($sql) === TRUE) {
    echo "Deleted woocommerce_order_itemmeta successfully. " . PHP_EOL;
} else {
    echo "Unable to Delete WooCommerce_Order_ItemMeta [Eroror:2] " . $conn->error;
}



$sql = "DELETE FROM " . $prefix . "woocommerce_order_items";

if ($conn->query($sql) === TRUE) {
    echo "Deleted woocommerce_order_items successfully. " . PHP_EOL;
} else {
    echo "Unable to Delete WooCommerce_Order_Items [Eroror:3] " . $conn->error;
}



$sql = "DELETE FROM " . $prefix . "posts WHERE post_type = 'shop_order'";

if ($conn->query($sql) === TRUE) {
    echo "Deleted posts where post_type = 'shop_order'" . PHP_EOL;
} else {
    echo "Whoops: " . $conn->error;
}

echo "Fixed! Your woocommerce orders should be empty! :-)";

?>
