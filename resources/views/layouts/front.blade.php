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

        <title>توابل الأجواد</title>

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
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('icon-bo.png')}}">
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

        .ps-price {
        font-size: 23px;
        color: #333;
        font-weight: 600;
        font-family: 'Cairo', sans-serif;
        margin: 0 0 10px;
        }

        .product-single h3 {
            font-size: 23px;
        color: #333;
        font-weight: 600;
        font-family: 'Cairo', sans-serif;
        }

        .bcrumbs {
        background: #f0f0f0;
        padding: 20px 0;
        margin-bottom: 45px;
        }
        .navbar > .container .navbar-brand {
        margin-left: 0px;
        margin-right: 0;
        margin-top: -30px;
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
<<<<<<< Updated upstream
                                <a class="navbar-brand" href="#"><img src="{{asset('Template/images/basic/logo-bo.png')}}" class="img-responsive" style="height: 100px!important;" alt=""/></a>
=======
                                <a class="navbar-brand" href="{{asset('/')}}"><img src="{{asset('Template/images/basic/logo-bo.png')}}" class="img-responsive" style="height: 100px!important;" alt=""/></a>
>>>>>>> Stashed changes
                            </div>

                            <!-- Cart & Search -->
                            <div class="header-xtra pull-right">
                                <div class="topcart">
                                    <span>{{ count((array) session('cart')) }}<i class="fa fa-shopping-cart"></i></span>
                                        @php $total = 0 @endphp
                                        @foreach((array) session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                        @endforeach
                                        <form action="{{url('order-products-cart')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                    <div class="cart-info">
                                        <small>لديك <em class="highlight">{{ count((array) session('cart')) }}</em>  منتجات في حقيبة التسوق الخاصة بك  </small>
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)  
                                        <div class="ci-item">
                                            <img src="{{asset('storage/'.$details['image'])}}" width="80" alt=""/>
                                            <div class="ci-item-info">
                                                <h5><a href="./single-product.html">{{$details['name']}}</a></h5>
                                                <p> {{$details['price']}}دج  * {{$details['quantity']}}  </p>
                                               
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{$details['name']}}" name="products[]">
                                        <input type="hidden" value="{{$details['quantity']}}" name="qtes[]">
                                        <input type="hidden" value="{{$details['price']}}" name="prices[]">
                                        @endforeach
                                        @endif
                                        <div class="ci-total"> المجموع {{$total}} دج</div>
                                        <input type="hidden" value="{{$total}}" name="total">
                                        <div class="cart-btn">
                                            <a href="{{url('/cart')}}">سلة التسوق</a>
                                            <button type="submit" href="{{url('/order-products-cart')}}"> checkout </a>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            <!-- Navmenu -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-left">
                                    <li class="dropdown">
                                        <a href="{{asset('/')}}" >الرئيسية</a>
                                    </li>
                                    
                                    @foreach($categories as $category)
                                    <li >
                                        <a href="{{asset('category-products/'.$category->id)}}" >{{$category->name}}</a>
                                       
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
                      
                    </ul>
                </div>
            </div>
            <div class="container">

                   @if(session('success'))
            
                    <div class="alert alert-success">
            
                      {{ session('success') }}
            
                    </div> 
            
                @endif
                @yield('content')
            
            </div>
            

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
                       
                    </div>
                </div>
            </footer>

            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                          
                            <p>Copyright 2022 &middot; Designed & Developed by <a href="#">InnoDev</a> </p>
                        </div>
                        <div class="col-md-5">
                            <img src="images/basic/payment.png" class="pull-right img-responsive payment" alt=""/>
                        </div>
                    </div>
                </div>
            </div>	

        </div>



        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>



        <!-- Javascript -->
        <script src="js/jquery.js"></script>

        <!-- ADDTHIS -->
        <script src="plugin/owl-carousel/owl.carousel.js"></script>
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
@stack('update-cart')
@stack('delete-cart')