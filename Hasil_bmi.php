<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
</head>
<body>
    <?php 

        $nama = $POST["nama"];
        $tinggi = $POST["tinggi"] / 100;
        $berat = $POST["berat"];
    ?>    

    <h3>Nilai BMI kamu adalah : <?= $bmi; ?></h3>

    <?php 
    
        // Di bawah 18,5 =Berat badan kurang.
        // 18,5-22,9 =Berat badan normal.
        // 23-29,9 =Berat badan berlebihan (kecenderung obesitas).
        // 30 ke atas = obesitas.
        
    ?>

    <p>Standar kategori berat badan pria dan wanita menurut WHO : <?php?></p>
</body>
</html>