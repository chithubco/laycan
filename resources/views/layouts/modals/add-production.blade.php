@inject('terminals','App\Terminal')
@inject('products','App\Product')

<!-- Modal -->
<div class="modal fade" id="addProductionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header text-white bg-primary">
          <h4 class="modal-title" id="exampleModalLongTitle">Add Daily Production</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('production.create.store') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Production Data Date</label>
                  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Terminal</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    @foreach($terminals->getAll() as $terminal)
                     <option>{{ $terminal->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Product Stream</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    @foreach($products->getAll() as $product)
                     <option>{{ $product->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlInput1">Production Value</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="120,000">
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