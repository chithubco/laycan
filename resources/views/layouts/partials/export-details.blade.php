<div>
<form method="post" action="{{ route('export.update',$exportInstance->id) }}">
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="panel panel-default">
	  <div class="panel-body">
	    <h4>Manage Export Life Cycle Data</h4>
	  </div>
	</div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Unique Cargo Number</label>
      <input type="text" class="form-control" id="inputCargoNumber" disabled="" value="{{ $exportInstance->cargo_no }}" name="cargoNumber">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTerminal">Terminal</label>
      <select class="form-control" id="inputTerminal" name="terminal">
      	<option>{{ $exportInstance->terminal['name'] }}</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputProduct">Product Stream</label>
      <select class="form-control" id="inputProduct" name="product">
      	<option>{{ $exportInstance->product['name'] }}</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputTerminal">Lifter</label>
      <select class="form-control" id="inputTerminal" name="lifter">
      	<option>{{ $exportInstance->lifter['name'] }}</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Nominated Volume</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->norminated_cargo }}" name="nominatedVolume">
    </div>

    <div class="form-group col-md-4">
      <label for="inputVesselName">Vessel Name</label>
      <input type="text" class="form-control" id="inputVesselName" value="{{ $exportInstance->vessel }}" name="vesselName">
    </div>

  </div>

    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputTerminal">Cargo Type</label>
      <select class="form-control" id="inputTerminal" name="cargoType">
      	<option>{{ $exportInstance->cargoType['name']}}</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">BOL Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->bol_date }}" name="BOL">
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">ETA</label>
      <input type="date" class="form-control" id="inputCargoNumber"  value="{{ $exportInstance->eta }}" name="ETA">
    </div>

  </div>

  <div class="form-row">  
    <div class="form-group col-md-4">
      <label for="inputTerminal">Actual Lifted Volume</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->actual_cargo }}" name="actualCargo">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Ship Figures</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->ship_figure }}" name="shipFigures">
    </div>

    <div class="form-group col-md-4">
      <label for="inputTerminal">Consignee</label>
      <select class="form-control" id="inputTerminal" name="consigneeID">
      	<option>{{ $exportInstance->consignee_id }}</option>
      </select>
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-4">
      <label for="inputTerminal">NXP Number</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->nxp_no }}" name="NXPNumber">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">NXP Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->nxp_date }}" name="NXPDate">
    </div>

    <div class="form-group col-md-4">
    	<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
	    <input type="file" class="form-control" id="inputGroupFile01" name="NXPFile">
  </div>

	<div class="form-row">  
    <div class="form-group col-md-4">
      <label for="inputTerminal">Destination</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->desination }}" name="desination">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Inspector</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->inspector }}" name="inspector">
    </div>

    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Vessel Agent</label>
      <input type="text" class="form-control" id="inputCargoNumber"  value="{{ $exportInstance->vessel_agent }}" name="vesselAgent">
    </div>
  </div>

  <div class="form-row"> 
  	<div class="form-group col-md-4">
      <label for="inputCargoNumber">Date Range</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->date_range }}" name="dateRange">
    </div>

    <div class="form-group col-md-4">
      <label for="inputTerminal">DWT of Vessel</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->dwt_of_vessel }}" name="DWTOfVessel">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">FLAG of Vessel</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->flag_of_vessel }}" name="FLAGOfVessel">
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-3">
      <label for="inputTerminal">DPR Clearance Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->dpr_clearnace_date }}" name="DPRClearanceDate">
    </div>
    <div class="form-group col-md-3">
    	<label class="custom-file-label" for="inputGroupFile01">Upload DPR Clerance</label>
	    <input type="file" class="form-control" id="inputGroupFile01" name="DPRClearanceUpload">
  	</div>
  	<div class="form-group col-md-3">
      <label for="inputTerminal">NNPC Clearance Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->nnpc_clearnace_date }}" name="NNPCClearnaceDate">
    </div>
    <div class="form-group col-md-3">
    	<label class="custom-file-label" for="inputGroupFile01">Upload NNPC Clerance</label>
	    <input type="file" class="form-control" id="inputGroupFile01" name="NNPCClearanceFile">
  	</div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-6">
      <label for="inputTerminal">DI Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->cargo_no }}" name="DIDate">
    </div>
    <div class="form-group col-md-6">
    	<label class="custom-file-label" for="inputGroupFile01">Upload DI</label>
	    <input type="file" class="form-control" id="inputGroupFile01" name="DIFile">
  	</div>
  </div>

  <div class="form-row">
	  <div class="col-md-4">
	  	<label for="inputTerminal">NESS Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="..." name="NESSProcessed" value="{{ $exportInstance->ness_processed }}">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter NESS Number" value="{{ $exportInstance->ness_processed }}">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">CCI Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="..." name="CCIProcessed">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter CCI Number" >
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">CSC Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="..." name="CSCProccessed">
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
	        <input type="radio" aria-label="..." name="hasOutturnVerification" value="{{ $exportInstance->has_outturn }}">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter total outturn cost" value="{{ $exportInstance->outturn_cost }}" name="outturnCost">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">Loss Claim</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="..." name="hasLossClaim" value="{{ $exportInstance->has_lossclaim }}">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter total Loss Claim" value="{{ $exportInstance->loss_claim_amount }}" name="lossClaimCost">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">Demurrage</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="radio" aria-label="..." name="hasDemurrage" value="{{ $exportInstance->has_demurrage }}">
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter Total Demurrage" value="{{ $exportInstance->demurrage_amount }}" name="demurrageAmount">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->

  <div class="form-group">
    <label for="inputAddress">General Comment</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
  </div>

  <div class="form-row">
  	<button type="submit" class="btn btn-primary">Update Export Information</button>
  </div>

</form>
</div>