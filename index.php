<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game List</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background:#eeeeee;
            padding:30px;
        }

        .container{
            background:white;
            max-width:1200px;
            margin:auto;
            padding:25px;
            border-radius:30px;
            border:1px solid #ececec;

            box-shadow:
                0 15px 35px rgba(0,0,0,0.12),
                0 5px 15px rgba(0,0,0,0.08);
        }

        .btn-center{
            text-align:center;
            margin-bottom:25px;
        }

        .btn-red{
            display:inline-block;
            text-decoration:none;
            color:#e11d1d;
            background:white;

            padding:15px 60px;

            border:4px solid #e11d1d;
            border-radius:50px;

            font-size:22px;
            font-weight:bold;

            box-shadow:0 5px 15px rgba(0,0,0,0.1);

            transition:0.3s;
        }

        .btn-red:hover{
            background:#e11d1d;
            color:white;
            transform:translateY(-3px);
        }

        table{
            width:100%;
            border-collapse:collapse;
            overflow:hidden;
            border-radius:20px;
            background:white;

            box-shadow:
                0 8px 20px rgba(0,0,0,0.08);
        }

        thead{
            background:#e11d1d;
            color:white;
        }

        th{
            padding:15px;
            font-size:18px;
        }

        td{
            padding:12px;
            text-align:center;
            border-bottom:1px solid #ddd;
            font-size:16px;
        }

        tbody tr{
            transition:0.3s;
        }

        tbody tr:hover{
            background:#fff5f5;
        }

        img{
            width:170px;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.15);
        }
    </style>

</head>
<body>

<div class="container">

<?php
//แสดง error

// Report all PHP errors
error_reporting(E_ALL);

// Force errors to be displayed on the screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'action/connect.php';

//. เลือกทั้งหมดจากตารางเกม
$sql = "SELECT * FROM games";
$result = mysqli_query($con,$sql);
?>

<div class="btn-center">
    <a href="game_type.php" class="btn-red">Game Type</a>
</div>

<table border="1">
   <thead>
      <tr>
         <th>รหัสเกม</th>
         <th>ชื่อเกม</th>
         <th>ราคา</th>
         <th>ภาพปก</th>
         <th>ประเภท</th>
      </tr>
   </thead>

   <?php
      foreach($result as $game){
   ?>
         <tr>
            <td><?= $game["game_id"] ?></td>
            <td><?= $game["game_name"] ?></td>
            <td><?= $game["game_price"] ?></td>
            <td>
               <img
               src="<?= $game["game_cover"] ?>"
               style="width:170px"
               >
            </td>
            <td><?= $game["type_id"] ?></td>
         </tr>
   <?php
      }
   ?>

</table>

</div>

</body>
</html>