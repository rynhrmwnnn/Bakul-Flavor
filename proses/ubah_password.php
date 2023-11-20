<?php
session_start();
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "" ;
$passwordlama = (isset($_POST['passwordlama'])) ? htmlentities($_POST['passwordlama']) : "" ;
$repasswordbaru = (isset($_POST['repasswordbaru'])) ? htmlentities($_POST['repasswordbaru']) : "" ;

if(!empty($_POST['submit_validate'])){
    $query = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$_SESSION[username_bakul]' && password = '$passwordlama'");
    $hasil = mysqli_fetch_array($query);
    if ($hasil){
        $query = mysqli_query($conn, "UPDATE tb_users SET nama='$name', username='$username', level='$level', nohp='$nohp',
        alamat='$alamat' WHERE id='$id'");
        if($query){
            $message = '<script>
            alert("bajisan");
            window.location = "../user"
            </script>
            </script>';
            }else{
            $message = '<script>
            alert("kontol")
            </script>';
            }
    } else {?>
<script>
alert('Username atau Password yang anda masukkan salah');
window.location = '../login'
</script>
<?php
    }
}echo $message;
?>