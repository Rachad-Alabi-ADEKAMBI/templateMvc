<?php $title = 'RapidNote - Settings'; ?>

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
                            <div class="list">
                                <h2>
                                    My transactions
                                </h2>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Amount</th>
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