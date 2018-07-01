<div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Terminal</th>
                <th>Name</th>
                <th>Description</th>
                <th>User</th>
                <th>Create</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documents as $document)
            <tr>
                <td><a href="/document/{{ $document->id }}">{{ $document->terminal['name'] }}</a></td>
                <td>{{ $document->name }}</td>
                <td>{{ $document->description }}</td>
                <td>{{ $document->user['name'] }}</td>
                <td>{{ $document->created_at }}</td>
                <td>
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Action
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ url($document->path) }}" target="_blank" >Download</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#emailDocumentTemplateModal">Email</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#updateDocumentTemplateModal" data-id="{{ $document->id }}" data-name="{{ $document->name }}" data-description="{{ $document->description }}" data-terminal="{{ $document->terminal['name'] }}">Update</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Delete</a></li>
                      </ul>
                    </div>
                </td>
            </tr> 
            @endforeach      
        </tbody>
    </table>
</div>