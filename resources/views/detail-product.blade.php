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
                                    <form action="{{url('order-product')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
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
                                        <input type="hidden" name="product" value="{{$product->name}}">
                                        <input type="hidden" name="prices" value="{{$product->price}}">
                                        <button class="btn btn-success" type="submit" >أطلب الان</button>
                                    </form>
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