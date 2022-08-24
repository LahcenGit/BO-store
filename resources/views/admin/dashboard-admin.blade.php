@extends('layouts.dashboard-admin')
@section('content')
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-lg-12">
						<div class="row">
							
							<div class="col-lg-4 col-sm-6">
								<div class="card overflow-hidden" style="padding:20px;">
									<div class="card-body pb-0 px-3 pt-2" >
										<div class="row">
											<div class="col">
												<h2 class="mb-1">{{$countproduct}}</h2>
												<span class="text-success">Produits</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card overflow-hidden" style="padding:20px;">
									<div class="card-body pb-0 px-3 pt-2">
										<div class="row">
											<div class="col">
												<h2 class="mb-1">{{$countorders}}</h2>
												<span class="text-success">Commandes</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-lg-4 col-sm-6">
								<div class="card overflow-hidden" style="padding:20px;">
									<div class="card-body pb-0 px-3 pt-2">
										<div class="row">
											<div class="col">
												<h2 class="mb-1">{{ number_format($revenu->s, 2) }} Da</h2>
												<span class="text-success">Revenu</span>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							
							
							<div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Timeline</h4>
									</div>
									<div class="card-body">
										<div id="DZ_W_TimeLine1" class="widget-timeline dz-scroll style-1" style="height:250px;">
											<ul class="timeline">
												<li>
													<div class="timeline-badge primary"></div>
													<a class="timeline-panel text-muted" href="#">
														
														<h6 class="mb-0">Commandes En Attentes<strong class="text-warning"> {{$orderwaiting}}</strong>.</h6>
													</a>
												</li>
												<li>
													<div class="timeline-badge info">
													</div>
													<a class="timeline-panel text-muted" href="#">
														<h6 class="mb-0">Commandes Validés <strong class="text-info"> {{$ordervalidate}}</strong></h6>
														
													</a>
												</li>
												<li>
													<div class="timeline-badge danger">
													</div>
													<a class="timeline-panel text-muted" href="#">
														
														<h6 class="mb-0">Commandes Annulés<strong class="text-danger"> {{$ordercancel}}</strong></h6>
													</a>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-xxl-8 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Les dernières commandes</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-responsive-sm mb-0">
												<thead>
													<tr>
														<th style="width:20px;">
															<div class="custom-control custom-checkbox checkbox-primary check-lg mr-3">
																<input type="checkbox" class="custom-control-input" id="checkAll" required="">
																<label class="custom-control-label" for="checkAll"></label>
															</div>
														</th>
														<th><strong>Nom</strong></th>
														<th><strong>Prénom</strong></th>
														<th><strong>Wilaya</strong></th>
														<th><strong>Adresse</strong></th>
														<th><strong>Tél</strong></th>
														<th><strong>Status</strong></th>
														
													</tr>
												</thead>
												<tbody>
													@foreach($orders as $order)
													<tr>
														<td>
															<div class="custom-control custom-checkbox check-lg mr-3">
																<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
																<label class="custom-control-label" for="customCheckBox2"></label>
															</div>
														</td>
														<td>{{$order->firstname}}</td>
														<td>{{$order->lastname}}</td>
														<td>{{$order->wilaya->ar_name}}</td>
														<td>{{$order->adresse}}</td>
														<td>{{$order->phone}}</td>
														@if ($order->status == 'En Attente' )
														<td><span class="badge badge-warning">En Attente</span></td>
														@elseif($order->status == 'Validé')
														<td><span class="badge badge-success">Validé</span></td>
														@else
														<td><span class="badge badge-danger">Annulé</span></td>
															
														@endif
													</tr>
													
													
													@endforeach
													
												</tbody>
											</table>
										</div>
										<a href="{{url('dashboard-admin/orders')}}"><p>Voir Toutes les commandes</p></a>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->   
@endsection