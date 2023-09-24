
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Scope</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

       
    <style>
        .navbar {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            height: 13vh;
        }

        li {
            list-style-type: none;
        }

        .dropdown:hover .dropdown-menu {

            display: block;
        }

        .item {

            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: space-around;
            border: hwb(0 69% 27%);
            border-radius: 10px;
            margin-bottom: 80px;
            box-shadow: rgba(143, 143, 143, 0.3) 0px 5px 12px 0px;
        }

        .pich6 {
            background-color: rgb(45, 110, 240);
            width: fit-content;
            margin-top: 1rem;
            margin-left: 8px;
        }

        .pich {
            background-color: rgb(50, 129, 248);
            width: fit-content;
            margin-bottom: 1rem;
            margin-left: 8px;
        }

        .item h5{
            width: fit-content;
            text-align: start;
            font-size: 1.3vw;
            font-weight: 600;
            margin-left: 8px;

        }
        .Success-Stories-card {

            border: darkgrey;

        }

        .card-footer-body {
            border: 1px solid #f2f5f6;
            height: fit-content;
            transform: skewY(-2deg);
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            background-color: rgb(247, 248, 249);
            padding: 25px;


        }

        .card-footer-inner {
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px,
                rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
            ;
            margin-top: 5vh;
            margin-bottom: 3vh;

            background-color: hsla(0, 47%, 90%, 0.362);
            text-align: center;
            color: rgb(12, 1, 1);
        }

        .Form {
            margin: 2vh;
        }

        .form_line {
            border-radius: 20px;
            border: 2px solid rgb(5, 16, 216);
        }

        /* login button css */

        .login-button {
            cursor: pointer;
            outline: none;
        }

        .login-button:hover {
            color: #ffffff;
            background: #ff4367;
        }

        #user-login {
            border: 1px solid #333;
            z-index: 10000;
            background: rgba(23, 4, 225, 0.9);
            box-shadow: 0px 8px 20px rgba(23, 4, 225, 0.9);
            width: 500px;
            border-radius: 20px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
        }

        .login-form .login-container {
            background: #fafafc;
            width: 100%;
            padding: 14px;
            border-radius: 20px;

            animation: alternate 0.6s;
        }

        @keyframes animate {
            form {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }

        .login-form .login-container .img-container {

            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        .login-form .login-container img {
            width: 40%;
            border-radius: 50%;
        }

        .login-form .img-container span {
            position: absolute;
            top: -20px;
            right: 10px;
            font-size: 30px;
            color: #ff4367;
            cursor: pointer;

        }

        .login-form .container label {
            display: block;
            margin-top: 8px;
            font-size: 17px;
            color: #666;
            font-weight: 500;


        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            color: #555;
            font-size: 16px;
            border: 10x solid #666;
            border-radius: 10px;
            outline: none;
            margin-top: 4px;
        }


        input[type="submit"] {
            font-size: 24px;
            width: 100%;
            color: #555;
            font-weight: 600;
            border: 1px solid #666;
            border-radius: 10px;
            cursor: pointer;
            padding: 11px 12px;
            margin-top: 13px;
        }

        input[type="submit"]:hover {

            color: #fff;
            background-color: #ff4367;
        }

        .login-form .checkbox {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-top: 10px;
            font-size: 14px;

        }

        .login-form .checkbox a {
            cursor: pointer;
            color: #555;
        }

        .login-form .password {
            font-size: 14px;
            color: #555;
            margin: 12px 0;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .login-form .password a {

            color: #ff4367;
            cursor: pointer;

        }
    </style>

</head>
<body>


<section>
        <div class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand ms-5" href="index.php"><img src="./image/logo.jpeg" alt="" height="60vh"></a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-light" style="margin-left: 22vw;">
                            <li class="nav-item">
                                <a class="nav-link active  fs-6 fw-bold" aria-current="page" href="index.php">HOME</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active fs-6 fw-bold m-0 " href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    ABOUT US
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                    <li><a class="dropdown-item" href="mission.php">Mission & Vision</a></li>
                                </ul>
                            </li>
                            <li class="nav-item  dropdown">
                                <a class="nav-link dropdown-toggle active fs-6 fw-bold m-0" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    OUR SERVICE
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="counselling.php">Counselling</a></li>
                                    <li><a class="dropdown-item" href="education.php">Education Lone</a></li>
                                    <li><a class="dropdown-item" href="AdmissionGuide.php">Admission Guidance</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fs-6 fw-bold" href="gallery.php">GALLERY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fs-6 fw-bold" href="contact.php">CONTACT US</a>
                            </li>
                            <li class="nav-item ms-3" id="apply">
                                <button onclick="document.getElementById('user-login').style.display = 'block'"
                                    id="login" type="submit"
                                    class="login-button btn btn-success text-center text-light ps-4 pe-4 pt-2 pb-2">LOGIN</button>
                            </li>
                            <li class="nav-item ms-3">
                                <div class="btn btn-primary text-center text-light ps-4 pe-4 pt-2 pb-2">
                                    CALL US
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    
<div id="user-login" method="post" class="login-form">

<form action="conn.php" method="post" class="login-container">

    <div class="img-container">
        <span class="close"
            onclick="document.getElementById('user-login').style.display = 'none'">&times;</span>
            <img src="./image/logo.jpeg" alt="">
    </div>

    <div class="container">

   
        <label for="username">Username</label>
        <input type="text" name="email" placeholder="Enter username" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter password" required>

        <input type="submit" class="btn" value="Login">

        <div class="checkbox">
            <input type="checkbox"> Remember me
        </div>
        <span class="password">forgot <a href="#">password ?</a></span>

    
    </div>

</form>
</div>






