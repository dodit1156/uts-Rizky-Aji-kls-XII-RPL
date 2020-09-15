<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href=""pprel="stylesheet" >

        <!-- Styles -->
        <style>
            html, body{
                background: #F2F2F2;
                font-family: sans-serif;
            }

            .kalkulator{
                width: 335px;
                background: #2F495A;
                margin: 100px auto;
                padding: 10px 20px 50px 20px;
                border-radius: 10px;
                box-shadow: 0px 10px 20px 0px #D1D1D1;
            }

            .bil{
                width: 300px;
                margin: 5px;
                border: none;
                font-size: 16pt;
                border-radius: 5px;
                padding: 10px;  
            }

            .opt{
                font-size: 16pt;
                border: none;
                width: 140px;
                margin: 5px;
                border-radius: 5px;
                padding: 10px;
            }

            .tombol{
                background: #EC5159;
                border-top: none;
                border-right: none;
                border-left: none;
                border-radius: 5px;
                padding: 10px 20px;
                color: #eee;
                font-size: 15pt;
                border-bottom:4px solid #BF3D3D;
            }

            .brand{
                color: #eee;
                font-size: 11pt;
                float: right;
                text-decoration: none;
                margin: 12px;
            }

            .judul{
                text-align: center;
                color: #eee;
                font-weight: normal;
            }

            .ct{
                 font-size: 15pt;
                border: none;
                width: 60px;
                margin: 5px;
                border-radius: 5px;
                padding: 10px;
            }
        </style>
    </head>
    <body>
   <?php 
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;          
        }
    }
    ?>
        <div class="kalkulator">
            <h2 class="judul">KALKULATOR RUMUS</h2>
            <a class="brand" href=" "></a>
            <form method="post" action="index.php"> 
              <select class="opt" name="operasi">
                    <option value="none">.</option>
                    <option value="Luas Alas">r</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="none">.</option>
                </select> 
                 <select class="ct" name="operasi">
                    <option value="none">.</option>
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
        
                </select>                                      
                <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Angka nya">
                <select class="opt" name="operasi">
                    <option value="none">.</option>
                    <option value="Tinggi">t</option>
                    <option value="1/3 ">1/3 </option>
                    <option value="kali">x</option>
        
                </select>
                 <select class="ct" name="operasi">
                    <option value="none">.</option>
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
        
                </select>                               
                <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Angkanya">
                <select class="opt" name="operasi">
                    <option value="none">.</option>
                    <option value="Tinggi">t</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
        
                </select>
                 <select class="ct" name="operasi">
                    <option value="none">.</option>
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
        
                </select>                               
                <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Angkanya">
                <input type="submit" name="hitung" value="Hitung" class="tombol">            
            </form>
            <?php if(isset($_POST['hitung'])){ ?>
                <input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php }else{ ?>
                <input type="text" value="" class="bil">
            <?php } ?>          
        </div>
    </body>
</html>
