<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 p-4 mt-5">
            <main class="form-signin">
                <form method="post" action="do_login.php" onsubmit="return do_login();">
                    <img class="mb-4 img-fluid" src="assets/images/logo.png" alt="" style="">
                    <div class="alert alert-danger" id="errorMessage role="alert" hidden></div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="inputUsernameEmail" id="inputUsernameEmail" placeholder="name@example.com or username_example">
                        <label for="inputUsernameEmail">Username or Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="Password">
                        <label for="inputPassword">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" id="buttonLogin" type="button">Sign in  <i class="bi bi-send"></i> </button>
                    <p class="mt-5 mb-3 text-muted">&copy; Monster RX93.1 2022</p>
                </form>
            </main>
        </div>
    </div>
</div>

