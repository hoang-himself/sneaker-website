<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container" style="padding: 80px 40px 80px 40px">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-lg-1">
                <form action="components/auth/login_processing.php" method="post">
                    <!-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                        <button type="button" class="btn btn-primary mx-1">
                            <i class="fa fa-lg fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-primary mx-1">
                            <i class="fa fa-lg fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-primary mx-1">
                            <i class="fa fa-lg fa-twitter"></i>
                        </button>
                    </div>

                    <div class="d-flex align-items-center justify-content-center mb-3 mt-4">
                        <p class=" fw-bold mb-0">Or</p>
                    </div> -->

                    <!-- Email input -->
                    <div class="mb-3">
                        <label class="form-label" for="inputEmail">Email address</label>
                        <input type="email" name="inputEmail" class="form-control" placeholder="Enter your email address" />
                    </div>

                    <!-- Password input -->
                    <div class="mb-3">
                        <label class="form-label" for="inputPassword">Password</label>
                        <input type="password" name="inputPassword" class="form-control" placeholder="Enter password" />
                    </div>

                    <!-- <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="checkRemember" />
                            <label class="form-check-label" for="checkRemember">
                                Remember me
                            </label>
                        </div>
                        <a href="#!" class="text-decoration-none">Forgot password?</a>
                    </div> -->

                    <div class="text-center text-lg-start mt-4 pt-2 mb-4">
                        <button type="submit" name="submitLogin" class="btn btn-outline-primary btn-lg" style="padding-left: 2rem; padding-right: 2rem; font-size: 18px">Login</button>
                        <p class="medium fw-bold mt-3 pt-1 mb-0">
                            Don't have an account?
                            <a href="index.php?page=register" class="text-decoration-none">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>