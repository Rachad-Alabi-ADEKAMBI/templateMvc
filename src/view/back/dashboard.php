<?php $title = 'RapidNote - Dashboard'; ?>

<?php ob_start(); ?>

<div class="section">
    <div class="container">
        <div class="row dashboard">
            <div class="col-3 dashboard__menu">
                <?php include 'menu.php'; ?>
            </div>

            <div class="col-9 dashboard__content">
                <div class="container">
                    <div class="row">
                        <?php foreach ($infos as $data) { ?>
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="./public/img/bitcoin.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Balance</h5>


                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <?php foreach ($rates as $data) { ?>
                        <div class="col-4">
                            <div class="card">
                                <img class="card-img-top" src="./public/img/<?= htmlspecialchars(
                                    $data['image']
                                ) ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars(
                                        $data['name']
                                    ) ?> <br>
                                    </h5>
                                    <p class="card-text">
                                        Buying <br>
                                        <?= htmlspecialchars(
                                            $data['buying_price']
                                        ) ?> GHC! <?= htmlspecialchars(
     $data['buying_price'] / 10
 ) ?> USD
                                    </p>

                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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