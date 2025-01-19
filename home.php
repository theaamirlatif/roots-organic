<?php 
/*
 * Template Name: Home
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- sfyn-hero-slider start -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <!-- Indicator Buttons -->
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <a href="https://rootsorganic.com.au/product/organic-garam-masala-250kg/">
        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/banner-desk-scaled-1.png" class="d-block w-100 d-none d-md-block" alt="Desktop Image 1">
        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/banner1.jpg" class="d-block w-100 d-md-none" alt="Mobile Image 1">
      </a>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <a href="https://rootsorganic.com.au/product/organic-almond-bliss-pure-nutrient-richness-500g/">
        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/2-desk-banner-scaled-1.png" class="d-block w-100 d-none d-md-block" alt="Desktop Image 2">
        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/mb2.png" class="d-block w-100 d-md-none" alt="Mobile Image 2">
      </a>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <a href="https://rootsorganic.com.au/product/organic-turmeric-powder-250kg/">
        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/05/WhatsApp-Image-2024-05-06-at-5.36.01-AM.jpeg" class="d-block w-100 d-none d-md-block" alt="Desktop Image 3">
        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/05/WhatsApp-Image-2024-05-06-at-6.49.08-AM.jpeg" class="d-block w-100 d-md-none" alt="Mobile Image 3">
      </a>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- sfyn-icon-wtih-text section end -->
<!-- sfyn-products-layout section start -->
<div class="sfyn-prd-layout sfyn-same-padding sfyn-prd-slider">
    <div class="sfyn-custom-container">
        <div class="sfyn-prd-wrapper">
            <div class="sfyn-prd-cards">
                <?php echo do_shortcode("[wcps id='442']"); ?>
            </div>
        </div>
    </div>
</div>
<!-- sfyn-products-layout section end -->
<!-- sfyn-healthier-together section start -->
<div class="sfyn-healthier-together">
    <div class="sfyn-custom-container">
        <div class="sfyn-grid-2fr sfyn-gap-20px">
            <div class="sfyn-media-col">
                <!-- Static Image -->
                <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/yoga-1024x1024-1-600x600-1.png" alt="Healthier Together Image">
            </div>
            <div class="sfyn-content-col">
                <!-- Static Heading -->
                <h2 class="sfyn-section-heading">Healthier Together</h2>
                <!-- Static Text -->
                <div class="sfyn-section-text sfyn-mt-24px my-fn-txt">
                    Together, we embrace healthier lifestyles through organic products, sustainable practices, and positive habits. Join us on this journey to create a brighter, healthier future for ourselves and the world around us.
                </div>
                <div class="sfyn-gird-row-1fr sfyn-mt-24px sfyn-gap-10px">
                    <!-- Static Benefits List -->
                    <div class="sfyn-healthier-benefits sfyn-gap-20px">
                        <div class="sfyn-icon-wrapper">
                            <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/non-gmo.png" alt="Benefit 1" class="sfyn-icon-img">
                        </div>
                        <div class="sfyn-icon-content">
                            <h3>Organic Farming</h3>
                            <p>Supporting sustainable farming with non-GMO crops that benefit both the environment and your health for a sustainable future.</p>
                        </div>
                    </div>
                    <div class="sfyn-healthier-benefits sfyn-gap-20px">
                        <div class="sfyn-icon-wrapper">
                            <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/no-cursing.png" alt="Benefit 2" class="sfyn-icon-img">
                        </div>
                        <div class="sfyn-icon-content">
                            <h3>Healthy Eating</h3>
                            <p>Providing wholesome, organic food choices that nourish both your body and mind, promoting overall well-being and vitality support a balanced lifestyle.</p>
                        </div>
                    </div>
                    <div class="sfyn-healthier-benefits sfyn-gap-20px">
                        <div class="sfyn-icon-wrapper">
                            <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/organic.png" alt="Benefit 3" class="sfyn-icon-img">
                        </div>
                        <div class="sfyn-icon-content">
                            <h3>Community Support</h3>
                            <p>Encouraging a 100% organic, community-focused approach to healthier living and environmental care by supporting local farmers and sustainable practices.</p>
                        </div>
                    </div>
                </div>
                <!-- Static Button Link -->
                <a href="https://rootsorganic.com.au/categories/" class="sfyn-same-btn sfyn-mt-24px">
                    Join the Movement
                    <div class="sfyn-btn-arrow">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- sfyn-healthier-together section end -->
<!--reviews-->
<div class="sfyn-prd-layout sfyn-same-padding sfyn-rev">
    <div class="sfyn-custom-container">
        <div class="sfyn-prd-wrapper">
            <div class="sfyn-prd-cards">
                <h2 style="text-align: center; font-size: 45px; font-weight: 600; color: #232424; font-family: "League Spartan", sans-serif; line-height: 1.2;">Recent Feedbacks Our Clients!</h2>
                <?php echo do_shortcode("[cusrev_reviews_slider]"); ?>
            </div>
        </div>
    </div>
</div>
<!--reviews-->
<!--Tabs products-->
<div class="sfyn-prd-layout sfyn-same-padding sfyn-rev">
    <div class="sfyn-custom-container">
        <div class="sfyn-prd-wrapper">
            <div class="sfyn-prd-cards">
                <h2 style="text-align: center; font-size: 45px; font-weight: 600; color: #232424; font-family: "League Spartan", sans-serif; line-height: 1.2;">I'm looking for!</h2>
                <?php echo do_shortcode("[TABS_R id=1370]"); ?>
            </div>
        </div>
    </div>
</div>
<style>
    /* tabs product */
    #tab_container_1370 .tab-content {
    	border: none !important;
    }
    #tab_container_1370 .wpsm_nav-tabs > li > a {
    	border: none !important;
    }
    #tab_container_1370 .wpsm_nav-tabs > li > a:hover {
    	border: none !important;
    }
    #tab_container_1370 .wpsm_nav-tabs > li.active > a {
    	border-bottom: 2px solid #ff33e6 !important;
    	border-top: none !important;
    	border-left: none !important;
    	border-right: none !important;
    }
    #tab_container_1370 .wpsm_nav-tabs > li.active > a:hover {
    	border: none !important;
    }
    #tab_container_1370 .wpsm_nav-tabs > li.active > a, #tab_container_1370 .wpsm_nav-tabs > li.active > a:hover, #tab_container_1370 .wpsm_nav-tabs > li.active > a:focus {
    	border-bottom: 2px solid #ff33e6 !important;
    	border-top: none !important;
    	border-left: none !important;
    	border-right: none !important;
    }
    #tab_container_1370 .tab-content {
    	border: 1px #fff !important;
    	padding: 10px !important;
    }
    #tab_container_1370 .wpsm_nav-tabs > li.active > a span {
    	color: #ff33e6 !important;
    	font-weight: 600;
    }
    .wcps-container-1398 .slick-slide {
        text-align: center !important;
    }
    .wcps-container-1399 .slick-slide {
        text-align: center !important;
    }
    .wcps-container-1398 .controlsWrap.topright {
        display: none !important;
    }
    .wcps-container-1399 .controlsWrap.topright {
        display: none !important;
    }
</style>
<!--Tabs products-->
<!-- sfyn-organic-gems section start -->
<div class="sfyn-organic-gems sfyn-change-bg sfyn-same-padding">
    <div class="sfyn-custom-container">
        <div class="sfyn-flex-2fr sfyn-gap-20px">
            <div class="sfyn-gems-content-col">
                <!-- Static Heading -->
                <h2 class="sfyn-section-heading sfyn-white-text">Organic Gems</h2>
                
                <!-- Static Text -->
                <div class="sfyn-section-text sfyn-mt-24px sfyn-white-text">
                    Discover the power of organic living with our selection of natural, sustainable products that benefit both your health and the planet.
                </div>

                <div class="sfyn-gird-row-1fr sfyn-mt-24px sfyn-gap-10px">
                    <!-- Static Benefits Section -->
                    <div class="sfyn-healthier-benefits sfyn-gap-20px">
                        <div class="sfyn-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M16.8017 8.4308C16.8017 12.9796 13.0829 16.6652 8.56731 16.6652C4.01848 16.6652 0.332932 12.9796 0.332932 8.4308C0.332932 3.91518 4.01848 0.196426 8.56731 0.196426C13.0829 0.196426 16.8017 3.91518 16.8017 8.4308ZM7.60442 12.8136L13.7138 6.70424C13.913 6.50502 13.913 6.13979 13.7138 5.94057L12.9501 5.2101C12.7509 4.97768 12.4189 4.97768 12.2197 5.2101L7.23918 10.1906L4.88176 7.86635C4.68254 7.63393 4.35051 7.63393 4.15129 7.86635L3.38762 8.59682C3.1884 8.79604 3.1884 9.16127 3.38762 9.36049L6.84074 12.8136C7.03996 13.0128 7.4052 13.0128 7.60442 12.8136Z" fill="#62A403"></path>
                            </svg>
                        </div>
                        <div class="sfyn-icon-content">
                            <h3 class="sfyn-white-text">Sustainably Sourced</h3>
                        </div>
                    </div>

                    <div class="sfyn-healthier-benefits sfyn-gap-20px">
                        <div class="sfyn-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M16.8017 8.4308C16.8017 12.9796 13.0829 16.6652 8.56731 16.6652C4.01848 16.6652 0.332932 12.9796 0.332932 8.4308C0.332932 3.91518 4.01848 0.196426 8.56731 0.196426C13.0829 0.196426 16.8017 3.91518 16.8017 8.4308ZM7.60442 12.8136L13.7138 6.70424C13.913 6.50502 13.913 6.13979 13.7138 5.94057L12.9501 5.2101C12.7509 4.97768 12.4189 4.97768 12.2197 5.2101L7.23918 10.1906L4.88176 7.86635C4.68254 7.63393 4.35051 7.63393 4.15129 7.86635L3.38762 8.59682C3.1884 8.79604 3.1884 9.16127 3.38762 9.36049L6.84074 12.8136C7.03996 13.0128 7.4052 13.0128 7.60442 12.8136Z" fill="#62A403"></path>
                            </svg>
                        </div>
                        <div class="sfyn-icon-content">
                            <h3 class="sfyn-white-text">Non-GMO Ingredients</h3>
                        </div>
                    </div>

                    <div class="sfyn-healthier-benefits sfyn-gap-20px">
                        <div class="sfyn-icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M16.8017 8.4308C16.8017 12.9796 13.0829 16.6652 8.56731 16.6652C4.01848 16.6652 0.332932 12.9796 0.332932 8.4308C0.332932 3.91518 4.01848 0.196426 8.56731 0.196426C13.0829 0.196426 16.8017 3.91518 16.8017 8.4308ZM7.60442 12.8136L13.7138 6.70424C13.913 6.50502 13.913 6.13979 13.7138 5.94057L12.9501 5.2101C12.7509 4.97768 12.4189 4.97768 12.2197 5.2101L7.23918 10.1906L4.88176 7.86635C4.68254 7.63393 4.35051 7.63393 4.15129 7.86635L3.38762 8.59682C3.1884 8.79604 3.1884 9.16127 3.38762 9.36049L6.84074 12.8136C7.03996 13.0128 7.4052 13.0128 7.60442 12.8136Z" fill="#62A403"></path>
                            </svg>
                        </div>
                        <div class="sfyn-icon-content">
                            <h3 class="sfyn-white-text">Locally Sourced</h3>
                        </div>
                    </div>
                </div>

                <!-- Static Button Link -->
                <a href="https://rootsorganic.com.au/categories/" class="sfyn-same-btn sfyn-mt-24px">
                    Explore Our Organic Gems
                    <div class="sfyn-btn-arrow">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                        </svg>
                    </div>
                </a>
            </div>

            <div class="sfyn-gems-media-col">
                <div class="sfyn-gems-img-slider">
                    <!-- Static Image Slider -->
                    <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/2-1-1-1.png" alt="Organic Gems Image" class="sfyn-img-w-auto">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sfyn-organic-gems section end -->
<!-- product videos section start -->
<div class="sfyn-prd-layout sfyn-same-padding">
    <div class="sfyn-custom-container">
        <div class="sfyn-prd-wrapper">
            <div class="sfyn-prd-cards">
                <h2 style="text-align: center; font-size: 45px; font-weight: 600; color: #232424; font-family: 'League Spartan', sans-serif;">Add products to your cart!</h2>
                <p style="text-align: center; font-size: 25px; font-weight: 500; color: #333333; font-family: 'League Spartan', sans-serif;, padding: 0px;, margin: 20px 0px">Explore Our Top Selling Organic Products!</p>
                <div class="st-videos">
                    <video controls autoplay muted loop>
                        <source src="https://rootsorganic.com.au/wp-content/uploads/2024/08/ssstik.io_@roots_organics_1724325696501.mp4" type="video/mp4">
                    </video>
                    <video controls autoplay muted loop>
                        <source src="https://rootsorganic.com.au/wp-content/uploads/2024/08/ssstik.io_1724389081324.mp4" type="video/mp4">
                    </video>
                    <video controls autoplay muted loop>
                        <source src="https://rootsorganic.com.au/wp-content/uploads/2024/08/ssstik.io_@roots_organics_1724325696501.mp4" type="video/mp4">
                    </video>
                    <video controls autoplay muted loop>
                        <source src="https://rootsorganic.com.au/wp-content/uploads/2024/08/ssstik.io_1724389081324.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product videos section end -->
<!-- As seen on section start -->
<div class="as-seen-on">
        <h3>AS SEEN ON</h3>
        <div class="aso-child">
            <div class="aso-left">
                <h2>Be an Organic follower</h2>
                <p>Meet Contour Cube your best-kept beauty secret.</p>
            </div>
            <div class="aso-right">
                <div class="aso-right-child">
                    <a href="https://www.tiktok.com/@roots_organics" target="_blank"><img src="https://rootsorganic.com.au/wp-content/uploads/2024/08/TikTok_logo.svg-1.png" alt="aso1"></a>
                    <a href="https://www.facebook.com/RootsOrganicau" target="_blank"><img src="https://rootsorganic.com.au/wp-content/uploads/2024/08/360_F_397131735_ZOCOzYOAhqgF02Za-4.png" alt="aso2"></a>
                    <a href="https://www.instagram.com/roots_organic_au/" target="_blank"><img src="https://rootsorganic.com.au/wp-content/uploads/2024/08/360_F_397131735_ZOCOzYOAhqgF02Za-5.png" alt="aso3"></a>
                </div>
            </div>
        </div>
    </div>
<!-- as seen on section end -->
<!-- sfyn-choose-organic section start -->
<div class="sfyn-choose-organic sfyn-change-bg sfyn-same-padding">
    <div class="sfyn-custom-container">
        <!-- Static Heading -->
        <h2 class="sfyn-section-heading sfyn-text-align-center">Why Choose Organic?</h2>
        
        <div class="sfyn-grid-3fr sfyn-gap-20px">
            
            <!-- Left Benefits Section -->
            <div class="sfyn-choose-benefits sfyn-left-benefits sfyn-gap-10px">
                <div class="sfyn-healthier-benefits sfyn-gap-20px">
                    <div class="sfyn-icon-wrapper">
                        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-78.png" alt="Benefit 1" class="sfyn-icon-img">
                    </div>
                    <div class="sfyn-icon-content">
                        <h3>Boosts Health</h3>
                    </div>
                </div>
                <div class="sfyn-healthier-benefits sfyn-gap-20px">
                    <div class="sfyn-icon-wrapper">
                        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-79.png" alt="Benefit 2" class="sfyn-icon-img">
                    </div>
                    <div class="sfyn-icon-content">
                        <h3>Protects Environment</h3>
                    </div>
                </div>
                <div class="sfyn-healthier-benefits sfyn-gap-20px">
                    <div class="sfyn-icon-wrapper">
                        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-78.png" alt="Benefit 3" class="sfyn-icon-img">
                    </div>
                    <div class="sfyn-icon-content">
                        <h3>Supports Local Farmers</h3>
                    </div>
                </div>
            </div>
            
            <!-- Image Section -->
            <div class="sfyn-media-col">
                <div class="sfyn-img-wrapper">
                    <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/3pngnew-1536x1233-1.png" alt="Organic Farming">
                </div>
            </div>
            
            <!-- Right Benefits Section -->
            <div class="sfyn-choose-benefits sfyn-right-benefits sfyn-gap-10px">
                <div class="sfyn-healthier-benefits sfyn-gap-20px">
                    <div class="sfyn-icon-wrapper">
                        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-76.png" alt="Benefit 4" class="sfyn-icon-img">
                    </div>
                    <div class="sfyn-icon-content">
                        <h3>Rich in Nutrients</h3>
                    </div>
                </div>
                <div class="sfyn-healthier-benefits sfyn-gap-20px">
                    <div class="sfyn-icon-wrapper">
                        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-77.png" alt="Benefit 5" class="sfyn-icon-img">
                    </div>
                    <div class="sfyn-icon-content">
                        <h3>No Harmful Chemicals</h3>
                    </div>
                </div>
                <div class="sfyn-healthier-benefits sfyn-gap-20px">
                    <div class="sfyn-icon-wrapper">
                        <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-76.png" alt="Benefit 6" class="sfyn-icon-img">
                    </div>
                    <div class="sfyn-icon-content">
                        <h3>Better for the Soil</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Static Button Link -->
        <a href="https://rootsorganic.com.au/categories/" class="sfyn-same-btn sfyn-mt-24px sfyn-btn-center">
            Explore the Benefits of Organic
            <div class="sfyn-btn-arrow">
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                </svg>
            </div>
        </a>
    </div>
</div>
<!-- sfyn-choose-organic section end -->
<!-- sfyn-trust-badges section start -->
<div class="sfyn-trust-badges sfyn-same-padding">
    <div class="sfyn-custom-container">
        <div class="sfyn-grid-4fr sfyn-gap-20px">
            
            <!-- Static Badge 1 -->
            <div class="sfyn-badge-item">
                <div class="sfyn-badge-img-wrapper">
                    <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/image-3-1.png" alt="Badge 1">
                </div>
            </div>

            <!-- Static Badge 2 -->
            <div class="sfyn-badge-item">
                <div class="sfyn-badge-img-wrapper">
                    <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/icons2-1.png" alt="Badge 2">
                </div>
            </div>

            <!-- Static Badge 3 -->
            <div class="sfyn-badge-item">
                <div class="sfyn-badge-img-wrapper">
                    <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/icon-1-1.png" alt="Badge 3">
                </div>
            </div>

            <!-- Static Badge 4 -->
            <div class="sfyn-badge-item">
                <div class="sfyn-badge-img-wrapper">
                    <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/image-9.png" alt="Badge 4">
                </div>
            </div>
            
        </div>
    </div>
</div>


<!-- sfyn-trust-badges section end -->
<!-- dotw section start -->
<div class="sfyn-dotw">
    <div class="sfyn-custom-container">
        <div class="sfyn-dotw-grid sfyn-gap-20px">
            <div class="sfyn-deal-ingo-block" style="background-image: url('https://rootsorganic.com.au/wp-content/uploads/2024/04/Layer-593.png'); background-size: cover; color: white;">
                <div class="sfyn-deal-ingo-block-inner">
                    <p class="sfyn-subheading sfyn-text-align-center" style="color: #e7e7e7">Special Deals of the Week</p>
                    <h2 class="sfyn-mt-10px sfyn-text-align-center" style="color: #fff">Don't Miss Out on These Offers!</h2>
                    <a href="https://rootsorganic.com.au/categories/" class="sfyn-same-btn sfyn-mt-24px sfyn-btn-center" style="color: white; border-color: white;">Shop Now
                        <div class="sfyn-btn-arrow">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="sfyn-dotw-prd">
                <div class="sfyn-prd-cards">
                    <?php echo do_shortcode("[wpte_product_layout id=2]"); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- dotw section end -->
<!-- sfyn-organic-passion section start -->
<div class="sfyn-organic-passion sfyn-same-padding">
    <div class="sfyn-custom-container">
        <div class="sfyn-grid-2fr sfyn-gap-20px">
            <div class="sfyn-content-col">
                <h2 class="sfyn-section-heading">Our Organic Passion</h2>
                <div class="sfyn-section-text sfyn-mt-24px">
                    We are dedicated to promoting a healthier lifestyle through organic and sustainable practices. Join us in supporting a better tomorrow with our premium organic products.
                </div>
                <a href="https://rootsorganic.com.au/categories/" class="sfyn-same-btn sfyn-mt-24px">
                    Discover More
                    <div class="sfyn-btn-arrow">
                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="sfyn-media-col">
                <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/cardimage2.png" alt="Organic Products">
            </div>
        </div>
    </div>
</div>

<!-- sfyn-organic-passion section end -->
<!-- sfyn-frienly-store section start -->
<div class="sfyn-frienly-store" style="background-image: url('https://rootsorganic.com.au/wp-content/uploads/2024/04/BG-1.png')">
    <div class="sfyn-custom-container">
        <div class="sfyn-flex-2fr sfyn-gap-20px" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="sfyn-content-col">
                <div class="sfyn-content-w">
                    <h2 class="sfyn-section-heading">We make Healthier You!</h2>
                    <div class="sfyn-section-text sfyn-mt-24px">
                        Discover the finest selection of organic lentils and spices, carefully sourced to bring you the best of nature’s goodness!
                    </div>
                </div>
            </div>
            <div class="sfyn-media-col">
                <div class="sfyn-friendly-slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-indicators">
                        <!-- Manually added indicators for 3 slides -->
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                      <div class="carousel-inner sfyn-b-slider">
                        <!-- First Slide -->
                        <div class="carousel-item active">
                          <div class="row">
                            <div class="col-6 d-flex justify-content-evenly">
                              <div class="sfyn-friendly-badge">
                                <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-66-1.png" class="d-block" alt="Image 1">
                              </div>
                            </div>
                            <div class="col-6 d-flex justify-content-evenly">
                              <div class="sfyn-friendly-badge">
                                <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-68.png" class="d-block" alt="Image 2">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Second Slide -->
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-6 d-flex justify-content-evenly">
                              <div class="sfyn-friendly-badge">
                                <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-67.png" class="d-block" alt="Image 3">
                              </div>
                            </div>
                            <div class="col-6 d-flex justify-content-evenly">
                              <div class="sfyn-friendly-badge">
                                <img src="https://rootsorganic.com.au/wp-content/uploads/2024/04/Group-66.png" class="d-block" alt="Image 4">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- sfyn-frienly-store section end -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
