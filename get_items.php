<?php
require_once("../../../wp-load.php");

$ser = $_REQUEST['ser_id'];
$cat = $_REQUEST['cat_id'];
global $wpdb;
$item_list = $wpdb->get_results("SELECT * FROM `wp_get_items_list` WHERE `category_id`=".$ser." and `service_id`=".$cat);
    echo "<div class='row pb-2'>";
    foreach($item_list as $item){
        
        echo "
                    <div class='col-md-3'>
                        <div class='productbox' id='".$item->item_id."'>
                            <img src='".$item->image_url."' alt=''>
                        </div>
                        <div class='producttitle'>".$item->item_name."</div>
                    </div>
            ";
        
    }
    echo  "</div>";

?>




