<?php $title = 'RapidNote - Users'; ?>

<?php ob_start(); ?>

<div class="section">
    <div class="container">
        <div class="row dashboard">
            <div class="col-sm-12 col-md-3 dashboard__menu">
                <?php include 'menu.php'; ?>
            </div>

            <div class="col-sm-12 col-md-9 dashboard__content">
                <div class="container">
                    <h1>
                        Users
                    </h1>
                    <div class="row">

                        <div class="col-sm-12 col-md-12">
                            <div class="list">

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Fullname</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Balance</th>
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