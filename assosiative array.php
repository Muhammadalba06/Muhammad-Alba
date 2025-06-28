<!DOCTYPE html>
<html>
<head>
    <title>Penemu Terkenal di Dunia</title>
    <style>
        table {
            border-collapse: collapse;
            width: 95%;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>perusahaan Terkenal di Dunia</h2>

<?php
$perusahaan = array(
    array(
        "nama" => "Lenovo",
        "asal" => "China",
        "bidang" => "Teknologi dan Manufaktur",
        "tahun" => 1984,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Lenovo_%282015%29.svg/1920px-Lenovo_%282015%29.svg.png"
    ),
    array(
        "nama" => "Acer",
        "asal" => "Taiwan",
        "bidang" => "Teknologi dan Manufaktur",
        "tahun" => 1976,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Acer_2011.svg/440px-Acer_2011.svg.png"
    ),
    array(
        "nama" => "Microsoft",
        "asal" => "Amerika",
        "bidang" => " pembuat perangkat lunak",
        "tahun" => 1975,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Microsoft_logo_%282012%29.svg/1920px-Microsoft_logo_%282012%29.svg.png"
    ),
    array(
        "nama" => "HP",
        "asal" => "Amerika",
        "bidang" => "Teknologi dan Manufaktur",
        "tahun" => 2015,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/800px-HP_logo_2012.svg.png"
    ),
    array(
        "nama" => "Asus",
        "asal" => "Taiwan",
        "bidang" => "Teknologi dan Manufaktur",
        "tahun" => 1989,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/AsusTek_logo.svg/1920px-AsusTek_logo.svg.png"
    ),
    array(
        "nama" => "Samsung",
        "asal" => "Korea Selatan",
        "bidang" => "pemrosesan makanan, tekstil, asuransi, sekuritas, dan ritel dan teknologi",
        "tahun" => 1938,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Samsung_wordmark.svg/800px-Samsung_wordmark.svg.png"
    ),
    array(
        "nama" => "Advan",
        "asal" => "Indonesia",
        "bidang" => "Elektronik",
        "tahun" => 1999 ,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Advan_%282024%29.png/800px-Advan_%282024%29.png"
    ),
    array(
        "nama" => "Axioo",
        "asal" => "Indonesia",
        "bidang" => "Elektronik",
        "tahun" => 2004 ,
        "gambar" => "https://upload.wikimedia.org/wikipedia/id/thumb/c/c0/Logo_Axioo_Baru.png/800px-Logo_Axioo_Baru.png"
    ),
    array(
        "nama" => "Itel Mobile",
        "asal" => "China",
        "bidang" => "Elektronik",
        "tahun" => 2014,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Itel_Indonesia_logo.png/800px-Itel_Indonesia_logo.png"
    ),
    array(
        "nama" => "Infinix",
        "asal" => "China",
        "bidang" => "telepon genggam",
        "tahun" => 2013,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Infinix_logo.svg/800px-Infinix_logo.svg.png"
    )
);

echo "<table>";
echo "<tr><th>Nama</th><th>Asal</th><th>bidang</th><th>Tahun</th><th>Gambar</th></tr>";

foreach ($perusahaan as $data) {
    echo "<tr>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['asal']}</td>";
    echo "<td>{$data['bidang']}</td>";
    echo "<td>{$data['tahun']}</td>";
    echo "<td><img src='{$data['gambar']}' alt='{$data['nama']}'></td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>