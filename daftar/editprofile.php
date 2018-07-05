<title>Edit Profile</title>
<?php 
    require_once('header.php');
    
?>




	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

	

	<?php
	include ('config.php');

	 if(isset($_GET['email'])){

	 	}
		$email	= $_GET['email'];
		$query	= mysqli_query($koneksi,'select * from kolom where email= "'.$email.'"');
		$data  	= mysqli_fetch_array($query);
	 	$nama	= $data['nama'];
	 	$password	= $data['password'];
	 	$telpon	= $data['telpon'];
	 	
	?>






    <div class="container">
      <div class="pendaftar">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form onsubmit="return myFunction(this)" method="post" action="action.php">
              <h2>Edit Profile</h2>
              <hr>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>" readonly="readonly">
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password"  class="form-control" id="password" name="password" value="<?php echo $data['password'] ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Telpon</label>
                <input type="text" class="form-control" id="telpon" name="telpon" value="<?php echo $data['telpon'] ?>">
              </div>
              
              	<button type="input" name="save" id="save" class="btn btn-primary">Save</button>
              	
            </form>
            
          </div>
        </div>
      </div>
    </div> 
    
<script>
function myFunction(form) {
    var txt;
    var r = confirm("Are you sure ?");
    if (r == true) {
    	header('location: index.php');
        
    } else {
        form.email.focus();
        return(false)
    }
    
}
</script>






    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


 