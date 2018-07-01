@inject('exports','App\Export')
@inject('documentCategories','App\DocumentCategory')
@inject('terminals','App\Terminal')

<!-- Modal -->
<div class="modal fade" id="addLifter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Upload Documents</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('lifter.store') }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                  <label for="inputComment">Lifter Name</label>
                  <input type="text" class="form-control"  name="name" id="inputComment" placeholder="Enter Lifter Name"></input>
                </div>

                <div class="form-group">
                  <label for="inputComment">Lifter Label</label>
                  <input type="text" class="form-control"  name="label" id="inputComment" placeholder="Enter Label for Lifter"></input>
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
                  <button type="submit" class="btn btn-primary">Save Document Type</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>