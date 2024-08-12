<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>

<body>
    <a href="index.php">Home</a>
    <a href="bmi.php">BMI</a>

    <from action="hasil_bmi.php" methot="POST"> 
        <div>
            <lebel for="name">Masukan Nama</lebel>
            <input type="text" name="nama">
        </div>

        <div>
            <lebel for="tinggi">Masukan Tinggi</lebel>
            <input type="number" name="tinggi">
        </div>

        <div>
            <lebel for="berat">Masukan Berat</lebel>
            <input type="number" name="berat">
        </div>

        <input type="submit" value="kirim">



    </from>
</body>
</html>