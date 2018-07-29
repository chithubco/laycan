<div>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Batch ID</th>
                <th>Date</th>
                <th>Production</th>
                <th>Cummulative</th>
                <th>Lifter</th>
                <th>Laycan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        	@foreach($liftingPrograms as $value)
            <tr>
                <td><a href="/value/{{ $value->id }}">{{ $value->batch }}</a></td>
                <td>{{ $value->date }}</td>
                <td>{{ number_format($value->production) }}</td>
                <td>{{ number_format($value->cummulative_production) }}</td>
                <td>{{ $value->lifter }}</td>
                @if(is_null($value->laycan))
                <td></td>
                @else
                    <td>{{ $value->laycan}}</td>
                @endif
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