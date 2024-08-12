<?php
$contoh_data_array = array("paijo,paijem,paimo,parno,purnomo");
$data_array1 =["paijo,paijem,paimo,parno,purnomo"];
$data_array1 =["paijo,paijem,paimo,parno,purnomo"];

$array_assosiative =[
    "siswa1" =>"paijo"
    "siswa2" =>"paijem"
    "siswa3" =>"paimo"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1 php</title>

    <style>
        .red{
            coler: red;
        }
    </style>
</head>
<body>
    
        <a href="index.php">Home</a>
        <a href="bmi.php">BMI</a>
        <a href="bangun_segitiga.php">Hitung Segitiga</a>

        <ul>
            <?php 
            for ($i =0; $i <count($data_array1);$i++){
                echo "<li>$data_array1[$i]</li>";
            }
            ?>
        </ul>

        <br>

        <ul>
            <?php 
            
            foreach(date_array1 as $siji)

                 echo"<li>$siji</li>";
            ?>
        </ul>

        <br>
        <ul>
            <?php 
            for ($i = 0; $i <count($data_array1);$i++) {
             ?>  
              <li><?php echo $data_array1[$i] ?>
            </li> 
            <?php
            }
            ?>
        </ul>          

</body>
</html>