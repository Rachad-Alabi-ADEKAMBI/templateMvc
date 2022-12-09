<?php $title = 'RapidNote - Dashboard'; ?>

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

            <div class="col-9 dashboard__content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <form class='form ' v-if='showWallet'>
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
                                        <button class="btn btn-primary" @click='displayLoad()'>
                                            Load
                                        </button>
                                    </div>

                                    <div class="col-6">
                                        <button class="btn btn-primary" @click='displayWithdraw()'>
                                            Withdraw
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <form class='form' v-if='showLoad'>
                                <div class="form__close">
                                    <span @click='displayWallet()'>
                                        <i class="fas fa-arrow-left"></i> Previous
                                    </span>
                                </div>

                                <h1>
                                    Load wallet
                                </h1>

                                <label for="" class="label1">
                                    Amount to load: <br>
                                    <input type="text" v-model="load" class="input">
                                    <div class="currency currency-gh">
                                        ghc <img src="./public/img/ghana-flag.png" class="flag">
                                    </div>

                                    <div class="currency currency-usd">
                                        {{ format(load/10)}}
                                        Usd <img src="./public/img/usd.png" class='flag'>
                                    </div>
                                </label> <br>


                                <button class="btn btn-primary mx-auto text-center">
                                    Proceed
                                </button>
                            </form>

                            <form class='form' v-if='showWithdraw'>
                                <div class="form__close">
                                    <span @click='displayWallet()'>
                                        <i class="fas fa-arrow-left"></i> Previous
                                    </span>
                                </div>

                                <h1>
                                    Withdraw money
                                </h1>

                                <label for="" class="label1">
                                    Amount to withdraw: <br>
                                    <input type="text" v-model="load" class="input">
                                    <div class="currency currency-gh">
                                        ghc <img src="./public/img/ghana-flag.png" class="flag">
                                    </div>

                                    <div class="currency currency-usd">
                                        {{ format(load/10)}}
                                        Usd <img src="./public/img/usd.png" class='flag'>
                                    </div>
                                </label> <br>


                                <button class="btn btn-primary mx-auto text-center">
                                    Proceed
                                </button>
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