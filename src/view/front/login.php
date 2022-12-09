<?php $title = 'RapidNote - Bitcoin exchange'; ?>

<?php ob_start(); ?>

<div class="section">

    <div class="container">
        <div class="">
            <div class="col-sm-12 col-md-4 mx-auto mt-30 pt-10 row card">
                <div class="login">
                    <form action='./api/api.php?action=login' method="POST">
                        <h1 class="text-center">
                            Login
                        </h1>
                        <div class="form-group row">
                            <div class="col-sm-10 mx-auto"><br>
                                <input type="text" class="form-control" id="" name='username' value=""
                                    placeholder="Email/Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 mx-auto">
                                <input type="password" class="form-control" id="" name='pass' placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary mx-auto">
                                Login
                            </button>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="./index.php?action=forgotPassword">Forgot password ?</a>
                            </div>
                        </div>

                        <!-- Register buttons -->
                        <div class="text-center ">
                            <p class="text-center mx-auto">Not signed yet ? <a href="./index.php?action=register">Create
                                    an account</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>