<?PHP
// link to the database 
echo "backend FILE";

$servername = "localhost";
$username = "root";
$password = "";
$database = "test2";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}

// create database

/*    $sql = "CREATE DATABASE PrecisionMechanics";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Database created successfully";
} 
else {
    echo "Database not created successfully". mysqli_error($conn);
}  */ 

// create table

/*$sql = "CREATE TABLE `student` (`sno` INT NOT NULL , `name` VARCHAR(50) NOT NULL , `id` INT NOT NULL , `class` VARCHAR(50) NOT NULL )" ;
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "table created successfully";
} 
else {
    echo "table not created successfully". mysqli_error($conn);
} */

// insert data

$sql = "INSERT INTO `student` (`sno`, `name`, `id`, `class`) VALUES ('2', 'paras', '002', 'ftd')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "record insert successfully";
} 
else {
    echo "record not insert successfully". mysqli_error($conn);
}

?>