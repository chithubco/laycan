@inject('terminals','App\Terminal')
@inject('products','App\Product')

<!-- Modal -->
<div class="modal fade" id="addTerminalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Add Daily Production</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('terminal.store') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label for="inputTerminalName">Select Terminal</label>
                  <input type="text" name="terminalName" class="form-control" id="inputTerminalName">
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