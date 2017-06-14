<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>My Own Simple Forum</title>
</head>

<body>
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2">
                    <img src="img/vitya.jpeg">
                </div>
                <div class="col-xs-5">
                    <p class="navbar-text">VityaForum</p>
                </div>

                <?php
                if (!isset($_SESSION['username'])) {
                    echo    '<div class="col-xs-5" id="log_content">
                                <a href="index.html">login</a>
                            </div>';
                } else {
                    echo    '<div class="col-xs-5" id="log_content">
                                Hello <b>'.$_SESSION['username'].'</b>. <a href="php/logout.php">logout</a>
                            </div>';
                }
                ?>

            </div>
        </div>
    </nav>
    <div class="container" id="default-panel">
    </div>

        <?php
        if (isset($_SESSION['username'])) {

        echo '<div class="container" id="create-form">
                <form>
                    <!--<div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="create-username" placeholder="Enter name" name="username">
                    </div>-->
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea type="text" rows="4" class="form-control" id="create-message" placeholder="Enter message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>';
        }
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/login.js"></script>
</body>

</html>
