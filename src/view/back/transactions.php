<?php $title = 'RapidNote - Transactions'; ?>

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
                    <h1>
                        Transactions
                    </h1>
                    <div class="row">

                        <div class="col-sm-12 col-md-12">
                            <div class="list">


                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Seller</th>
                                                <th scope="col">Buyer</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data[
                                                    'id'
                                                ] ?></th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>