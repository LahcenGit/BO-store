@extends('layouts.front')
@section('content')

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
@endsection