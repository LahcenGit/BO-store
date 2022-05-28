@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, bienvenue !</h4>
                    <span>Modifier la commande</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Modifier Commande</a></li>
                </ol>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Modifier Commande</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">

                            <form action="{{url('dashboard-admin/orders/'.$order->id)}}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                               <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nom :</label>
                                        <input type="text"  class="form-control input-default " value="{{$order->firstname}}" disabled >
                                       
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Prénom :</label>
                                        <input type="text"  class="form-control input-default" value="{{$order->lastname}}"  disabled >
                                       
                                    </div>
                                   
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Wilaya :</label>
                                        <input type="text"  class="form-control input-default " value="{{$order->wilaya->ar_name}}"  disabled >
                                        
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Adresse:</label>
                                        <input type="text"  class="form-control input-default " value="{{$order->adresse}}"  disabled >
                                        
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Numéro :</label>
                                        <input type="text"  class="form-control input-default " value="{{$order->phone}}"  disabled >
                                        
                                    </div>
                                   
                                </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Statut :</label>
                                        <select class="form-control  @error('statut') is-invalid @enderror" id="sel1"  class="selectpicker" data-live-search="true" name="status" >
                                       
                                            <option value="En Attente" @if ($order->status == 'En Attente' ) selected @endif>En Attente</option>
                                            <option value="Validé" @if ($order->status == 'Validé' ) selected @endif>Validé</option>
                                            <option value="Annulé" @if ($order->status == 'Annulé' ) selected @endif>Annulé</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                               <button type="submit" class="btn btn-primary mt-3 text-center">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
    
@endsection