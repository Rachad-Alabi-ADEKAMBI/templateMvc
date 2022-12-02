<?php $title = 'RapidNote - Bitcoin exchange'; ?>

<?php ob_start(); ?>

<div class="section">

    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto mt-30 pt-10">
                <div class="login">
                    <form action='./api/api.php?action=login' method="POST">
                        <h1 class="text-center">
                            Login
                        </h1>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label"></label><br>
                            <div class="col-sm-10"><br>
                                <input type="text" class="form-control" id="" name='username' value=""
                                    placeholder="Email/Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label"></label><br>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="" name='pass' placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary mx-auto">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>