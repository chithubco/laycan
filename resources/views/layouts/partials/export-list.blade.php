<div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Export ID</th>
                <th>Vessel</th>
                <th>Terminal</th>
                <th>Export Volume</th>
                <th>BOL Date</th>
                <th>Demurrage</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($exports as $export)
            <tr>
                <td><a href="/export/{{ $export->id }}">{{ $export->cargo_no }}</a></td>
                <td>{{ $export->vessel }}</td>
                <td>{{ $export->terminal_id }}</td>
                <td>{{ $export->norminated_cargo }}</td>
                <td>{{ $export->bol_date }}</td>
                <td>{{ $export->demurrage_amount }}</td>
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