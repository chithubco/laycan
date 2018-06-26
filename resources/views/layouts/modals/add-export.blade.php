<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addExportModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Add Basic Export Data</h4>
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
            <label for="inputEmail4">Unique Cargo Numger</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="AGB-098" name="cargoNumber">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Terminal</label>
            <select class="form-control" id="inputPassword4">
                <option>Escravos</option>
            </select> 
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Select Product Stream</label>
            <select class="form-control" id="inputPassword4">
                <option>Crude</option>
                <option>Diesel</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputEmail4">Select Lifter</label>
            <select class="form-control" id="inputPassword4">
                <option>NNPC Cargo</option>
                <option>CNL Cargo</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Nominated Volume</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Nominated Volume (MB)" name="DieselShippable">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Vessel Name</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="vessel Name" name="vesselName">
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Date Range</label>
            <input type="date" class="form-control" id="inputDateRange" placeholder="Escravos Crude + Condensate" name="dateRange">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">ETA</label>
            <input type="date" class="form-control" id="inputETA" placeholder="CONOIL Crude" name="ETA">
          </div>
       </div>


       <div class="form-row ">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Destination</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Funiwa Production" name="destination">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Inspector</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="CONCOG Production" name="inspector">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">FLAG of Vessel</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Vessel ETA" name="flagOfVessel">
          </div>
       </div> 
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">DWT of Vessel</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="LPG QOH MTons" name="DWTofVessel">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Consignee</label>
            <select class="form-control" id="inputPassword4">
                <option>Chevron Product Company</option>
                <option>CNL Cargo</option>
            </select>
          </div>
      </div>

      <div class="form-group">
            <label for="inputPassword4">Agbami Comment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="agbamiComment"></textarea>
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