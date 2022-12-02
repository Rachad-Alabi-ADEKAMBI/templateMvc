<?php $title = 'RapidNote - Bitcoin exchange'; ?>

<?php ob_start(); ?>

<!--top starts-->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 md-6">
                <div class="top">

                    <div class="top__text">
                        <h1 class="top__text__title">
                            RAPID NOTE
                        </h1>


                        <h2 class="top__text__subtitle">
                            Buy and sell your crypto-currencies get paid quickly
                        </h2>

                        <ul class="top__text__items">
                            <li>
                                Easy to use
                            </li>

                            <li>
                                Secure
                            </li>

                            <li>
                                Paid referals
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--top ends-->

<!--about starts-->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 md-6">
                <h2 class="about__item__title">
                    ABOUT US
                </h2>

                <p class="about__item__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas doloribus veniam ut vero, iusto
                    voluptatem, explicabo debitis natus, porro officia totam perferende!
                </p>

                <a href="./index.php?action=about" class="btn btn-primary mx-auto">
                    More
                </a>
            </div>

            <div class="col-sm-6 md-6">
                <div class="about__item__boxes">
                    <div class="box green">
                        <p class='text-center'>
                            Quick services
                        </p>
                    </div>

                    <div class="box orange">
                        <p class='text-center'>
                            Small rates
                        </p>
                    </div>

                    <div class="box purple">
                        <p class='text-center'>
                            Customer care
                        </p>
                    </div>

                    <div class="box wheat">
                        <p class='text-center'>
                            Business
                            participation
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about ends-->


<!--how section starts-->
<section class="section pt-50">
    <div class="container pt-50">
        <h2 class="text-center">
            HOW DOES IT WORK ?
        </h2>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="">
                    <div class="box-img">
                        <p>1</p>
                    </div>

                    <p class="text-center">
                        Login/Create your account
                    </p>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="">
                    <div class="box-img">
                        <p>2</p>
                    </div>

                    <p>
                        <a href="/login">
                            Choose the action
                        </a>
                    </p>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="">
                    <div class="box-img">
                        <p>3</p>
                    </div>

                    <p>
                        <a href="/login">Get paid within 2 hours time</a>
                    </p>
                </div>
            </div>
        </div>
</section>
<!--how section ends-->

<div class="simulator">
    <img src="" alt="" class="simulator__image">
    <h2 class="simulator__title">
        GET A DEMO
    </h2>

    <p class="simulator__text">
        Select an option and try
    </p>

    <div class="simulator__buttons">
        <div class="link">
            <a href="">
                Buy
            </a>
        </div>

        <div class="link">
            <a href="/sell">
                Sell
            </a>
        </div>
    </div>
</div>


<div class="care">
    <div class="card cardL">

        <div class="card__text">
            <h2 class="card__text__title">
                HUGE DISCOUNTS
            </h2>

            <p class="card__text__text justify-content">
                Create your account today and get 20% discount
                for your first transaction
            </p>

            <div class="link">
                <a href="/register">
                    Sign up
                </a>
            </div>
        </div>
    </div>

    <div class="card cardR">
        <img src="./public/img/ghc.jpg" alt="">
    </div>
</div>


<!--payment methods-->
<section class="section">
    <div class="container">
        <h2 class="text-center">
            PAYMENTS METHODS
        </h2>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <img src="./public/img/img-mtn.png" alt="">
            </div>
            <div class="col-sm-12 col-md-3">
                <img src="./public/img/mastercard.png" alt="">
            </div>
            <div class="col-sm-12 col-md-3">
                <img src="./public/img/mastercard.png" alt="">
            </div>
            <div class="col-sm-12 col-md-3">
                <img src="./public/img/mastercard.png" alt="">
            </div>

        </div>

        .
    </div>
</section>
<!--payment methods ends-->


<div class="contact">
    <br>
    <h2 class="contact__title">
        CONTACT US
    </h2>

    <form action="api/api.php?action=contact" method="POST">
        <div class="contact__details">
            <label for="">
                <input type="text" name="email" placeholder="Your first name" required>
            </label>


            <label for="">
                <input type="text" name="last_name" placeholder="Your last name" required>
            </label>
        </div> <br>

        <div class="contact__details">
            <label for="">
                <input type="text" name="email" placeholder="Your email" required>
            </label>


            <label for="">
                <input type="text" name="phone_number" placeholder="Your phone number" required>
            </label>
        </div> <br>




        <label for="">
            <textarea type="text" name="pass" class="message" placeholder="Your message"></textarea>
        </label> <br> <br>

        <button type="submit" class="button">
            Envoyer
        </button>

    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>