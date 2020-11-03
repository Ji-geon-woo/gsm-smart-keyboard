<!DOCTYPE html>
<?php include "db.php"; ?>
<html lang="ko">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <style>
        *{
        margin: 0;
        padding: 0;
        text-decoration: none;
    }
    body {overflow:hidden}
    h2 {
        position: absolute;
        width: 100px;
        height: 88px;
        left: 138px;
        top: 60px;

        font-family: 'Quicksand', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 22px;

        color: #7D85D6;
    }

    .logo {
        position: absolute;
        width: 230px;
        height: 100px;
        left: 20px;
        top: 10px;
    }

    .about{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 22px;
        font-weight: 650;
        position: absolute;
        width: 97px;
        height: 29px;
        left: 830px;
        top: 70px;
    }
    .login{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 22px;
        font-weight: 650;
        position: absolute;
        left: 1145px;
        top: 70px;
    }
    .signup{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 22px;
        font-weight: 650;
        position: absolute;
        left: 1420px;
        top:70px;
    }
    .keyboard{
        position: absolute;
        width: 100px;
        height: 29px;
        left: 1660px;
        top: 70px;

        font-family: Segoe UI;
        font-style: normal;
        font-weight: bold;
        font-size: 22px;
        line-height: 29px;

        color: #7D85D6;

    }
    .bar{
        position: relative;
        left: 30px;
        top: 174.75px;

    }
    .man2{
        position: absolute;
        width: 871px;
        height: 575px;
        left: 1017px;
        top: 372px;

    }
    .biglogo{
        position: absolute;
        width: 400px;
        height: 400px;
        left: 90px;
        top: 235px;
    }
    .splash{
        position: absolute;
        width: 728.39px;
        height: 436.05px;
        left: 158px;
        top: 500.47px;
    }
    .name{
        position: absolute;
        width: 596px;
        height: 80px;
        left: 320px;
        top: 295px;

        font-family: Segoe UI;
        font-style: normal;
        font-weight: 350;
        font-size: 60px;
        line-height: 80px;

        letter-spacing: 0.2em;

        color: #5672A8;

        }
    .arduino{
        position: absolute;
        width: 273px;
        height: 78px;
        left: 280px;
        top: 580px;

        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 40px;
        line-height: 67px;

        color: #FFFFFF;
        }
    .html{
        position: absolute;
        width: 131px;
        height: 67px;
        left: 340px;
        top: 699px;

        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 40px;
        line-height: 67px;


        color: #FFFFFF;

            }
    .php{

        position: absolute;
        width: 92px;
        height: 67px;
        left: 580px;
        top: 630px;

        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 40px;
        line-height: 67px;

        color: #FFFFFF;
        }
    .figma{
        position: absolute;
        width: 150px;
        height: 67px;
        left: 510px;
        top: 760px;

        font-family: Segoe UI;
        font-style: normal;
        font-weight: normal;
        font-size: 40px;
        line-height: 67px;

        color: #FFFFFF;

    }
    .school{
        position: absolute;
        width: 183px;
        height: 40px;
        left: 1712px;
        top: 915px;
        font-size: 25px;
        font-family:'Quicksand', sans-serif;
        color: #7D85D6;
    }
    </style>
    <head>
        <title>SUMMARIZE PAD</title>
    <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <div class="logo">
            <h2>SUMMARIZE PAD</h2>
            <a href="index.php" class="logo"><img src="./logo/SP.png"></a>
        </div>
        <div class="link">
          <?php if($_SESSION['userlevel'] == "2"){ ?>
            <a style="color:#7D85D6" class="login"><?php echo  "관리자님 환영합니다." ?></a>
            <a href="logout.php" style="color:#7D85D6" class="signup">Log-out</a>
            <a href="OrderCheck.php" style="color:#7D85D6" class="keyboard">OrderList</a>
          <?php } else if (isset($_SESSION['username'])){ ?>
            <a style="color:#7D85D6" class="login"><?php echo  "{$_SESSION['username']}님 환영합니다." ?></a>
            <a href="logout.php" style="color:#7D85D6" class="signup">로그아웃</a>
            <a href="Keyboard.php" style="color:#7D85D6" class="keyboard">Keyboard</a>
          <?php } else {
            echo "<script>alert('로그인을 하세요'); location.href='Login.php';</script>";
          } ?>
            <a href="About.php" style="color: #7D85D6"  class="about">About us</a>
        </div>
        <div class="bar">
            <img src="./logo/bar.png">
        </div>
        <div class="man2">
            <img src="./logo/yeah.png">
        </div>
        <div class="under">
            <p class="name">SUMMARIZEPAD</p>
            <a href="" class="biglogo"><img src="./logo/biglogo.png"></a>
            <a href="" class="splash"><img src="./logo/splash.png"></a>
            <a href="http://www.gsm.hs.kr/main/main.php" class="school"><p>www.gsm.hs.kr</p></a>
            <p class="arduino">ARDUINO</p>
            <p class="html">HTML</p>
            <p class="php">PHP</p>
            <p class="figma">FIGMA</p>
        </div>

    </body>
</html>
