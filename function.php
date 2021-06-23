<?php 

$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

function query($query, $id_name = '', $id = '') {
    if($id == '') {
        $getid = '';
    } else {
        $getid = "WHERE $id_name = $id";
    };
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM $query $getid");
    $rows = [];
    
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    };

    return $rows;

};
?>

<!-- u/ memanggil function di file php lain -->

<?php /*
require('function.php');

$anggota = query('data_anggota');
?>

made by: a lot of experiments

*/