<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Smile | Responsive Bootstrap Ecommerce Template</title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('Template/css/font-awesome/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('Template/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('Template/css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('Template/js/vendors/isotope/isotope.css')}}">
        <link rel="stylesheet" href="{{asset('Template/js/vendors/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('Template/js/vendors/rs-plugin/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('Template/js/vendors/select/jquery.selectBoxIt.css')}}">
        <link rel="stylesheet" href="{{asset('Template/css/subscribe-better.cs')}}s">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">
        <link rel="stylesheet" href="{{asset('Template/css/style.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
    <style>
        html * {
        font-family: 'Cairo', sans-serif;
        }
    </style>
    <body>

        <!-- PRELOADER -->
        <div id="loader"></div>

        <div class="body">
            <!-- TOPBAR -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tb_left pull-left">
                                <p>مرحبا بكم في المتجر الالكتروني لتوابل الأجواد</p>
                            </div>
                            <div class="tb_center pull-left">
                                <ul>
                                    <li> قدم طلبك عبر الهاتف: <a href="#">0655258756</a><i class="fa fa-phone"></i></li>
                                   
                                </ul>
                            </div>
                            <div class="tb_right pull-right">
                                <ul>
                                    <li>
                                        <div class="tbr-info">
                                            <span>الحساب <i class="fa fa-caret-down"></i></span>
                                            <div class="tbr-inner">
                                                @if (Route::has('login'))
                                                 @auth
                                                <a href="{{url('dashboard-admin')}}">حسابي</a>
                                                @else
                                                <a href="{{ route('login') }}" >تسجيل الدخول</a>
                                                 @endauth
                                          
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HEADER -->
            <header>
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo -->
                                <a class="navbar-brand" href="./index.html"><img src="images/basic/logo.png" class="img-responsive" alt=""/></a>
                            </div>

                            <!-- Cart & Search -->
                            <div class="header-xtra pull-right">
                                <div class="topsearch">
                                    <span>
                                        <i class="fa fa-search"></i>
                                    </span>
                                    <form action="{{asset('search')}}" method="GET">
                                        @csrf
                                        <input type="text" name="keyword" placeholder="Search entire store here.">
                                       
                                    </form>
                                </div>
                            </div>

                            <!-- Navmenu -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-left">
                                    <li class="dropdown">
                                        <a href="./index.html" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">الرئيسية</a>
                                    </li>
                                    
                                    @foreach($categories as $category)
                                    <li >
                                        <a href="{{asset('category-products/'.$category->id)}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$category->name}}</a>
                                       
                                    </li>
                                    
                                    @endforeach
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>


            <!-- BREADCRUMBS -->
            <div class="bcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="#">الرئيسية</a></li>
                        <li>تقديم الطلب</li>
                    </ul>
                </div>
            </div>

            <div class="space10"></div>

            <!-- MAIN CONTENT -->
            <div class="shop-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- HTML -->
                            <div id="accordion">
                                <h4 class="accordion-toggle">لتقديم الطلب قم بملء جميع المعطيات</h4>
                                <div class="accordion-content default">
                                    <form action="{{url('/order-products')}}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                    <div>
                                        <div class="row">
                                      
                                            <div class="col-md-6">
                                                <fieldset>
                                                        <ul class="form-list">
                                                            <li>
                                                                <label for="login-email" class="required">الاسم <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email"  name="lastname"  type="text" required>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="login-email" class="required">الللقب <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email"  name="firstname"  type="text" required>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="login-email" class="required">رقم الهاتف <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email"  name="phone"  type="text" required>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                     </fieldset>
                                            
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                   <ul class="form-list">
                                                      <li>
                                                          <label for="login-email" class="required">الولاية <em>*</em></label>
                                                           <select class="form-control " id="sel1"  class="selectpicker" data-live-search="true" name="wilaya" required>
                                                            @foreach($wilayas as $wilaya)
                                                            <option value={{$wilaya->id}}>{{$wilaya->ar_name}}</option>
                                                            @endforeach
                                                            </select>
                                                            </li>
                                                            <li>
                                                                <label for="login-email" class="required">العنوان الكامل <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email"  name="adresse"  type="text" required>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="login-email" class="required"> الكمية <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email"  name="qte"  type="text" required>
                                                                </div>
                                                            </li>
                                                            <div class="single-form">
                                   
                                                                <input type="hidden"  name="product" value="{{$product->id}}">
                                                            </div>
                                                            <li>
                                                                
                                                            <div class="input-box">
                                                            <button class="btn large full-width d-f jc-c shake-x" id="add-to-cart"><span>إضغط هنا للطلب</span></button>
                                                            </div>
                                                            </li>
                                                        </ul>
                                                     </fieldset>
                                               
                                            </div>
                                       
                                        </div>
                                    </div>
                                </form>
                                </div>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="clearfix space20"></div>

            <!-- FOOTER -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 widget-footer">
                            <h5>الأجواد</h5>
                            <img src="images/basic/logo-lite.png" class="img-responsive space10" alt=""/>
                            <p>توابل الأجواد الطبيعية بالكامل</p>
                            <div class="clearfix"></div>
                            <ul class="f-social">
                                <li><a href="https://www.facebook.com" class="fa fa-facebook"></a></li>
                                <li><a href="mailto:email@website.com" class="fa fa-envelope"></a></li>
                                <li><a href="https://www.instagram.com" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-3 widget-footer">
                            <h5>الفئات</h5>
                            <ul class="widget-tags">
                                @foreach($categories as $category)
                                <li><a href="{{asset('category-products/'.$category->id)}}">{{$category->name}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="col-md-3 widget-footer">
                            <h5>Newsletter</h5>
                            <p>Sign up for our newsletter and promotions</p>
                            <form class="newsletter">
                                <input type="text" placeholder="Enter your email address here.">
                                <button type="submit">Subscribe !</button>
                            </form>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                           
                            <p>Copyright 2015 &middot; Designed & Developed by <a href="#">jThemes Studio.</a> All rights reserved</p>
                        </div>
                        <div class="col-md-5">
                            <img src="images/basic/payment.png" class="pull-right img-responsive payment" alt=""/>
                        </div>
                    </div>
                </div>
            </div>	

        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ps-slider">
                                <div class="ps-img1">
                                    <img src="images/products/single/1.jpg" alt="">
                                </div>
                                <div class="ps-img2">
                                    <img src="images/products/single/2.jpg" alt="">
                                </div>
                                <div class="ps-img3">
                                    <img src="images/products/single/3.jpg" alt="">
                                </div>
                                <div class="ps-img4">
                                    <img src="images/products/single/4.jpg" alt="">
                                </div>
                            </div>
                            <div class="ps-slider-nav">
                                <ul>
                                    <li id="ps-img1"><img src="images/products/single/1.jpg" class="img-responsive" alt=""></li>
                                    <li id="ps-img2"><img src="images/products/single/2.jpg" class="img-responsive" alt=""></li>
                                    <li id="ps-img3"><img src="images/products/single/3.jpg" class="img-responsive" alt=""></li>
                                    <li id="ps-img4"><img src="images/products/single/4.jpg" class="img-responsive" alt=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="product-single">
                                <div class="ps-header">
                                    <span class="badge offer">-50%</span>
                                    <h3>Product fashion</h3>
                                    <div class="ratings-wrap">
                                        <div class="ratings">
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                            <span class="act fa fa-star"></span>
                                        </div>
                                        <em>(6 reviews)</em>
                                    </div>
                                    <div class="ps-price"><span>$ 200.00</span> $ 99.00</div>
                                </div>

                                <div class="ps-stock">
                                    Available: <a href="#">In Stock</a>
                                </div>
                                <div class="sep"></div>
                                <div class="ps-color">
                                    <p>Color<span>*</span></p>
                                    <a class="black" href="#" onclick="return false;"></a>
                                    <a class="red" href="#" onclick="return false;"></a>
                                    <a class="yellow" href="#" onclick="return false;"></a>
                                    <a class="darkgrey" href="#" onclick="return false;"></a>
                                    <a class="litebrown" href="#" onclick="return false;"></a>
                                </div>
                                <div class="space10"></div>
                                <div class="row select-wraps">
                                    <div class="col-md-7">
                                        <p>Size<span>*</span></p>
                                        <select>
                                            <option>XL</option>
                                            <option>XXL</option>
                                            <option>XXXL</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <p>Quantity<span>*</span></p>
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="space20"></div>
                                <div class="share">
                                    <span>
                                        <a href="#" class="fa fa-heart-o" onclick="return false;"></a>
                                        <a href="#" class="fa fa-signal" onclick="return false;"></a>
                                        <a href="#" class="fa fa-envelope-o" onclick="return false;"></a>
                                    </span>
                                    <div class="addthis_native_toolbox"></div>
                                </div>
                                <div class="space20"></div>
                                <div class="sep"></div>
                                <a class="btn-color" href="#">Add to Bag</a>
                                <a class="btn-black" href="#">Go to Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>



	<!-- Javascript -->
	<script src="js/jquery.js"></script>
	
	<!-- ADDTHIS -->
	<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
	<script type="text/javascript">
		// Call this function once the rest of the document is loaded
		function loadAddThis() {
			addthis.init()
		}
	</script>
	<script src="{{asset('Template/js/jquery.js')}}"></script>
    <script src="{{asset('Template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Template/js/vendors/isotope/isotope.pkgd.js')}}"></script>
    <script src="{{asset('Template/js/vendors/slick/slick.min.js')}}"></script>
    <script src="{{asset('Template/js/vendors/tweets/tweecool.min.js')}}"></script>
    <script src="{{asset('Template/js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('Template/js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('Template/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('Template/js/jquery.subscribe-better.js')}}"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{asset('Template/js/vendors/select/jquery.selectBoxIt.min.js')}}"></script>
    <script src="{{asset('Template/js/main.js')}}"></script>


    </body>
</html>