function validate(){
	var user = document.form1.username.value;
	var pass = document.form1.password.value;
	if (user == "" || pass =="") {
		$(document).ready(function(){
			$('.onlog').attr('disabled','disabled');
		});
		return false;
	}else{
		$(document).ready(function(){
				$('.onlog').removeAttr("disabled");
		});
		return true;
	}
}

function validatepass(){
	var pass = document.form1.password.value;
	if(pass.length <= 5){
	// alert("password too short");
	$(document).ready(function(){
		$('.onlog').attr('disabled','disabled');
	});
	return false;
	}else{
		$(document).ready(function(){
				$('.onlog').removeAttr("disabled");
		});
		return true;
	}
}
	
