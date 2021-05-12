
function retrieveData(){
		var expdict = {};
		var lvldict = {};
		var pubdict = {};
		var setdict = {};
		var editdict = {};
		$(document.body).on('change','#campaign_types',function(){
			var campaignid = $(this).val();
			$.ajax({
				url:'getcampaign.php',
				type:'post',
				data:{campaign:campaignid},
				dataType: 'json',
				success:function(response){
					var len = response.length;
					$("#campaign").empty().append($('<option>',{value:"",text:'Please Choose a Campaign'}));
					for(var i = 0; i<len;i++){
							var id = response[i]['id'];
							var name = response[i]['name'];
							expdict[id] = response[i]['exp'];
							lvldict[id] = response[i]['lvl'];
							pubdict[id] = response[i]['publisher'];
							setdict[id] = response[i]['setting'];
							editdict[id] = response[i]['edition'];
							$("#campaign").append("<option value='"+id+"'>"+name+"</option>");
					}
				}
			});
		});
		$(document.body).on('change','#campaign',function(){
			id = $('#campaign').children("option:selected").val();
			$('#reclevel').val(lvldict[id]);
			$('#publisher').val(pubdict[id]);
			$('#edition').val(editdict[id]);
			$('#setting').val(setdict[id]);			
		$('input[name=recommendedExp][value='+expdict[id]+']').prop('checked',true);
		});
	}
function createCampaign(){	
	var campaignid = $('#campaign').val();
	var continueState;
	$.ajax({
		url:'makecampaign.php',
		type:'post',
		data:{campaign:campaignid},
		dataType: 'json',
		success:function(response){
			if(response[0]['status'] == "good"){
				alert("Campaign Created Succesfully!");
				var continueState = confirm("Do you wish to make another Campaign?");
					if (!continueState){
						window.location.href = 'index.php';
					}
			}
			else{
				alert("Please select a valid campaign!"+ response[0]['status']);
			}
		},
		error:function(data){
			alert("Connection Error!");
		}	
	});	
}