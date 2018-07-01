$(document).ready(function(){

	$('#updateDocumentTemplateModal').on('show.bs.modal',function(e){
		$('#modalInputDocumentTemplateID').val($(e.relatedTarget).attr('data-id'));
		$('#modalInputTemplateName').val($(e.relatedTarget).attr('data-name'));
		$('#modalInputTemplateDocumentDescription').val($(e.relatedTarget).attr('data-description'));
		$('#modalInputDocumentTemplateTerminalID option:selected').text($(e.relatedTarget).attr('data-terminal'));
	})
})