@inject('nodes','App\Node')
@inject('nodeStatus','App\NodeStatus')

<div class="container">

 {{--    		<div class="row">
				<div class="col-md-12">
					<div class="page-header">
					  <h1>Horizontal timeline</h1>
					</div>
					<div style="display:inline-block;width:100%;overflow-y:auto;">
					<ul class="timeline timeline-horizontal">
						<li class="timeline-item">
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 1</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 2</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 3</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipisci. Mé faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 4</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 5</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 6</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				</div>
			</div> --}}
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
					  <h1>Export Timeline</h1>
					</div>

					<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
					    60%
					  </div>
					</div>

					<ul class="timeline">
						@foreach($nodes->getAll() as $node)
						<li class="timeline-item">
							<div class="timeline-badge {{ $node->status->label }}"><i class="glyphicon glyphicon-{{ $node->status->state }}"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">{{ $node->name }}</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{ $node->created_at->diffForHumans() }} by {{ $node->user->name }}</small>
									</p>
								</div>
								@foreach($node->nodeElements as $nodeElement)	
										<div class="timeline-body alert alert-{{ $nodeElement->status->label }}" role="alert" id="nodeElementDiv">
												<div class="row">
													<div class="col-md-1">
														<i class="glyphicon glyphicon-off"></i>
													</div>
													<div class="col-md-11 dropdown">
														{{ $nodeElement->title }} <button class="btn btn-xs btn-{{ $nodeElement->status->label }}" id="dropdownMenu1" >{{ $nodeElement->status->name }}
														</button>
													</div>
												</div>
												<div>
													<p><small class="text-muted">{{ $nodeElement->description }}</small></p>
												</div>
												@foreach($nodeElement->comments as $comment)
													<div class="alert alert-warning" role="alert" id="divNodeElementComment-{{ $comment->id }}">
														<p class="text-muted">Comment : <small>{{ $comment->comment }}</small></p>
														<div><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{ $comment->created_at->diffForHumans() }} by {{ $comment->user->name }}</small></p></div>
														<a href="" data-toggle="modal" data-target="#deleteNodeElementCommentModal" data-comment-id="{{ $comment->id }}">Delete</a>
													</div>
												@endforeach
												<button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#updateMapNode" data-node-element-title="{{ $nodeElement->title }}" data-node-element-id="{{ $nodeElement->id }}" >Add Update</button>
										</div>
								@endforeach
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>