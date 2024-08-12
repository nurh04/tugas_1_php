<?php 
function luas($t, $a)
{
    $luas =0,5 * $t *$a;
    echo "<h3 class='res'>luas segitiga dengan tinggi $t dan pajang alas $a adalah $luas></h3>";
    echo "<br>";
}

function keliling()
{
    echo "<h3>ngelu</h3>";
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Segitiga</title>
    <style>
        .red{
            coler:red;
        }
    </style>
</head>
<body>
        <?php 
        $tinggi = $_POST["tinngi"];
        $alas =$_POST["alas"];

        luas($tinggi,$alas);
        keliling():
        
        ?>

        <h3>luas segitiga dengan tinngi <?=$tinggi?> dan panjang alas <?= $alas ?> adalah <?php echo $luas ?></h3>

        
</body>
</html>