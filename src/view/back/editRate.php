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
                        <div class="col-sm-12 col-md-6" v-for='detail in infos' :key='detail.id'>
                            <form action="./api/api.php?action=editRate&id=" method='POST' class="form">
                                <div class="card" :key='detail.id'>
                                    <img class="card-img-top" src="">
                                    <p>{{ detail.name }}</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for=""></label>
                                            <input type="text" placeholder='ancien prix de vente'>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for=""></label>
                                            <input type="text" placeholder='ancien prix de vente'>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary" type='submit'>
                                                Change
                                            </button>
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