<?php

include "./config.php";

if(isset($_GET['logout'])) {
    session_destroy();
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Music Hub</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        
        <style>
            /* header styling */
            * {
                margin: 0;
                padding: 0;
                font-family:  Geneva, Tahoma, sans-serif;
            }
            #header {
                background-color: black;
                text-align: right;
            }
            #header>a {
                color: white;
                text-decoration: none;
                margin-right: 30px;
                font-size: 15px;
            }
            #dropdown {
                display: inline-block;
                position: relative;
            }
            #dropdown-btn {
                background-color: green;
                color: white;
                border: none;
                padding: 10px 30px;
                font-size:18px;
                font-weight: bold;
            }
            #dropdown-content {
                right: 0px;
                position: absolute;
                background-color: rgb(197, 197, 197);
                display: none;
                z-index: 2;
            }
            #dropdown-content a {
                color: black;
                text-decoration: none;
                white-space:nowrap;
                display: block;
                padding: 15px 25px;
            }
            #dropdown-btn:hover  {
                background-color: darkgreen;
            }
            #dropdown:hover #dropdown-content {
                display: block;
            }
            #dropdown-content a:hover {
                background-color: grey;
            }


            /* branding */
            #branding {
                background-color: #fbc915;
                position: relative;
                height: 150px;
                z-index: 1;
            }
            .left-align {
                position: absolute;
                top:0;
                left:0;
            }
            .right-align {
                position: absolute;
                top:0;
                right:0;
            }
            img[src="assets/images/logo.gif"] {
                height: 150px;
                width: 150px;
            }
            #branding h1 {
                font-family: fantasy;
                font-size: 75px;
                position: absolute;
                top: 5px;
                left: 160px;
                font-weight: normal;
                white-space:nowrap;
            }
            #branding p {
                font-size: 18.4px;
                position: absolute;
                top: 90px;
                left: 160px;
                font-weight: normal;
                white-space:nowrap;
            }
            #search {
                position: absolute;
                top: 55px;
                right: 40px;

            }
            #search-form {
                position: relative;
            }
            #search input {
                width: 320px;
                position: absolute;
                right: 0;
                border: none;
                font-size: 15px;
                padding: 10px;
                height: 40px;
                padding-right: 45px;
                border-radius: 20px;
            }
            #search button {
                position: absolute;
                right: 0;
                height: 40px;
                width: 40px;
                border: none;
                background-color:transparent;
            }

            /* menubar */
            #menubar {
                background-color: #333;
                position: relative;
            }
            #menubar ul {
                display: flex;
                flex-direction:row;
                list-style-type: none;
                justify-content:space-evenly;
            }
            #menubar ul li {
                display: block;
                padding: 10px;
                
            }
            #menubar ul li a {
                color: white;
                text-decoration: none;
                font-size: 17px;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <header id="header">
            <a href="legal/privacy.html" target="_blank">Privacy Policy</a>
            <a href="legal/tnc.html" target="_blank">Terms & Conditions</a>
            <?php if (!isset($_SESSION['username'])) { ?>
            <div id="dropdown">
                <button id="dropdown-btn">Login</button>
                <div id="dropdown-content">
                    <a href="authentication/login.php">Login into existing account</a>
                    <a href="authentication/register.php">Sign up for a new account</a>
                </div>
            </div>
            <?php } else { ?>
            <div id="dropdown">
                <button id="dropdown-btn"><?php echo $_SESSION['username'] ?></button>
                <div id="dropdown-content">
                    <a href="authentication/changepwd.php">Change password</a>
                    <a href="index.php?logout=true">Logout</a>
                </div>
            </div>
            <?php } ?>
        </header>

        <header id="branding">
            <div class="left-align">
                <img src="assets/images/logo.gif" alt="Music-Hub"/>
                <h1>MUSIC HUB</h1>
                <p>--------------------------------------------------<br>One stop shop for all your musical needs</p>
            </div>
            <div class="right-align">
                <div id="search">
                    <form method="get" action="search.php">
                        <input type="search" id="search-inp" placeholder="Search for songs, artists, albums, etc" />
                        <button type="submit" id="search-btn"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </header>

        <section id="menubar">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">New Hits</a></li>
                <li><a href="">Recently Added</a></li>
                <li><a href="">Favourites</a></li>
                <li><a href="">Playlists</a></li>
                <li><a href="">About us</a></li>
            </ul>
        </section>

        <section id="page-content" class="m-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                $sql_query = "SELECT * FROM music;";
                $result = mysqli_query($conn, $sql_query);
                while ($data = mysqli_fetch_array($result)) {
            ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="./assets/musicimg/<?php echo $data['image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <audio controls>
                                <source src='./assets/music/<?php echo $data['link'] ?>' />
                            </audio>
                            <h5 class="card-title"><?php echo $data['name'] ?></h5>
                            <table class="card-text">
                                <tr>
                                    <td>Album</td>
                                    <td><?php echo $data['album'] ?></td>
                                </tr>
                                <tr>
                                    <td>Label</td>
                                    <td><?php echo $data['label'] ?></td>
                                </tr>
                                <tr>
                                    <td>Starring</td>
                                    <td><?php echo $data['starring'] ?></td>
                                </tr>
                                <tr>
                                    <td>Composer</td>
                                    <td><?php echo $data['composer'] ?></td>
                                </tr>
                                <tr>
                                    <td>Singer</td>
                                    <td><?php echo $data['singer'] ?></td>
                                </tr>
                                <tr>
                                    <td>Song Writer</td>
                                    <td><?php echo $data['songwriter'] ?></td>
                                </tr>

                            </table>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $data['views'] ?> Views</small>
                        </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <footer id="footer"></footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>