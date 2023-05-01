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

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->ID . " " . $user->Nama . " " . $user->Alamat . " " . $user->Jabatan;
    echo "<br>";
}
// query untuk menghitung jumlah user
$sql = "SELECT COUNT(*) as total_user FROM nama_tabel_user";
$result = $conn->query($sql);

// menampilkan hasil query
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Total user: " . $row["total_user"];
  }
} else {
  echo "Tidak ada user";
}
?>
