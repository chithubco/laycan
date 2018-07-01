@inject('exports','App\Export')
@inject('documentCategories','App\DocumentCategory')
@inject('terminals','App\Terminal')

<!-- Modal -->
<div class="modal fade" id="addDocumentTemplateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Create Document Template</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('doctemplate.store') }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Template Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter a Template Name">
                </div>

                <div class="form-group">
                  <label for="inputComment">Template Description</label>
                  <textarea class="form-control" rows="3" name="documentComment" id="inputComment" placeholder="Enter how and when to use this template"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Associated Termial with Template</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="terminal">
                    @foreach($terminals->getAll() as $terminal)
                     <option value="{{ $terminal->id }}">{{ $terminal->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                <label class="custom-file-label" for="inputGroupFile01">Upload Document Template</label>
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