<?php get_header(); ?>

    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                   
                    
                    <?php woocommerce_content();      ?>

                </div>

            </div>
 

        </div>
    </div>   
    
    <div class="content">
        <div class="container">

            <div class="row">
                <button id="fetchData">Get Products from Api</button>
                <div class="col-lg-12" id="product-from-api">

                
                </div>
            </div>   


        </div>
    </div>    

<?php get_footer();  ?> 