@extends('layouts.home')
@section('content')
            <!-- SLIDER -->
            <div class="slider-wrap">
                <div class="tp-banner-container">
                    <div class="tp-banner slider-4">
                        <ul>
                            <!-- SLIDE  -->
                            <!-- SLIDE  -->
                            <li data-transition="fade" data-slotamount="2" data-masterspeed="500" data-thumb="homeslider_thumb1.jpg"  data-saveperformance="on"  data-title="Intro Slide">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('Template/images/dummy.png')}}"  alt="slidebg1" data-lazyload="{{asset('Template/images/epic.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                             
                               
                                
                            </li>
                            <li data-transition="fade" data-slotamount="2" data-masterspeed="500" data-thumb="homeslider_thumb1.jpg"  data-saveperformance="on"  data-title="Intro Slide">
                                <!-- MAIN IMAGE -->
                                <img src="images/dummy.png"  alt="slidebg1" data-lazyload="{{asset('Template/images/epic.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                             
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>

            <div class="space10"></div>

            <!-- BLOCK -->
            <div class="f-categories">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="block-content">
                                        <a href="#"><img src="{{asset('Template/images/blocks/12.jpg')}}" class="img-responsive" alt=""/></a>
                                        <div class="text-style3">
                                            <h6>Coming soon</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block-content">
                                        <a href="#"><img src="{{asset('Template/images/blocks/13.jpg')}}" class="img-responsive" alt=""/></a>
                                        <div class="text-style4">
                                            <h4>Womenswear</h4>
                                            <p>New Women in the wideworld</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="block-content">
                                        <a href="#"><img src="{{asset('Template/images/blocks/14.jpg')}}" class="img-responsive" alt=""/></a>
                                        <div class="text-style2">
                                            <h6>Leather Bag</h6>
                                            <p>Design by my passion</p>
                                            <a href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRODUCTS -->
            <div class="container padding40">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-sub heading-sub2 text-center">
                            <h5><span>منتجات مميزة</span></h5>
                            <p>Ut ut ipsum imperdiet libero viverra blandit. Aliquam ultricies libero ullamcorper, dignissim ipsum sed, placerat ante. Sed luctus, ex<br>id gravida venenatis, diam enim tristique turpis, eget dapibus velit eros sed ligula.</p>
                        </div>
                        <div class="product-carousel3">
                            <div class="pc-wrap">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <span class="badge new">الجديد</span>
                                        <img src="{{asset('Template/images/products/fashion/epice1.png')}}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="{{url('commande')}}">كسكس الأجواد</a></h4>
                                        <span class="product-price"> <em>- السعر</em>   دج1000    </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="pc-wrap">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <img src="{{asset('Template/images/products/fashion/epice2.png')}}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="{{url('commande')}}">زيت الزيتون الطبيعي</a></h4>
                                        <span class="product-price"><em>- السعر</em> دج 1000</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="pc-wrap">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        
                                        <img src="{{asset('Template/images/products/fashion/epice3.png')}}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="{{url('commande')}}">كبسولات السكر</a></h4>
                                        <span class="product-price"> <em>- السعر</em> 1000 دج </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="pc-wrap">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <span class="badge new">الجديد</span>
                                        <img src="{{asset('Template/images/products/fashion/epice1.png')}}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="{{url('commande')}}">كسكس الأجواد</a></h4>
                                        <span class="product-price"> <em>- السعر</em>   دج1000    </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="pc-wrap">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <img src="{{asset('Template/images/products/fashion/epice2.png')}}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="{{url('commande')}}">زيت الزيتون الطبيعي</a></h4>
                                        <span class="product-price"><em>- السعر</em> دج 1000</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="pc-wrap">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        
                                        <img src="{{asset('Template/images/products/fashion/epice3.png')}}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="{{url('commande')}}">كبسولات السكر</a></h4>
                                        <span class="product-price"> <em>- السعر</em> 1000 دج </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix space20"></div>

            

            <!-- POLICY -->
            <div id="policy3" class="policy-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="pi-wrap text-center">
                                <i class="fa fa-money"></i>
                                <h4>تخلص كي توصلك السلعة<span>إشتري بكل ثقة وأمان</span></h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pi-wrap text-center">
                                <i class="fa fa-life-ring"></i>
                                <h4>خدمة زبائن VIP<span>من 9 صباحاً إلى 8 مساءاً</span></h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pi-wrap text-center">
                                <i class="fa fa-clock-o"></i>
                                <h4>توصيل سريع من 3/1 أيام<span>خطوات سهلة وبسيطة</span></h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pi-wrap text-center">
                                <i  class="fa fa-solid "></i>
                                <h4>إستبدال وإسترجاع مجاني<span>حقك 100% مضمون معنا!</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <!-- CLIENTS -->
            <div class="clients">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="clients-carousel">
                                <div><a href="#"><img src="images/clients/1.png" class="img-responsive" alt=""/></a></div>
                                <div><a href="#"><img src="images/clients/2.png" class="img-responsive" alt=""/></a></div>
                                <div><a href="#"><img src="images/clients/3.png" class="img-responsive" alt=""/></a></div>
                                <div><a href="#"><img src="images/clients/4.png" class="img-responsive" alt=""/></a></div>
                                <div><a href="#"><img src="images/clients/5.png" class="img-responsive" alt=""/></a></div>
                                <div><a href="#"><img src="images/clients/6.png" class="img-responsive" alt=""/></a></div>
                                <div><a href="#"><img src="images/clients/1.png" class="img-responsive" alt=""/></a></div>
                                <div><a href="#"><img src="images/clients/2.png" class="img-responsive" alt=""/></a></div>
                                <div><a href="#"><img src="images/clients/3.png" class="img-responsive" alt=""/></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

@endsection