<?php

$data = $_REQUEST['data'];

$item_list = json_decode( html_entity_decode( stripslashes ($data) ) );

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

    