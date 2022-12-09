<div class="menu">
    <?php
    if ($_SESSION['user']['role'] == 'user') { ?>
    <ul>
        <li>
            <button class='btn btn-primary'>
                <a href="index.php?action=dashboard">
                    <i class=" fas fa-columns"></i> Dashboard
                </a>
            </button>
        </li>

        <li>
            <button class='btn btn-primary'>
                <a href="index.php?action=buy">
                    <i class="fas fa-shopping-cart"></i> Buy
                </a>
            </button>
        </li>


        <li>
            <button class='btn btn-primary'>
                <a href="index.php?action=sell">
                    <i class="fas fa-store"></i> Sell
                </a>
            </button>
        </li>

        <li>
            <button class='btn btn-primary'>
                <a href="./index.php?action=wallet">
                    <i class="fas fa-wallet"></i> Wallet
                </a>
            </button>
        </li>



        <li>
            <button class='btn btn-primary'>
                <a href="./index.php?action=myTransactions">
                    <i class="fas fa-list"></i> My transactions
                </a>
            </button>
        </li>


        <li>
            <button class='btn btn-primary'>
                <a href="./index.php?action=settings">
                    <i class="fas fa-cogs"></i> Settings
                </a>
            </button>
        </li>



    </ul>
    <?php }
    if ($_SESSION['user']['role'] == 'admin') { ?>

    <ul>
        <li>
            <button class="btn btn-primary">
                <a href="./index.php?action=dashboard">
                    <i class="fas fa-columns"></i> Dashboard
                </a>
            </button>

        <li>
            <button class="btn btn-primary">
                <a href="./index.php?action=transactions">
                    <i class="fas fa-list"></i> Transactions
                </a>
            </button>
        </li>



        <li>
            <button class="btn btn-primary">
                <a href="./index.php?action=users">
                    <i class="fas fa-users"></i> Users
                </a>
            </button>
        </li>

        <li>
            <button class="btn btn-primary">
                <a href="./index.php?action=payments">
                    <i class="fas fa-money-bill-wave"></i> Payments
                </a>
            </button>
        </li>





        <li>
            <button class="btn btn-primary">
                <a href="">
                    <i class="fas fa-envelope"></i> Webmail
                </a>
            </button>
        </li>


        <li>
            <button class="btn btn-primary">
                <a href="./index.php?action=settings">
                    <i class="fas fa-cogs"></i> Settings
                </a>
            </button>
        </li>

    </ul>

    <?php }
    ?>
</div>