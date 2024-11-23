<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Housing Management</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
<!-- 顶部导航栏 -->
<header>
    <div class="logo">
        <img src="pics/logo.png" alt="Company Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Apartment</a></li>
            <li><a href="#">My Intention</a></li>
            <li><a href="#">Additional Service</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="register.php">Sign up</a></li>
            <li><a href="#">Help</a></li>
        </ul>
    </nav>
</header>

<!-- 搜索区域 -->
<div class="search-container">
    <div class="background-image">
        <img src="pics/bg.png" alt="Company Logo">
        <div class="search-bar">
            <h1>Welcome...</h1>
            <form action="#" method="GET">
                <select name="category" id="category" onchange="updateOptions()">
                    <option value="cities">Cities</option>
                    <option value="apartments">Apartments</option>
                    <option value="universities">Universities</option>
                </select>
                <input type="text" placeholder="Search..." name="query">
                <input type="submit" value="Search">
            </form>
            <div class="dropdown">
                <ul id="dropdown-options">
                    <li><a href="#">CROUS Créteil</a></li>
                    <li><a href="#">CROUS Grenoble - Alpes</a></li>
                    <li><a href="#">CROUS La Réunion et Mayotte</a></li>
                    <li><a href="#">CROUS Lille</a></li>
                    <li><a href="#">CROUS Limoges</a></li>
                    <li><a href="#">CROUS Lorraine</a></li>
                    <li><a href="#">CROUS Lyon</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 特性区域 -->
<div class="features">
    <div class="feature">
        <img src="images/free.png" alt="Free Reservation">
        <p>Free-Reservation</p>
    </div>
    <div class="feature">
        <img src="images/price.png" alt="Price Guarantee">
        <p>Price-Guarantee</p>
    </div>
    <div class="feature">
        <img src="images/service.png" alt="Personal Service">
        <p>Personal-Service</p>
    </div>
    <div class="feature">
        <img src="images/exclusive.png" alt="Exclusive Listing">
        <p>Exclusive-Listing</p>
    </div>
</div>

<!-- 操作步骤 -->
<div class="steps">
    <img src="images/step1.png" alt="Step 1">
    <img src="images/step2.png" alt="Step 2">
    <img src="images/step3.png" alt="Step 3">
    <img src="images/step4.png" alt="Step 4">
</div>

<!-- 页脚 -->
<footer>
    <ul class="footer-links">
        <li><a href="#">About us</a></li>
        <li><a href="#">Cooperation</a></li>
        <li><a href="#">Agreement</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">FAQ</a></li>
    </ul>
    <ul class="social-icons">
        <li><a href="#">X</a></li>
        <li><a href="#">Reddit</a></li>
        <li><a href="#">Ins</a></li>
    </ul>
    <p>Copyright © 2077</p>
</footer>
</body>
<script>
    function updateOptions() {
        // 可以在此处动态更新选项
    }
</script>
</html>