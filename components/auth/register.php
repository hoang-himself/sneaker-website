<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container" style="padding: 80px 40px 80px 40px">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw1.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-lg-1">
                <form action="components/auth/register_processing.php" method="post">
                    <!-- Email input -->
                    <div class="mb-3">
                        <label class="form-label" for="inputEmail">Email address</label>
                        <input type="email" name="inputEmail" class="form-control" placeholder="Enter your email address" />
                    </div>

                    <!-- Username input -->
                    <div class="mb-3">
                        <label class="form-label" for="inputUsername">Username</label>
                        <input type="username" name="inputUsername" class="form-control" placeholder="Enter username" />
                    </div>

                    <!-- Password input -->
                    <div class="mb-3">
                        <label class="form-label" for="inputPassword">Password</label>
                        <input type="password" name="inputPassword" class="form-control" placeholder="Enter password" />
                    </div>

                    <!-- Confirmed password input -->
                    <div class="mb-3">
                        <label class="form-label" for="inputConfirmedPassword">Confirmed password</label>
                        <input type="password" name="inputConfirmedPassword" class="form-control" placeholder="Enter confirmed password" />
                    </div>

                    <div class="text-center text-lg-start mt-3 pt-2 mb-4">
                        <button type="submit" name="submitRegister" class="btn btn-outline-primary btn-lg" style="padding-left: 2rem; padding-right: 2rem; font-size: 18px">Register</button>
                        <p class="medium fw-bold mt-3 pt-1 mb-0">
                            Already have an account?
                            <a href="index.php?page=login" class="text-decoration-none">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>