<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <div class="wrapper">
    <div class="mob_menu_over"></div>
        <div class="mob_menu ">
             <ul>
                <li><a href="<?php bloginfo('url');?>">Home</a></li>
                <li><a href="<?php echo get_permalink(13);?>">About Us</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="<?php echo get_permalink(25);?>">Production</a></li>
                <li><a href="#">E-Catalouge</a></li>
                <li><a href="<?php echo get_permalink(17);?>">Contact Us</a></li>
            </ul>
                <ul>
                <li>
                    <a href="javascript:void(0)">
                        <input type="text">
                    </a>
                </li>
                <li><a href="<?php echo get_permalink(12);?>"><span>Login</span></a></li>
                <li><a href="<?php echo get_permalink(12);?>"><span class="ico_menu"><img src="<?php bloginfo('template_directory');?>/images/heart.png" alt=""></span><span>Favourites</span></a></li>
                <li><a href="<?php echo get_permalink(10);?>"><span class="ico_menu"><img src="<?php bloginfo('template_directory');?>/images/shopping_bag.png" alt=""></span> <span>My Cart</span></a></li>
            </ul>
        </div>


    <header>
        <div class="logo">
            <a href="<?php bloginfo('url');?>"><img src="<?php echo get_option('bu_logo_url');?>" alt="Logo"></a>
        </div>
        <div class="menus">
            <ul>
                <li>
                    <a href="javascript:void(0)">
                        <input type="text">
                    </a>
                </li>
                <li><a href="<?php echo get_permalink(12);?>"><span>Login</span></a></li>
                <li><a href="<?php echo get_permalink(12);?>"><span class="ico_menu"><img src="<?php bloginfo('template_directory');?>/images/heart.png" alt=""></span><span>Favourites</span></a></li>
                <li><a href="<?php echo get_permalink(10);?>"><span class="ico_menu"><img src="<?php bloginfo('template_directory');?>/images/shopping_bag.png" alt=""></span> <span>My Cart</span></a></li>
            </ul>
            <ul>
                <li><a href="<?php bloginfo('url');?>">Home</a></li>
                <li><a href="<?php echo get_permalink(13);?>">About Us</a></li>
                <li><a href="">Products</a></li>
                <li><a href="<?php echo get_permalink(25);?>">Production</a></li>
                <li><a href="#">E-Catalouge</a></li>
                <li><a href="<?php echo get_permalink(17);?>">Contact Us</a></li>
            </ul>
            <div class="toogle"><i class="fa fa-bars"></i></div>

        </div>
    </header>