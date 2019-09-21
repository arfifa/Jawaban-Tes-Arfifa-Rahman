<?php 
include 'koneksi.php';

function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function tambahKaryawan($data)
{
    global $conn;

    $name = htmlspecialchars($data['name']);
    $id_work = htmlspecialchars($data['work']);
    $id_salary = htmlspecialchars($data['salary']);

    $query = "INSERT INTO name 
	VALUES('',
	'$name','$id_work','$id_salary')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function editKaryawan($data)
{
    global $conn;

    $id = htmlspecialchars($data['id']);
    $name = htmlspecialchars($data['name']);
    $id_work = htmlspecialchars($data['work']);
    $id_salary = htmlspecialchars($data['salary']);

    $query = " UPDATE name SET
		name = '$name',
		id_work = '$id_work',
        id_salary = '$id_salary'
		WHERE id = '$id'
    ";
    echo $query;

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapusKaryawan($id)
{
    global $conn;

    $query = "DELETE FROM name WHERE id = '$id' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

?>