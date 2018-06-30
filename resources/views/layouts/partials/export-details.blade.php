@inject('terminals','App\Terminal')
@inject('products','App\Product')
@inject('lifters','App\Lifter')
@inject('consignees','App\Consignee')
@inject('cargoTypes','App\CargoType')

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
      <select class="form-control" id="inputTerminal" name="terminal" disabled="">
      	<option {{ $exportInstance->terminal['id'] }} selected="">{{ $exportInstance->terminal['name'] }}</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputProduct">Product Stream</label>
      <select class="form-control" id="inputProduct" name="product">
      	<option value="{{ $exportInstance->product['id'] }}" selected="">{{ $exportInstance->product['name'] }}</option>
        @foreach($products->getAll() as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputTerminal">Lifter</label>
      <select class="form-control" id="inputTerminal" name="lifter">
      	<option value="{{ $exportInstance->lifter['id'] }}" selected="">{{ $exportInstance->lifter['name'] }}</option>
        @foreach($lifters->getAll() as $lifter)
            <option value="{{ $lifter->id }}">{{ $lifter->name }}</option>
        @endforeach
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
      	<option value="{{ $exportInstance->cargoType['id']}}" selected="">{{ $exportInstance->cargoType['name']}}</option>
        @foreach($cargoTypes->getAll() as $cargoType)
            <option value="{{ $cargoType->id }}">{{ $cargoType->name }}</option>
        @endforeach
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
      <label for="inputTerminal">Consignee</label>
      <select class="form-control" id="inputTerminal" name="consigneeID">
        <option value="{{ $exportInstance->consignee_id }}">{{ $exportInstance->consignee['name'] }}</option>
        @foreach($consignees->getAll() as $consignee)
          <option value="{{ $consignee->id }}">{{ $consignee->name }}</option>
        @endforeach
      </select>
    </div>  
    <div class="form-group col-md-4">
      <label for="inputTerminal">Actual Lifted Volume</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->actual_cargo }}" name="actualCargo">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Ship Figures</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->ship_figure }}" name="shipFigures">
    </div>
  </div>

  <div class="form-row"> 
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Date Range</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->date_range }}" name="dateRange">
    </div> 
    <div class="form-group col-md-4">
      <label for="inputTerminal">NXP Number</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->nxp_no }}" name="NXPNumber">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">NXP Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->nxp_date }}" name="NXPDate">
    </div>
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
      <label for="inputTerminal">DWT of Vessel</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->dwt_of_vessel }}" name="DWTOfVessel">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">FLAG of Vessel</label>
      <input type="text" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->flag_of_vessel }}" name="FLAGOfVessel">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCargoNumber">Upload Export Documents</label>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUploadDocumentModal">Upload Documents</button>
    </div>
  </div>

  <div class="form-row">  
    <div class="form-group col-md-4">
      <label for="inputTerminal">DPR Clearance Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->dpr_clearnace_date }}" name="DPRClearanceDate">
    </div>
    
  	<div class="form-group col-md-4">
      <label for="inputTerminal">NNPC Clearance Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->nnpc_clearnace_date }}" name="NNPCClearnaceDate">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTerminal">DI Date</label>
      <input type="date" class="form-control" id="inputCargoNumber" value="{{ $exportInstance->di_date }}" name="DIDate">
    </div>
  </div>


  <div class="form-row">
	  <div class="col-md-4">
	  	<label for="inputTerminal">NESS Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="checkbox" aria-label="..." name="NESSProcessed" value="1" {{ $exportInstance->ness_processed == "1" ?'checked='.'"'.'checked'.'"' : '' }}>
	      </span>
	      <input type="text" class="form-control" aria-label="..." placeholder="Enter NESS Number" value="{{ $exportInstance->ness_no }}" name="nessNumber">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">CCI Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="checkbox" aria-label="..." name="CCIProcessed" value="1" {{ $exportInstance->cci_processed == "1" ?'checked='.'"'.'checked'.'"' : '' }}>
	      </span>
	      <input type="text" class="form-control" placeholder="Enter CCI Number" value="{{ $exportInstance->cci_no }}" name="cciNumber">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">CSC Processed</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="checkbox" aria-label="..." name="CSCProccessed" value="1" {{ $exportInstance->csc_processed == "1" ?'checked='.'"'.'checked'.'"' : '' }}>
	      </span>
	      <input type="text" class="form-control" placeholder="Enter CSC Number" value="{{ $exportInstance->csc_no }}" name="cscNumber">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->

  <div class="form-row">
	  <div class="col-md-4">
	  	<label for="inputTerminal">Outturn Verification</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="checkbox" aria-label="..." name="hasOutturnVerification" value="1" {{ $exportInstance->has_outturn == "1" ?'checked='.'"'.'checked'.'"' : '' }}>
	      </span>
	      <input type="number" class="form-control" aria-label="..." placeholder="Enter total outturn cost" value="{{ $exportInstance->outturn_cost }}" name="outturnCost">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">Loss Claim</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="checkbox" aria-label="..." name="hasLossClaim" value="1" {{ $exportInstance->has_lossclaim == "1" ?'checked='.'"'.'checked'.'"' : '' }}>
	      </span>
	      <input type="number" class="form-control" aria-label="..." placeholder="Enter total Loss Claim" value="{{ $exportInstance->loss_claim_amount }}" name="lossClaimCost">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  <div class="col-md-4">
	  	<label for="inputTerminal">Demurrage</label>
	    <div class="input-group">
	      <span class="input-group-addon">
	        <input type="checkbox" name="hasDemurrage" {{ $exportInstance->has_demurrage == "1" ?'checked='.'"'.'checked'.'"' : '' }} value="1">
	      </span>
	      <input type="number" class="form-control" aria-label="..." placeholder="Enter Total Demurrage" value="{{ $exportInstance->demurrage_amount }}" name="demurrageAmount">
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->

  <div class="form-group">
    <label for="inputAddress">General Comment</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment">{{ $exportInstance->comment }}</textarea>
  </div>

  <div class="form-row">
  	<button type="submit" class="btn btn-primary">Update Export Information</button>
  </div>

</form>
</div>