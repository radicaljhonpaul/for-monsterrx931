<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>MonsterRX93.1</title>

        <link rel="shortcut icon" href="#">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../assets/css/customModal.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            }

            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            }
        </style>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 my-3 d-flex justify-content-between">
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/images/logo.png" alt="" width="32" height="32" class="rounded-circle border border-2 border-secondary me-2">
                            <strong> <?php echo $_SESSION["users_fullname"]; ?> </strong>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li id="buttonLogout"><a class="dropdown-item">Sign out <i class="bi bi-box-arrow-in-right"></i> </a></li>
                        </ul>
                    </div>

                    <button class="btn btn-sm btn-outline-primary rounded-pill" data-bs-toggle='modal' data-bs-target='#createModal'>Create User <i class="bi bi-person-plus "></i></button>
                </div>

                <div class="col-lg-10">
                    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
                        <table class="table table-bordered table-hover table-sm" id="usersTbl" style="table-layout: fixed">  
                            <thead class="table-dark">  
                                <tr>  
                                    <th>ID</th>  
                                    <th>Name</th>  
                                    <th>E-mail</th>  
                                    <th>Username</th>  
                                    <th>Action</th>  
                                </tr>  
                            </thead>  
                            <tbody id="usersTblTbody">
                                <!-- <tr>
                                    <th scope="row">1</th>
                                    <td class="">Larry the Bird</td>
                                    <td class="">Larry@gmail.com</td>
                                    <td class="">LarryTheBird</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger w-100" onclick="deleteUser()">Delete <i class="bi bi-trash3 "></i></button>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>

        <!-- Toast for notif -->

        <div class="toast-container position-fixed top-50 start-50 translate-middle">
            <div id="createNotifToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-light">
                <h5 class="my-0">Created successfully <i class="bi bi-clipboard-check"></i> </h5>
                </div>
                <div class="toast-body">
                <strong>A User account</strong> has been successfuly created. Ciao!
                </div>
            </div>  
        </div>

        <div class="toast-container position-fixed top-50 start-50 translate-middle">
            <div id="deleteNotifToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-light">
                <h5 class="my-0">Deleted successfully <i class="bi bi-trash3"></i> </h5>
                </div>
                <div class="toast-body">
                <strong>A User account</strong> has been successfuly deleted. Ciao!
                </div>
            </div>  
        </div>


        <div class="toast-container position-fixed top-50 start-50 translate-middle">
            <div id="updateNotifToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-light">
                <h5 class="my-0">Updated successfully <i class="bi bi-clipboard-check"></i> </h5>
                </div>
                <div class="toast-body">
                <strong>A User account</strong> has been successfuly updated. Ciao!
                </div>
            </div>  
        </div>

        <!-- Inlcude Modals -->
        <?php include "../pages/modals/createModal.php"; ?>
        <?php include "../pages/modals/editModal.php"; ?>
        <?php include "../pages/modals/deleteModal.php"; ?>
        
    </body>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../functions/auth.js"></script>
    <script src="../functions/dashboard.js"></script>
</html>
    