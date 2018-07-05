
<?php 


 
// menghubungkan dengan koneksi
include ('config.php');

 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$query = mysqli_query($koneksi,"select * from kolom where email='".$email."' and password='".$password."'");
 
// menghitung jumlah data yang ditemukan
$rows = mysqli_num_rows($query);
   if ($rows == 1) {
    $_SESSION['email']= $email; // Membuat Sesi/session
    header("location: editprofile.php?email=$email"); // Mengarahkan ke halaman profil
    } else {
    
    echo '<script language="javascript">' ;
    echo 'alert("Email or Password incorrect");';
    echo 'window.location = "index.php"';
    echo '</script>';
    }
?>



