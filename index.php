<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Game Store</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =========================================
           BODY
        ========================================= */

        body {

            background:
                linear-gradient(
                    135deg,
                    #ffffff 0%,
                    #fff5f5 50%,
                    #ffffff 100%
                );

            color: #222222;

            font-family: 'Poppins', sans-serif;

            min-height: 100vh;

            display: flex;

            flex-direction: column;
        }


        /* =========================================
           NAVBAR
        ========================================= */

        .navbar {

            background: #ffffff;

            padding: 18px 48px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            border-bottom: 2px solid #eeeeee;

            position: sticky;

            top: 0;

            z-index: 10;

            box-shadow:
                0 4px 15px rgba(0, 0, 0, 0.08);
        }


        /* LOGO */

        .navbar .logo {

            font-size: 23px;

            font-weight: 800;

            color: #e30613;

            letter-spacing: 0.5px;
        }


        /* NAV */

        .navbar nav a {

            position: relative;

            color: #555555;

            text-decoration: none;

            margin-left: 32px;

            font-size: 14px;

            font-weight: 600;

            transition: all 0.25s;
        }


        .navbar nav a::after {

            content: '';

            position: absolute;

            left: 0;

            bottom: -7px;

            width: 0%;

            height: 3px;

            background: #e30613;

            border-radius: 5px;

            transition: width 0.25s;
        }


        .navbar nav a:hover {

            color: #e30613;
        }


        .navbar nav a:hover::after {

            width: 100%;
        }


        /* ACTIVE */

        .navbar nav a.active {

            color: #e30613;
        }


        .navbar nav a.active::after {

            width: 100%;
        }


        /* =========================================
           HEADER
        ========================================= */

        .page-header {

            max-width: 1200px;

            width: 100%;

            margin: 48px auto 8px;

            padding: 0 48px;
        }


        .page-header h1 {

            font-size: 34px;

            font-weight: 800;

            color: #222222;

            letter-spacing: -0.5px;
        }


        .page-header h1::first-letter {

            color: #e30613;
        }


        .page-header p {

            margin-top: 7px;

            color: #888888;

            font-size: 14px;
        }


        /* =========================================
           RED LINE
        ========================================= */

        .page-header::before {

            content: '';

            display: block;

            width: 55px;

            height: 5px;

            background: #e30613;

            border-radius: 10px;

            margin-bottom: 14px;
        }


        /* =========================================
           TABLE WRAPPER
        ========================================= */

        .table-wrap {

            max-width: 1200px;

            width: 100%;

            margin: 32px auto 70px;

            padding: 0 48px;

            flex: 1;
        }


        /* =========================================
           TABLE CARD
        ========================================= */

        .table-card {

            background: #ffffff;

            border: 1px solid #eeeeee;

            border-radius: 16px;

            overflow: hidden;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.08);
        }


        /* =========================================
           TABLE
        ========================================= */

        table {

            width: 100%;

            border-collapse: collapse;
        }


        /* HEADER */

        thead th {

            text-align: left;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: 0.7px;

            text-transform: uppercase;

            color: #ffffff;

            background: #e30613;

            padding: 17px 20px;

            border-bottom: 1px solid #d0000c;
        }


        /* BODY */

        tbody td {

            padding: 16px 20px;

            font-size: 14px;

            color: #333333;

            border-bottom:
                1px solid #eeeeee;

            vertical-align: middle;
        }


        /* ROW */

        tbody tr {

            background: #ffffff;

            transition: all 0.2s;
        }


        tbody tr:hover {

            background: #fff5f5;
        }


        tbody tr:last-child td {

            border-bottom: none;
        }


        /* =========================================
           IMAGE
        ========================================= */

        .cover-thumb {

            width: 200px;

            height: 100px;

            object-fit: cover;

            border-radius: 8px;

            display: block;

            box-shadow:
                0 4px 12px rgba(0, 0, 0, 0.15);

            border: 2px solid #ffffff;

            transition: all 0.25s;
        }


        .cover-thumb:hover {

            transform: scale(1.04);

            border-color: #e30613;

            box-shadow:
                0 6px 20px rgba(227, 6, 19, 0.25);
        }


        /* =========================================
           ID
        ========================================= */

        .cell-id {

            color: #999999;

            font-size: 12px;

            font-weight: 600;
        }


        /* =========================================
           GAME NAME
        ========================================= */

        .cell-name {

            font-weight: 700;

            color: #222222;
        }


        /* =========================================
           PRICE
        ========================================= */

        .cell-price {

            font-weight: 800;

            color: #e30613;

            font-size: 15px;
        }


        /* =========================================
           TYPE
        ========================================= */

        .badge-type {

            display: inline-block;

            background: #fff0f0;

            color: #e30613;

            border:
                1px solid #ffcaca;

            font-size: 11px;

            font-weight: 700;

            padding: 5px 12px;

            border-radius: 20px;
        }


        /* =========================================
           RED BUTTON
        ========================================= */

        .btn-red {

            display: inline-block;

            padding: 11px 20px;

            color: #ffffff;

            background: #e30613;

            border: none;

            border-radius: 8px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            box-shadow:
                0 5px 15px rgba(227, 6, 19, 0.2);

            transition: all 0.25s;
        }


        .btn-red:hover {

            background: #c9000b;

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(227, 6, 19, 0.3);
        }


        /* =========================================
           ERROR / EMPTY
        ========================================= */

        .message {

            text-align: center;

            padding: 50px 20px;

            color: #888888;

            font-size: 15px;
        }


        .message.error {

            color: #e30613;
        }


        /* =========================================
           FOOTER
        ========================================= */

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


        .footer-name {

            color: #e30613;

            font-size: 15px;

            font-weight: 700;

            margin-bottom: 5px;
        }


        .footer-class {

            color: #777777;

            font-size: 13px;

            font-weight: 600;
        }


        /* =========================================
           SCROLLBAR
        ========================================= */

        ::-webkit-scrollbar {

            width: 8px;

            height: 8px;
        }


        ::-webkit-scrollbar-track {

            background: #f5f5f5;
        }


        ::-webkit-scrollbar-thumb {

            background: #e30613;

            border-radius: 10px;
        }


        ::-webkit-scrollbar-thumb:hover {

            background: #b8000a;
        }


        /* =========================================
           RESPONSIVE
        ========================================= */

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


            .table-wrap {

                padding: 0 20px;

                overflow-x: auto;
            }


            .cover-thumb {

                width: 120px;

                height: 80px;
            }


            .footer {

                padding: 20px 15px;
            }

        }

    </style>

    <link rel="stylesheet" href="assets/css/steam.css">

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================== -->

    <div class="navbar">

        <div class="logo">
            SandStore🎮
        </div>

        <nav>

            <a href="index.php" class="active">
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


    <!-- =========================
         PAGE HEADER
    ========================== -->

    <div class="page-header">

        <h1>
            All Games
        </h1>

        <p>
            รายการเกมทั้งหมดในร้าน
        </p>

    </div>


    <!-- =========================
         DATABASE
    ========================== -->

    <?php

    error_reporting(E_ALL);

    ini_set('display_errors', 1);

    ini_set('display_startup_errors', 1);

    include 'action/connect.php';

    ?>


    <!-- =========================
         GAME TABLE
    ========================== -->

    <div class="table-wrap">

        <div class="table-card">

            <?php

            if(!$con){

                echo '
                    <div class="message error">
                        Cannot connect to database.
                    </div>
                ';

            } else {

                $sql = "SELECT * FROM games";

                $result = mysqli_query($con, $sql);


                if(!$result){

                    echo '
                        <div class="message error">
                            เกิดข้อผิดพลาดในการดึงข้อมูล
                        </div>
                    ';

                } elseif(mysqli_num_rows($result) === 0){

                    echo '
                        <div class="message">
                            ยังไม่มีเกมในระบบ
                        </div>
                    ';

                } else {

            ?>

            <table>

                <thead>

                    <tr>

                        <th>
                            รหัสเกม
                        </th>

                        <th>
                            ภาพปก
                        </th>

                        <th>
                            ชื่อเกม
                        </th>

                        <th>
                            ราคา
                        </th>

                        <th>
                            ประเภท
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php

                    foreach($result as $game){

                    ?>

                    <tr>

                        <td class="cell-id">
                            #<?= $game["game_id"] ?>
                        </td>


                        <td>

                            <img
                                class="cover-thumb"
                                src="<?= $game["game_cover"] ?>"
                                alt=""
                            >

                        </td>


                        <td class="cell-name">
                            <?= $game["game_name"] ?>
                        </td>


                        <td class="cell-price">
                            ฿<?= number_format($game["game_price"], 2) ?>
                        </td>


                        <td>

                            <span class="badge-type">
                                Type <?= $game["type_id"] ?>
                            </span>

                        </td>

                    </tr>

                    <?php

                    }

                    ?>

                </tbody>

            </table>

            <?php

                }

            }

            ?>

        </div>

    </div>


    <!-- =========================
         FOOTER
    ========================== -->

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