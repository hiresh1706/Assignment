<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Log in form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
       
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
    <div>
 
	
    </div>
      <div>
            <form action="validation1.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-6 col-lg-6 centered">
                        <h1>Login</h1>
                        <p>Filled in Details</p>
                        <hr class="mb-3">
						  <label for="firstname"><b>First Name</b></label>
                        <input class="form-control"type="text" name="firstname" required>
						  <label for="password"><b>Password</b></label>
                        <input  class="form-control" type="password" name="password" id="login-forms-password" required>
						

                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="create" value="log in">
						  <a  href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
                    </div>
                </div>
            </div>

            </form>
			

		
  </div>
    </body>
</html>