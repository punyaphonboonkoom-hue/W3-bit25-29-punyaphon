
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

        /* =========================================
           RESET
        ========================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        html {
            width: 100%;
            min-height: 100%;
        }


        /* =========================================
           BODY
        ========================================= */

        body {

            width: 100%;

            min-height: 100vh;

            background:
                linear-gradient(
                    135deg,
                    #ffffff 0%,
                    #fff5f5 50%,
                    #ffffff 100%
                );

            color: #222222;

            font-family: Arial, sans-serif;

            display: flex;

            flex-direction: column;

        }


        /* =========================================
           NAVBAR
        ========================================= */

        .navbar {

            width: 100%;

            flex-shrink: 0;

            background: #ffffff;

            padding: 18px 48px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            border-bottom: 2px solid #eeeeee;

            box-shadow:
                0 4px 15px rgba(0, 0, 0, 0.08);

        }


        /* =========================================
           LOGO
        ========================================= */

        .logo {

            color: #e30613;

            font-size: 23px;

            font-weight: 800;

            white-space: nowrap;

        }


        /* =========================================
           NAVIGATION
        ========================================= */

        .navbar nav {

            display: flex;

            align-items: center;

        }


        .navbar nav a {

            position: relative;

            color: #555555;

            text-decoration: none;

            margin-left: 38px;

            font-size: 16px;

            font-weight: 700;

            transition: all 0.25s;

        }


        .navbar nav a:hover {

            color: #e30613;

        }


        .navbar nav a::after {

            content: "";

            position: absolute;

            left: 0;

            bottom: -8px;

            width: 0;

            height: 3px;

            background: #e30613;

            border-radius: 10px;

            transition: width 0.25s;

        }


        .navbar nav a:hover::after {

            width: 100%;

        }


        /* =========================================
           FORM WRAPPER
        ========================================= */

        .form-wrap {

            width: 100%;

            max-width: 760px;

            margin: 0 auto;

            padding: 60px 25px;

            flex: 1;

        }


        /* =========================================
           FORM CARD
        ========================================= */

        .form-card {

            width: 100%;

            background: #ffffff;

            border: 1px solid #eeeeee;

            border-radius: 18px;

            padding: 40px;

            box-shadow:
                0 12px 35px rgba(0, 0, 0, 0.08);

        }


        /* =========================================
           TITLE
        ========================================= */

        .form-card h1 {

            margin: 0 0 30px;

            font-size: 36px;

            font-weight: 800;

            color: #222222;

        }


        .form-card h1::first-letter {

            color: #e30613;

        }


        /* =========================================
           LABEL
        ========================================= */

        .form-card label {

            display: block;

            margin-top: 20px;

            margin-bottom: 8px;

            color: #e30613;

            font-size: 16px;

            font-weight: 700;

        }


        /* =========================================
           INPUT + SELECT
        ========================================= */

        .form-card input,
        .form-card select {

            width: 100%;

            height: 52px;

            padding: 0 15px;

            background: #ffffff;

            color: #333333;

            border: 1px solid #cccccc;

            border-radius: 10px;

            outline: none;

            font-size: 15px;

            font-family: Arial, sans-serif;

            transition: all 0.25s;

        }


        .form-card input:focus,
        .form-card select:focus {

            border-color: #e30613;

            box-shadow:
                0 0 0 3px rgba(227, 6, 19, 0.10);

        }


        /* =========================================
           BUTTON
        ========================================= */

        .form-card button {

            width: 100%;

            height: 55px;

            margin-top: 30px;

            border: none;

            border-radius: 10px;

            background: #e30613;

            color: #ffffff;

            font-size: 16px;

            font-weight: 700;

            cursor: pointer;

            box-shadow:
                0 6px 18px rgba(227, 6, 19, 0.22);

            transition: all 0.25s;

        }


        .form-card button:hover {

            background: #c9000b;

            transform: translateY(-2px);

            box-shadow:
                0 9px 22px rgba(227, 6, 19, 0.30);

        }


        /* =========================================
           FOOTER
        ========================================= */

        .footer {

            width: 100%;

            min-height: 110px;

            flex-shrink: 0;

            background: #ffffff;

            border-top: 3px solid #e30613;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 7px;

            box-shadow:
                0 -4px 15px rgba(0, 0, 0, 0.05);

        }


        .footer-name {

            color: #e30613;

            font-size: 16px;

            font-weight: 700;

        }


        .footer-class {

            color: #888888;

            font-size: 14px;

            font-weight: 600;

        }


        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 768px) {

            .navbar {

                padding: 16px 20px;

                flex-direction: column;

                gap: 18px;

            }


            .navbar nav {

                width: 100%;

                justify-content: center;

                flex-wrap: wrap;

                gap: 10px;

            }


            .navbar nav a {

                margin-left: 10px;

                margin-right: 10px;

                font-size: 14px;

            }


            .form-wrap {

                padding: 35px 18px 40px;

            }


            .form-card {

                padding: 28px 22px;

            }


            .form-card h1 {

                font-size: 30px;

            }


            .footer {

                min-height: 100px;

                padding: 20px;

                text-align: center;

            }

        }

    </style>

</head>


<body>


    <!-- =========================================
         NAVBAR
    ========================================== -->

    <div class="navbar">

        <div class="logo">
            SandStore🎮
        </div>


        <nav>

            <a href="index.php">
                Home
            </a>

            <a href="game_type.php">
                Game Types
            </a>

            <a href="add_game.php">
                Game add
            </a>

            <a href="manage_game.php">
                Manage game
            </a>

        </nav>

    </div>


    <!-- =========================================
         EDIT FORM
    ========================================== -->

    <div class="form-wrap">

        <div class="form-card">

            <h1>
                แก้ไขเกม
            </h1>


            <form
                action="action/update_game.php"
                method="post"
            >


                <!-- GAME ID -->

                <input
                    type="hidden"
                    name="game_id"
                    value="<?= $game["game_id"] ?>"
                >


                <!-- GAME NAME -->

                <label>
                    ชื่อเกม
                </label>

                <input
                    type="text"
                    name="game_name"
                    value="<?= $game["game_name"] ?>"
                >


                <!-- PRICE -->

                <label>
                    ราคา
                </label>

                <input
                    type="number"
                    name="game_price"
                    value="<?= $game["game_price"] ?>"
                >


                <!-- COVER -->

                <label>
                    ลิงก์ภาพปก
                </label>

                <input
                    type="text"
                    name="game_cover"
                    value="<?= $game["game_cover"] ?>"
                >


                <!-- TYPE -->

                <label>
                    ประเภท
                </label>

                <select name="type_id">

                    <?php foreach($type_result as $type){ ?>

                        <option
                            value="<?= $type["type_id"] ?>"
                            <?= $type["type_id"] == $game["type_id"] ? "selected" : "" ?>
                        >

                            <?= $type["type_name"] ?>

                        </option>

                    <?php } ?>

                </select>


                <!-- SUBMIT -->

                <button type="submit">
                    บันทึกการแก้ไข
                </button>


            </form>

        </div>

    </div>


    <!-- =========================================
         FOOTER
    ========================================== -->

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
