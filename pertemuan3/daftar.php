<?php
$siswa = [
    ["nama" => "Deniz", "nilai" => 99],
    ["nama" => "Aksa", "nilai" => 80],
    ["nama" => "Ghani", "nilai" => 61],
    ["nama" => "Azzam", "nilai" => 50],
    ["nama" => "Rafa", "nilai" => 64],
    ["nama" => "Rangga", "nilai" => 40],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" cellpadding="10" style="border-collapse:collapse">
        <tr>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
        <?php
        foreach ($siswa as $s) {
            echo "<tr>";
            echo "<td>{$s['nama']}</td>";
            echo "<td>{$s['nilai']}</td>";
            
            if ($s["nilai"] >= 70) {
                $status = "<span style='color: green;'>Lulus</span>";
            } elseif ($s["nilai"] >= 50) {
                $status = "<span style='color: orange;'>Remedial</span>";
            } else {
                $status = "<span style='color: red;'>Tidak Lulus</span>";
            }
            
            echo "<td>{$status}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
