<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container rounded bg-white mt-5">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-3">
                                <img class="rounded-circle mt-3" src="https://media.giphy.com/media/ji6zzUZwNIuLS/giphy.gif" width="100">
                                <span class="fw-bold" id="side_fullname">John Doe</span>
                                <span class="text-primary" id="side_email">john_doe12@bbb.com</span>
                                <span style="font-size: 12px;">Monster RX 93.1</span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="p-3 py-3">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex flex-row align-items-center back" data-bs-dismiss="modal">
                                        <i class="bi bi-arrow-left mb-1"></i>
                                        <h6>&nbsp; Cancel Edit</h6>
                                    </div>
                                    <h6 class="text-right">Edit Profile</h6>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <input type="text" id="editUserID" class="form-control"hidden>
                                        <input type="text" id="editUserFullname" class="form-control" placeholder="Fullname">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="editUserEmail" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12 my-1">
                                        <input type="text" id="editUserUsername" class="form-control" placeholder="Username" >
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12 my-1">
                                        <input type="password" id="editUserPassword" class="form-control" placeholder="Password">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" id="togglePassword" onclick="togglePasswordVis()" type="checkbox">
                                            <label class="form-check-label" for="togglePassword">Show password</label>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="mt-5 text-right"><button class="btn btn-primary btn-sm" type="button" onclick="editUser()" data-bs-dismiss="modal">Save Profile <i class="bi bi-person-check"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


