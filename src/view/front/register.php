<?php $title = 'RapidNote - Bitcoin exchange'; ?>

<?php ob_start(); ?>

<section class="section">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md-6 mx-auto bg-light p-3">
                <form class="needs-validation" action='./api/api.php?action=register' method='POST'>
                    <h2>
                        Create account
                    </h2>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Email</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Email"
                                name='email' value="<?= $_SESSION[
                                    'registration'
                                ]['email'] ?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name"
                                name='first_name' value="<?= $_SESSION[
                                    'registration'
                                ]['first_name'] ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"
                                name='last_name' value="<?= $_SESSION[
                                    'registration'
                                ]['last_name'] ?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-3">
                            <label for="validationCustom01">Phone code</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder=""
                                name='phone_code' value="<?= $_SESSION[
                                    'registration'
                                ]['phone_code'] ?>" required>
                        </div>
                        <div class="col-9">
                            <label for="validationCustom02">Phone number</label>
                            <input type="number" class="form-control" id="validationCustom02" placeholder=""
                                name='phone_number' value="<?= $_SESSION[
                                    'registration'
                                ]['phone_number'] ?>" required>
                        </div>
                    </div>
                    <hr>

                    <div class="form-row">
                        <div class="col-6 ">
                            <label for="validationCustom01">Username</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Username"
                                name='username' value="<?= $_SESSION[
                                    'registration'
                                ]['username'] ?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-6">
                            <label for="validationCustom01">Password</label>
                            <input type="password" class="form-control" id="validationCustom01" placeholder="Password"
                                name='password1' required>
                        </div>
                        <div class="col-6">
                            <label for="validationCustom02">Confirm password</label>
                            <input type="password" class="form-control" id="validationCustom02"
                                placeholder="Confirm password" value="" name='password2' required>
                        </div>
                    </div>



                    <div class="form-group mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                yes, i have read and i accept <a href="./index.php?action=cgu">the general terms of
                                    use</a>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Inscription</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>

<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>