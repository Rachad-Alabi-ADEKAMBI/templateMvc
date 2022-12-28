<?php $title = 'RapidNote - Edit Rate'; ?>

<?php ob_start(); ?>

<div class="section">
    <div class="container">
        <!--responsive menu-->
        <div class="row mt-0 menu-mobile">
            <?php include 'menu-mobile.php'; ?>
        </div>
        <div class="row dashboard">

            <div class="col-3 dashboard__menu">
                <?php include 'menu.php'; ?>
            </div>


            <div class="col-sm-12 col-md-6">
                <form class="form" action='./index.php?action=createRate' method='POST'>
                    <div class="form__close">
                        <a href="./index.php?action=dashboard">
                            back
                        </a>
                    </div>
                    <h1>
                        Edit rate
                    </h1>
                    <?php foreach ($datas as $data) { ?>
                    <div class="card p-3">

                        <p> <img src="./public/img/<?= $data[
                            'image'
                        ] ?>" alt=""> <?= $data['name'] ?></p>
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <label for=""></label>New buyingprice: <br>
                                <input type="text" placeholder='<?= htmlspecialchars(
                                    $data['buying_price']
                                ) ?>' name='buying_price'> ghc
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col-sm-12">
                                <label for=""></label>New selling_price: <br>
                                <input type="text" placeholder='<?= $data[
                                    'selling_price'
                                ] ?>' name='selling_price'> ghc
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <button class="btn btn-primary" type="submit">
                                    Change
                                </button>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>