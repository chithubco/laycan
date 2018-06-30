@inject('exports','App\Export')
@inject('documentCategories','App\DocumentCategory')
@inject('terminals','App\Terminal')

<!-- Modal -->
<div class="modal fade" id="addUploadDocumentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Upload Documents</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('upload.store') }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Terminal</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="terminal">
                    @foreach($terminals->getAll() as $terminal)
                     <option value="{{ $terminal->id }}">{{ $terminal->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Unique Export ID</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="cargoID">
                      <option value="General">General</option>
                    @foreach($exports->getAll() as $export)
                     <option value="{{ $export->cargo_no }}">{{ $export->cargo_no }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Document Category</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="documentCategory">
                    @foreach($documentCategories->getAll() as $documentCategory)
                     <option value="{{ $documentCategory->id }}">{{ $documentCategory->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="inputComment">Enter File Description</label>
                  <textarea class="form-control" rows="3" name="documentComment" id="inputComment"></textarea>
                </div>

                <div class="form-group">
                <label class="custom-file-label" for="inputGroupFile01">Upload Document</label>
                <input type="file" class="form-control" id="inputGroupFile01" name="uploadFile" required="">
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