<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="icon3.jpg" type="image/jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>ParaVie-login Page</title>
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
        display: block;
        justify-content: space-evenly;
        padding: 5px;
    }
    input {
        height: 40px;
        width: 660px;
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
        color:  #145A32;
    }
    .link {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 600;
        text-align: center;
        
    }
    .btn {
        width: 660px;
        margin-left: 25px;
        background-color:  #145A32;
        color: white;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-top: 10px;
    }
    .btn:hover {
        color: white; 
        border: 1px solid white;
    }
    .formulaire h3 {
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 600;
        color:  #145A32;
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
        <h3>Login Now</h3>
        <div class="col">
            <p>Your email <span>*</span>: <br> <input type="email" placeholder="Enter your email" name="email" required></p> 
            <p>Your password <span>*</span>: <br> <input type="password" placeholder="Enter your password" name="pass" required></p>   
        </div>
        <p class="link">Don't have an account? <a href="register.php">Register Now !</a></p>
        <input type="submit" value="Login Now" class="btn" name="submit">
</form>

<?php
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $useremail = $_POST['email'];
    $password = $_POST['pass'];
    
    // Using prepared statements to prevent SQL injection
    $sql = $conn->prepare("SELECT * FROM login WHERE username=:useremail AND password=:password");
    $sql->bindParam(':useremail', $useremail);
    $sql->bindParam(':password', $password);
    $sql->execute();

    // Check if there are any rows returned
    if ($sql->rowCount() > 0) {
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        if ($row["usertype"] == "user") {
            echo 'User Logged In Successfully!';
            header("Location: user.php");
            exit();
        } elseif ($row["usertype"] == "admin") {
            echo 'Admin Logged In Successfully!';
            header("Location: admin.php");
            exit();
        } else {
            echo 'Unknown user type!';
        }
    } else {
        echo '<div class="alert alert-danger">Invalid Username or Password.</div>';
    }
}
?>

</body>
</html>
