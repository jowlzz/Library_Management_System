<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meta_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $data = 0;
    $title = $_REQUEST['t'];
    $author = $_REQUEST['a'];
    $publisher = $_REQUEST['p'];
    $year = $_REQUEST['y'];
    $pages = $_REQUEST['pg'];

    $sql = "INSERT INTO book_metadatas (title, author, publisher, year, pages) VALUES ('$title', '$author', '$publisher', '$year', '$pages')";
    if (mysqli_query($conn, $sql)) {
         $status = 200;
         $retVal = "success bruh";
    } else {
         $status = 400;
         $retVal = "error bruh";
    }

    $myObj = array(
        'status' => $status,
        'data' => $data,
        'message' => $retVal  
    );
    $myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
    echo $myJSON;

    mysqli_close($conn);


?>