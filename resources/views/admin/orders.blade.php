@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, Bienvenue!</h4>
                    <span>Commnades</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard-admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{url('/dashboard-admin/orders')}}">Commandes</a></li>
                </ol>
            </div>
        </div>
     

       
        <!-- row -->
        <div class="row ">


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">La tables des commandes</h4>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Wilaya</th>
                                        <th>Adresse</th>
                                        <th>Numéro</th>
                                        <th>Produit</th>
                                        <th>Qte</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                            @foreach($orders as $order)
                                
                                <tr id="{{$order->id}}">
                                   
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->firstname}}</td>
                                    <td>{{$order->lastname}}</td>
                                    <td>{{$order->wilaya->name}}</td>
                                    <td>{{$order->adresse}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->product->name}}</td>
                                    <td>{{$order->qte}}</td>
                                    <td>{{ number_format($order->total, 2) }}  Da</td>
                                    <td>{{$order->created_at}}</td>
                                    @if ($order->status == 'En Attente' )
                                    <td><span class="badge badge-warning">En Attente</span></td>
                                    @elseif($order->status == 'Validé')
                                    <td><span class="badge badge-success">Validé</span></td>
                                    @else
                                    <td><span class="badge badge-danger">Annulé</span></td>
                                    
                                    @endif
                                    <td>
                                        <form action="{{url('dashboard-admin/orders/'.$order->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        <div class="d-flex">
                                            <a href="{{url('dashboard-admin/orders/'.$order->id.'/edit')}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <button class="  btn btn-danger shadow btn-xs sharp" onclick="return confirm('Vous voulez vraiment supprimer?')"><i class="fa fa-trash"></i></button>
                                        </div>
                                        </form>												
                                    </td>	
                                 </tr>
                             @endforeach
                           </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
</div>
</div>
@endsection
