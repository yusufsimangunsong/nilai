<?php
if(isset($_GET['id'])){
    include_once('koneksi.php');
    $id = $_GET['id'];

    $sql="DELETE FROM matadiklat WHERE id='$id'";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=matadiklat');
        // Var_dump($sql);
        // Cek error
    } else {
        include 'index.php?m=matadiklat';
        echo 'script language="JavaScipt">';
        echo 'alert("Data Gagal Di Hapus")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
?>