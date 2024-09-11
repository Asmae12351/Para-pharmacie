<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="icon3.jpg" type="image/jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Para-Vie  Shopping cart</title>
    <style>
        .shop-cart thead{
            text-align: center;
            background-color:  #145A32;
            color: white;
            padding: 10px;
            width: 90px;
            height: 40px;
        }
        .shop-cart thead th{
            padding: 10px;
            width: 150px;
            text-align: center;
        }
        .shop-cart td{
            width: 200px;
            text-align: center;
        }
        td img{
            height: 120px;
            width: 100px;
            margin-left: 35px;
            padding: 10px;
        }
        .heading{
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .foot{
            height: 90px;
        }
        .foot a{
            width: 190px;
        }
        .btn {
            width: 190px;
            background-color: #145A32;
            color: white;
        }
        .btn:hover{
            width: 190px;
            background-color: #145A32;
            color: white;
            border: 2px solid black;
        }
        .navbar{
        margin-left: 100px;
        padding: 6px;
        justify-content: space-evenly;
     }
    .navbar a i{
        color: white;
        text-decoration: none;
        margin-top: 5px;
        font-weight: 700;
        font-size: 25px;
    }
    .navbar a i:hover{
        color:#70B070 ;
        text-decoration: none;
        margin-top: 5px;
        font-weight: 700;
        font-size: 25px;
    }

    .header{
        
        background-color: #145A32;
        width: 100%;
        height: 89px;
        padding: 10px;
        display: flex;
        position: fixed;
        z-index: 999;
       

    }
    .header a{
        font-size: 23px;
        color: white;
        font-weight: 700;
        text-decoration: none;
        margin-left: 40px;
        padding: 20px;
    }
    .header a:hover{
        font-size: 23px;
        color: #70B070 ;
        font-weight: 700;
        text-decoration: none;
        margin-left: 40px;
        padding: 20px;
    }

    .header .serch .search{
        width: 400px;
        height: 40px;
        margin-left: 200px;
        padding: 20px;
        margin-top: 15px;
        color: white;
        background-color:  white;
        border: 1px solid white;
        border-radius: 10px;

    }
    .header .serch .btn1{
        width: 140px;
        height: 44px;
        background-color:  white;
        border: 1px solid white;
        border-radius: 10px;
        margin-left: 10px;
    }
    .header .serch .btn1:hover{
        background-color: #70B070;
        color: white;
    }
    body {
        background: url('Cosmetic packaging set (1).jpeg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    </style>
</head>

<body>

    <?php 
    //include 'header.php';
     ?>
    <?php
include 'config.php';

if(isset($_POST['update_q'])){
    $update_value = $_POST['update_q'];
    $update_id = $_POST['update_q_id'];

    // Prépare la requête SQL pour mettre à jour la quantité du produit dans le panier
    $update_q = $conn->prepare("UPDATE cart SET quantity = :update_value WHERE id = :update_id");

    // Lie les valeurs aux paramètres dans la requête préparée
    $update_q->bindParam(':update_value', $update_value, PDO::PARAM_INT);
    $update_q->bindParam(':update_id', $update_id, PDO::PARAM_INT);

    // Exécute la requête préparée
    if($update_q->execute()){
        echo '<div class="alert alert-success">Quantity updated</div>';
    } else {
        echo '<div class="alert alert-danger">Failed to update quantity</div>';
    }
}
if(isset($_GET['remove'])){
    $_remove_id = $_GET['remove']; // Get the product ID to delete

    // Prepare the SQL statement
    $sql = "DELETE FROM cart WHERE id = ?";
    
    // Prepare and execute the statement
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_remove_id]);
   
   
}    
if(isset($_GET['delete_all'])){
    // Prepare and execute the statement
    $stmt = $conn->prepare("DELETE FROM cart");
    $stmt->execute();
}
   
?>
<header class="header">
      <a href="user.php">Para-Vie</a>
      <div class="serch">
      <input type="search" name="search" class="search" placeholder="Search here ..."><input type="submit" value="Search Product" class="btn1">
      </div>
       <nav class="navbar">
       <a href="Cart.php"><i class="fa-solid fa-cart-shopping"></i> </a>
       <a href="index.php"><i class="fa-solid fa-user"></i></a>
       </nav>
</header><br><br><br>
    <div class="container">
        <section class="shop-cart">
            <h2 class="heading">Shopping Cart</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $select_cart = $conn->prepare("SELECT * FROM cart");
                    $select_cart->execute();
                    $grand_total = 0;

                    if($select_cart->rowCount() > 0){
                        while($cart_data = $select_cart->fetch()) {
                            $sub_total = $cart_data['price'] * $cart_data['quantity'];
                            $grand_total += $sub_total;
                        ?>
                        <tr>
                            <td><img src="<?= $cart_data['image']; ?>" style="width: 150px; height: 170px;"></td>
                            <td><h3 class="tit-box"><?php echo $cart_data['name']; ?></h3></td>
                            <td><div class="price"><?php echo number_format($cart_data['price']) ?>Dh</div></td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" value="<?= $cart_data['id']; ?>" name="update_q_id">
                                    <input type="number" min="1" value="<?= $cart_data['quantity']; ?>" name="update_q"><br><br>
                                    <input type="submit" value="Update" name="update_q" class="btn btn-dark">
                                </form>
                            </td>
                            <td><?= $sub_total ?> Dh</td>
                            <td>
                                <a href="Cart.php?remove=<?= $cart_data['id']; ?>" onclick="return confirm('Remove item from cart')" class="btn btn-dark"><i class="fa-solid fa-trash"></i> Remove from cart</a>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                    ?>
                    <tr>
                        <td class="foot">
                            <a href="user.php" class="btn btn-dark"> <i class="fa-solid fa-cart-shopping"></i> Continue Shopping</a>
                        </td>
                        <td colspan="3">Grand total</td>
                        <td><?= $grand_total;?> DH</td>
                        <td class="foot"><a href="Cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="btn btn-dark"> <i class="fa-solid fa-trash"></i> Delete All</a></td>
                    </tr>
                </tbody>
            </table><br><br>
            <div class="checkout-btn">
             <a href="chekout.php" class="btn btn-dark <?= ($grand_total>1)?'':'disabled';?> ">Procced to checkout</a>
            </div>
        </section>
    </div>
</body>
</html>
