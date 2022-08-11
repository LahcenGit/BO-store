@extends('layouts.front')
@section('content')
        <!-- MAIN CONTENT -->
        <div class="shop-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="accordion">
                                <div class="accordion-content default">
                                    أنتم بصدد انهاء طلبكم يرجى ملئ البيانات المطلوبة لإستلام طلبيتكم
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <!-- HTML -->
                            <div id="accordion">
                                <div class="accordion-content default">
                                    <form action="{{url('/order-products')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <ul class="form-list">
                                                            <li>
                                                                <label for="login-email" class="required">الاسم <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email" placeholder="محمد " name="lastname"  type="text" required>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="login-email" class="required">الللقب <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email" placeholder="عبد الله " name="firstname"  type="text" required>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="login-email" class="required">رقم الهاتف <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email"  placeholder="00 00 00 0550" name="phone"  type="text" required>
                                                                </div>
                                                            </li>
                                                    </ul>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                <ul class="form-list">
                                                    <li>
                                                        <label  class="required">الولاية <em>*</em></label>
                                                        <select  class="form-control " id="sel1"  class="selectpicker" data-live-search="true" name="wilaya" required>
                                                                @foreach($wilayas as $wilaya)
                                                                <option  value={{$wilaya->id}}>{{$wilaya->ar_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </li>
                                                        <li>
                                                            <label class="required">العنوان الكامل <em>*</em></label>
                                                            <div class="input-box">
                                                                <input class="input-text required-entry validate-email" placeholder="رقم 00 الكيفان تلمسان" name="adresse"  type="text" required>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            @foreach($products as $product)
                                                            <input  type="hidden" name="products[]" value="{{$product}}" >
                                                            @endforeach
                                                            @foreach($qtes as $qte)
                                                                <input type="hidden"  name="qtes[]" value="{{$qte}}">
                                                            @endforeach
                                                        </li>
                                                    
                                                    </ul>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class=" col-md-6">
                                                <button class="btn btn-success mr-3" id="add-to-cart" style="font-size: 18px;"><span> إرسال الطلب </span></button>
                                            </div>
                                            </div>  
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4" style="background-color: #EFEFEF ; padding: 30px;">
                            <div class="mb-4">
                              <h3><b> تفاصيل طلبك :</b></h3>  
                            </div>
                            <div class="clearfix space30"></div>
                            <div class="row">
                                    <div class="col-md-4 mt-2">
                                        <label class="title-pack">المنتج</label><br>
                                        @foreach($products as $product)
                                            <span>- {{$product}} </span> <br>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="title-pack">الكمية</label><br>
                                        @foreach($qtes as $qte)
                                         <span>{{$qte}} </span> <br>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="title-pack">المجموع</label><br>
                                        @foreach($prices as $price)
                                         <span>{{number_format($price * $qtes[$loop->iteration-1],2)}} دج</span> <br>
                                        @endforeach
                                    </div>
                            </div>
                           {{--<div class="mt-2">
                                <b> المجموع : <span id="sub-total">{{$total}}</span>  </b>دج <br>
                            </div>--}} 
                            <div class="mt-4">
                                <div class="clearfix space30"></div>
                                <b style="font-size: 25px;"> المجموع : <span id="total">{{number_format($total,2)}}</span> دج</b> <br>
                                <div class="clearfix space10"></div>
                                <span>بمجرد التحقق من صحة طلبك ، سيتم بعد ذلك شحن الطلبية الخاصة بك حتى تتمكن من استلامها. </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
            <div class="clearfix space60"></div>
            <div class="clearfix space60"></div>
        </div>
        
          
@endsection