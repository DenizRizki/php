<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="flex gap-10">
       
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-3xl font-semibold text-center pb-5">Form Input Nilai Siswa</h2>

            <form action="" method="POST">
                <label for="name">Nama Siswa</label>
                <input type="text" name="name" class="w-full p-3 mb-5 border border-black-500 rounded-md"
                    autocomplete="off">

                <label for="niltu">Nilai Tugas</label>
                <input type="text" name="niltu" class="w-full p-3 mb-5 border border-black-500 rounded-md"
                    autocomplete="off">

                <label for="nilut">Nilai UTS</label>
                <input type="text" name="nilut" class="w-full p-3 mb-5 border border-black-500 rounded-md"
                    autocomplete="off">

                <label for="nilu">Nilai UAS</label>
                <input type="text" name="nilu" class="w-full p-3 mb-5 border border-black-500 rounded-md"
                    autocomplete="off">

                <input type="submit" name="pencet" value="Hitung"
                    class="w-full p-3 mb-5 bg-blue-500 hover:bg-blue-900 rounded-md text-white">
            </form>
        </div>

      
        <div class="flex flex-col items-center">
        
            <div class="bg-white p-8 rounded-lg shadow-lg w-96">
                <h2 class="text-3xl font-semibold text-center pb-5">Hasil Penilaian</h2>

                <table class="w-full border-collapse border border-black">
                    <tr class="bg-stone-900">
                        <th class="border border-black p-2 text-white">Nama</th>
                        <th class="border border-black p-2 text-white">Nilai Akhir</th>
                        <th class="border border-black p-2 text-white">Kategori</th>
                    </tr>

                    <?php 
$name = "";
$niltu = "";
$nilut = "";
$nilu = "";
$kategori = "";
$hasil_akhir = "";

if(isset($_POST["pencet"])){
    $name = $_POST["name"];
    $niltu = $_POST["niltu"];
    $nilut = $_POST["nilut"];
    $nilu = $_POST["nilu"];

    $hasil_akhir = ($niltu * 0.3) + ($nilut * 0.3) + ($nilu * 0.4); 

    if ($hasil_akhir >= 85) {
        $kategori = "A";
    } else if ($hasil_akhir >= 70) {
        $kategori = "B";
    } else if ($hasil_akhir >= 60) {
        $kategori = "C";
    } else if ($hasil_akhir >= 50) {
        $kategori = "D";
    } else {
        $kategori = "E";
    }
}
?>

<tr>
    <td class='border border-stone-900 p-2 text-center'><?= htmlspecialchars($name); ?></td>
    <td class='border border-stone-900 p-2 text-center'><?= htmlspecialchars($hasil_akhir); ?></td>
    <td class='border border-stone-900 p-2 text-center'><?= htmlspecialchars($kategori); ?></td>
</tr>
        </table>
            </div>

           
            <input type="submit" name="hapus" value="Hapus Semua Data"
                class="w-96 p-3 mt-5 bg-red-500 hover:bg-red-900 rounded-md text-white">
        </div>
    </div>

</body>

</html>
