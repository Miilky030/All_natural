<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset" style="color: #9F6C3A;"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
                        <span class="number">809-490-6856</span>
						</div>
					</div>

					<div class="container-logo">
						<i class="fa-solid fa-droplet" style="color: #A8EEF1;"></i>
						<h1 class="logo"><a href="/">All Natural</a></h1>
					</div>

					<div class="container-user">
						<i class="fa-solid fa-user"></i>
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</div>
				</div>
			</div>

<header class="header">


    <div class="flex">
    <div class="container-logo">
   
    <a href="admin_page.php" class="logo"></a>
    </div>
 
       <nav class="navbar">
          <a href="home.php">Inicio</a>
          <a href="shop.php">Tienda</a>
          <a href="orders.php">Ordenes</a>
          <a href="about.php">Sobre nosotros</a>
          <a href="contact.php">Contacto</a>
       </nav>
 
       <div class="icons">
       
       <div id="menu-btn" class="fas fa-bars"></div>
          <div id="user-btn" class="fas fa-user"></div>
          <a href="search_page.php" class="fas fa-search"></a>
          <?php
             $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
             $count_cart_items->execute([$user_id]);
             $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
             $count_wishlist_items->execute([$user_id]);
          ?>
          <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $count_wishlist_items->rowCount(); ?>)</span></a>
          <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $count_cart_items->rowCount(); ?>)</span></a>
       </div>
 
       <div class="profile">
          <?php
             $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
             $select_profile->execute([$user_id]);
             $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
          ?>
          <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
          <p><?= $fetch_profile['name']; ?></p>
          <a href="user_profile_update.php" class="btn">Actualizar Perfil</a>
          <a href="logout.php" class="delete-btn">Cerrar sesión</a>
          <div class="flex-btn">
             <a href="login.php" class="option-btn">Acceder</a>
             <a href="register.php" class="option-btn">Registrarse</a>
          </div>
       </div>
 
    </div>



 
    <script
             src="https://kit.fontawesome.com/81581fb069.js"
             crossorigin="anonymous"
         ></script>
 
 </header>