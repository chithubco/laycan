<!-- Modal -->
<div class="modal fade" id="addProductionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Daily Production</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputDate">Date</label>
              <input type="text" class="form-control" id="inputDate">
            </div>
            <div class="form-group col-md-6">
              <label for="inputTerminal">Terminal</label>
              <select id="inputTerminal" class="form-control">
                <option selected>Choose...</option>
                <option>Agbami</option>
                <option>Escravos</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAmount">Production</label>
              <input type="text" class="form-control" id="inputDate">
            </div>
            <div class="form-group col-md-6">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
        </form>
      </div> 
  </div>
</div>