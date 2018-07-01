
<div class="class="panel panel-primary"">
      <div class="panel-body">
        <h4>{{ $exportInstance->cargo_no }} Associtaed Documents</h4>
      </div>
</div>
<div class="list-group">
    @foreach($documents as $document)
        <a href="{{ url($document->path) }}" target="_blank" class="list-group-item"><span class="strong">{{ $document->category['name'] }}</span> Created By :  <span class="label label-success">{{ $document->user['name'] }}</span> Create - {{ $document->created_at->diffForHumans() }}<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></a>
  @endforeach 
</div>
<div>
    <button class="btn btn-primary" type="button">
      Download All <span class="badge">2</span><span class="glyphicon glyphicon-cloud-download" aria-hidden="true">
    </button>
</div>
