<?php


vc_map(array(
    "name" 			=> "Advanced Woo Products Sliders",
    "category" 		=> 'Advanced Elements',
    "description"	=> "Products Are On Move",
    "base" 			=> "awavc_woo_slider",
    "class" 		=> "",
    "icon" 			=> "woo_product_slider_icon",

    "params" 	=> array(

            array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Product Layout Style", "awavcl"),
            "param_name" => "woo_style",
            "value" => array(
                "Style 1" => 'product-item-1',
                "Style 2" => 'product-item-2',
                "Style 3" => 'product-item-3',
                "Style 4" => 'product-item-4',
                "Style 5" => 'product-item-5',
                "Style 6" => 'product-item-6',
                "Style 7" => 'product-item-7',
                "Style 8" => 'product-item-8',
                "Style 9" => 'product-item-9',
                "Style 10" => 'product-item-10',
                "Style 11" => 'product-item-11',
                "Style 12" => 'product-item-12',
                "Style 13" => 'product-item-13',
            ),
            "description" => __("custom image height for product image", "awavcl"),
            "group"		  => __( "Image Size", "awavcl" ),
            'admin_label' 	=> true,
        ),

        array(
    		"type"			=> "textfield",
    		"heading"		=> __( "Number Of Products", "awavcl" ),
    		"param_name"	=> "products",
    		'value' 		=> '',
            'admin_label' 	=> true,
    	),
        array(
    		"type"			=> "textfield",
    		"heading"		=> __( "Products Category Slug", "awavcl" ),
    		"param_name"	=> "categories_id",
    		'admin_label' 	=> true,
    		'value' 		=> '',
            "description" => __("Type products category slug to get specific category products into carousel. Leave empty for all categories products", "awavcl")
    	),
        array(
    		"type"			=> "textfield",
    		"heading"		=> __( "Product Tag", "awavcl" ),
    		"param_name"	=> "tag",
    		'value' 		=> 'New',
            "description" => __("If you dont want to show any tag mark then leave it blank.", "awavcl")
    	),
        array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Show Rating", "awavcl"),
            "param_name" => "rating_enable",
            "value" => array(
                "Yes" => 'yes',
                "No" => 'no',
            ),
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Custom Image Height", "awavcl"),
            "param_name" => "image_size",
            "value" => array(
                "No" => 'no',
                "Yes" => 'yes',
            ),
            "description" => __("custom image height for product image", "awavcl"),
            "group"		  => __( "Image Size", "awavcl" ),
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Column", "awavcl"),
            "param_name" => "col_num",
            "value" => array(
                "1 Col" => '1',
                "2 Col" => '2',
                "3 Col" => '3',
                "4 Col" => '4',
                "5 Col" => '5',
                "6 Col" => '6',
            ),
            "description" => __("custom image height for product image", "awavcl"),
            "group"		  => __( "Image Size", "awavcl" ),
        ),
        array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Column In Tablet", "awavcl"),
            "param_name" => "col_num_tab",
            "value" => array(
                "1 Col" => '1',
                "2 Col" => '2',
                "3 Col" => '3',
            ),
            "description" => __("custom image height for product image", "awavcl"),
            "group"		  => __( "Image Size", "awavcl" ),
        ),

        array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Column In Mobile", "awavcl"),
            "param_name" => "col_num_mob",
            "value" => array(
                "1 Col" => '1',
                "2 Col" => '2',
                "3 Col" => '3',
            ),
            "description" => __("custom image height for product image", "awavcl"),
            "group"		  => __( "Image Size", "awavcl" ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Image Height', 'awavcl' ),
            'param_name'       => 'image_height',
            "value" => 260,
            "min" => 5,
            "max" => 500,
            "step" => 1,
            "unit" => "px",
            "dependency" => Array('element' => "image_size", 'value' => 'yes'),
            "group"		  => __( "Image Size", "awavcl" ),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Padding Bottom', 'awavcl' ),
            'param_name'       => 'pd_btm',
            "value" => 30,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "group"		  => __( "Settings", "awavcl" ),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'ttl_size',
            "value" => 18,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "group"		  => __( "Settings", "awavcl" ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Sale Price Font Size', 'awavcl' ),
            'param_name'       => 'price_size',
            "value" => 20,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "group"		  => __( "Settings", "awavcl" ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Regular Price Font Size', 'awavcl' ),
            'param_name'       => 'del_price_size',
            "value" => 15,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "group"		  => __( "Settings", "awavcl" ),
            "description" => __("Make it less then sale price font size would be better view", "awavcl")
        ),
        array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Nav Type", "awavcl"),
            "param_name" => "nav_type",
            "value" => array(
                "Both: Nav+Button" => 'nav_btn',
                "Only Nav" => 'nav',
                "Only Button" => 'btn',
            ),
            "group"		  => __( "NAV", "awavcl" ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Navigator Angle Size', 'awavcl' ),
            'param_name'       => 'nav_size',
            "value" => 50,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "group"		  => __( "NAV", "awavcl" ),
            "description" => __("", "awavcl")
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Nav Color", 'awavcl'),
            "param_name" => "nav_clr",
            "value" => "",
            "group"		  => __( "NAV", "awavcl" ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Title Color", 'awavcl'),
            "param_name" => "ttl_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Price Color", 'awavcl'),
            "param_name" => "price_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Tag Text Color", 'awavcl'),
            "param_name" => "tag_txt_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Tag Background Color", 'awavcl'),
            "param_name" => "tag_bg",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "woo_style", 'value' => array('product-item-6','product-item-7','product-item-8','product-item-9','product-item-10','product-item-11','product-item-12','product-item-13') ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Color On Hover", 'awavcl'),
            "param_name" => "hvr_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Add to Cart Text Color", 'awavcl'),
            "param_name" => "cart_txt_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
             "dependency"    => array( 'element' => "woo_style", 'value' => array('product-item-3','product-item-6','product-item-8','product-item-10','product-item-11','product-item-12','product-item-13') ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Add to Cart Background", 'awavcl'),
            "param_name" => "cart_bg",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "woo_style", 'value' => array('product-item-3','product-item-6','product-item-8','product-item-10','product-item-11','product-item-12','product-item-13',) ),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "awavcl"),
            "param_name" => "extraclass",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "awavcl")
        ),
                )

));



function awavc_woo_slider_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                                'woo_style'				=> 'product-item-1',
                                'css_animation'				=> '',
                                'image_size'				=> '',
                                'image_height'				=> '300',
                                'products' 					=> '-1',
                                'pd_btm' 					=> '50',
                                'tag' 				    	=> 'Sale',
                                'col_num' 				    	=> '4',
                                'col_num_tab' 				    	=> '2',
                                'col_num_mob' 				    	=> '1',
                                'categories_id' 			=> 'all',
                                'items'						=> '6',
                                'ttl_size'					=> '',
                                'price_size'				 => '',
                                'del_price_size'			 => '',
                                'ttl_clr'						=> '',
                                'price_clr'						=> '',
                                'hvr_clr'						=> '',
                                'cart_txt_clr'						=> '',
                                'cart_bg'						=> '',
                                'nav_type'						=> '',
                                'nav_size'						=> '',
                                'nav_clr'						=> '',
                                'tag_txt_clr'						=> '',
                                'tag_bg'						=> '',
                                'rating_enable'					=> 'yes',
                                'extraclass'				=> '',
    ), $atts));
    wp_register_style( 'blog-style', plugins_url( '/css/woo-products.css',  __FILE__) );
    wp_enqueue_style( 'blog-style' );

    wp_register_style( 'awavcl.owl.carousel', plugins_url( '/css/owl.carousel.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.owl.carousel' );

    wp_register_style( 'awavcl.owl.transitions', plugins_url( '/css/owl.transitions.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.owl.transitions' );

    wp_register_style( 'awavcl.owl.theme', plugins_url( '/css/owl.theme.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.owl.theme' );



    wp_register_script('adv.owl.carousel.min', plugins_url('/js/owl.carousel.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('adv.owl.carousel.min');
    wp_register_script('awavc-woo.x', plugins_url('/js/woo-js.js', __FILE__), array('jquery'));
                wp_enqueue_script('awavc-woo.x');

    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
                    $slide = rand(99,99999);
                    $html = '';
                    $ratting = '';
                    global $post;
                    static $product_slider_id = 1;
                    global $wp;
                    $current_url = home_url(add_query_arg(array(),$wp->request));



                    $query_args = array(
                            'post_type' 		=> 'product',
                            'post_status' 		=> 'publish',
                            'posts_per_page'	=> $products,
                            'orderby' 			=> 'date',
                            'order' 			=> 'DESC',
                        );

                    if( $categories_id != 'all' ) {
                        $query_args['tax_query'] 	= array(
                                                        array(
                                                            'taxonomy' 	=> 'product_cat',
                                                            'field' 	=> 'slug',
                                                            'terms' 	=> $categories_id
                                                        ) );

                    }

                    $latest_product_query = new WP_Query( $query_args );

                    $html .= '<div id="advc-product_'.$slide.'"  class="adts_'.$slide.' advc-product_'.$slide.' adv-owl-carousel owl-theme '.$extraclass.'"  style="padding:px; margin-bottom:70px;">';
                    if( $latest_product_query->have_posts() ) {



                            while($latest_product_query->have_posts()) : $latest_product_query->the_post();

                                global $product;
                                $woo_product_img 	= wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'theme-mid' );
                                $attachment_ids = $product->get_gallery_image_ids();
                                    if( sizeof($attachment_ids) > 0 ){
                                         $first_attachment_id = reset($attachment_ids);
                                        $link = wp_get_attachment_image_src( $first_attachment_id, 'full' )[0];
                                    }
                                $cat_count 			= sizeof( get_the_terms( get_the_ID(), 'product_cat' ) );
                                $id = $product->get_id();
                                $product_tags = get_terms( 'product_tag', $query_args );
                                $average = $product->get_average_rating();
                                $result = do_shortcode('[yith_wcwl_add_to_wishlist]');

                                $ratting.$esy = '';
                            if($rating_enable == 'yes' ){
                                if($average == 0 ){$ratting.$esy  .= '<div class="ratings"><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i></div>';}

                                if($average == 1 ){$ratting.$esy .= '<div class="ratings"><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i></div>';}
                                if($average == 2 ){$ratting.$esy .= '<div class="ratings"><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i></div>'; }
                                if($average == 3 ){$ratting.$esy .= '<div class="ratings"><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#eee;"></i><i class="fa fa-star" style="color:#eee;"></i></div>';}
                                if($average == 4 ){$ratting.$esy .= '<div class="ratings"><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#eee;"></i></div>';}
                                if($average == 5 ){$ratting.$esy .= '<div class="ratings"><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i><i class="fa fa-star" style="color:#FFC73C;"></i></div>';}

                               }
                if($woo_style == 'product-item-1') {
                 $unq = rand(99,99999);

                                 $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                 <style>.awavc-product-item-1.r'.$unq.' .thumb .img-wrapper{background-image: url("'.$woo_product_img[0].'")!important;} .awavc-product-item-1.r'.$unq.':hover.r'.$unq.' .thumb .img-wrapper{background-image: url("'.$link.'")!important;}.awavc-product-item-1:hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-1 .content .meta-icons li a:hover{background-color: '.$hvr_clr.'!important;}.r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .content{height:150px}</style>
                                                <div class="awavc-product-item-1 r'.$unq.'">
                                                    <a href="'.get_permalink().'">
                                                        <div class="thumb">
                                                            <div class="img-wrapper"></div>';

                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="background:'.$hvr_clr.'; color:'.$tag_txt_clr.'">'.$tag.'</span>';
                                                            }

                                        $html .= '
                                                        </div>
                                                    </a>
                                                    <div class="content">
                                                        <a href="'.get_permalink().'">
                                                            <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                        </a>';
                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;


                                        $html .= '<ul class="meta-icons">
                                                        <li  class="custom_add_to_cart "><a href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />

                                                         <li><a href="'.get_permalink().'"><i class="fa fa-tags" aria-hidden="true"></i></a></li>


                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                ';
                        }

                         if($woo_style == 'product-item-2'){
                                $unq = rand(9,9999);


                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">

                                    <style>.awavc-product-item-2.r'.$unq.' .thumb .img-wrapper{background-image: url("'.$woo_product_img[0].'")!important;} .awavc-product-item-2:hover.r'.$unq.' .thumb .img-wrapper{background-image: url("'.$link.'")!important;}.awavc-product-item-2:hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-2 .meta-extra .meta-icons li a:hover{background-color: '.$hvr_clr.'!important;}.r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .content{height:100px}</style>
                                                <div class="awavc-product-item-2 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper"></div>
                                                        </a>';

                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="background:'.$hvr_clr.'; color:'.$tag_txt_clr.'">'.$tag.'</span>';                                                    }

                                        $html .= '    <div class="meta-extra">
                                                            <ul class="meta-icons">
                                                                <li><a href="'.get_permalink().'"><i class="fa fa-tags" aria-hidden="true"></i></a></li>

                                                                <li  class="custom_add_to_cart "><a href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="'.get_permalink().'">
                                                            <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                        </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                    </div>
                                                </div>
                                            </div>

                                            ';

                                }

                            if($woo_style == 'product-item-3'){
                                $unq = rand(9,9999);

                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-3.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-3.r'.$unq.' .meta-extra .meta-icons li a:hover{background-color: '.$hvr_clr.'!important;}.r'.$unq.' del span{font-size:'.$del_price_size.'px;}.awavc-product-item-3.r'.$unq.' .thumb{height: '.$image_height.'px!important;}.r'.$unq.' .content{height:200px}</style>
                                                <div class="awavc-product-item-3 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img style="height:'.$image_height.'px" src="'.$woo_product_img[0].'" alt="">
                                                            </div>
                                                        </a>';

                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="background:'.$hvr_clr.'; color:'.$tag_txt_clr.'">'.$tag.'</span>';
                                                            }

                                        $html .= '
                                                        <div class="meta-extra">
                                                            <ul class="meta-icons">
                                                                <li>
                                                                    <a href="'.get_permalink().'">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="'.get_permalink().'">
                                                            <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                        </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;


                                        $html .= ''.$ratting.$esy.'

                                                        <li  class="custom_add_to_cart" style="list-style:none;"><a class="addtocart" href="'.$current_url.'?add-to-cart='.$id.'" style="color:'.$cart_txt_clr.';background:'.$cart_bg.';"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</a></li>
                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                    </div>
                                                </div>
                                            </div>

                                            ';

                                }

                        if($woo_style == 'product-item-4'){
                                $unq = rand(9,9999);

                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-5.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-5.r'.$unq.' .meta-extra .meta-icons li a:hover{background-color: '.$hvr_clr.'!important;}.r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.r'.$unq.' .content{height:125px}</style>
                                                <div class="awavc-product-item-4 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img style="height:'.$image_height.'px" src="'.$woo_product_img[0].'" alt="">
                                                            </div>
                                                        </a>';

                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="background:'.$hvr_clr.'; color:'.$tag_txt_clr.'">'.$tag.'</span>';
                                                            }

                                        $html .= '
                                                        <div class="meta-extra">
                                                            <ul class="meta-icons">

                                                                <li>
                                                                    <a href="'.get_permalink().'">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li  class="custom_add_to_cart "><a href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#">
                                                            <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                        </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                    </div>
                                                </div>
                                            </div>

                                            ';

                                }

                        if($woo_style == 'product-item-5'){
                                $unq = rand(9,9999);

                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">

                                <style>.awavc-product-item-5.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-5.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.r'.$unq.' .addcart a:hover {color:'.$hvr_clr.'!important;}.r'.$unq.' .content{height:125px}</style>
                                                <div class="awavc-product-item-5 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img style="height:'.$image_height.'px" src="'.$woo_product_img[0].'" alt="">
                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.'">'.$tag.'</span>';
                                                            }
                                        $html .= '
                                                    </div>
                                                    <div class="content">
                                                        <a href="'.get_permalink().'">
                                                            <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                        </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                        <li class="custom_add_to_cart addcart" style="list-style:none;"><a  class="addcart" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>

                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                    </div>
                                                </div>
                                            </div>

                                            ';

                                }
                        if($woo_style == 'product-item-6'){
                                $unq = rand(9,9999);

                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-6.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-6.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-6.r'.$unq.' .meta-infos li a:hover {background-color: '.$cart_bg.'!important;border-color: '.$cart_bg.'!important;} .r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.awavc-product-item-6.r'.$unq.' .thumb .tag:after{border-top: 20px solid '.$tag_bg.'!important;}.awavc-product-item-6.r'.$unq.' .thumb .tag {background:'.$tag_bg.'!important;}.r'.$unq.' .content{height:125px}</style>
                                                <div class="awavc-product-item-6 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img style="height:'.$image_height.'px" src="'.$woo_product_img[0].'" alt="">
                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.';">'.$tag.'</span>';
                                                            }
                                        $html .= '
                                                        <ul class="meta-infos">
                                                            <li class="custom_add_to_cart" style="list-style:none;"><a  class="addcart" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>

                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />

                                                            <li>
                                                                <a href="'.get_permalink().'">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <a><li class="custom_add_to_cart" style="list-style:none;"><a  class="addtocart" style="background:'.$cart_bg.'!important; color:'.$cart_txt_clr.'!important;" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</a></li>
                                                    <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />  </a>
                                                    </div>
                                                    <div class="content">
                                                        <a href="'.get_permalink().'">
                                                            <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                        </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                    </div>
                                                </div>


                                                </div>

                                            ';

                                }


                                if($woo_style == 'product-item-7'){
                                $unq = rand(9,9999);

                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-7.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-7.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-7.r'.$unq.' .meta-infos li a:hover {background-color: '.$cart_bg.'!important;border-color: '.$cart_bg.'!important;} .r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.awavc-product-item-7.r'.$unq.' .meta-infos li a:hover{color: '.$hvr_clr.'!important;}.r'.$unq.' .content{height:140px}</style>
                                                <div class="awavc-product-item-7 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img style="height:'.$image_height.'px" src="'.$woo_product_img[0].'" alt="">
                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.';background:'.$tag_bg.'!important;">'.$tag.'</span>';
                                                            }
                                        $html .= '</div>
                                                    <div class="content">
                                                        <div class="top-content">
                                                            <a href="'.get_permalink().'">
                                                                <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                            </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                            '.$ratting.$esy.'
                                                        </div>
                                                        <div class="bottom-content">
                                                            <ul class="meta-infos">
                                                                <li class="custom_add_to_cart" style="list-style:none;"><a  class="addcart" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>

                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />

                                                                <li>
                                                                    <a href="'.get_permalink().'">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>


                                                </div>

                                            ';

                                }

                            if($woo_style == 'product-item-8'){
                                $unq = rand(9,9999);

                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-8.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-8.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-8.r'.$unq.' .btn-wrapper li .addcartbtn{background-color: '.$cart_bg.'!important;border-color: '.$cart_bg.'!important;color:'.$cart_txt_clr.'!important;} .r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.awavc-product-item-7.r'.$unq.' .meta-infos li a:hover{color: '.$hvr_clr.'!important;}.r'.$unq.' .content{height:130px}</style>
                                                <div class="awavc-product-item-8 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img style="height:'.$image_height.'px" src="'.$woo_product_img[0].'" alt="">
                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.';background:'.$tag_bg.'!important;">'.$tag.'</span>';
                                                            }
                                        $html .= '<div class="btn-wrapper">

                                                            <li class="custom_add_to_cart" style="list-style:none;"><a  class="addcartbtn" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true" > <strong>Add To Car</strong></i></a></li>

                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="'.get_permalink().'">
                                                            <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                        </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                    </div>

                                                </div>


                                                </div>

                                            ';

                                }

                            if($woo_style == 'product-item-9'){
                                $unq = rand(9,9999);

                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                    <style>.awavc-product-item-11.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-11.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-11.r'.$unq.' .btn-wrapper li .addcartbtn{background-color: '.$cart_bg.'!important;border-color: '.$cart_bg.'!important;color:'.$cart_txt_clr.'!important;} .r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.awavc-product-item-11.r'.$unq.' .meta-infos li a:hover{background-color: '.$hvr_clr.'!important;}.awavc-product-item-11.r'.$unq.' .img-wrapper.bg-2 {background-image: url("'.$woo_product_img[0].'")!important;}.awavc-product-item-11.r'.$unq.' .bg-2.img-wrapper::after {background-image: url("'.$link.'")!important;}.r'.$unq.' .content{height:130px}</style>
                                                <div class="awavc-product-item-11 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper bg-2">

                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.';background:'.$tag_bg.'!important;">'.$tag.'</span>';
                                                            }
                                        $html .= '
                                                        <div class="meta-lists">
                                                            <ul class="meta-infos">
                                                                <li>
                                                                    <a href="'.get_permalink().'">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="custom_add_to_cart" style="list-style:none;"><a  class="addcart" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>

                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="'.get_permalink().'">
                                                            <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                        </a>
                                                        <div class="meta-detailss">
                                                            '.$ratting.$esy.' ';


                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                        </div>

                                                    </div>

                                                </div>


                                            </div>

                                            ';

                                }

                            if($woo_style == 'product-item-10'){
                                $unq = rand(9,9999);

                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-12.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-12.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-12.r'.$unq.' .bottom-content a.shopnow{background-color: '.$cart_bg.'!important;border-color: '.$cart_bg.'!important;color:'.$cart_txt_clr.'!important;}.awavc-product-item-12.r'.$unq.' .bottom-content a.shopnow:hover{background-color: '.$hvr_clr.'!important;} .r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.awavc-product-item-12.r'.$unq.' .meta-infos li a:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-12.r'.$unq.' .img-wrapper.bg-2 {background-image: url("'.$woo_product_img[0].'")!important;}.awavc-product-item-12.r'.$unq.' .bg-2.img-wrapper::after {background-image: url("'.$link.'")!important;}.r'.$unq.' .content{height:140px}</style>
                                                <div class="awavc-product-item-12 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img src="'.$woo_product_img[0].'" class="img-1" alt="">
                                                                <img src="'.$link.'" class="img-2" alt="">
                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.';background:'.$tag_bg.'!important;">'.$tag.'</span>';
                                                            }
                                        $html .= '
                                                    </div>
                                                    <div class="content">
                                                        <div class="top-content">
                                                            <a href="'.get_permalink().'">
                                                                <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                            </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                            <div class="meta-detailss">
                                                                '.$ratting.$esy.'
                                                            </div>
                                                        </div>
                                                        <div class="bottom-content">

                                                            <a href="'.get_permalink().'" class="shopnow">Shop Now</a>

                                                            <div class="meta-lists">
                                                                <ul class="meta-infos">
                                                                    <li>
                                                                        <a href="'.get_permalink().'">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="custom_add_to_cart" style="list-style:none;"><a  class="addcart" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"></i></a></li>

                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                            ';

                                }

if($woo_style == 'product-item-11'){
                                $unq = rand(9,9999);


                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-13.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-13.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-13.r'.$unq.' .bottom-content a.shopnow{background-color: '.$cart_bg.'!important;border-color: '.$cart_bg.'!important;color:'.$cart_txt_clr.'!important;}.awavc-product-item-13.r'.$unq.' .bottom-content a.shopnow:hover{background-color: '.$hvr_clr.'!important;} .r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.awavc-product-item-13.r'.$unq.' .meta-infos a{background-color: '.$cart_bg.'!important;}.awavc-product-item-13.r'.$unq.' .meta-infos li a:hover{background-color: '.$hvr_clr.'!important;}.awavc-product-item-13.r'.$unq.' .img-wrapper.bg-2 {background-image: url("'.$woo_product_img[0].'")!important;}.awavc-product-item-13.r'.$unq.' .bg-2.img-wrapper::after {background-image: url("'.$link.'")!important;}.awavc-product-item-13 .content .bottom-content{ transform: translateY(115px)!important;}.awavc-product-item-13:hover .content .bottom-content {transform: translateY(0px)!important;}.r'.$unq.' .content{height:140px}</style>
                                                <div class="awavc-product-item-13 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img src="'.$woo_product_img[0].'" class="img-1" alt="">
                                                                <img src="'.$link.'" class="img-2" alt="">
                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.';background:'.$tag_bg.'!important;">'.$tag.'</span>';
                                                            }
                                        $html .= '
                                                        <div class="meta-lists">
                                                            <ul class="meta-infos">
                                                                <li>
                                                                    <a href="'.get_permalink().'">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="'.get_permalink().'">
                                                                        <i class="fa fa-cart-plus"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="top-content">
                                                            <a href="'.get_permalink().'">
                                                                <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                            </a>';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                            <div class="meta-detailss">
                                                                '.$ratting.$esy.'
                                                            </div>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <li class="custom_add_to_cart" style="list-style:none;"><a  class="shopnow" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></a></li>

                                                        <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                            ';

                                }

                            if($woo_style == 'product-item-12'){
                                $unq = rand(9,9999);


                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-14.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-14.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-14.r'.$unq.' .bottom-content a.shopnow{background-color: '.$cart_bg.'!important;border-color: '.$cart_bg.'!important;color:'.$cart_txt_clr.'!important;}.awavc-product-item-14.r'.$unq.' .bottom-content a.shopnow:hover{background-color: '.$hvr_clr.'!important;} .r'.$unq.' del span{font-size:'.$del_price_size.'px;}.r'.$unq.' .thumb .tag{border-color:'.$tag_txt_clr.'!important;}.awavc-product-item-14.r'.$unq.' .meta-infos li a:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-14.r'.$unq.' .img-wrapper.bg-2 {background-image: url("'.$woo_product_img[0].'")!important;}.awavc-product-item-14.r'.$unq.' .bg-2.img-wrapper::after {background-image: url("'.$link.'")!important;}.awavc-product-item-14 .content .bottom-content{ transform: translateY(115px)!important;}.awavc-product-item-14:hover .content .bottom-content {transform: translateY(0px)!important;}.r'.$unq.' .content{height:130px}</style>
                                                <div class="awavc-product-item-14 r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img src="'.$woo_product_img[0].'" class="img-1" alt="">
                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.';background:'.$tag_bg.'!important;">'.$tag.'</span>';
                                                            }
                                        $html .= '
                                                    </div>
                                                    <div class="content">
                                                        <div class="top-content">';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                            <div class="meta-detailss">
                                                                '.$ratting.$esy.'

                                                            </div>
                                                            </div>
                                                            <a href="'.get_permalink().'">
                                                                <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                            </a>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <a class="custom_add_to_cart" style="list-style:none;"><a  class="shopnow" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"> Add To Cart</i></a></a>

                                                            <input type="hidden" name="add-to-cart" value="'.absint($product->get_id()).'" />
                                                            <input type="hidden" name="product_id" value="'.absint($product->get_id()).'" />
                                                            <input type="hidden" name="variation_id" class="variation_id" value="0" />

                                                                <ul class="meta-infos">
                                                                    <li>
                                                                        <a href="'.get_permalink().'">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                        </div>
                                                    </div>

                                                </div>




                                            ';

                                }

                                if($woo_style == 'product-item-13'){
                                $unq = rand(9,9999);


                                $html .= '<div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="margin-bottom:'.$pd_btm.'px">
                                <style>.awavc-product-item-15.r'.$unq.':hover .content .title{color:'.$hvr_clr.'!important;}.awavc-product-item-15.r'.$unq.' .meta-extra .content .addcart:hover{color: '.$hvr_clr.'!important;}.awavc-product-item-15.r'.$unq.' .bottom-content a.shopnow{background-color: '.$cart_bg.'!important;border-color: '.$cart_bg.'!important;color:'.$cart_txt_clr.'!important;}.awavc-product-item-15.r'.$unq.' .bottom-content a.shopnow:hover{background-color: '.$hvr_clr.'!important;} .r'.$unq.' del span{font-size:'.$del_price_size.'px;}.awavc-product-item-15.r'.$unq.' .meta-infos li a{background-color: '.$cart_bg.'!important;}.awavc-product-item-15.r'.$unq.' .meta-infos li a:hover{background-color: '.$hvr_clr.'!important;}.r'.$unq.' .content{height:230px}</style>
                                                <div class="awavc-product-item-15  r'.$unq.'">
                                                    <div class="thumb">
                                                        <a href="'.get_permalink().'">
                                                            <div class="img-wrapper">
                                                                <img src="'.$woo_product_img[0].'" class="img-1" alt="">
                                                            </div>
                                                        </a>';
                                                            if(!empty($tag)){
                                                               $html .= '<span class="tag" style="b:'.$hvr_clr.'; color:'.$tag_txt_clr.';background:'.$tag_bg.'!important;">'.$tag.'</span>';
                                                            }
                                        $html .= '
                                                    <ul class="meta-infos">
                                                        <li>
                                                            <a href="'.get_permalink().'">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                    <div class="content">
                                                        <div class="top-content">';

                                        if ( $price_html = $product->get_price_html() ) :
                                            $html .= '<span class="price" style="color:'.$price_clr.';font-size:'.$price_size.'px;">'. $price_html .'</span>';

                                        else:
                                            $html .= '<span class="price" style="font-size:'.$price_size.'px;"><a onMouseOver="this.style.color=\''.$ttl_clr.'\'"
    onMouseOut="this.style.color=\''.$hvr_clr.'\'"  href="'.get_permalink().'" style="color:'.$hvr_clr.';">Shop Now</a></span>';
                                        endif;

                                        $html .= '
                                                            <div class="meta-detailss">
                                                                '.$ratting.$esy.'
                                                            </div>
                                                            <a href="#">
                                                                <h4 class="title" style="color:'.$ttl_clr.';font-size:'.$ttl_size.'px;">'.get_the_title().'</h4>
                                                            </a>
                                                        </div>
                                                        <div class="bottom-content">
                                                            <a class="custom_add_to_cart" style="list-style:none;"><a  class="shopnow" href="'.$current_url.'?add-to-cart='.$id.'"><i class="fa fa-cart-plus" aria-hidden="true"> </i>Add To Cart</a></a>

                                                        </div>
                                                    </div>

                                                </div>

                                                </div>




                                            ';

                                }

                $html .= '';





                        endwhile;
                        wp_reset_postdata();


                 $html .= '</div>
                 <style>
                        #advc-product_'.$slide.' .owl-buttons .fa{font-size:'.$nav_size.'px!important;color:'.$nav_clr.'!important;}#advc-product_'.$slide.' .owl-page.active > span,#advc-product_'.$slide.' .owl-page > span{background-color:'.$nav_clr.'!important;}';
                    if($nav_type == 'nav'){
                        $html .= ' #advc-product_'.$slide.' .owl-pagination{display:none!important}';
                    }
                    if($nav_type == 'btn'){
                        $html .= ' #advc-product_'.$slide.' .owl-buttons{display:none!important}';
                    }
                $html .= '
                 </style>
                 <script>

                 jQuery(document).ready(function($) {
                  $("#advc-product_'.$slide.'").owlCarousel({
                      items:'.$col_num.',
                    itemsDesktop:[1000,'.$col_num.'],
                    itemsDesktopSmall:[979,'.$col_num.'],
                    itemsTablet:[768,'.$col_num_tab.'],
                    itemsMobile:[650,'.$col_num_mob.'],
                    pagination:true,
                    navigation:true,
                    navigationText:["",""],
                    autoPlay:true,
                    autoWidth:true,
                    rewind:true,
                     navigation : true, // Show next and prev buttons
                       navigationText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],

      });
    });
             </script>';

    }


    return $html;
}

add_shortcode("awavc_woo_slider", "awavc_woo_slider_shortcode");