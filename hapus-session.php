 <?php

session_start();
$nama = $_SESSION['nama'];
$umur = $_SESSION['umur'];
$major = $_SESSION['solusi'];

if($major){
    include "koneksi.php";

    $sql_users = "INSERT INTO tb_users (name, age,major) VALUES ('$nama', $umur,'$major')";
    if (mysqli_query($connect, $sql_users)) {
    
        session_unset(); 
        session_destroy(); 
    
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql_users . "<br>" . mysqli_error($connect);
    }
    
    mysqli_close($connect);
}else{
    session_unset(); 
    session_destroy(); 
    
    header('Location: index.php');
    exit();
}

?>