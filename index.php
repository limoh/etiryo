<?php
$activeHome = "active";

require('func/config.php');

$featured_products_query = "select * from shop_items where FeaturedItem = 1";
$featured_products = $user->fetch_products($featured_products_query);

//recommended
$recommended_products_query = "select * from shop_items where FeaturedItem = 1";
$recommended_products = $user->fetch_products($recommended_products_query);

$suit_products_query = "select * from shop_items where Category = 1";
$suit_products = $user->fetch_products($suit_products_query);

$shirt_products_query = "select * from shop_items where Category = 2";
$shirt_products = $user->fetch_products($shirt_products_query);

$trousers_products_query = "select * from shop_items where Category = 3";
$trousers_products = $user->fetch_products($trousers_products_query);

$dress_products_query = "select * from shop_items where Category = 4";
$dress_products = $user->fetch_products($dress_products_query);

$tops_products_query = "select * from shop_items where Category = 5";
$top_products = $user->fetch_products($tops_products_query);

$shoes_products_query = "select * from shop_items where Category = 6";
$shoe_products = $user->fetch_products($shoes_products_query);

$ankara_products_query = "select * from shop_items where Category = 7";
$ankara_products = $user->fetch_products($ankara_products_query);

include('includes/front/header.php');

include('includes/front/slider.php');?>

<section>
    <div class="container">
        <div class="row">


            <?php include('includes/front/sidebar.php');?>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/featured-items.php');?>
                </div><!--features_items-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/suit-items.php');?>
                </div><!--features_items-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/shirt-items.php');?>
                </div><!--features_items-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/trouser-items.php');?>
                </div><!--features_items-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/dress-items.php');?>
                </div><!--features_items-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/top-items.php');?>
                </div><!--features_items-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/shoe-items.php');?>
                </div><!--features_items-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/ankara-items.php');?>
                </div><!--features_items-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"></h2>
                    <!-- Loop here -->
                    <?php include('includes/front/recommended-items.php');?>
                </div><!--features_items-->


            </div>
        </div>
    </div>
</section>
<?php include('includes/front/footer.php');?>
