function retrieveData(){
	alert("variable Init");
	var bday = "";
	var DM = "";
	var bio = "";
	var username = "";
	var exp = "";
	var email = "";
	alert("Ajax Start!");
		$.ajax({
		url:'retrievedata.php',
		type:'post',
		data:{},
		success:function(response){
			bday = response[0].birthday;
			DM  = response[0].DM;
			bio = response[0].bio;
			username = response[0].name;
			exp = response[0].exp;
			email = response[0].email;
			alert("done"+email);
		},
		error:function(response){
		alert("failed!");	
		}
	});
}
function updateData(){	

}