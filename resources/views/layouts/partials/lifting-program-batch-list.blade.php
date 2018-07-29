<div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Batch ID</th>
                <th>Start Date</th>
                <th>Production</th>
                <th>STARDEEP</th>
                <th>FAMF</th>
                <th>PETROBRAS</th>
                <th>TAXOIL</th>
                <th>STATOIL</th>
                <th>TONS</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($liftingProgramBatches as $value)
            <tr>
                <td><a href="/lifting/program/{{ $value->batch_id }}">{{ $value->batch_id }}</a></td>
                <td>{{ $value->forecast_start_date }}</td>
                <td>{{ number_format($value->daily_production) }}</td>
                <td>{{ number_format($value->STARDEEPBOH) }}</td>
                <td>{{ number_format($value->FAMFABOH) }}</td>
                <td>{{ number_format($value->PETROBRASBOH)}}</td>
                <td>{{ number_format($value->TAXOILBOH) }}</td>
                <td>{{ number_format($value->STATOILBOH)}}</td>
                <td>{{ number_format($value->TNOSBOH)}}</td>
                
                <td>
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Option
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        {{-- <li><a href="{{ route('exportmap.index') }}" >Map</a></li> --}}
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
        {{-- <tfoot>
            <tr>
                <th>Export ID</th>
                <th>Vessel</th>
                <th>Terminal</th>
                <th>Export Volume</th>
                <th>BOL Date</th>
                <th>Demurrage</th>
            </tr>
        </tfoot> --}}
    </table>
</div>