@inject('nodeStatus','App\NodeStatus')


<!-- Modal -->
<div class="modal fade" id="updateMapNode" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Send Document Template Via Email</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('exportmap.node.comment.store') }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                <input type="hidden" name="nodeElementID" id="inputNodeElementID" value="">

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Node Element</label>
                  <input type="email" class="form-control" name="nodeElementName" id="inputNodeElementName" disabled="">
                </div>

                <div class="form-group">
                  <label for="inputComment">Comment</label>
                  <textarea class="form-control" rows="3" name="comment" id="inputComment" placeholder="Enter the Message " id="inputNodeElemenetComment"></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Update Status</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="nodeElementStatus">
                    @foreach($nodeStatus->getAll() as $status)
                     <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach
                  </select>
                </div>

              <div class="modal-footer">
                <div class="form-row">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update Node </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>