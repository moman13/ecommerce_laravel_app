@extends('layout.app')

   <!-- Content Wrapper. Contains page content -->
 @section('title', 'الصفحة الرئيسية')
 @section('content')
<!-- End header section -->
<div class="animate_body">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
</div>

<!-- <div class="homeIntro">
    <div class="slider-xs-navBar owl-carousel owl-theme">
        <div class="item">
            <div class="thump">
                <img src="assets/images/silder.jpg" alt="" srcset="">
            </div>
            <div class="container">
                <div class="caption">

                    <div class="col-md-12 xs-banner-content">
                        <h2 class="xs-banner-sub-title">We introduced</h2>
                        <h3 class="organic-info-title">International Foods</h3>
                        <p class="xs-mb-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci alias
                            beatae cum, dicta dolores earum eligendi eos harum ipsum obcaecati placeat praesentium quibusdam
                            suscipit vel veniam veritatis! Iusto, tenetur!</p>
                        <div class="xs-btn-wraper justify-content-start">
                            <a href="#" class="btn btn-outline-success badge badge-pill">LEARN MORE</a>
                            <a href="#" class="btn btn-secondary badge badge-pill">GO SHOP</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="item">
            <div class="thump">
                <img src="assets/images/silder2.jpg" alt="" srcset="">
            </div>
            <div class="container">
                <div class="caption">
                    <div class="col-md-12 xs-banner-content">
                        <h2 class="xs-banner-sub-title">We introduced</h2>
                        <h3 class="organic-info-title">International Foods</h3>
                        <p class="xs-mb-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci alias
                            beatae cum, dicta dolores earum eligendi eos harum ipsum obcaecati placeat praesentium quibusdam
                            suscipit vel veniam veritatis! Iusto, tenetur!</p>
                        <div class="xs-btn-wraper justify-content-start">
                            <a href="#" class="btn btn-outline-success badge badge-pill">LEARN MORE</a>
                            <a href="#" class="btn btn-secondary badge badge-pill">GO SHOP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<svg id="icons" xmlns="http://www.w3.org/2000/svg">
    <symbol id="icon-arrow" viewBox="0 0 476.213 476.213" >
    <polygon fill="inherit" points="347.5,324.393 253.353,418.541 253.353,0 223.353,0 223.353,419.033 128.713,324.393 107.5,345.607
        238.107,476.213 368.713,345.606 "/>
    </symbol>
    </svg>


    <div class="slider-content">



      <div class="number-wrapper">
        <div class="number-count">
          <div class="number"></div>
        </div>
      </div>

      <div class="nav-wrapper">
        <div class="nav-arrows">
          <div class="nav-up">
               <svg id="arrow-up">
                <use xlink:href="#icon-arrow"></use>
              </svg>
           </div>
          <div class="nav-line"></div>
          <div class="nav-down">
             <svg id="arrow-down">
                <use xlink:href="#icon-arrow"></use>
              </svg>
          </div>
        </div>
      </div>

      <div class="slider-wrapper">
        <div class="slider-container">
          <div class="slide active" data-order="1">
              <div class="slide-content txt">
                <div class="txt-wrapper">
                    <h2>Photo food</h2>
                    <p class="excerpt">This text is an example of text that can be replaced in the same space </p>
                    <a href="eventsDetails.html" class="btn btn-secondary badge badge-pill">View</a>
                </div>
              </div>
              <div class="slide-content img">
                <img src="assets/images/bb.jpg" alt="" />
              </div>
            </div>
          <div class="slide" data-order="2">
              <div class="slide-content txt">
                <div class="txt-wrapper">
                    <h2>Photo food</h2>
                    <p class="excerpt">This text is an example of text that can be replaced in the same space </p>
                    <a href="eventsDetails.html" class="btn btn-secondary badge badge-pill">View</a>
                </div>
              </div>
              <div class="slide-content img">
                <img src="assets/images/bb1.jpg" alt="" />
              </div>
            </div>
          <div class="slide " data-order="3">
              <div class="slide-content txt">
                <div class="txt-wrapper">
                  <ul>

                    <li>

                      <div class="post-wrapper">
                        <div class="post-title"><a href="">Inspiration for fashion for Logan's designer</a></div>
                        <div class="post-info">
                                <h2>Photo food</h2>
                                <p class="excerpt">This text is an example of text that can be replaced in the same space </p>
                                <a href="eventsDetails.html" class="btn btn-secondary badge badge-pill">View</a>
                        </div>
                      </div>
                    </li>

                  </ul>

                </div>
              </div>
              <div class="slide-content img">
                <img src="assets/images/bb2.jpg" alt="" />
              </div>
            </div>
          <div class="slide " data-order="4">
              <div class="slide-content txt">
                <div class="txt-wrapper">
                    <h2>Photo food</h2>
                    <p class="excerpt">This text is an example of text that can be replaced in the same space </p>
                    <a href="eventsDetails.html" class="btn btn-secondary badge badge-pill">View</a>
                </div>
              </div>
              <div class="slide-content img">
                <img src="assets/images/bb.jpg" alt="" />
              </div>
            </div>
          <div class="slide " data-order="5">
              <div class="slide-content txt">
                <div class="txt-wrapper">
                    <h2>Photo food</h2>
                    <p class="excerpt">This text is an example of text that can be replaced in the same space </p>
                    <a href="eventsDetails.html" class="btn btn-secondary badge badge-pill">View</a>
                </div>
              </div>
              <div class="slide-content img">
                <img src="assets/images/bb2.jpg" alt="" />
              </div>
            </div>
        </div>
      </div>

    </div>



<!-- End banner section -->
<div class="xs-section-padding wow fadeInUp animated"data-wow-duration=".8s" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="xs-content-header">
                    <h2 class="xs-content-title"><span class="color-secondary">Product</h2>
                    <ul class="nav nav-tabs xs-nav-tab version-red" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="organic-hurryUp-hSale-tab" data-toggle="tab" href="#organic-hurryUp-hSale" role="tab" aria-controls="organic-hurryUp-hSale" aria-selected="true">Hot Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="organic-hurryUp-trend-tab" data-toggle="tab" href="#organic-hurryUp-trend" role="tab" aria-controls="organic-hurryUp-trend" aria-selected="false">Trending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="organic-hurryUp-offer-tab" data-toggle="tab" href="#organic-hurryUp-offer" role="tab" aria-controls="organic-hurryUp-offer" aria-selected="false">Offer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="organic-hurryUp-lowest-tab" data-toggle="tab" href="#organic-hurryUp-lowest" role="tab" aria-controls="organic-hurryUp-lowest" aria-selected="false">Lowest</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="organic-hurryUp-hSale" role="tabpanel" aria-labelledby="organic-hurryUp-hSale-tab">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" class="product_img_width" data-echo="assets/images/vegetables/cabbage_1.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Red Apple</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $223.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/organic_fruits/fruit_2.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Organic Cherry</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $100.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/cowliflower.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Strawbery</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $670.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_orange_2.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Orrange</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $120.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/organic_fruits/fruit_5.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Watermelon</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $123.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/beet.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Pineapple</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $333.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_10.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Lychee</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $445.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_11.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Mango</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $223.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                        </div>
                    </div><!-- #organic-hurryUp-hSale END -->
                    <div class="tab-pane fade show" id="organic-hurryUp-trend" role="tabpanel" aria-labelledby="organic-hurryUp-trend-tab">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/organic_fruits/fruit_5.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Watermelon</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $123.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/beet.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Pineapple</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $333.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_10.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Lychee</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $445.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_11.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Mango</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $223.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/cabbage_1.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Red Apple</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $223.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/organic_fruits/fruit_2.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Organic Cherry</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $100.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/cowliflower.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Strawbery</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $670.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_orange_2.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Orrange</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $120.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                        </div>
                    </div><!-- #organic-hurryUp-trend END -->
                    <div class="tab-pane fade show" id="organic-hurryUp-offer" role="tabpanel" aria-labelledby="organic-hurryUp-offer-tab">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/cabbage_1.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Red Apple</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $223.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/organic_fruits/fruit_2.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Organic Cherry</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $100.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/cowliflower.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Strawbery</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $670.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_orange_2.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Orrange</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $120.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/organic_fruits/fruit_5.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Watermelon</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $123.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/beet.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="#">Pineapple</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $333.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_10.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="#">Lychee</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $445.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_11.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="#">Mango</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $223.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                        </div>
                    </div><!-- #organic-hurryUp-offer END -->
                    <div class="tab-pane fade show" id="organic-hurryUp-lowest" role="tabpanel" aria-labelledby="organic-hurryUp-lowest">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/organic_fruits/fruit_5.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="#">Watermelon</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $123.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/beet.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="#">Pineapple</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $333.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_10.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="#">Lychee</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $445.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_11.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Mango</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $223.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/cabbage_1.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Red Apple</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $223.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/organic_fruits/fruit_2.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Organic Cherry</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $100.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/vegetables/cowliflower.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Strawbery</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $670.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="product-details.html" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="xs-organic-product-thumb">
                                    <div class="xs-product-header">
                                        <span class="star-rating"></span>
                                    </div><!-- .xs-product-header END -->
                                    <ul class="product-item-meta meta-style-2">
                                        <li><a href="#" data-toggle="modal" data-target=".xs-quick-view-modal"><i class="icon icon-medical2"></i></a></li>
                                        <li><a href="#"><i class="icon icon-heart"></i></a></li>
                                    </ul><!-- .product-item-meta END -->
                                    <div class="product-thumb">
                                        <img src="assets/images/image_loader.gif" data-echo="assets/images/juices/juice_orange_2.png" alt="Organic">
                                    </div><!-- .product-thumb END -->
                                    <h4 class="product-title medium">
                                        <a href="product-details.html">Orrange</a>
                                    </h4><!-- .product-title .medium END -->
                                    <div class="content-box">
                                        <span class="price">
                                            $120.00
                                            <small>1/KG</small>
                                        </span>
                                    </div><!-- .content-box END -->
                                    <div class="hover-box">
                                        <a href="#" class="icon-left btn-cart">
                                            <i class="icon icon-shopping-cart"></i>
                                            Add To Cart
                                        </a>
                                    </div><!-- .hover-box END -->
                                </div><!-- .xs-organic-product-thumb END -->
                            </div>
                        </div>
                    </div><!-- #organic-hurryUp-lowest END -->
                </div>
            </div>
        </div>
    </div><!-- .container END -->
</div><!-- end organic hurry up deals section -->

<!-- End deal of the day section -->
<div class="xs-banner wow fadeInUp animated"data-wow-duration=".8s" data-wow-delay="1s">
    <div class="xs-banner-slider owl-carousel">
        <div class="xs-banner-item" style="background-image:url('assets/images/ss2.jpg')">
            <div class="container">

                <div class="xs-banner-content">
                    <h2 class="organic-info-subtitle animInTop">Entire Big Collection</h2>
                    <h3 class="xs-banner-title animInBottom">SHOP WISE WITH PRICE COMPARISONS</h3>
                    <div class="xs-btn-wraper">
                        <a href="product-details.html" class="btn btn-outline-primary animInLeft">More</a>
                    </div>
                </div>

            </div><!-- .row END -->
        </div><!-- .container END -->

        <div class="xs-banner-item" style="background-image:url('assets/images/ss1.jpg')">
            <div class="container">

                <div class="xs-banner-content">
                    <h2 class="organic-info-subtitle animInTop">Entire Big Collection</h2>
                    <h3 class="xs-banner-title animInBottom">SHOP WISE WITH PRICE COMPARISONS</h3>
                    <div class="xs-btn-wraper">
                        <a href="product-details.html" class="btn btn-outline-primary animInLeft">More</a>
                    </div>
                </div>
            </div><!-- .container END -->
        </div>
    </div>
</div><!-- End banner section -->

<!-- Modal -->



<!--<div class="xs-modal xs-quick-view-modal modal fade" tabindex="-1" role="dialog" aria-hidden="true">-->
    <!--<div class="modal-dialog" role="document">-->
        <!--<div class="modal-content">-->
            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--<span class="icon icon-cross"></span>-->
            <!--</button>-->
            <!--<div class="container">-->
                <!--<div class="row">-->
                    <!--<div class="col-md-6">-->
                        <!--<div class="images">-->
                            <!--<img src="assets/images/lenovo-yoga-720-15-png-01.png" alt="Product">-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                        <!--<div class="summary-content entry-summary">-->
                            <!--<h3 class="entry-title">Hitech Innovations</h3>-->
                            <!--<h4 class="product-title">Zboom 27-inch with Retina 5K display</h4>-->
                            <!--<p>Choose the colour that best reflects your personality and it will become your best-->
                                <!--companion during your everyday activities.</p>-->
                            <!--<span class="star-rating color-green">-->
                                <!--<span class="value">(200 Customers review)</span>-->
                            <!--</span>-->
                            <!--<span class="price highlight">-->
                                <!--<del>$590.00</del>-->
                                <!--$370.00-->
                            <!--</span>-->
                            <!--<div class="xs-add-to-chart-form row">-->
                                <!--<div class="col-md-8">-->
                                    <!--<form action="#">-->
                                        <!--<div class="w-quantity quantity xs_input_number">-->
                                            <!--<input type="number" min="1" max="100" value="1"/>-->
                                        <!--</div>-->
                                        <!--<div class="w-quantity-btn">-->
                                            <!--<input type="hidden" name="add-to-cart" value="605">-->
                                            <!--<button type="submit" class="single_add_to_cart_button btn btn-primary">-->
                                                <!--Add To Cart-->
                                            <!--</button>-->
                                        <!--</div>-->
                                        <!--<div class="clearfix"></div>-->
                                    <!--</form>-->
                                <!--</div>-->
                                <!--<div class="col-md-2">-->
                                    <!--<a href="#" class="xs-wishlist-and-compare"><i class="fa fa-heart"-->
                                                                                   <!--aria-hidden="true"></i></a>-->
                                <!--</div>-->
                                <!--<div class="col-md-2">-->
                                    <!--<a href="#" class="xs-wishlist-and-compare"><i class="icon icon-shuffle-arrow"-->
                                                                                   <!--aria-hidden="true"></i></a>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<ul class="xs-social-list">-->
                                <!--<li class="xs-list-text">Follow Us</li>-->
                                <!--<li><a href="#"><i class="icon icon-facebook"></i></a></li>-->
                                <!--<li><a href="#"><i class="icon icon-twitter"></i></a></li>-->
                                <!--<li><a href="#"><i class="icon icon-pinterest"></i></a></li>-->
                                <!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->



<!-- end quickView --><!-- End organic product section -->

<!-- organic product thumb section -->
<section class="xs-section-padding-bottom xs-section-padding-top  wow fadeInUp animated"data-wow-duration=".8s" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="product-details.html" class="xs-organic-product-widget media"style="background-image: url('assets/images/cv.jpg');    background-repeat: no-repeat;">

                    <div class="media-body organic-widget-content">
                        <h4>Foule </h4>
                        <h5>Muddamas (Fava Beans)</h5>
                    </div>
                </a><!--.xs-organic-product-widget END  -->
            </div>
            <div class="col-lg-6">
                <a href="product-details.html" class="xs-organic-product-widget red-version media"style="background-image: url('assets/images/cvv.jpg');    background-repeat: no-repeat;">

                    <div class="media-body organic-widget-content">
                        <h4>Hummos </h4>
                        <h5>Tahini Chick Pea Dip</h5>
                    </div>
                </a><!--.xs-organic-product-widget END  -->
            </div>
        </div><!-- .row END -->
        <a href="#" class="xs-organic-widget-highlight"
           style="background-image: url('assets/images/baner.jpg')">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="organic-widget-content">
                        <h4>Giardiniera</h4>
                        <h5> Mediterranean Peppers Mix</h5>

                    </div><!-- .organic-widget-content END -->
                </div>
            </div><!-- .row END -->
        </a><!--.xs-organic-product-widget END  -->
    </div><!-- .container END -->
</section>
<!-- End organic product thumb section -->


<section class="brand-section pb-5 wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="organic-info-title text-center">
                    Brands of Substance
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="xs-tab-slider owl-carousel owl-theme">
                    <div class="xs-tab-slider-item">
                        <div class="xs-product-widget media">
                            <img class="d-flex" src="assets/images/image_loader.gif" data-echo="assets/images/brand1.png" alt="Mobile">
                        </div><!-- .xs-product-widget END -->
                    </div><!-- .xs-tab-slider-item END -->
                    <div class="xs-tab-slider-item">
                        <div class="xs-product-widget media">
                            <img class="d-flex" src="assets/images/image_loader.gif" data-echo="assets/images/brand.png" alt="Mobile">

                        </div><!-- .xs-product-widget END -->
                    </div><!-- .xs-tab-slider-item END -->
                    <div class="xs-tab-slider-item">

                        <div class="xs-product-widget media">
                            <img class="d-flex" src="assets/images/image_loader.gif" data-echo="assets/images/brand1.png" alt="Mobile">
                        </div><!-- .xs-product-widget END -->

                    </div><!-- .xs-tab-slider-item END -->
                    <div class="xs-tab-slider-item">

                        <div class="xs-product-widget media">
                            <img class="d-flex" src="assets/images/image_loader.gif" data-echo="assets/images/brand1.png" alt="Mobile">
                        </div><!-- .xs-product-widget END -->

                    </div><!-- .xs-tab-slider-item END -->

                </div><!-- .xs-tab-slider END -->
            </div>
        </div>
    </div>
</section>

<!-- newsLetter section -->
<div class="xs-newsLetter-section version-gradient  wow fadeInUp animated" data-wow-duration=".8s" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="media newsletter-content">
                    <i class="d-flex mr-3 align-self-center icon icon-email"></i>
                    <div class="media-body">
                        <h4 class="newsletter-title">Newsletter & Get Updates</h4>
                        <p>Sign up for our newsletter to get up-to-date from us</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="#" method="POST" class="xs-newsletter newsLetter-v2">
                    <label for="xs-newsletter-email"></label>
                    <input type="email" name="email" id="xs-newsletter-email" placeholder="Enter your email....">
                    <input type="submit" value="subscribe">
                </form><!-- .xs-newsletter END-->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</div><!-- end newsLetter section -->

@stop
