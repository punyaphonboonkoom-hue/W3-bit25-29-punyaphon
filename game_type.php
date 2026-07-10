<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body{
        background:#eeeeee;
        padding:30px;
    }

    .container{
        background:white;
        max-width:900px;
        margin:auto;
        padding:30px;
        border-radius:30px;
        border:1px solid #ececec;

        box-shadow:
            0 15px 35px rgba(0,0,0,0.12),
            0 5px 15px rgba(0,0,0,0.08);
    }

    .btn-center{
        text-align:center;
        margin-bottom:30px;
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
        font-weight:800;

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
        padding:18px;
        font-size:22px;
        font-weight:800;
    }

    td{
        padding:18px;
        text-align:center;
        border-bottom:1px solid #e5e5e5;
        font-size:20px;
        font-weight:600;
        color:#333;
    }

    tbody tr{
        transition:0.3s;
    }

    tbody tr:hover{
        background:#fff5f5;
    }

    .type-id{
        font-weight:800;
        color:#444;
    }

    .type-name{
        font-weight:800;
        color:#222;
    }
</style>

</head>
<body>

<div class="container">

<?php

include 'action/connect.php';

$sql = "SELECT * FROM game_types";
// ทำงานที่ไหน, ทำอะไร
$result = mysqli_query($con, $sql);

?>

<div class="btn-center">
    <a href="index.php" class="btn-red">Index.php</a>
</div>

<table border=1>
<thead>
<th>รหัสประเภท</th>
<th>ชื่อประเภท</th>
</thead>

<?php
foreach($result as $type){
//var_dump($game);

?>
<tr>
<td class="type-id"> <?= $type["type_id"] ?> </td>
<td class="type-name"> <?= $type["type_name"] ?> </td>
</tr>
<?php
}
?>
</table>

</div>

</body>
</html>