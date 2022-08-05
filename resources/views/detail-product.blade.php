@extends('layouts.front')
@section('content')
    
<div class="space10"></div>
            <!-- MAIN CONTENT -->
            <div class="shop-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">                                    
                                    <div class="owl-carousel prod-slider sync1">
                                        <div class="item"> 
                                            <img src="{{asset('storage/'.$product->photo)}}" alt="">
                                           
                                        </div>
                                     </div>

                                    
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="product-single">
                                        <div class="ps-header">
                                          
                                            <h3>{{$product->name}}</h3>
                                            <div class="ratings-wrap">
                                                <div class="ratings">
                                                    <span class="act fa fa-star"></span>
                                                    <span class="act fa fa-star"></span>
                                                    <span class="act fa fa-star"></span>
                                                    <span class="act fa fa-star"></span>
                                                    <span class="act fa fa-star"></span>
                                                </div>
                                            </div>
                                            <div class="ps-price">  {{$product->price}} دج </div>
                                        </div>
                                        {!! $product->description !!}
                                     
                                       
                                        <div class="space10"></div>
                                        <a class="addtobag" href="{{ route('order.to.cart', $product->id) }}" style="font-family: 'Cairo', sans-serif; font-size:18px;">أطلب الان</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix space20"></div>
            <div class="clearfix space20"></div>
            <div class="clearfix space20"></div>
@endsection