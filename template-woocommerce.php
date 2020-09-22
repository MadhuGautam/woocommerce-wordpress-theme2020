<?php 

/* Template Name: Shop Page*/


get_header(); ?>

<div class="content">
    <section class="container">
        <div class="row">
             <div class="col-md-12">
                <select class="select_category" id="select_service" onchange="set_selected_service_id()">
                <option value="" disabled selected>Choose your service</option>
                <?php
                    global $wpdb; 
                    $service_list = $wpdb->get_results("SELECT * FROM `wp_get_ser`");
                        foreach($service_list as $service){
                              echo "<option id='opt".$service->service_id."' value=".$service->service_id.">".$service->name."</option>";  
                            
                        }
                    ?>
                
                </select>

            </div>
        </div>
    </section>    
</div>    

<div class="content">
    <section class="container">
    <div class="row">
        <div class="col-md-12">

            <?php
                    global $wpdb; 
                    $category_list = $wpdb->get_results("SELECT * FROM `wp_get_cat`");
                    ?>
            <ul id="tabsJustified" class="nav nav-pills nav-justified">
                     <?php 
                          foreach($category_list as $category){
                           
                            echo "<li class='nav-item' id='list1' value='".$category->ID."'><a href='#' onclick='javascript:set_selected_category_id(".$category->ID.")' data-target='#item' data-toggle='tab' class='nav-link small text-uppercase' id='tab".$category->ID."'>".$category->name."</a></li>";
                          }
                     ?>   
               
               
            </ul>
            <br>
            <!-- tab Contents -->
            <div id="tabsJustifiedContent" class="tab-content">
                <!-- item displayed -->
                <div id="item" class="tab-pane fade active show">
                                          
                    
                        
                </div>
                </div>
                <!-- End item displayed -->
               
              
            </div>
            <!-- End tab Contents -->
        </div>
    </div>
</section>  
</div>   


<script>
let selected_category_id=1;
let selected_service_id=3;
get_items();
document.getElementById("opt3").selected = true;
var tab_id = document.getElementById("tab1");
tab_id.className += " active"; 

function set_selected_category_id(id){

    selected_category_id=id;
    get_items();

}

function set_selected_service_id(){

    selected_service_id = document.getElementById("select_service").value;

    get_items();

}

function get_items(){

   // alert("id "+selected_category_id+" "+selected_service_id);
   
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("item").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "<?php bloginfo( 'template_directory' ); ?>/get_items.php?ser_id=" +selected_service_id+"&cat_id="+selected_category_id, true);
    xmlhttp.send();


}

</script>

   
<?php get_footer();  ?> 