<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">
        <a href="./index.php?action=home">
            <img src="./public/img/logo.png" alt="">
        </a>
    </label>
    <ul>
        <li><a class="" href="./index.php?action=home"><i class="fas fa-home"></i> Home</a></li>


        <li>
            <a href="./index.php?action=home#contact">
                About
            </a>
        </li>

        <?php if (!isset($_SESSION['user'])): ?>
        <li><a class="login-link <?php echo $current_page == 'login.php'
            ? 'active'
            : null; ?>" href="./index.php?action=loginPage"><i class="fas fa-sign-in-alt"></i>Login</a></li>

        <?php else: ?>

        <li><a class="<?php echo $current_page == 'dashboard.php'
            ? 'active'
            : null; ?>" href="./index.php?action=dashboard"> <i class="fas fa-columns"></i> Dashboard</a>
        </li>


        <li><a href="./api/api.php?action=logout" class=""><i class="fas fa-sign-out-alt"></i>Logout</a></li>

        <?php endif; ?>
    </ul>
</nav>
</body>