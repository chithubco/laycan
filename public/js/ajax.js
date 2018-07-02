$(document).ready(function(){

	$('#updateDocumentTemplateModal').on('show.bs.modal',function(e){
		$('#modalInputDocumentTemplateID').val($(e.relatedTarget).attr('data-id'));
		$('#modalInputTemplateName').val($(e.relatedTarget).attr('data-name'));
		$('#modalInputTemplateDocumentDescription').val($(e.relatedTarget).attr('data-description'));
		$('#modalInputDocumentTemplateTerminalID option:selected').text($(e.relatedTarget).attr('data-terminal'));
	})

	// $('#nodeElementDiv').on('click',function(e){
	// 	$('#nodeElementDiv').hide();
	// })

	//Map Modals
	$('#updateMapNode').on('show.bs.modal',function(e){
		$('#inputNodeElementID').val($(e.relatedTarget).attr('data-node-element-id'));
		$('#inputNodeElementName').val($(e.relatedTarget).attr('data-node-element-title'));
	})

	$('#deleteNodeElementCommentModal').on('show.bs.modal',function(e){
		
		$('#buttonDeleteComment').on('click',function(){

			var id = $(e.relatedTarget).attr('data-comment-id');

		
			$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});

			$.ajax({
				type:'delete',
				url:'/exportmap/node/comment/'+id,
				
				data: {
						id:id
					},
				success: function(response){
					$('#deleteNodeElementCommentModal').modal('hide');
					$('#divNodeElementComment-'+response.id).remove();
				}
			})
		})
	})
})