<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['input_user_validate'])) {
    $query = mysqli_query($conn, "DELETE FROM tb_menu WHERE id = '$id'");
    if ($query) {
        $message = '<script>alert("Menu berhasil dihapus");
        window.location="../menu"</script>';
    } else {
        $message = '<script>alert("Menu gagal dihapus");
        window.location="../menu"</script>';
    }
}
echo $message;
