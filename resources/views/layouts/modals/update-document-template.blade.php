@inject('exports','App\Export')
@inject('documentCategories','App\DocumentCategory')
@inject('terminals','App\Terminal')

<!-- Modal -->
<div class="modal fade" id="updateDocumentTemplateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Upodate Document Template</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('doctemplate.update',1) }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                
                <input type="hidden" name="templateID" id="modalInputDocumentTemplateID">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Template Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter a Template Name" id="modalInputTemplateName">
                </div>

                <div class="form-group">
                  <label for="inputComment">Template Description</label>
                  <textarea class="form-control" rows="3" name="documentComment" placeholder="Enter how and when to use this template" id="modalInputTemplateDocumentDescription"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Associated Termial with Template</label>
                  <select class="form-control" name="terminal" id="modalInputDocumentTemplateTerminalID">
                    @foreach($terminals->getAll() as $terminal)
                     <option value="{{ $terminal->id }}">{{ $terminal->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                <label class="custom-file-label" for="inputGroupFile01">Upload Document Template</label>
                <input type="file" class="form-control" id="inputGroupFile01" name="uploadFile">
              </div>

              <div class="modal-footer">
                <div class="form-row">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>