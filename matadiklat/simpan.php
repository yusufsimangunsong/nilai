<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $matadiklat= $_POST['matadiklat'];
    $sks       = $_POST['sks'];

    $sql="INSERT INTO matadiklat SET matadiklat='$matadiklat', sks='$sks'";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=matadiklat');
        // Var_dump($sql);
        // Cek error
    } else {
        include 'index.php?m=matadiklat';
        echo 'script language="JavaScipt">';
        echo 'alert("Gagal menambahkan data")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
?>