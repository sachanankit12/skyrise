<footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="<?php echo get_option('bu_logo_url');?>" alt="">
                    <br>
                    <h5>BY YOU</h5>
                    <p>6540/89, Street No.2 Quresh Nagar,
                        <br> Sadar Bazaar, Delhi
                        <br> India - 110006
                        <br> +91- 9999-00-00-00
                    </p>
                </div>
                <div class="col-md-6 sndCOl">
                    <div class="row">
                        <div class="div_col col-md-4">
                            <h5>Shop</h5>
                            <ul>
                                <li><a href="#">Bra</a></li>
                                <li><a href="#">Plus Size Bra</a></li>
                                <li><a href="#">Sports Bra</a></li>
                                <li><a href="#">Panty</a></li>
                                <!-- <li><a href="#"></a></li> -->
                            </ul>
                        </div>
                        <div class="div_col col-md-4">
                            <h5>Shop</h5>
                            <ul>
                                <li><a href="#">Bra</a></li>
                                <li><a href="#">Plus Size Bra</a></li>
                                <li><a href="#">Sports Bra</a></li>
                                <li><a href="#">Panty</a></li>
                                <!-- <li><a href="#"></a></li> -->
                            </ul>
                        </div>
                        <div class="div_col col-md-4">
                            <h5>Shop</h5>
                            <ul>
                                <li><a href="#">Bra</a></li>
                                <li><a href="#">Plus Size Bra</a></li>
                                <li><a href="#">Sports Bra</a></li>
                                <li><a href="#">Panty</a></li>
                                <!-- <li><a href="#"></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <h4>Find Us on Social Network</h4>
                    <ul class="social">
                        <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/fb.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/tw.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/insta.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/what.png" alt=""></a></li>
                        <!-- <li><a href="#"><img src="<?php bloginfo('template_directory');?>/images/fb.png" alt=""></a></li> -->
                    </ul>
                    <button class="subs">Subscribe to Newsletter</button>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/wow.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/main.js"></script>
    
    <script>
    new WOW().init();

    // $('.slider').owlCarousel({
    //     loop: true,
    //     margin: 0,
    //     responsiveClass: true,
    //     autoplay: true,
    //     dot: false,
    //     nav: false,
    //     responsive: {
    //         0: {
    //             items: 1,
    //             nav: false
    //         },
    //         600: {
    //             items: 1,
    //             nav: false
    //         },
    //         1000: {
    //             items: 1,
    //             nav: false,
    //             loop: true
    //         }
    //     }
    // });


    curIndex = 0;
    imgDuration = 3000;

    function slider(){

    setTimeout(function() {
		$('.slider .item').hide();
    	$('.slider .item').eq(curIndex).fadeIn();
    },1000);

	curIndex++;
    if (curIndex == $('.slider .item').length) { curIndex = 0; }
    setTimeout(slider, imgDuration);

    }
    slider()

    </script>
</body>

</html>