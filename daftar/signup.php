<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php include("config.php"); ?>
   <?php 
    require_once('header.php');
   ?>
   
  <body>
    <div class="container">
      <div class="pendaftar">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form onsubmit="return validasi_input(this)" action="action.php" method="post">
              <h2>Sign Up</h2>
              <hr>
              <div class="form-group">
                <label for="email">Email address </label> 
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <label for="nama">Full Name</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Full Name" required="">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                <p style="font-size: 10px; text-align: right; color: red;">minimum password 8 characters combination of alphabet and numeric</p>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control" id="telpon" name="telpon" placeholder="Phone" required="">
              </div>
              
              <div class="checkbox">
                <label>
                  <input type="checkbox" required=""> Check me out
                </label>
              </div>
              <button type="submit" name="tambah" id="tambah" class="btn btn-primary" >Sign Up!</button>
            </form>
          </div>
        </div>
      </div>
    </div>  


    <script type="text/javascript">
function validasi_input(form){
  var mincar = 8;
  if (form.password.value.length < mincar){
    alert("Panjang Password Minimal 8 Karater!");
    form.password.focus();
    return (false);
  }
   return (true);
}
</script>


<script type="text/javascript">
function validasi_input(form){
   pola_username=/^[a-zA-Z0-9\_\-]{8,100}$/;
   if (!pola_username.test(form.password.value)){
      alert ('Username minimal 8 karakter dan hanya boleh Huruf atau Angka!');
      form.password.focus();
      return false;
   }
return (true);
}
</script>





    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
