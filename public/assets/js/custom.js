//Show And Hide Plain-Page And Line-Page
$(document).ready(function (){
$('#plains-textid').hide();
$("#pageselected").change(function(){	
		var Id =  $("#pageselected option:selected").val();
		if(Id=='1'){
			$('#plainsid').show();
			$('#plains-textid').hide();
		}
		if(Id=='2'){
			$('#plainsid').hide();
			$('#plains-textid').show();
		}
});

});

//Delete Notes
$('.btndelete').live('click',function(){
	var id= $(this).attr('data-id');
	$.ajax({
		url  : '/deletenotes/',
		type : 'get',
		data : 'id='+id,
		success : function(data){
				alert ('Data Successfully Deleted');
				location.reload(); 
			}
	});
});

//Pagination For Notes
$('.pagelink').live('click',function(){
	var pageid = parseInt($('#currentpageid').val());
	var pageid = pageid+1;
	$.ajax({
		url   : '/pagelink',
		type  : 'post',
		data  : 'page='+pageid,
		success : function(data){
			//console.log(data);
			var PageDiv='';
			$('#currentpageid').val(data.current_page);
			$.each(data.data,function(){
				PageDiv +='<a href="/updatenotes/"'+this.id+'><p>'+this.title+'</p></a>';
				});
			$("#pagelinkid").append(PageDiv);
			return false;		
			}
		});
});	



