<?php $title = 'RapidNote -Payments'; ?>

<?php ob_start(); ?>

<section class="section">
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
                        <h1>
                            Payments
                        </h1>
                        <div class="col-sm-12 col-md-12">
                            <div class="list">


                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Comment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= htmlspecialchars(
                                                    $data['date']
                                                ) ?></th>
                                                <td>
                                                    <?= htmlspecialchars(
                                                        $data['user_name']
                                                    ) ?>
                                                </td>
                                                <td>
                                                    <?= htmlspecialchars(
                                                        $data['amount']
                                                    ) ?>
                                                </td>
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
</section>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>