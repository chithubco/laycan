@inject('exports','App\Export')
@inject('documentCategories','App\DocumentCategory')
@inject('terminals','App\Terminal')

<!-- Modal -->
<div class="modal fade" id="addCargotype" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Upload Documents</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('cargotype.store') }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                  <label for="inputComment">Cargo Type Name</label>
                  <input type="text" class="form-control"  name="name" id="inputComment" placeholder="Enter Cargo Type"></input>
                </div>

                <div class="form-group">
                  <label for="inputComment">Cargo Type Description</label>
                  <textarea type="text" class="form-control"  name="decription" id="textareaComment" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Terminal</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="terminal">
                    @foreach($terminals->getAll() as $terminal)
                     <option value="{{ $terminal->id }}">{{ $terminal->name }}</option>
                    @endforeach
                  </select>
                </div>

              <div class="modal-footer">
                <div class="form-row">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save Cargo Type</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>