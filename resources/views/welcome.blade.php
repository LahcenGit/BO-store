@extends('layouts.home')
@section('content')
            <!-- SLIDER -->
            <div class="slider-wrap">
                <div class="tp-banner-container">
                    <div class="tp-banner slider-4">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-transition="fade" data-slotamount="2" data-masterspeed="500" data-thumb="homeslider_thumb1.jpg"  data-saveperformance="on"  data-title="Intro Slide">
                                
                                <img src="{{asset('Template/images/dummy.png')}}"  alt="slidebg1" data-lazyload="{{asset('Template/images/slider-bo.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                             
    
                            </li>
                            <li data-transition="fade" data-slotamount="2" data-masterspeed="500" data-thumb="homeslider_thumb1.jpg"  data-saveperformance="on"  data-title="Intro Slide">
                                <!-- MAIN IMAGE -->
                                <img src="images/dummy.png"  alt="slidebg1" data-lazyload="{{asset('Template/images/slider-bo.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                             
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>

            <div class="space10"></div>

          

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
                            <div class="pc-wrap" style="background-color: rgba(234,234,234,0.34); margin:2px; padding-top:20px;">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <span class="badge new">متوفر</span>
                                        <a href="{{url('/detail-product/'.$product->id)}}"> <img src="{{asset('storage/'.$product->photo)}}" class="img-responsive" alt=""/> </a>
                                    </div>
                                    <div class="product-info">
                                    <form action="{{url('order-product')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <h4 class="product-title"><a href="{{url('detail-product/'.$product->id)}}">{{$product->name}}</a></h4>
                                        <h4 class="product-price" style="font-weight: 700; color:#D6644A;"> {{number_format($product->price, 2)}} دج </h4>
                                        <input type="hidden" name="product" value="{{$product->name}}">
                                        <input type="hidden" name="prices" value="{{$product->price}}">
                                        <button class="btn btn-success" type="submit" > أطلب الان</button>
                                        <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-danger" style="background-color: #D6644A;
                                            border-color: #D6644A; ">اضافة لسلة التسوق</a>
                                    </form> 
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>

              <!-- BLOCK -->
              <div class="f-categories">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="block-content">
                                        <a href="#"><img src="{{asset('Template/images/blocks/blok-huile.png')}}" class="img-responsive" alt=""/></a>
                                        <div class="text-style3">
                                            <!-- طبيعي بالكامل -->  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block-content">
                                        <a href="#"><img src="{{asset('Template/images/blocks/blok-epice.png')}}" class="img-responsive" alt=""/></a>
                                        <div class="text-style4">
                                            <h4>اكتشفوا</h4>
                                            <p>مجموعة التوابل الخاصة</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="block-content">
                                        <a href="#"><img src="{{asset('Template/images/blocks/blok-herbe.png')}}" class="img-responsive" alt=""/></a>
                                        <div class="text-style2">
                                            <h6>أعشاب </h6>
                                            <p>طبيعية بالكامل</p>
                                            <a href="#">تسوق الان</a>
                                        </div>
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
                                <h4 >تخلص كي توصلك السلعة</h4>
                                <h6>إشتري بكل ثقة وأمان</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pi-wrap text-center">
                                <i class="fa fa-life-ring"></i>
                                <h4>خدمة زبائن VIP</h4>
                                <h6>من 9 صباحاً إلى 8 مساءاً</h6>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="pi-wrap text-center">
                                <i class="fa fa-clock-o"></i>
                                <h4>توصيل سريع من 3/1 أيام</h4>
                                <h6>خطوات سهلة وبسيطة</h6>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="pi-wrap text-center">
                                <i  class="fas fa-exchange"></i>
                                <h4>إستبدال وإسترجاع مجاني</h4>
                                <h6>حقك 100% مضمون معنا!</h6>
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