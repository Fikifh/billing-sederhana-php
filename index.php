
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
        <form action="proses.php" method="POST" onsubmit="myFunction()">
            <table>
                <tr>
                    <td>Mulai Billing :</td>
                    <td>Jam</td>
                    <td>Menit</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="jamMulai" id="jamMulai"></td>
                    <td><input type="text" name="menitMulai" id="menitMulai"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Akhir Billing :</td>
                    <td>Jam</td>
                    <td>Menit</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="jamAkhir" id="jamAkhir"></td>
                    <td><input type="text" name="menitAkhir" id="menitAkhir"></td>
                </tr>
            </table>
            <input type="submit" value="Hitung Ongkos">
        </form>        
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