<?php $title = 'RapidNote - Buy currency'; ?>

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
                            <form class='form' v-if='showBuy'>
                                <h1>
                                    Buy currrency
                                </h1>

                                <div class="form-check form-check-inline" v-for='rate in rates' :key='rate.id'>
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="" @click='getBuyingRate(rate.id)'>
                                    <label class="form-check-label" for="inlineRadio1">
                                        {{ rate.name }} <img :src='getImgUrl(rate.image)'>
                                    </label>
                                </div>
                                <hr>

                                <div class="mt-4 item">
                                    Currency choosen: <br>
                                    Buying rate: <span>{{ rate }} ghc</span> <img src="./public/img/ghana-flag.png"
                                        alt="" class='flag'> ! <span> {{ format(rate/10)}} Usd</span> <img
                                        src="./public/img/usd.png" alt="" class="flag">
                                </div>

                                <hr>

                                <label for="" class="label1">
                                    Amount you need: <br>
                                    <input type="text" v-model="amount" @click="getNeed(amount, rate, id)"
                                        class="input">
                                    <div class="currency currency-gh">
                                        ghc <img src="./public/img/ghana-flag.png" class="flag">
                                    </div>

                                    <div class="currency currency-usd">
                                        {{ format(amount/10)}}
                                        Usd <img src="./public/img/usd.png" class='flag'>
                                    </div>

                                    <img src="../../public/img/visa.png" alt="" class="flag">
                                </label>

                                <label for="" class="label1">
                                    Amount you receive: <br>
                                    <input type="text" v-model="need" @click="getAmount(need, rate, id)" class="input">
                                    <div class="currency currency-gh">
                                        ghc <img src="./public/img/ghana-flag.png" class="flag">
                                    </div>

                                    <div class="currency currency-usd">
                                        {{ format(need)/10}}
                                        Usd <img src="./public/img/usd.png" class='flag'>
                                    </div>
                                </label> <br>



                                <button class="btn btn-primary mx-auto text-center" @click="displayPayment()">
                                    Next
                                </button>

                            </form>

                            <form class="form" v-if='showPayment'>

                                <div class="form__close">
                                    <span @click='displayBuy()'>
                                        <i class="fas fa-arrow-left"></i> Previous
                                    </span>
                                </div>

                                <h1 class="form__title">
                                    Payment Methods
                                </h1>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form__items__item">
                                                <img src="./public/img/img-mtn.png" alt="">
                                                <p>
                                                    MTN MOBILE MONEY
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form__items__item">
                                                <img src="./public/img/vodafone_cash.png" alt="">
                                                <p>VODAFONE CASH</p>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form__items__item">
                                                <img src="./public/img/bank.jpg" alt="">
                                                <p>BANK DESPOSIT</p>
                                            </div>
                                        </div>
                                    </div>
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