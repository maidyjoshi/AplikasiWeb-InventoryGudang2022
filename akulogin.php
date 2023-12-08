<?php
    include 'koneksi1.php';

    $id = $_POST['id'];
    $password =$_POST['password'];

    $query = "SELECT * FROM pegawai WHERE id = '$id' and passwords='$password'";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($result);

    if($cek > 0){
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['status'] = 'login';
    
   

?>
<script language= "javascript">
    window.alert("Login Success!");
    window.location.href="menu.php";
    </script>
<?php
    }else{
        header("location:indeks.php");
    }
?>