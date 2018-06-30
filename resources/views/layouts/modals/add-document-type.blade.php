@inject('exports','App\Export')
@inject('documentCategories','App\DocumentCategory')
@inject('terminals','App\Terminal')

<!-- Modal -->
<div class="modal fade" id="addDocumentType" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Upload Documents</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('documentcategory.store') }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                  <label for="inputComment">Category Name</label>
                  <input type="text" class="form-control"  name="name" id="inputComment"></input type="text">
                </div>

                <div class="form-group">
                  <label for="inputComment">Category Description</label>
                  <textarea class="form-control" rows="3" name="description" id="inputComment"></textarea>
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