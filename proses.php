<?php
     $jamAwal = $_POST['jamMulai'];
     $menitAwal = $_POST['menitMulai'];

     $jamAkhir = $_POST['jamAkhir'];
     $menitAkhir = $_POST['menitAkhir'];
     $member = false;
     $harga = null;
     function durasi($jam, $menit){
         $durasi = 60 * $jam + $menit;
         return $durasi;
     }

     function durasiNonMember($jam, $menit){
        $durasi = $jam;
        return $durasi;
     }     
     if($member == true){
        $durasiAwal = durasi($jamAwal, $menitAwal);
        $durasiAkhir = durasi($jamAkhir, $menitAkhir);
        $durasi = $durasiAkhir - $durasiAwal;
        if($durasi <= 180){
            $harga = $durasi  * 50;
         }else {
             $harga = $durasi * 30;
         }
     }else{
        $durasiAwal = durasiNonMember($jamAwal, $menitAwal);
        $durasiAkhir = durasiNonMember($jamAkhir, $menitAkhir);
        $durasi = $durasiAkhir - $durasiAwal;
        if($durasi <= 3){
            $harga = $durasi  * 3000;
         }else {
            $durasiAwal = durasi($jamAwal, $menitAwal);
            $durasiAkhir = durasi($jamAkhir, $menitAkhir);
            $durasi = $durasiAkhir - $durasiAwal;
            $harga = $durasi * 50;
         }
     }     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Harga</title>
</head>
<body>
    <div class="container">       
        <div class="total">                        
            <?php 
            if($harga <= 0){
                echo "<p>Waktu Selesai tidak boleh kurang dari waktu mulai !</p>";
            }else{
                echo "<h1>Total yang Harus Anda Bayar adalah : </h1>"."<h2>Rp. ".$harga."</h2>";
            }
            ?>
        </div>
    </div>
</body>
<script>
    function myFunction() {
        alert("The form was submitted");
        var jamMulai = document.getElementById("jamMulai").value;
        var menitMulai = document.getElementById("menitMulai").value;
        var jamAkhir = document.getElementById("jamAkhir").value;
        var menitAkhir = document.getElementById("menitAkhir").value;
        if (jamMulai >= jamAkhir || menitMulai >= menitAkhir) {
            alert("Jam akhir tidak boleh kurang dari jam mulai !");
        }else
            return true;
        }
    }
</script>
</html>