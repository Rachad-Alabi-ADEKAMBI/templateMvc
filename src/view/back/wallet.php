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
                        <div class="col-sm-12 col-md-6">
                            <form class='form bg-light'>
                                <h2>
                                    My wallet
                                </h2>

                                <div class="row">
                                    <div class="col">
                                        <p class="text-center">
                                            Balance: <span>100 ghc</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary">
                                            Load
                                        </button>
                                    </div>

                                    <div class="col-6">
                                        <button class="btn btn-primary">
                                            Withdraw
                                        </button>
                                    </div>
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