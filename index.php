
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="http://parsleyjs.org/dist/parsley.js"></script>
    <title>Hitung Billing</title>
</head>
<body>
    <div class="container">
        <h1 align="center">Aplikasi Hitung Billing</h1>
        <form action="proses.php" method="POST" onsubmit="myFunction()">
            <table>
                <tr>
                    <td>Mulai Billing :</td>
                    <td>Jam</td>
                    <td>Menit</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name="jamMulai" id="jamMulai">
                            <?php
                                for ($i=1; $i<=24; $i++){
                                    echo "<option value=".$i.">".$i."</option>";
                                }
                            ?>
                        </select>
                    </td>
                    <td><input type="text" name="menitMulai" id="menitMulai" required></td>
                </tr>            
                <tr>
                    <td>Akhir Billing :</td>
                    <td>Jam</td>
                    <td>Menit</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <select name="jamAkhir" id="jamAkhir">
                            <?php
                                for ($i=1; $i<=24; $i++){
                                    echo "<option value=".$i.">".$i."</option>";
                                }
                            ?>
                        </select>                    
                    </td>
                    <td><input type="text" name="menitAkhir" id="menitAkhir" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="cekmember" id="member" value="true" required>Member</td>
                    <td><input type="radio" name="cekmember" id="nonmember" value="false" required>Non Member</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Hitung Ongkos" onClick="validasi()" onClick="Number('Data yang dimasukan Harus Berupa Angka')"  value="Submit"></td>
                    <td></td>
                </tr>
            </table>            
        </form>        
    </div>
</body>
<script>
    function validasi() {        
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
    function Number(pesan) {
        var jamMulai = document.getElementById("jamMulai").value;
        var menitMulai = document.getElementById("menitMulai").value;
        var jamAkhir = document.getElementById("jamAkhir").value;
        var menitAkhir = document.getElementById("menitAkhir").value;
        var numberExp = /^[0-9]+$/;
        if(jamAwal.value.match(numberExp) && menitAwal.value.match(numberExp) && jamAkhir.value.match(numberExp) && menitAkhir.value.match(numberExp)) {
            return true;
        }
        else {
            alert(pesan);
            nilai.focus();
            return false;
        }
    }    
</script>
</html>