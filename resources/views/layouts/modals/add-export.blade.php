@inject('terminals','App\Terminal')
@inject('products','App\Product')
@inject('lifters','App\Lifter')
@inject('consignees','App\Consignee')
@inject('cargoTypes','App\CargoType')

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addExportModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Add Basic Export Data</h4>
       </div>

       <form method="post" action="{{ route('export.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="modal-body">


      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCargoNumber">Unique Cargo Numger</label>
            <input type="text" class="form-control" id="inputCargoNumber" placeholder="AGB-098" name="cargoNumber">
          </div>
          <div class="form-group col-md-4">
            <label for="inputTerminal">Terminal</label>
            <select class="form-control" id="inputTerminal" name="terminalID">
                @foreach($terminals->getAll() as $terminal)
                     <option value="{{ $terminal->id }}">{{ $terminal->name }}</option>
                @endforeach
            </select> 
          </div>
          <div class="form-group col-md-4">
            <label for="inputProductStream">Select Product Stream</label>
            <select class="form-control" id="inputProductStream" name="productID">
                @foreach($products->getAll() as $product)
                     <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputLifter">Select Lifter</label>
            <select class="form-control" id="inputLifter" name="lifterID">
                @foreach($lifters->getAll() as $lifter)
                     <option value="{{ $lifter->id }}">{{ $lifter->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputNominatedVolume">Nominated Volume</label>
            <input type="text" class="form-control" id="inputNominatedVolume" placeholder="Nominated Volume (MB)" name="nominatedVolume">
          </div>
          <div class="form-group col-md-4">
            <label for="inputVesselName">Vessel Name</label>
            <input type="text" class="form-control" id="inputVesselName" placeholder="vessel Name" name="vesselName">
          </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputProductStream">Cargo Type</label>
            <select class="form-control" id="inputProductStream" name="cargoTypeID">
                @foreach($cargoTypes->getAll() as $cargoType)
                     <option value="{{ $cargoType->id }}">{{ $cargoType->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputDateRange">Date Range</label>
            <input type="date" class="form-control" id="inputDateRange" placeholder="Escravos Crude + Condensate" name="dateRange">
          </div>
          <div class="form-group col-md-4">
            <label for="inputETA">ETA</label>
            <input type="date" class="form-control" id="inputETA" placeholder=" Expected Time of Arrival" name="ETA">
          </div>
       </div>


       <div class="form-row ">
          <div class="form-group col-md-4">
            <label for="inputDestination">Destination</label>
            <input type="text" class="form-control" id="inputDestination" placeholder="Funiwa Production" name="destination">
          </div>
          <div class="form-group col-md-4">
            <label for="inputInspector">Inspector</label>
            <input type="text" class="form-control" id="inputInspector" placeholder="CONCOG Production" name="inspector">
          </div>
          <div class="form-group col-md-4">
            <label for="inputFLAFofVessel">FLAG of Vessel</label>
            <input type="text" class="form-control" id="inputFLAFofVessel" placeholder="Vessel ETA" name="flagOfVessel">
          </div>
       </div> 
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputDWTofVessel">DWT of Vessel</label>
            <input type="text" class="form-control" id="inputDWTofVessel" placeholder="LPG QOH MTons" name="DWTofVessel">
          </div>
          <div class="form-group col-md-6">
            <label for="inputConsignee">Consignee</label>
            <select class="form-control" id="inputConsignee" name="consigneeID">
                @foreach($consignees->getAll() as $consignee)
                     <option value="{{ $consignee->id }}">{{ $consignee->name }}</option>
                @endforeach
            </select>
          </div>
      </div>

      <div class="form-group">
            <label for="inputComment">Export Comment</label>
            <textarea class="form-control" id="inputComment" rows="4" name="agbamiComment"></textarea>
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