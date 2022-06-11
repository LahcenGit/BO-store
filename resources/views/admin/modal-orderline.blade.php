
<style>
    .total-calculator{
      font-family: 'Orbitron', sans-serif;
      font-size:20px; 
      color:#16B4B7; 
      font-weight : bold;
	  pointer-events: none;
	  height: 30px;
      border: none;
    }
</style>
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lignes Commande</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form id="sbmitF">
            <div class="modal-body">
                <div class="card-body">
                    <div class="basic-form">
                       
                     @foreach($orderlines as $orderline)
                     <div class="form-row">
                            <div class="form-group col-md-4">
                                <label> Produit:</label>
                                <input type="text"  class="form-control invalid" value="{{$orderline->product->name}}">
                               
                              </div>
    
                            <div class="form-group col-md-4">
                                <label>Qte:</label>
                                <input type="text"  class="form-control invalid"value="{{$orderline->qte}}" >
                            </div>
                            <div class="form-group col-md-4">
                                <label>Total:</label>
                                <input type="text"  class="form-control invalid"value="{{$orderline->total}}" >
                            </div>
                        </div>
                       @endforeach
                      </div>
                      <label>Total :</label>
                      <input  class="total-calculator mt-3"  value="{{ number_format($total, 2) }}  Da">
                 </div>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
               
            </div>
        </div>
    </div>
</div>