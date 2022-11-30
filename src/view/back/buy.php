<?php $title = 'RapidNote - Buy'; ?>

<?php ob_start(); ?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <?php include 'menu.php'; ?>
            </div>

            <div class="col-9">
                <div class="form">
                    buy
                </div>
            </div>


        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>