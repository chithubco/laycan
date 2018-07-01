@inject('exports','App\Export')
@inject('documentCategories','App\DocumentCategory')
@inject('terminals','App\Terminal')

<!-- Modal -->
<div class="modal fade" id="emailDocumentTemplateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Send Document Template Via Email</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('doctemplate.store') }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Email Address</label>
                  <input type="email" class="form-control" name="emailAddress" placeholder="Enter a Email Addresses ">
                </div>

                <div class="form-group">
                  <label for="inputComment">Message</label>
                  <textarea class="form-control" rows="3" name="message" id="inputComment" placeholder="Enter the Message "></textarea>
                </div>

              <div class="modal-footer">
                <div class="form-row">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">End Document by Email </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>