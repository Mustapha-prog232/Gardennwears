
<?php 
session_start(); 

$total_items = 0;
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $total_items = array_sum($_SESSION['cart']);
}
?>
<nav class="navbar">
        <div class="navbar__container">
            <a href="/" id="navbar__logo">Gardenn Wears<img src="/gardennwears/assets/images/icons8-clothes-94.png" alt="logo" class="navbar__logo"></a>
            <div class="navbar__toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <form method="GET"form class="search-form" action="search.php">
                        <input type="text"id="searchInput" name="query" placeholder="Search for items" required>
                        <button type="submit">Search</button>
                    </form>
                </li>
                <li class="navbar__btn">
                    <?php if(isset($_SESSION['fullname'])): ?>
                        <span id="user-display">
                            <?php echo htmlspecialchars($_SESSION['fullname']); ?> |
                            <a href="/gardennwears/includes/db/logout.php" style="cursor:pointer;color:black;">Logout</a>
                        </span>
                        <?php else: ?>
                            <a href="/gardennwears/pages/signup.php"class="button" id="signupBtn" >Sign Up</a>
                            <?php endif; ?>
                </li>
            </ul>
        </div>


        <div class="carti-container">
            <button class="carti-btn" onclick="goToCart()">
                🛒 Cart
            </button>
            <div class="carti-count" id="cartCount"><?php echo $total_items; ?></div>
        </div>

        <div id="user-display" style="display:none; color:rgb(6, 5, 7);"></div>


    </nav>