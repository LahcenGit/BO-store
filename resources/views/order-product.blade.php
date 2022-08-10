@extends('layouts.front')
@section('content')

            <!-- MAIN CONTENT -->
            <div class="shop-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
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
<<<<<<< Updated upstream
                                                                @foreach($products as $product)
                                                                <input  type="hidden" name="products[]" value="{{$product}}" >
                                                                @endforeach

                                                                @foreach($qtes as $qte)
                                                                 <input type="hidden"  name="qtes[]" value="{{$qte}}">
                                                                @endforeach
=======
                                                                <label for="login-email" class="required"> الكمية <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email"  name="qte"  type="number" required>
                                                                </div>
                                                            </li>
                                                            <div class="single-form">
                                   
                                                                <input type="hidden"  name="product" value="{{$product->id}}">
                                                            </div>
                                                            <li>
                                                                
>>>>>>> Stashed changes
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

                        <div class="col-md-4 mt-4" style="background-color: #EFEFEF ; padding: 30px;">
                            <div class="mb-4">
                                <b> تفاصيل طلبك :</b>
                            </div>
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
                                    <label class="title-pack">السعر</label><br>
                                    @foreach($prices as $price)
                                      <span>{{$price}} </span> <br>
                                    @endforeach
                                  </div>
                                </div>
                           
                              
                            <div class="mt-2">
                                <b> المجموع : <span id="sub-total">{{$total}}</span>  </b>دج <br>
                               
                            </div>
                            <div class="mt-4">
                                <b style="font-size: 25px;"> المجموع : <span id="total">{{$total}}</span> دج</b> <br>
                                <span>بمجرد التحقق من صحة طلبك ، سيتم بعد ذلك شحن الطلبية الخاصة بك حتى تتمكن من استلامها. </span>
                            </div>
                           
                        </div>
                      
                    </div>
                       
                    </div>
                </div>
            </div>

          
@endsection