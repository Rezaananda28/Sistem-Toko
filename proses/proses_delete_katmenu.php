<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['hapus_kategori_validate'])) {
    $select = mysqli_query($conn, "SELECT katagori FROM tb_daftar_menu WHERE katagori = '$id'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Kategori telah digunakan pada daftar Menu. Kategori Tidak Dapat Di Hapus");
        window.location="../katmenu"</script>';
    } else {
        $query = mysqli_query($conn, "DELETE FROM tb_kategori_menu WHERE id_kat_menu = '$id'");
        if (!$query) {
            $message = '<script>alert("Data gagal dihapus"); 
        window.location="../katmenu"</script>';
        } else {
            $message = '<script>alert("Data berhasil dihapus");
        window.location="../katmenu"</script>';

        }
    }
}
echo $message;
?>