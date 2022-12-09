<nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent2">
        <?php if ($_SESSION['user']['role'] == 'user') { ?>
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
        <?php } else { ?>
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
        <?php } ?>


    </div>
</nav>