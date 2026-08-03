    
    <?php
        include 'partials/header.php';
        include 'partials/nav.php';
        include 'includes/db/categories.php';
        include 'includes/db/products.php';


        $image_folder = '/gardennwears/assets/images/';
    ?>
    
    <div class="video">
        <video autoplay loop muted playsinline id="bg-video">
            <source src="assets/video/clothes.mp4" type="video/mp4">
        </video>
    </div>

    <div class="banner-section" style="background: rgba(224, 224, 224, 0.3);height: 100vh;">
        



        <div class="category-container">
            <label for="clothing-category" class="category-label">Category</label>
            
            <select id="clothing-category" name="categories" class="category-select" onchange="if(this.value) window.location.href=this.value;">
                <option value="" disabled selected>Select an option...</option>
                <?php foreach ($categories as $product): ?>
                    <!-- value holds the link/ID, text holds the display name -->
                    <option value="#?id=<?php echo $product['id']; ?>">
                        <?php echo htmlspecialchars($product['name']); ?>
                    </option>
                <?php endforeach; ?>
            </select>

        </div>

        <div class="special-container">
            <br><br><br>
            <h2><i><b>Fashion Meets Perfection</b></i></h2>
            <br><br>
        </div>

        <div class="carousel-container">
            <div class="carousel-viewport">

                <div class="carousel-item-active">
                    <img src="/gardennwears/assets/images/Zara.png" alt="clothing item 1">
                </div>

                <div class="carousel-item">
                    <img src="/gardennwears/assets/images/download.png" alt="clothing iimages\item 2">
                </div>

                <div class="carousel-item">
                    <img src="/gardennwears/assets/images/channel.jpg" alt="clothing item 3">
                </div>

                <div class="carousel-item">
                    <img src="/gardennwears/assets/images/vasarce.png" alt="clothing item 4">
                </div>

                <div class="carousel-item">
                    <img src="/gardennwears/assets/images/dior.png" alt="clothing item 5">
                </div>

                <div class="carousel-item">
                    <img src="/gardennwears/assets/images/ck2.png" alt="clothing item 6">
                </div>
                
            </div>
            <button class="carousel-btn prev-btn" onclick="moveSlide(1)" >&#10095;</button>
        </div>

    </div>

    <div id ="merged-store-showcase"></div>

    <?php if (!empty($filtered_products)): ?>
<div class="collection-color">
    <div class="products-page-container">
        <h1 class="page-title">
            <?php
                // Show selected category name in heading
                foreach ($categories as $product) {
                    if ($product['id'] == $category_id) {
                        echo htmlspecialchars($product['name']);
                        break;
                    }
                }
            ?>
        </h1>
        <div class="products-list">
            <?php foreach ($filtered_products as $product): ?>
                <div class="product-card">
                    <img src="<?php echo $image_folder . $product['image']; ?>" 
                         alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                    <p class="price">Ksh.<?php echo $product['price']; ?></p>
                    <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <button type="submit" name="add-to-cart" class="add-to-cart">Add to Cart</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php endif; ?>


    <div class="collection-color">
        <div class="products-page-container">
            <h1 class="page-title">Collections</h1>
            <div class="columns-wrapper">
                <div class="product-column">
                    <h2 class="column-heading">New Arrivals</h2>
                    <div class="products-list">

                    <?php foreach ($new_arrivals_products as $product): ?>
                    
                    <div class="product-card">

                        <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                        <?php  echo "<h3>".$product['name']."</h3>"; ?>

                        <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                   <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>


                    </div>
                <?php endforeach; ?>
                
            
                </div>
                
            
                <div class="product-column">
                    <h2 class="column-heading">Trending Now</h2>
                    <div class="products-list">
                    <?php foreach ($trending_now_products as $product): ?>
                        <div class="product-card">

                            <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                            <?php  echo "<h3>".$product['name']."</h3>"; ?>

                            <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                            <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>
                           

                        </div>
                    <?php endforeach; ?>



                    </div>
                </div>
                
            
                <div class="product-column">
                    <h2 class="column-heading">Essentials</h2>
                    <div class="products-list">
                    <?php foreach ($essentials_products as $product): ?>
                        <div class="product-card">

                            <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                            <?php  echo "<h3>".$product['name']."</h3>"; ?>

                            <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                            <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>
                           

                        </div>
                    <?php endforeach; ?>


                </div>

                <div class="product-column">
                    <h2 class="column-heading">Hoddies and Sweaters</h2>
                    <div class="products-list">

                    <?php foreach ($hoddies_and_sweaters_products as $product): ?>
                        <div class="product-card">

                            <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                            <?php  echo "<h3>".$product['name']."</h3>"; ?>

                            <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                            <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>

                        </div>
                    <?php endforeach; ?>

                </div>


                <div class="product-column">
                     <h2 class="column-heading">Shirts</h2>
                     <div class="products-list">
                      
                     
                    <?php foreach ($t_shirts_products as $product): ?>
                        <div class="product-card">

                            <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                            <?php  echo "<h3>".$product['name']."</h3>"; ?>

                            <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                            <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>

                        </div>
                    <?php endforeach; ?>
                     
                </div>


                <div class="product-column">
                    <h2 class="column-heading">Jeans</h2>
                    <div class="products-list">


                    <?php foreach ($jeans_products as $product): ?>
                        <div class="product-card">

                            <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                            <?php  echo "<h3>".$product['name']."</h3>"; ?>

                            <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                            
                            <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>

                        </div>
                    <?php endforeach; ?>



                </div>

                <div class="product-column">
                     <h2 class="column-heading">Shoes</h2>
                     <div class="products-list">



                     <?php foreach ($shoes_products as $product): ?>
                        <div class="product-card">

                            <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                            <?php  echo "<h3>".$product['name']."</h3>"; ?>

                            <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                            <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>

                        </div>
                    <?php endforeach; ?>

                </div>


                <div class="product-column">
                     <h2 class="column-heading">Headwear</h2>
                     <div class="products-list">



                     <?php foreach ($headwear_products as $product): ?>
                        <div class="product-card">

                            <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                            <?php  echo "<h3>".$product['name']."</h3>"; ?>

                            <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                            <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>

                        </div>
                    <?php endforeach; ?>


                </div>

                <div class="product-column">
                    <h2 class="column-heading">Outwear</h2>
                    <div class="products-list">



                    <?php foreach ($outwear_products as $product): ?>
                        <div class="product-card">

                            <?php  echo "<img src=".$image_folder.$product['image']." alt=".$product['name'].">" ;?>

                            <?php  echo "<h3>".$product['name']."</h3>"; ?>

                            <?php echo "<p class='price'>Ksh.".$product['price']."</p>" ; ?>

                            <form method="POST" action="pages/cart.php">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <button type="submit"id="add-to-cart"name="add-to-cart" class="add-to-cart">Add to Cart</button>

                    </form>

                        </div>
                    <?php endforeach; ?>


                </div>
            </div>

        </div>
     </div>
    </div>

    <section class="about-us-section">
        <div class="about-container">

            <div class="about-content">
                <h2 class="about-title">About Us</h2>
                <p class="about-text">
                    Welcome to Gardenn Wears,where style meets comfort.
                </p>
                <p class="about-text">
                    Our Mission is to provide sustainable, beautifully crafted clothing that makes you empowered to express your unique individuality.
                </p>
            </div>

            <div class="about-contact-box">
                <h3 class="contact=title">
                    Reach us
                </h3>
                <div class="contact-links">
                    <a href="tel:+25412345678"class="contact-item link-phone">
                        <span class="contact-icon"></span>
                        <span class="contact-label">Call/Contact</span>
                    </a>

                    <a href="https://instagram.com/gardennwears"target="_blank" class="contact-item link-instagram">
                        <span class="contact-icon"></span>
                        <span class="contact-label">Instagram</span>
                    </a>

                    <a href="https://facebook.com/gardennwears"target="_blank" class="contact-item link-facebook">
                        <span class="contact-icon"></span>
                        <span class="contact-label">Facebook</span>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <?php
        include 'partials/footer.php';
    ?>