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
                            <form class='form'>
                                <h2>
                                    Sell currrency
                                </h2>

                                <div class="form-check form-check-inline" v-for='rate in rates' :key='rate.id'>
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="" @click='getBuyingRate(rate.id)'>
                                    <label class="form-check-label" for="inlineRadio1">
                                        {{ rate.name }} <img :src='getImgUrl(rate.image)'>
                                    </label>
                                </div>

                                <p class="mt-4">
                                    Buying rate: <span>{{ rate }} ghc</span> ! <span>{{ format(rate/10)}} Usd</span>
                                </p>

                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Amount you need</label>
                                        <input type="number" v-model='neededAmount' value="{{amountToPay * rate}}">
                                    </div>
                                </div>

                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Amount you pay</label>
                                        <input type="number" v-model='amountToPay' value="{{neededAmount * rate}}">
                                    </div>
                                </div>

                                <div class="col-auto mt-2 pl-0">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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