<div>
<form>
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


  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>