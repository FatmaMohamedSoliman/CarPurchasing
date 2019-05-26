<?php
require_once  __DIR__.'/../customer/model.customer.php';
$userprofile = new user();










if(isset($_POST['email'])){

   $email=$_POST['email'];
   $address=$_POST['address'];
   $id=$_SESSION['user_data']['id'];
$result =$userprofile->edit_account($id,$email, $address);
if($result){
  header("Location: .");
}
}
$user = null;
if(isset($_SESSION['user_data']['id'])){

  $userlist = $userprofile->get_all("id = ".$_SESSION['user_data']['id'],"");
  $user = $userlist[0];

  // var_dump($user);
}
?>

<link rel="stylesheet" type="text/css" media="screen" href="Car_editprofile/css/stylesheet.css" />
<style>
.form{
background-color: #2f3640;
align: center;
margin-left: 25%;
  margin-right:25%;
  width: 50%;
}
</style>
<?php

?>
    <div class="">
        <form method="POST" action="" id="form" class="form" autocomplete="off" onsubmit ="checkPass()">
            <span class="form-title" align="center">Edit Email OR Address</span>

            <div class="wrap-input">
                <span class="span-user-name title">User Name</span>
                <input type="text" name="username" disabled class="txt-input" required maxlength="20" value =<?php echo $user['username'] ; ?>>
            </div>
            <div class="wrap-input">
                <span class="span-email title">email</span>
                <input id='email' disabled style="display:inline;" type="text" name="email" type="email" class="txt-input"  required maxlength="30"value="<?php echo $user['email'] ; ?>" />
            <button type="button"  value="Edit" id="login" style="display:inline;" class="edit btn--move" onclick="edit('1')">edit</button>
			</div>
			<div class="wrap-input" >
                <span class="span-Address-name title">Address</span>
                <input   type="text" id='address' value="<?php echo $user['address'] ; ?>" name="address"  id="address" class="txt-input" required maxlength="100"  disabled style="display:inline;">
                <button type="button" value="Edit" id="login" style="display:inline;" class="edit btn--move" onclick="edit('2')"> edit</button>
			</div>
			<div class="wrap-input">
                <span class="span-Address-name title">Phone</span>
                <input type="text" name="Phone"  id="fieldSelectorId" class="txt-input" pattern="[0-9]{10}"  title="Ten digits code" required maxlength="11" value="<?php echo $user['phone'] ; ?>" disabled />
            </div>


                <input type="submit" value="Save" id="login" class="login txt-input btn btn--dark  btn--rounded btn--transparent btn--move" style="margin-left: 250px;">

        </form>

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
function edit(no)
{
if(no=='1')
{
document.getElementById("email").disabled = false;
}
else if(no=='2'){
document.getElementById("address").disabled = false;
}

}
</script>
