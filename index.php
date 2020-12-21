<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
    <div>
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </div>
      <div>
            <form action="registration1.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-6 col-lg-6 centered">
                        <h1>Registration</h1>
                        <p>Fill Up The Form With Correct Values</p>
                        <hr class="mb-3">
                       <label for="firstname"><b>First Name</b></label>
                        <input class="form-control"type="text" pattern="[a-zA-Z]+" name="firstname" required>


                        <label for="lastname"><b>Last Name</b></label>
                        <input  class="form-control"type="text" pattern="[a-zA-Z]+" name="lastname" required>


                        <label for="email"><b>Email Id</b></label>
                        <input  class="form-control"type="email"pattern="^[\w.+\-]+@gmail\.com$" name="email" required>


                        <label for="phonenumber"><b>Contact No</b></label>
                        <input required type="text" class="form-control" name="phone" id="phone" placeholder="(xxx) xxx - xxxx"
                    oninput="checkPhone(this);" onblur="formatPhone(this);" onkeypress="formatPhone(this);">


                        <label for="age"><b>Age</b></label>
                        <input  class="form-control" type="number" id="age" name="age" min="18" max="60" required>


                        <label for="password"><b>Password</b></label>
                        <input  class="form-control" type="password" name="password" id="login-forms-password" required>


                        <label for="c_password"><b>Confirm Password</b></label>
                        <input  class="form-control"type="password" name="c_password" id="login-confirm-password" required>
<div id="error_text"></div>
                   
                        <label for="upload"><b>Upload Image</b></label>
                        <input  class="form-control" type="file" name="fileToUpload"id="fileToUpload" required >

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="submit" name="create" value="sign Up" onclick="return Validate()">
                        <a  href="login.php"><button type="button" class="btn btn-primary">Already a user log in!!</button></a>
                    </div>
                </div>
            </div>

            </form>
			<script>
 function formatPhone(obj) {
            var numbers = obj.value.replace(/\D/g, ''),
                char = { 0: '(', 3: ') ', 6: ' - ' };
            obj.value = '';
            for (var i = 0; i < numbers.length; i++) {
                obj.value += (char[i] || '') + numbers[i];
            }
        }

function checkPhone(phoneInput) {
            var formatted = phoneInput.value.replace(/\D/g, '');
            if (formatted.length !== 10) {
                phoneInput.setCustomValidity('please enter 10 digit number')
            } else {
                phoneInput.setCustomValidity(""); // be sure to leave this empty! 
            }
        }

var form = document.getElementById("my-form");
        if (form.attachEvent) {
            form.attachEvent("submit", processForm);
        } else {
            form.addEventListener("submit", processForm);
        }

function processForm(e) {
              e.preventDefault();
    console.log('cool');
}

</script>
  

  <script>
// confirmpassword and password validation
    function Validate() {
        var password = document.getElementById("login-forms-password").value;
        var confirmPassword = document.getElementById("login-confirm-password").value;
        if (password != confirmPassword) {
    alert('password and confirm password wont match');

            return false;
        }
        return true;
    }
</script>
		
  </div>
    </body>
</html>