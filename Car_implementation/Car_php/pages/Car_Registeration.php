
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />
<style>
body {
  height: 60rem;
}
</style>



    <div class="container">
        <form method="POST" action="Car_php/customer/do_registration.php" id="form" class="form" autocomplete="off" onsubmit ="checkPass()" method="post">
            <span class="form-title">Enter your Personal Information</span>

            <div class="wrap-input">
                <span class="span-user-name title">User Name</span>
                <input type="text" name="username" placeholder="User Name" id="user-name" class="txt-input" required maxlength="20">
            </div>
            <div class="wrap-input">
                <span class="span-email title">email</span>
                <input type="email" name="email" placeholder="email" id="email" class="txt-input"
                required maxlength="30"/>
            </div>
			<div class="wrap-input">
                <span class="span-Address-name title">Address</span>
                <input type="text" name="address" placeholder="Address" id="Address" class="txt-input" required maxlength="100">
            </div>
			<div class="wrap-input">
                <span class="span-Address-name title">Phone</span>
                <input type="text" name="phone" placeholder="Phone" id="fieldSelectorId" class="txt-input" pattern="[0-9]{10}"  title="Ten digits code" required maxlength="11">
            </div>
            <div class="wrap-input">
                <span class="span-password-name title">password</span>
                <input type="password"  name="password" placeholder="password" id="pass1" class="txt-input" required maxlength="14">
            </div>

			<div class="wrap-input">
                <span class="span-Confirm password-name title">Confirm password</span>
                <input type="password"  name="Confirm password" placeholder="Confirm password" id="pass2" class="txt-input" required maxlength="14" onkeyup="checkPass(); return false;">
            </div>
			<div id="error-nwl"></div>



                <input type="submit" value="Regester" id="login" class="login txt-input btn btn--dark  btn--rounded btn--transparent btn--move">

        </form>
        <div class="headline">Registeration</div>
        <div class="instructions">

        <div class="instructions-item">Please enter valid personal informations.</div>

        </div>
    </div>
    <script src="js/main.js"></script>
	<script>
function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";

    if(pass1.value === pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "passwords are Matching!"
    }
    else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " These passwords don't match"
    }

    if(pass1.length > 8){
        pass1.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "character number ok!"
    }
    else if(pass1.length <8){
        pass1.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 8 digit! "
    }
}

</script>
