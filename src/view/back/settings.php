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

                        <div class="col-sm-12 col-md-9">

                            <section class="section">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col-sm-12 col-md-12 mx-auto p-3">
                                            <form class="needs-validation" action='./api/api.php?action=settings'
                                                method='POST' class='form bg-light'>
                                                <h1>
                                                    Settings
                                                </h1>

                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Username</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="Username" name='username' value="<?= $_SESSION[
                                                                'user'
                                                            ]['username'] ?>">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom01">New password</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="" value="">

                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom02">Confirm password</label>
                                                        <input type="text" class="form-control" id="validationCustom02"
                                                            placeholder="" value="">

                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>