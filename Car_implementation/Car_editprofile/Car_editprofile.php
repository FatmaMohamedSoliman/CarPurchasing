<html>
<head>
<script type="text/javascript" src="Car_editFun1.js"></script>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

label{
width: 100%;
  display: inline-block;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button[type=submit]{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

button[type=edit]{
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  float: right;
  width: 50%;
}

.editbtn {
  float: middel;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
.signupbtn {
     width: 100%;
  }
}
</style>
<body>

  <div class="container">
    <h1>Edit profile</h1>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" name="name" id="name_row1" >
    <button type="edit" class="editbtn" id="edit_button1" onclick="edit_row('1')">Edit</button>
    
     <label for="Phone"><b>Phone Number</b></label>
    <input type="text" name="phone" id="name_row2" >
    <button type="edit" class="editbtn" id="edit_button2" onclick="edit_row('2')">Edit</button>
    
    <label for="Phone"><b>Address</b></label>
    <input type="text" name="address"  id="name_row3">
    <button type="edit" class="editbtn" id="edit_button3" onclick="edit_row('3')">Edit</button>
    
    <label for="email"><b>Email</b></label>
    <input type="text" name="email"  id="name_row4">
    <button type="edit" class="editbtn" id="edit_button4" onclick="edit_row('4')">Edit</button>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="psw" id="name_row5">
    <button type="edit" class="editbtn" id="edit_button5" onclick="edit_row('5')">Edit</button>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" name="psw-repeat" id="name_row6">

    <div class="clearfix">
      <button type="submit" class="signupbtn" onclick="validatePassword()">Save</button>
    </div>
  </div>
<script>
  document.getElementById("name_row1").disabled = true;
  document.getElementById("name_row1").innerHTML = "Name";
  document.getElementById("name_row2").disabled = true;
  document.getElementById("name_row2").innerHTML = 'Phone Number';
  document.getElementById("name_row3").disabled = true;
  document.getElementById("name_row3").innerHTML = 'Address';
  document.getElementById("name_row4").disabled = true;
  document.getElementById("name_row4").innerHTML = 'Email';
  document.getElementById("name_row5").disabled = true;
  document.getElementById("name_row5").innerHTML = 'Password';
  document.getElementById("name_row6").disabled = true;
  document.getElementById("name_row6").innerHTML = 'Repeat Password';
</script>
</body>
</html>
