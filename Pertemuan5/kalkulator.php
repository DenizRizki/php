<!doctype html>
<html>  
    <head>    
        <meta charset="UTF-8" />    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>  
    </head>  
    <body class="bg-gray-100 flex items-center justify-center min-h-screen"> 
        
    <?php
    $billa1= "";
    $billa2=  "";
    $hasil=  "";
    $operasi=  "";

    if(isset($_POST['samdeng'])) {
        $billa1 = $_POST['bill1'];
        $billa2 = $_POST['bill2'];
        $operasi = $_POST['operasi'];

        switch($operasi){
                 case 'plus':
                    $hasil =  $billa1 + $billa2;
                     break;

                case 'min':
                    $hasil =  $billa1 - $billa2;
                    break;

                case 'times':
                    $hasil =  $billa1 * $billa2;
                    break;

                case 'division':
                    $hasil =  $billa1 / $billa2;
                    break;
        };
    };
    ?>






        <div class="bg-white p-8 rounded-lg shadow-lg w-100">
        <h2 class="text-3xl font-semibold text-center pb-5">Kalkulator</h2>

        <form action="" method="POST">
            <input type="text" name="bill1" class="w-full p-3 mb-5 border border-black-500 rounded-md"placeholder="Masukkan Bilangan Pertama" autocomplete="off"  value="<?php echo $billa1; ?>" >
            <input type="text" name="bill2" class="w-full p-3 mb-5 border border-black-500 rounded-md"placeholder="Masukkan Bilangan Kedua" autocomplete="off"  value="<?php echo $billa2; ?>">

            <select class="w-full p-3 mb-5 border border-black-500 rounded-md" name="operasi">
                <option value="plus"> + </option>
                <option value="min"> - </option>
                <option value="times"> x </option>
                <option value="division"> / </option>
            </select>

            <input type="submit" name="samdeng" value="Hitung" class="w-full p-3 mb-5 bg-purple-500 hover:bg-purple-900 rounded-md text-white">
            <input type="text" name="hasil" class="w-full p-3 mb-5 border border-black-900 rounded-md"placeholder="Hasil Bilangan" autocomplete="off" readonly value="<?php echo $hasil; ?>">
        </form>

        </div>
            
    </body>
    </html>