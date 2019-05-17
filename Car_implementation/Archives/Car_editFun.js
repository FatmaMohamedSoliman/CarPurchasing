var password = document.getElementById("name_row5")
  , confirm_password = document.getElementById("name_row6");

function edit_row(no)
{
	if(no==5){
		document.getElementById("name_row"+no).disabled = false;
		document.getElementById("name_row6").disabled = false;
		validatePassword();
	}
	else{
		document.getElementById("name_row"+no).disabled = false;
	}
}

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;