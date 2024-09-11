<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="icon3.jpg" type="image/jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>ParaVie-Registration Page</title>
</head>
<style>
    body {
        background: url('Cosmetic packaging set (1).jpeg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .formulaire {
        background-color: transparent;
        width: 750px;
        padding: 20px;
        height: 380px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 130px;
        backdrop-filter: blur(5px);
        border-radius: 5px;
        border: 4px double #145A32;
    }
    .col {
        display: flex;
        justify-content: space-evenly;
    }
    input {
        height: 40px;
        width: 310px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 15px;
        color: black;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: 1px solid black;
        background-color: transparent;
    }
    p {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 600;
    }
    span {
        font-size: 17px;
        color: #145A32;
    }
    .link {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 600;
        text-align: center;
    }
    .btn {
        width: 660px;
        margin-left: 25px;
        background-color: #145A32;
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .btn:hover {
        color: white; 
        border: 1px white;
    }
    .formulaire h3 {
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 600;
        color: #145A32;
    }
    .boxa {
        width: 650px;
        margin-left: 30px;
        background-color: white;
        height: 50px;
        padding-top: 10px;
        border: 1px solid gray;
        color: black;
        padding-left: 10px;
        margin-bottom: 20px;
    }
    .inp {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 600;
        margin-left: 27px;   
    }
    a:hover {
        text-decoration: none;
        color: #145A32;
    }
    a {
        color: black;
    }
</style>
<body>
   
<form method="post" class="formulaire">
        <h3>Register Now</h3>
        <div class="col">
            <p>Your name <span>*</span>: <br> <input type="text" placeholder="Enter your name" name="name" required></p><br>
            <p>Your email <span>*</span>: <br> <input type="email" placeholder="Enter your email" name="email" required></p> 
        </div><br>
        <div class="col">
            <p>Your password <span>*</span>: <br> <input type="password" placeholder="Enter your password" name="pass" required></p><br>
            <p>Confirm your password <span>*</span>: <br> <input type="password" placeholder="Confirm your password" name="Cpass" required></p> 
        </div>
        <p class="link">Already have an account? <a href="login.php"><i>Login Here!</i></a></p>
        <input type="submit" value="Register Now" class="btn" name="submit">
</form>
   
<?php

include 'conn.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $Cpass = $_POST['Cpass'];
   
    $select_users = $conn->prepare("SELECT * FROM login WHERE username=?");
    $select_users->execute([$email]);
    
    if($select_users->rowCount() > 0) {
        echo '<div class="alert alert-danger">This Email is already used by another user.</div>';
    } else {
        if($pass != $Cpass) {
            echo '<div class="alert alert-danger">Confirm your password</div>';
        } else {
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
            $insert_user = $conn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");
            $insert_user->execute([$email, $hashed_password]);
            echo '<div class="alert alert-success">Registration successful!</div>';
        }
    }
}

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>
