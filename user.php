<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="icon3.jpg" type="image/jpg"/>
    <title>Para-Vie Home</title>
</head>
<style>
    *{
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
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
        color: black;
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
    .home h1{
    margin: 57px;
    color:  #145A32;
    font-size: 3em;
    font-weight: 600;
}
.home p{
    max-width: 600px;
    font-size: 26px;
    font-weight: 500;
    margin-left: 20px;
    color:  #145A32;
   
    
   
}
.home img{
    float: right;
    width: 400px;
    margin-right: -200px;
    margin-left: 330px;
    margin-top: 30px;
}
.home{
    width: 100%;
    height: 530px;
    display: flex;
    align-items: center;
    background-repeat: repeat-x;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
   
   
}
.btn2{
    height: 50px;
    background-color: #145A32;
    color: white;
    border-radius: 17px;
    font-size:25px;
    margin-left: 340px;
    width: 240px;
   

}
.btn2:hover{
    color: white;
    transform: scale(1.1);
    transition: 0.4s;
}
.btn2 a :hover{
    color: white;
    transform: scale(1.1);
    transition: 0.4s;
}
.btn2 a{
    color: white;
    text-decoration: none;
}

body{
    width: 1350px;
}
.heading i {
        text-align: center;
        margin-top: 20px;
        text-transform: uppercase;
        margin-left: 130px;
    }
    .products .box-container{
      display: flex;
      flex-flow: wrap;
      justify-content: space-between;
      margin: 16px;
      padding: 20px;
      background-color: white;
    
      
    }

    .products .box-container .box{
        border: 1px solid black;
        margin: 20px;
        padding: 20px;

    }
    .products .box-container .box:hover{
        border: 1px solid black;
        margin: 20px;
        padding: 20px;
        transform: scale(1.1);
        transition: 0.4s;
        box-shadow:  2px 4px 2px 3px  gray;

    }
    .products .box-container .box .price{
        text-align: center;
        margin-bottom: 10px;
        font-size: 17px;
        font-weight: 600;
    }
    .products .box-container .box .tit-box{
        text-align: center;
        margin-bottom: 20px;
        font-size: 27px;
        font-weight: 600;
        color:  #145A32;
    }
    .btn {
        width: 200px;
        background-color: #145A32;
        color: white;
    }
    .btn:hover{
        width: 200px;
        background-color: #145A32;
        color: white;
        border: 2px solid black;
    }
    .box img{
       margin-left: 20px;
    }
    hr{
        height: 3px;
        color: #145A32;
       
    }
   .reslt{
    display: flex;
    justify-content: space-around;
    padding: 20px;
    margin: 20px;
   }
   .reslt .box{
   border: 1px solid black;
   padding: 20px;
   }
   .reslt .box .tit-box{
     text-align: center;
     color: #145A32;
     font-weight: 700;
   }
   .reslt .box .price{
     text-align: center;
     color: black;
     font-weight: 600;
     padding: 10px;
   }
</style>
<body>
    <?php 
     include 'config.php';
     // Vérifie si le formulaire de recherche est soumis

    ?>

      <header class="header">
      <a href="#home">Para-Vie</a>
      <form action="" method="POST" class="serch">
    <input type="search" name="search" class="search" placeholder="Search here ...">
    <input type="submit" value="Search Product" class="btn1">
    </form>

       <nav class="navbar">
       <a href="Cart.php"><i class="fa-solid fa-cart-shopping"></i> </a>
       <a href="index.php"><i class="fa-solid fa-user"></i>Logout</a>
       </nav>
</header>
<section id="home" class="home">
       <div class="cont">
        <h1>Para-vie</h1>
        <p>Welcome  back to Para-vie, <br> 
        your beauty ally for radiant and glowing skin. <br> Explore our selection of natural cosmetic products 
        <br> and discover your new skincare routine.</p>
         <button class="btn2"><a href="#product">Shop now</a></button>
       </div>
        <img src="Sephora.jpeg" alt="">  
    </section><br><br>
    <?php
include 'config.php';
if(isset($_POST['add_to_cart'])){
 $product_name=$_POST['product_name'];
 $product_price=$_POST['product_price'];
 $product_image=$_POST['product_image'];
 $product_quantity=1;

 $select_cart = $conn->prepare("SELECT * FROM cart WHERE name= :product_name");
 $select_cart->bindParam(':product_name', $product_name);
 $select_cart->execute();
 
    if( $select_cart->rowCount() > 0){
        echo'<div class="alert alert-warning">this product already added to card  </div>';
    }else{
        $insert_product=$conn->prepare("INSERT INTO cart (name,price,image,quantity) VALUES
         (' $product_name','$product_price', '$product_image',' $product_quantity')");
        $insert_product->execute();
        echo'<div class="alert alert-success">this product  added to card  </div>';
    }
}
?><hr>
       <div class="reslt">
       <?php
      
    if(isset($_POST['search'])) {
        // Récupère la valeur saisie par l'utilisateur
        $searchTerm = $_POST['search'];
    
        // Prépare et exécute la requête SQL pour rechercher les produits correspondants
        $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ?");
        $stmt->execute(["%$searchTerm%"]);
    
        // Vérifie s'il y a des résultats
        if ($stmt->rowCount() > 0) {
            // Affiche les résultats
           
            while ($product = $stmt->fetch()) {
               
                echo '<div class="box">';
                echo '<img src="' . $product['image'] . '" style="width: 150px; height: 170px;">';
                echo '<h3 class="tit-box">' . $product['name'] . '</h3>';
                echo '<div class="price">' . $product['price'] . 'Dh</div>';
                echo '<input type="hidden" name="product_name" value="' . $product['name'] . '">';
                echo '<input type="hidden" name="product_price" value="' . $product['price'] . '">';
                echo '<input type="hidden" name="product_image" value="' . $product['image'] . '">';
                echo '<input type="submit" value="Add to cart" class="btn btn-dark" name="add_to_cart">';
                echo '</div>';
            }
        } else {
            // Si aucun produit correspondant n'est trouvé
            echo '<p>No products found for your search term.</p>';
        }
    }
    ?>
       </div>
    <div class="container">
        <section class="products" id="product">
            <h1 class="heading"><i>Our products happy to see you again</i></h1>
            <div class="box-container">
                <?php
                if(isset($conn)) {
                    $select_products = $conn->prepare("SELECT * FROM products ORDER BY id DESC");
                    $select_products->execute();
                    if ($select_products->rowCount() > 0) {
                        while (($product = $select_products->fetch())) { ?>
                            <form action="" method="post">
                                <div class="box">
                                <img src="<?= $product['image']; ?>" style="width: 150px; height:170px;">
                                    <h3 class="tit-box"><?php echo $product['name']; ?></h3>
                                    <div class="price"><?php echo $product['price']; ?>Dh</div>
                                    <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                                    <input type="hidden" name="product_image" value="<?php echo $product['image']; ?>">
                                    <input type="submit" value="Add to cart" class="btn btn-dark" name="add_to_cart">
                                </div>
                            </form>
                <?php
                        }
                    } else {
                        echo '<p>No products found</p>';
                    }
                } else {
                    echo '<p>Database connection not established</p>';
                }
                ?>
            </div>
        </section>
    </div>

</body>
<footer>

</footer>
</html>
<?php

?>