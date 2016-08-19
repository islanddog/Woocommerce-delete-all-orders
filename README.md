# Delete all Woocommerce orders
Will allow a WordPress configured panel (ie- MyRubis) to delete all orders on WooCommerce 2.6.4. This script might continue to work in future revisisions though has not been tested. This is useful for situations in which you want to do testing and start fresh on a live environment. 

## I just want the SQL-queries
Here you go!
```sql
DELETE FROM wp_woocommerce_order_itemmeta
DELETE FROM wp_woocommerce_order_items
DELETE FROM wp_posts WHERE post_type = 'shop_order'
```
