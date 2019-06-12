<?
//1.create a database connection
$dbhost = 'localhost';
$dbuser = 'jiang-minghao';
$dbpass = 'ge3p9000';
$dbname = '2201713130214';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if the connection works.
if (mysqli_connect_errno()){
    die('Database connection failed: ' .
        mysqli_connect_error().
        '('. mysqli_connect_error() .')'
    );
}
?>