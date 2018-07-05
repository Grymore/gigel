<?php
include('config.php');
if(isset($_POST['tambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$email	= $_POST['email'];
	$nama	= $_POST['nama'];
	$password	= $_POST['password'];
	$telpon	= $_POST['telpon'];
	
	$sql	= 'INSERT INTO `kolom` (`email`, `nama`, `password`, `telpon`) VALUES ("'.$email.'","'.$nama.'","'.$password.'","'.$telpon.'")';
	$query	= mysqli_query($koneksi,$sql);
	
	if($query){
		echo '<script language="javascript">' ;
	    echo 'alert("Thankyou for registration");';
	    echo 'window.location = "index.php"';
	    echo '</script>';
		
	}
	else
	{
	

	echo '<script language="javascript">' ;
	    echo 'alert("Make sure your email or phone not registered");';
	    echo 'window.location = "signup.php"';
	    echo '</script>';
	
}
}


if(isset($_POST['save'])){
	$email	= $_POST['email'];
	$nama	= $_POST['nama'];
	$password	= $_POST['password'];
	$telpon	= $_POST['telpon'];
	
	$sql	= 'update kolom set nama="'.$nama.'", telpon="'.$telpon.'", password="'.$password.'" where email="'.$email.'"';
	
	$query	= mysqli_query($koneksi,$sql);
	
	if($query){
		echo '<script language="javascript">' ;
	    echo 'alert("Data berhasil diupdate");';
	    echo 'window.location = "index.php"';
	    echo '</script>';
		
	}
	else{
		echo '<script language="javascript">' ;
	    echo 'alert("Data gagal diupdate");';
	    echo 'window.location = "index.php"';
	    echo '</script>';
		
	}
}
?>
 