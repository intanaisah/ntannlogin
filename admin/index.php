<?phpinclude '../koneksi.php';
//mengaktifkan session
session_start();
//cek apakah user telah login. jika,alihkan ke halaman login
if($_SESSION['status']!="login"){
    header("location:../index.php");
}
//menampilan pesan selamat datang
echo "Hai selamat datang".$_SESSION['username'];
?>
</br>
</br>
<a href="logout.php">LOGOUT</a>