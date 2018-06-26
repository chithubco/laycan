<!-- Modal -->
<div class="modal fade" id="addProductionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLongTitle">Add Daily Production</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('production.create.store') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputDate">Date</label>
                  <input type="date" class="form-control" id="inputDate">
                </div>
                <div class="form-group col-md-12">
                  <label for="inputTerminal">Terminal</label>
                  <select id="inputTerminal" class="form-control">
                    <option selected>Choose...</option>
                    <option>Agbami</option>
                    <option>Escravos</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputAmount">Production</label>
                  <input type="text" class="form-control" id="inputDate">
                </div>
                <div class="form-group col-md-12">
                  <label for="inputTerminal">Product</label>
                  <select id="inputTerminal" class="form-control">
                    <option selected>Choose...</option>
                    <option>Crude</option>
                    <option>Deisel</option>
                    <option>LPG</option>
                    <option>Condensate</option>
                    <option>Naphtha</option>
                    <option>TransMix</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <div class="form-row">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>