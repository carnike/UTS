<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// database name
$mydatabase = 'MYSQL_DATABASE';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

// select query
$sql = 'SELECT * FROM users';

// Query untuk mengambil jumlah user
$sql = "SELECT COUNT(*) as total FROM users";
$result = mysqli_query($conn, $sql);

// Cek hasil query
if (mysqli_num_rows($result) > 0) {
    // Output data dari setiap baris
    while($row = mysqli_fetch_assoc($result)) {
        echo "\n\nTotal User: " . $row["total"];
    }
} else {
    echo "Tidak ada data.";
}
?>