@extends('web.includes.layout')
@section('title', 'Home')

@section('content')

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Blog Sidebar-->
            <div><h1>My Bookings</h1></div>
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="our-shop">

                    <div class="row">

                        <!-- Shop Item -->
                        {{-- @foreach($events as $event) --}}

                        <div class="single-product-item col-lg-4 col-md-6 col-sm-12 text-center">
                            <div class="img-holder">
                                <a href="shop-detail.html"><img width="270" height="300" src="images/resource/products/1.jpg" class="" alt=""></a>
                            </div>
                            <div class="title-holder text-center">
                                <div class="static-content">
                                    <h3 class="title text-center"><a href="shop-detail.html"></a></h3>
                                    <h3 class="title text-center"><a href="shop-detail.html"></a></h3>
                                    <h3 class="title text-center"><a href="shop-detail.html"></a></h3>
                                    <span class="price"><span class="amount"><span class="">$</span></span></span>
                                </div>
                                <div class="overlay-content">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="shopping-cart.html"><span class="fa fa-shopping-cart"></span>
                                                <div class="toltip-content">
                                                    <p>Add to Cart</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-detail.html" class=""><span class="fa fa-heart"></span>
                                                <div class="toltip-content">
                                                    <p>Add Whishlist</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="images/resource/products/1.jpg" class="lightbox-image" data-fancybox="shop-gallery"><span class="fa fa-expand"></span>
                                                <div class="toltip-content">
                                                    <p>Zoom In</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}



                    </div>


        </div>
    </div>
</div>
@endsection
