
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="createLiftingProgramModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Generate Lifting Program</h4>
       </div>

       <form method="post" action="{{ route('lifting.program.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="modal-body">


      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputForecastVolume">Forecast Daily Production</label>
            <input type="text" class="form-control" id="inputForecastVolume" placeholder="209000" name="foreCastVolume">
          </div>
          <div class="form-group col-md-4">
            <label for="inputSTARDEEPBOH">STARTDEEP STOCK POSITION</label>
            <input type="text" class="form-control" id="inputSTARDEEPBOH" placeholder="-50000" name="STARDEEPBOH">
          </div>
          <div class="form-group col-md-4">
            <label for="inputFAMFABOH">FAMFA STOCK POSITION</label>
            <input type="text" class="form-control" id="inputFAMFABOH" placeholder="100000" name="FAMFABOH">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPETROBRASBOH">PETROBRAS STOCK POSITION</label>
            <input type="text" class="form-control" id="inputPETROBRASBOH" placeholder="-50000" name="PETROBRASBOH">
          </div>
          <div class="form-group col-md-4">
            <label for="inputTAXOILBOH">TAX OIL STOCK POSITION</label>
            <input type="text" class="form-control" id="inputTAXOILBOH" placeholder="-50000" name="TAXOILBOH">
          </div>
          <div class="form-group col-md-4">
            <label for="inputSTATOILBOH">STATOIL STOCK POSITION</label>
            <input type="text" class="form-control" id="inputSTATOILBOH" placeholder="-50000" name="STATOILBOH">
          </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputTNOSBOH">TNOS STOCK POSITION</label>
            <input type="text" class="form-control" id="inputTNOSBOH" placeholder="-50000" name="TNOSBOH">
          </div>
          <div class="form-group col-md-4">
            <label for="inputNNPCBOH">OML 128 NNPC STOCK POSITION</label>
            <input type="text" class="form-control" id="inputNNPCBOH" placeholder="-50000" name="NNPC-1BOH">
          </div>
          <div class="form-group col-md-4">
            <label for="inputETA">START DATE</label>
            <input type="date" class="form-control" id="inputETA" name="forecastStartDate">
          </div>
       </div>

      <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputTNOSBOH">OPENING BALANCE</label>
            <input type="text" class="form-control" id="inputTNOSBOH" placeholder="-50000" name="BOH">
          </div>
         {{--  <div class="form-group col-md-4">
            <label for="inputNNPCBOH">OML 128 NNPC STOCK POSITION</label>
            <input type="text" class="form-control" id="inputNNPCBOH" placeholder="-50000" name="NNPC-1BOH">
          </div>
          <div class="form-group col-md-4">
            <label for="inputETA">START DATE</label>
            <input type="date" class="form-control" id="inputETA" name="forecastStartDate">
          </div> --}}
       </div>


      <div class="form-group">
            <label for="inputComment">Comments</label>
            <textarea class="form-control" id="inputComment" rows="4" name="comment"></textarea>
       </div>


       <div class="modal-footer">
      <div class="form-row">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  {{-- <button type="button" class="btn btn-primary" id="butClearDailyProduction">Clear Field</button> --}}
                  <button type="submit" class="btn btn-primary">Generate LP</button>
            </div>
       </div>
  </form>
    </div>
  </div>
</div>