<div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container rounded bg-white mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-3 py-3">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex flex-row align-items-center back" data-bs-dismiss="modal">
                                        <i class="bi bi-arrow-left mb-1"></i>
                                        <h6>&nbsp; Cancel Create</h6>
                                    </div>
                                    <h6 class="text-right">Create User</h6>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <input type="text" id="createUserFullname" class="form-control" placeholder="Fullname">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="createUserEmail" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12 my-1">
                                        <input type="text" id="createUserUsername" class="form-control" placeholder="Username" >
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12 my-1">
                                        <input type="password" id="createUserPassword" class="form-control" placeholder="Password">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" id="togglePassword" onclick="togglePasswordVis('createUserPassword')" type="checkbox">
                                            <label class="form-check-label" for="togglePassword">Show password</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5 d-flex flex-row justify-content-between">
                                    <button class="btn btn-primary btn-sm" type="button" onclick="createUser()" data-bs-dismiss="modal">
                                        Save Profile <i class="bi bi-person-check"></i>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


