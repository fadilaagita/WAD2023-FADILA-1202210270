<?php

// **********************  1  ************************** 
// ========== tangkap nilai tinggi_badan dan berat_badan yang ada pada form html
// silakan taruh code kalian di bawah

// **********************  1  ************************** 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator BMI</title>
</head>
<body>
    <h1>Kalkulator BMI</h1>
    <form method="POST" action="">
        <label for="tinggi_badan">Tinggi Badan (cm)</label>
        <input type="number" name="tinggi_badan" id="tinggi_badan" placeholder="Masukan tinggi badan Anda">
        <br>
        <label for="berat_badan">Berat Badan (kg)</label>
        <input type="number" name="berat_badan" id="berat_badan" placeholder="Masukan berat badan Anda">
        <br>
        <input type="submit" value="Hitung BMI">
    </form>
?>

// **********************  2  ************************** 
// ========== buatkan sebuah perkondisian di mana 
// tinggi_badan atau $berat_badan tidak boleh kosong nilainya, kalau kosong buatkanlah pesan error
// silakan taruh code kalian di bawah


// **********************  2  ************************** 


// **********************  3  ************************** 
// ========== buatkanlah perkondisian di mana Jika kesalahan Error-nya "empty", 
// masukkan perhitungan BMI sesuai dengan rumus yang tertera pada jurnal
// silakan taruh code kalian di bawah


// **********************  3  ************************** 
<?php
    if (isset($_POST['tinggi_badan']) && isset($_POST['berat_badan'])) {
        $tinggi_badan = $_POST['tinggi_badan'] / 100;
        $berat_badan = $_POST['berat_badan'];

        $bmi = $berat_badan / ($tinggi_badan * $tinggi_badan);

        $status = "";
        if ($bmi <= 18.4) {
            $status = "Underweight";
        } else if ($bmi <= 24.9) {
            $status = "Normal";
        } else if ($bmi <= 39.9) {
            $status = "Overweight";
        } else {
            $status = "Obese";
        }
    </body>
    </html>
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100">Hitung BMI</button>
                    </form>

                    <!--  **********************  4  **************************     -->
                    <!-- Hasilnya perhitungan BMI taruh di sini yaaa!! 😊 -->
                    <!-- silakan taruh code kalian di bawah -->
                    
                    
                    <!--  **********************  4  **************************     -->
                    echo "<p>Hasil perhitungan:</p>";
                    echo "<ul>";
                    echo "<li>BMI: " . number_format($bmi, 2) . "</li>";
                    echo "<li>Status: " . $status . "</li>";
                    echo "</ul>";
                } else {
                    echo "<p>Tinggi badan dan berat badan tidak boleh kosong.</p>";
                }
                ?>
            </body>
            </html>



                    <!--  **********************  5  **************************     -->
                    <!-- Hasil pesan error nya taruh di sini yaaa!! 😊  -->
                    <!-- silakan taruh code kalian di bawah -->
                    

                    <!--  **********************  5  **************************     -->


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>