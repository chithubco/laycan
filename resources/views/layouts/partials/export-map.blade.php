@inject('nodes','App\Node')

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
					<ul class="timeline">
						@foreach($nodes->getAll() as $node)
						<li class="timeline-item">
							<div class="timeline-badge {{ $node->status->label }}"><i class="glyphicon glyphicon-{{ $node->status->state }}"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">{{ $node->name }}</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago by {{ $node->user->name }}</small>
									</p>
								</div>
								@foreach($node->nodeElements as $nodeElement)	
										<div class="timeline-body alert alert-{{ $nodeElement->status->label }}" role="alert" id="nodeElementDiv">
												<div class="row">
													<div class="col-md-1">
														<i class="glyphicon glyphicon-off"></i>
													</div>
													<div class="col-md-11">
														<p>{{ $nodeElement->title }} <button class="btn btn-xs btn-{{ $nodeElement->status->label }}">{{ $nodeElement->status->name }}</button></p>
													</div>
												</div>
												<div>
													<p><small class="text-muted">{{ $nodeElement->description }}</small></p>
												</div>
												@foreach($nodeElement->comments as $comment)
													<div class="alert alert-warning" role="alert">
														<p class="text-muted">Comment : <small>{{ $comment->comment }}</small></p>
														<div><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{ $comment->created_at }} by {{ $comment->user->name }}</small></p></div>
													</div>
												@endforeach
										</div>
								@endforeach
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>