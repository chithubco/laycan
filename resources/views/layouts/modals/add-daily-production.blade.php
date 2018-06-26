<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addDailyProductionModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Add Daily Production</h4>
       </div>

       <form method="post" action="{{ route('production.create.store') }}">
       	<input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="modal-body">

       		<div class="form-group bg-light">
			      <label for="inputEmail4">Date</label>
			      <input type="date" class="form-control" id="inputEmail4" placeholder="Email" name="reportDate">
			</div>

			<div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Condensate</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Condensate Production" name="condensateProduction">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Diesel</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="Diesel Production" name="dieselProduction">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Naphtha</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="Naphtha Production" name="naphthaProduction">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">Condensate Shippage</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Condensate Shippable" name="condensateShippable">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Diesel Shippable</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="Diesel Shippable" name="DieselShippable">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">Diesel Shippable</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="Naphtha Shippable" name="naphthaShippable">
			    </div>
			</div>
			
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Escravos Production</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Escravos Crude + Condensate" name="escravosProduction">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">CONOIL Production</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="CONOIL Crude" name="escravosConoilProduction">
			    </div>
			 </div>


			 <div class="form-row ">
			    <div class="form-group col-md-4">
			      <label for="inputEmail4">FUNIWA Crude</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Funiwa Production" name="funiwaProduction">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">CONOG Crude</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="CONCOG Production" name="conogProduction">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputPassword4">ETA</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="Vessel ETA" name="penningtonVesselETA">
			    </div>
			 </div>	
			<div class="form-row">
			    <div class="form-group col-md-3">
			      <label for="inputEmail4">LPG Quantity on Hand</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="LPG QOH MTons" name="LPGQuantityOnHand">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputPassword4">24 HRS Recieved</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="Last 24 Hrs Production" name="LPGLast24Hours">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputPassword4">Export Last 24hrs</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="Export Last 24 Hrs" name="LPGExportLast24Hours">
			    </div>
			 	<div class="form-group col-md-3">
			      <label for="inputPassword4">Total Exported</label>
			      <input type="text" class="form-control" id="inputPassword4" placeholder="Total Exported" name="LPHTotalExported">
			  	</div>
			</div>

			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Agbami Production</label>
			      <input type="text" class="form-control" id="inputEmail4" placeholder="Agbami Dail Net production" name="agbamiProduction">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Agbami Inventory</label>
			      <input type="text-white" class="form-control" id="inputPassword4" placeholder="Agbami Inventory" name="agbamiInventory">
			    </div>
			</div>
			<div class="form-group">
			      <label for="inputPassword4">Agbami Comment</label>
			      <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="agbamiComment"></textarea>
			 </div>

       </div>

       <div class="modal-footer">
			<div class="form-row">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="butClearDailyProduction">Clear Field</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
       </div>
	</form>
    </div>
  </div>
</div>