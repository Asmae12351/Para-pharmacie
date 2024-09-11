<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="icon3.jpg" type="image/jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>admin page</title>
</head>
<style>

    .add_products {
        border: 1px solid black;
        width: 340px;
        height: 335px;
        background-color: #70B070;
        margin-left: 530px;
        margin-top: 40px;
        padding: 20px;
        
        
    }
    .add_products h3 {
        text-align: center;
        color: white;
    }
    .add_products input {
        width: 300px;
        color: black;
    }
    .add_products label {
        color: white;
        font-weight: 500;
    }
    .delete-btn {
       margin-left: 50px;
        background-color: #70B070;
        color: white;
        text-decoration: none;
        width: 280px;
        height: 50px;
        padding: 10px;
        border-radius: 20px;
    }
    .delete-btn:hover {
       margin-left: 50px;
        background-color: #70B070;
        color: black;
        text-decoration: none;
        width: 280px;
        height: 50px;
        padding: 10px;
        border-radius: 20px;
       
    }
    .update-btn {
       margin-left: 50px;
        background-color: #70B070;
        color: white;
        text-decoration: none;
        width: 260px;
        height: 50px;
        padding: 10px;
        border-radius: 20px;
    }
    .update-btn:hover {
       margin-left: 50px;
        background-color: #70B070;
        color: black;
        text-decoration: none;
        width: 260px;
        height: 50px;
        padding: 10px;
        border-radius: 20px;
        
       
    }
        .table_products thead{
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px;
            width: 90px;
            height: 40px;
        }
        .table_products thead th{
            padding: 10px;
            width: 150px;
        }
        td img{
            height: 120px;
            width: 100px;
            margin-left: 30px;
            padding: 10px;
            
        }
        .update{
            border: 2px solid black;
            margin-left: 500px;
            display: flex;
            width: 330px;
            padding: 20px;
           
        }
        .update form{
            width: 290px;
            border-radius: 20px;
        }
        .update img{
           margin-left: 30PX;
        }
        .update .box{
            width: 290px;
        }
        .btn{
            width: 290px;
        }
</style>
<body>
    <?php 
        include 'header.php';
    ?>
    <section class="add_products">
        <form action="" method="post" enctype="multipart/form-data"> 
            <h3>Add Products Here:</h3><br/>
            <input type="text" name="p_name" placeholder="Enter the product name" class="box" required><br><br>
            <input type="number" name="p_price" placeholder="Enter the product price" class="box" required min="0"><br><br>
            <input type="file" name="p_image" accept="image/png,image/jpg,image/jpeg" class="box" required><br><br>
            <input type="submit" value="Add the product" name="add_product" class="btn btn-success">
        </form>
    </section><br><br>
    <?php
    // Include your database configuration file
    include 'config.php';
    // Check if the form is submitted
    if(isset($_POST['add_product'])){
        $filename = $_FILES['p_image']['name']; 
        $filetmpname = $_FILES['p_image']['tmp_name']; 
        $filesize = $_FILES['p_image']['size']; 
        $fileerorr = $_FILES['p_image']['error']; 
        $filetype = $_FILES['p_image']['type'];
        $fileext = explode('.', $filename);
        $fileactualex = strtolower(end($fileext));
        $allowed = array('jpg', 'jpeg', 'png');
        if(in_array($fileactualex, $allowed)) {
            if($fileerorr == 0){
                if($filesize < 500000){
                    $filenewname = uniqid(''.true) . '.' . $fileactualex;
                    $filedestination = 'uploaded_image/' . $filenewname;
                    move_uploaded_file($filetmpname, $filedestination);
                    $sql = "INSERT INTO products (name, price, image) VALUES (:name, :price, :image)";
                    $stmt = $conn->prepare($sql);
                    $data = [
                        ':name' => $_POST['p_name'],
                        ':price' => $_POST['p_price'],
                        ':image' => $filedestination
                    ];
                    if($stmt->execute($data)){
                        echo '<p class="alert alert-success">Products added</p>';
                    } else {
                        echo '<p class="alert alert-danger">Failed!</p>';
                    }
                } else {
                    echo "Large photo";
                }
            } else {
                echo "Error loading photo";
            }
        } else {
            echo "Unauthorized file type";   
        }
    }
    if(isset($_GET['delete'])){
        $_delete_id = $_GET['delete']; // Get the product ID to delete
    
        // Prepare the SQL statement
        $sql = "DELETE FROM products WHERE id = ?";
        
        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_delete_id]);
       
       
    }    
?><br><br>
    <section class="table_products">
        <table border="1px" style="width: 670px; margin-left:350px ;height:300px;">
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Check if $conn is defined
                    if(isset($conn)) {
                        $select_product = $conn->query("SELECT * FROM products");
                        if ($select_product->rowCount() > 0) {
                            while($products = $select_product->fetch()){
                ?>
                                <tr>
                                    <td><img src="<?php echo $products['image']; ?>" alt="Product Image" style="width: 100px;"></td>
                                    <td><?php echo $products['name']; ?></td>
                                    <td><?php echo $products['price']; ?></td>
                                    <td>
                                        <a href="admin.php?delete=<?php echo $products ['id']?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this')"><i class="fa-solid fa-trash"></i>   Delete</a><br><br>
                                        <a href="admin.php?update=<?php echo $products ['id']?>" class="update-btn" onclick="return confirm('Are you sure yoy want to update this')"><i class="fa-solid fa-pen-to-square"></i> Update</a>
                                    </td>
                                </tr>
                <?php
                            }
                        } else {
                            echo '<tr><td colspan="4">No products added</td></tr>';
                        }
                    } else {
                        echo '<tr><td colspan="4">Database connection not established</td></tr>';
                    }
                ?>
            </tbody>
        </table>
    </section>
    <br><br>
    <?php
    if(isset($_POST['update'])){
        $update_p_id = $_POST['update_p_id'];
        $update_p_name = $_POST['update_p_name'];
        $update_p_price = $_POST['update_p_price'];
        $update_p_image = $_FILES['update_p_image']['name'];
        $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
        $update_p_image_folder = 'uploaded_image/' . $update_p_image;
        // Mettre à jour les données du produit dans la base de données
        $sql = "UPDATE products SET name = :name, price = :price";
        $data = [
            ':name' => $update_p_name,
            ':price' => $update_p_price,
            ':id' => $update_p_id
        ];
        // Vérifier si une nouvelle image est téléchargée
        if(!empty($update_p_image)){
            $sql .= ", image = :image";
            $data[':image'] = $update_p_image_folder;
        }
        $sql .= " WHERE id = :id";
        $stmt = $conn->prepare($sql);
    
        if($stmt->execute($data)){
            // Déplacer la nouvelle image téléchargée vers le dossier des images téléchargées
            if(!empty($update_p_image)){
                move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
            }
            echo '<div class="alert alert-success">Product updated successfully</div>';
           
        } else {
            echo '<div class="alert alert-danger">Error in updating product</div>';
        }
    }
    ?>
<section class="update">
    <?php
    if(isset($_GET['update'])){
        $update_id = $_GET['update'];
        $edit_product_query = $conn->prepare("SELECT * FROM products WHERE id = ?");
        $edit_product_query->execute([$update_id]);
        if ($edit_product_query->rowCount() > 0) {
            $product = $edit_product_query->fetch();
    ?>
       <form action="" method="post" enctype="multipart/form-data">
        <img src="<?php echo $product['image']; ?>" alt="Product Image" style="width: 230px; heigth:240px"><br>
        <input type="hidden" name="update_p_id" value="<?php echo $product['id']; ?>"><br><br>
        <input type="text" name="update_p_name" class="box" value="<?php echo $product['name']; ?>" required><br><br>
        <input type="number" min="0" name="update_p_price" class="box" value="<?php echo $product['price']; ?>" required><br><br>
        <input type="file" name="update_p_image" class="box" accept="image/png, image/jpeg, image/jpg"><br><br>
        <input type="submit" value="Update" class="btn btn-dark" name="update"><br><br>
       </form>
    <?php
        }   
    }
    ?>
</section>
</body>
</html>
