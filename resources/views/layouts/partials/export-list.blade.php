<div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Export ID</th>
                <th>Vessel</th>
                <th>Terminal</th>
                <th>Export Volume</th>
                <th>BOL Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($exports as $export)
            <tr>
                <td><a href="/export/{{ $export->id }}">{{ $export->cargo_no }}</a></td>
                <td>{{ $export->vessel }}</td>
                <td>{{ $export->terminal['name'] }}</td>
                <td>{{ $export->norminated_cargo }}</td>
                <td>{{ $export->bol_date }}</td>
                <td>
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Options
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ route('exportmap.index') }}" >Map</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#emailDocumentTemplateModal">Email</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#updateDocumentTemplateModal">Update</a></li>
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