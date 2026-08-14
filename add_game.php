<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Game - Game Store</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #ffffff;
        color: #222222;
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
    }

    /* =========================
       NAVBAR
    ========================= */

    .navbar {
        background: #ffffff;
        padding: 18px 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;

        border-bottom: 2px solid #eeeeee;

        position: sticky;
        top: 0;
        z-index: 100;

        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
    }

    .navbar .logo {
        font-size: 22px;
        font-weight: 800;
        color: #e50914;
        letter-spacing: 0.5px;
    }

    .navbar nav a {
        color: #555555;
        text-decoration: none;
        margin-left: 32px;
        font-size: 14px;
        font-weight: 600;

        transition: all 0.25s;
    }

    .navbar nav a:hover {
        color: #e50914;
    }

    .navbar nav a.active {
        color: #e50914;
    }



    .footer {

            width: 100%;

            background: #ffffff;

            border-top: 3px solid #e30613;

            padding: 22px 20px;

            text-align: center;

            margin-top: auto;

            box-shadow:
                0 -4px 15px rgba(0, 0, 0, 0.05);
        }

    /* =========================
       PAGE HEADER
    ========================= */

    .page-header {
        max-width: 600px;
        margin: 48px auto 8px;
        padding: 0 24px;
    }

    .page-header h1 {
        font-size: 32px;
        font-weight: 800;
        color: #222222;
    }

    .page-header h1::after {
        content: "";
        display: block;

        width: 55px;
        height: 5px;

        background: #e50914;

        border-radius: 10px;

        margin-top: 10px;
    }

    .page-header p {
        margin-top: 10px;
        color: #888888;
        font-size: 14px;
    }


    /* =========================
       FORM WRAPPER
    ========================= */

    .form-wrap {
        max-width: 600px;
        margin: 32px auto 70px;
        padding: 0 24px;
    }


    /* =========================
       FORM CARD
    ========================= */

    .form-card {
        background: #ffffff;

        border: 1px solid #eeeeee;

        border-top: 5px solid #e50914;

        border-radius: 16px;

        padding: 32px;

        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.08);
    }


    /* =========================
       FORM ELEMENTS
    ========================= */

    .field {
        margin-bottom: 18px;
    }

    .field label {
        display: block;

        font-size: 13px;

        font-weight: 700;

        color: #333333;

        margin-bottom: 7px;

        letter-spacing: 0.3px;
    }


    /* INPUT + SELECT */

    .field input,
    .field select {

        width: 100%;

        padding: 13px 14px;

        border-radius: 9px;

        border: 1px solid #dddddd;

        background: #ffffff;

        color: #222222;

        font-family: 'Poppins', sans-serif;

        font-size: 14px;

        transition: all 0.2s;
    }


    /* INPUT HOVER */

    .field input:hover,
    .field select:hover {

        border-color: #bbbbbb;
    }


    /* INPUT FOCUS */

    .field input:focus,
    .field select:focus {

        outline: none;

        border-color: #e50914;

        box-shadow:
            0 0 0 3px rgba(229, 9, 20, 0.10);

        background: #fffafa;
    }


    /* SELECT */

    .field select {

        cursor: pointer;
    }

    .field select option {

        background: #ffffff;

        color: #222222;
    }


    /* =========================
       SUBMIT BUTTON
    ========================= */

    .btn-submit {

        width: 100%;

        padding: 14px;

        border: none;

        border-radius: 9px;

        background: #e50914;

        color: #ffffff;

        font-family: 'Poppins', sans-serif;

        font-size: 15px;

        font-weight: 700;

        cursor: pointer;

        margin-top: 8px;

        transition: all 0.25s;

        box-shadow:
            0 5px 15px rgba(229, 9, 20, 0.20);
    }


    .btn-submit:hover {

        background: #c9000b;

        transform: translateY(-2px);

        box-shadow:
            0 8px 20px rgba(229, 9, 20, 0.30);
    }


    .btn-submit:active {

        transform: translateY(0);
    }


    /* =========================
       BACK BUTTON
    ========================= */

    .btn-back {

        display: inline-block;

        margin-top: 14px;

        width: 100%;

        padding: 12px;

        text-align: center;

        border-radius: 9px;

        border: 1px solid #e50914;

        color: #e50914;

        background: #ffffff;

        text-decoration: none;

        font-size: 14px;

        font-weight: 600;

        transition: all 0.2s;
    }


    .btn-back:hover {

        background: #fff0f0;

    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 768px) {

        .navbar {

            padding: 16px 20px;

            flex-direction: column;

            gap: 15px;
        }

        .navbar nav {

            display: flex;

            flex-wrap: wrap;

            justify-content: center;
        }

        .navbar nav a {

            margin: 5px 10px;
        }

        .page-header {

            padding: 0 20px;
        }

        .form-wrap {

            padding: 0 20px;
        }

        .form-card {

            padding: 24px;
        }
    }

</style>
   
    <link rel="stylesheet" href="assets/css/steam.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">SandStore🎮</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="game_type.php">Game Types</a>
            <a href="add_game.php">Game add</a>
            <a href="manage_game.php">Manage game</a>
        </nav>
    </div>

    <div class="page-header">
        <h1>Add New Game</h1>
        <p>เพิ่มเกมใหม่เข้าระบบ</p>
    </div>

    <div class="form-wrap">
        <div class="form-card">

            <form action="action/insert_game.php" method="post">

                <div class="field">
                    <label for="game_id">รหัสเกม</label>
                    <input type="text" name="game_id" id="game_id">
                </div>

                <div class="field">
                    <label for="game_name">ชื่อเกม</label>
                    <input type="text" name="game_name" id="game_name">
                </div>

                <div class="field">
                    <label for="game_price">ราคา</label>
                    <input type="number" name="game_price" id="game_price">
                </div>

                <div class="field">
                    <label for="game_cover">ลิงก์ภาพปก</label>
                    <input type="text" name="game_cover" id="game_cover">
                </div>

                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);

                include 'action/connect.php';

                $sql = "SELECT * FROM game_types";

                $result = mysqli_query($con, $sql);
                ?>

                <div class="field">
                    <label for="type_id">ประเภท</label>
                    <select name="type_id" id="type_id">
                        <?php
                        foreach($result as $type){
                            ?>
                                <option value="<?= $type["type_id"] ?>"> <?= $type["type_name"] ?> </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <button class="btn-submit">บันทึก</button>

            </form>

        </div>
    </div>

      <footer class="footer">

        <div class="footer-name">
            นส ปุณยาพร บุญคุ้ม
        </div>

        <div class="footer-class">
            เลขที่ 29 | BIT25
        </div>

    </footer>

</body>
</html>