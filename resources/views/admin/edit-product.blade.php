@extends('layouts.dashboard-admin')

<style>
.fontawesome {
    font-family: "Font Awesome 5 Free", "Font Awesome 5 Brands", sans-serif;
    font-weight: 900;
  }
</style>
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, bienvenue!</h4>
                    <span>Modifier Produit</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard-admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Modifier produit</a></li>
                </ol>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Modifier produit</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{url('/dashboard-admin/products/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom du produit* :</label>
                                        <input type="text"  class="form-control input-default @error('name') is-invalid @enderror" value=" {{$product->name}} "name="name" placeholder="name" required>
                                        @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        <label>Catégories* :</label>
                                        <select class="form-control  @error('category') is-invalid @enderror" id="sel1"  class="selectpicker" data-live-search="true" name="category" required>
                                             @foreach($categories as $category)
                                               <option value="{{$category->id}}" @if ($product->categorie_id == $category->id ) selected @endif >{{$category->name}}</option>
                                               @endforeach
                                                @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
      
                                        </select>
                                    </div>
                                 </div>
                             
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label>Le Prix * :</label>
                                        <input type="number"  class="form-control input-default @error('price') is-invalid @enderror" value="{{$product->price}}" name="price"  required>
                                        @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label>Quantité* :</label>
                                        <input type="number"  class="form-control input-default @error('qte') is-invalid @enderror" value="{{$product->qte}}" name="qte"  required>
                                        @error('qte')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        
                                    </div>
                                </div>
                            
                            <div class="form-row">
                                
                                <div class="form-group col-md-6">
                                    <label>Photos * :</label>
                                  
                                    <div class="basic-form custom_file_input">
                                        <div class="input-group mb-3">
                                                <input type="file"  name="photo" accept="image/*">
                                        </div>
                                    </div>
                                    <img src="{{asset('storage/'.$product->photo)}}" width="243px " height="126px">
                                </div>
                            </div>
                         </div>
                  
                </div>
                
            </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                             Description * : </h4>
                    </div>
                    <div class="card-body">
                        <textarea class="summernote" class="form-control input-default @error('description') is-invalid @enderror"  name="description" >{{$product->description}}</textarea>
                        @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                </div>
        </div>
            

            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body text-center">
                        <button type="submit"  class="btn btn-primary mt-3">Enregistrer</button>
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
</div>


@endsection