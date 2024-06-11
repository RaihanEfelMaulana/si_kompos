<?php
include 'conn.php';

$queryResult = $connect->query("SELECT * FROM dashboard ORDER BY id DESC LIMIT 5;");

$result = array();

if ($queryResult) {
    while ($fetchData = $queryResult->fetch_assoc()) {
        $dateTime = new DateTime($fetchData['time']);
 
        $formattedTime = $dateTime->format('d');
        $formattedTime1 = $dateTime->format('m');
        $formattedTime2 = $dateTime->format('y');
        
        $result[] = array(
            'suhu' => $fetchData['suhu'],
            'kelembaban' => $fetchData['kelembaban'],
            'time' => $formattedTime,
            'month' => $formattedTime1,
            'year' => $formattedTime2,
        );
    }
    echo json_encode($result);
} else {
    echo json_encode(array('message' => 'Gagal mengeksekusi query.'));
}
?>
