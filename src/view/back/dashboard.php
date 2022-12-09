<?php $title = 'RapidNote - Dashboard'; ?>

<?php ob_start(); ?>

<div class="section">
    <div class="container">
        <!--responsive menu-->
        <div class="row mt-0 menu-mobile">
            <?php include 'menu-mobile.php'; ?>
        </div>

        <div class="row dashboard">
            <div class="col-sm-12 col-md-3 dashboard__menu">
                <?php include 'menu.php'; ?>
            </div>

            <div class="col-sm-12 col-md-9 dashboard__content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <p class="text-left">
                                Hello <span><?= $_SESSION['user'][
                                    'username'
                                ] ?>,</span> happy to see you again !
                            </p>
                        </div>
                    </div>
                    <div class="row" v-if='showInfos'>
                        <?php foreach ($infos as $data) { ?>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="./public/img/bitcoin.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title">Wallet</p>
                                    <p class="card-text">
                                        <strong>
                                            Balance
                                        </strong> <br>
                                        <span><?= htmlspecialchars(
                                            $data['balance']
                                        ) ?> ghc</span> <img src="./public/img/ghana-flag.png" alt=""> !
                                        <span><?= htmlspecialchars(
                                            $data['balance'] / 10
                                        ) ?>usd</span> <img src="./public/img/usd.png" alt="" class='flag'>
                                        <hr>
                                    </p>

                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <?php foreach ($rates as $data) { ?>
                        <div class="col-sm-12 col-md-4">
                            <div class="card p-0">
                                <img class="card-img-top" src="./public/img/<?= htmlspecialchars(
                                    $data['image']
                                ) ?>" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title"><?= htmlspecialchars(
                                        $data['name']
                                    ) ?> <br>
                                    </p>
                                    <p class="card-text">
                                        <strong>
                                            Buying
                                        </strong> <br>
                                        <span><?= htmlspecialchars(
                                            $data['buying_price']
                                        ) ?> ghc</span> <img src="./public/img/ghana-flag.png" alt=""> !
                                        <span><?= htmlspecialchars(
                                            $data['buying_price'] / 10
                                        ) ?>usd</span> <img src="./public/img/usd.png" alt="" class='flag'>
                                        <hr>
                                    </p>

                                    <p class="card-text">
                                        <strong>
                                            Selling
                                        </strong> <br>
                                        <span><?= htmlspecialchars(
                                            $data['selling_price']
                                        ) ?> ghc</span> <img src="./public/img/ghana-flag.png" alt=""> !
                                        <span><?= htmlspecialchars(
                                            $data['selling_price'] / 10
                                        ) ?>usd</span> <img src="./public/img/usd.png" alt="" class='flag'>
                                        <hr>
                                    </p>

                                    <?php if (
                                        $_SESSION['user']['role'] == 'admin'
                                    ) { ?>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        <i class='fas fa-pen' @click='editRate(1)'></i>
                                    </p>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>