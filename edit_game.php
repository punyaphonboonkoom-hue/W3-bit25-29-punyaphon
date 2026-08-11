<?php
include 'action/connect.php';

$game_id = $_GET["id"];
$sql = "SELECT * FROM games WHERE game_id = '$game_id'";
$result = mysqli_query($con, $sql);
$game = mysqli_fetch_assoc($result);

$type_sql = "SELECT * FROM game_types";
$type_result = mysqli_query($con, $type_sql);
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Game</title>
    <style>
        * { box-sizing: border-box; }
        body { background: #11111a; color: #e8e8f0; font-family: Arial, sans-serif; margin: 0; }
        .navbar { background: #16161e; padding: 18px 48px; }
        .navbar a { color: #b4b4c4; text-decoration: none; margin-right: 25px; }
        .form-wrap { max-width: 600px; margin: 50px auto; padding: 0 24px; }
        .form-card { background: #1e1e2a; border-radius: 15px; padding: 32px; }
        h1 { margin-top: 0; }
        label { display: block; margin: 18px 0 6px; color: #b3a4ff; }
        input, select { width: 100%; padding: 12px; border: 1px solid #555; border-radius: 8px; background: #282838; color: #fff; }
        button { width: 100%; margin-top: 24px; padding: 13px; border: 0; border-radius: 8px; background: #7c6af7; color: #fff; font-size: 15px; cursor: pointer; }
    </style>
    <link rel="stylesheet" href="assets/css/steam.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">SandStore🎮</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="game_type.php">Game Types</a>
            <a href="game_add.php">Game add</a>
            <a href="game_manage.php">Manage game</a>
        </nav>
    </div>

    <div class="form-wrap">
        <div class="form-card">
            <h1>แก้ไขเกม</h1>
            <form action="action/update_game.php" method="post">
                <input type="hidden" name="game_id" value="<?= $game["game_id"] ?>">

                <label>ชื่อเกม</label>
                <input type="text" name="game_name" value="<?= $game["game_name"] ?>">

                <label>ราคา</label>
                <input type="number" name="game_price" value="<?= $game["game_price"] ?>">

                <label>ลิงก์ภาพปก</label>
                <input type="text" name="game_cover" value="<?= $game["game_cover"] ?>">

                <label>ประเภท</label>
                <select name="type_id">
                    <?php foreach($type_result as $type){ ?>
                        <option value="<?= $type["type_id"] ?>" <?= $type["type_id"] == $game["type_id"] ? "selected" : "" ?>>
                            <?= $type["type_name"] ?>
                        </option>
                    <?php } ?>
                </select>

                <button type="submit">บันทึกการแก้ไข</button>
            </form>
        </div>
    </div>
</body>
</html>