<div>
<form>
	<div class="panel panel-default">
	  <div class="panel-body">
	    <h4>Manage Export Life Cycle Data</h4>
	  </div>
	</div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Unique Cargo Number</label>
      <input type="text" class="form-control" id="inputCargoNumber" placeholder="Email" disabled="" value="{{ $exportInstance->cargo_no }}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTerminal">Terminal</label>
      <select class="form-control" id="inputTerminal">
      	<option>{{ $exportInstance->terminal_id }}</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputProduct">Product Stream</label>
      <select class="form-control" id="inputProduct">
      	<option>{{ $exportInstance->product_id }}</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputTerminal">Lifter</label>
      <select class="form-control" id="inputTerminal">
      	<option>{{ $exportInstance->terminal_id }}</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Nominated Volume</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->norminated_cargo }}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Vessel Name</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->vessel }}">
    </div>

  </div>

    <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputTerminal">Cargo Type</label>
      <select class="form-control" id="inputTerminal">
      	<option>{{ $exportInstance->terminal_id }}</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">BOL Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">ETA</label>
      <input type="date" class="form-control" id="inputCargoNumber"  value="{{ $exportInstance->cargo_no }}">
    </div>

  </div>

  <div class="form-row">  
    <div class="form-group col-md-4">
      <label for="inputTerminal">Actual Lifted Volume</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Ship Figures</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputTerminal">Consignee</label>
      <select class="form-control" id="inputTerminal">
      	<option>{{ $exportInstance->terminal_id }}</option>
      </select>
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-4">
      <label for="inputTerminal">NXP Number</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">NXP Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>

    <div class="form-group col-md-4">
    	<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
	    <input type="file" class="form-control" id="inputGroupFile01">
  </div>

	<div class="form-row">  
    <div class="form-group col-md-4">
      <label for="inputTerminal">Destination</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Inspector</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Vessel Agent</label>
      <input type="date" class="form-control" id="inputCargoNumber"  value="{{ $exportInstance->cargo_no }}">
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-6">
      <label for="inputTerminal">DWT of Vessel</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCargoNumber">FLAG of Vessel</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-3">
      <label for="inputTerminal">DPR Clearance Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>
    <div class="form-group col-md-3">
    	<label class="custom-file-label" for="inputGroupFile01">Upload DPR Clerance</label>
	    <input type="file" class="form-control" id="inputGroupFile01">
  	</div>
  	<div class="form-group col-md-3">
      <label for="inputTerminal">NNPC Clearance Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>
    <div class="form-group col-md-3">
    	<label class="custom-file-label" for="inputGroupFile01">Upload NNPC Clerance</label>
	    <input type="file" class="form-control" id="inputGroupFile01">
  	</div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-6">
      <label for="inputTerminal">DI Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}">
    </div>
    <div class="form-group col-md-6">
    	<label class="custom-file-label" for="inputGroupFile01">Upload DI Clerance</label>
	    <input type="file" class="form-control" id="inputGroupFile01">
  	</div>
  </div>

  <div class="form-row">
	  <div class="col-md-4">
	  	<label for="inputTerminal">NESS Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="...">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter NESS Number">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">CCI Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="...">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter CCI Number">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">CSC Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="...">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter CSC Number">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->

  <div class="form-row">
	  <div class="col-md-4">
	  	<label for="inputTerminal">Outturn Verification</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="...">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter total outturn cost">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">Loss Claim</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="...">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter total Loss Claim">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">Demurrage</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="...">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter Total Demurrage">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->

  <div class="form-group">
    <label for="inputAddress">General Comment</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-row">
  	<button type="submit" class="btn btn-primary">Sign in</button>
  </div>

</form>
</div>