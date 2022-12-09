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
                                                <th scope="col">Verification</th>
                                                <th scope="col">Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= htmlspecialchars(
                                                    $data['id']
                                                ) ?></th>
                                                <td><?= htmlspecialchars(
                                                    $data['first_name']
                                                ) ?> <?php htmlspecialchars(
     $data['last_name']
 ); ?></td>
                                                <td><?= htmlspecialchars(
                                                    $data['status']
                                                ) ?></td>
                                                <td><?= htmlspecialchars(
                                                    $data['verification']
                                                ) ?></td>
                                                <td>
                                                    <?= htmlspecialchars(
                                                        $data['balance']
                                                    ) ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--
                    <div class="row mt-2">
                        <h2>
                            User transactions
                        </h2>

                        <div class="col-sm-12 col-md-12">
                            <div class="list">

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">buyer</th>
                                                <th scope="col">Seller</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= htmlspecialchars(
                                                    $data['id']
                                                ) ?></th>
                                                <td><?= htmlspecialchars(
                                                    $data['first_name']
                                                ) ?> <?php htmlspecialchars(
     $data['last_name']
 ); ?></td>
                                                                        <td><?= htmlspecialchars(
                                                                            $data[
                                                                                'status'
                                                                            ]
                                                                        ) ?></td>
                                                <td><?= htmlspecialchars(
                                                    $data['verification']
                                                ) ?></td>
                                                <td>
                                                    <?= htmlspecialchars(
                                                        $data['balance']
                                                    ) ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                                                    -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>