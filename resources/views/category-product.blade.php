@extends('layouts.front')
@section('content')
           

            <!-- PRODUCTS -->
            <div class="container padding40">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-sub heading-sub2 text-center">
                            <h5><span>منتجات جديدة</span></h5>
                            <p>اكتشفوا منتجات الأجواد الجديدة الطبيعية ذات الجودة العالية</p>
                        </div>
                        <div class="product-carousel3">
                            @foreach($products as $product)
                            <form action="{{url('order-product')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                            <div class="pc-wrap">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <span class="badge new">الجديد</span>
                                        <img src="{{asset('storage/'.$product->photo)}}" class="img-responsive" alt=""/>
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                            <a href="#" class="likeitem fa fa-heart-o"></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="{{url('detail-product/'.$product->id)}}">{{$product->name}}</a></h4>
                                        <span class="product-price"> <b>  {{$product->price}} دج </b>   </span>
                                        <input type="hidden" name="product" value="{{$product->name}}">
                                        <input type="hidden" name="prices" value="{{$product->price}}">
                                        <button class="btn btn-success" type="submit" >أطلب الان</button>
                                        
                                    </div>
                                </div>
                            </div>
                            </form>
                            @endforeach
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
                                <h4 style="font-family: font-family: 'Cairo', sans-serif!important;">تخلص كي توصلك السلعة<span>إشتري بكل ثقة وأمان</span></h4>
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
                                <i  class="fa fa-plane"></i>
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