<div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Terminal</th>
                <th>Cargo ID</th>
                <th>Category</th>
                <th>User</th>
                <th>Create</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($documents as $document)
            <tr>
                <td><a href="/document/{{ $document->id }}">{{ $document->terminal['name'] }}</a></td>
                <td>{{ $document->cargo_id }}</td>
                <td>{{ $document->category['name'] }}</td>
                <td>{{ $document->user['name'] }}</td>
                <td>{{ $document->created_at }}</td>
                <td>
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Action
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">Update</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Delete</a></li>
                      </ul>
                    </div>
                </td>
            </tr> 
            @endforeach      
        </tbody>
        <tfoot>
            <tr>
                <th>Export ID</th>
                <th>Vessel</th>
                <th>Terminal</th>
                <th>Export Volume</th>
                <th>BOL Date</th>
                <th>Demurrage</th>
            </tr>
        </tfoot>
    </table>
</div>