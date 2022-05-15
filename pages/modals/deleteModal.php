<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">

            <p class="modal-title mb-0 fs-3 text-dark font-weight-light" id="deleteModalLabel">Are you sure?</p>
            <p class="modal-title mb-2 mt-0 text-secondary font-weight-light" style="font-size: 14px;" id="deleteModalLabel">Do you really want to delete these records? This process cannot be undone.</p>
            <div class="card mb-3">

                <div class="d-flex align-items-center">

                    <div class="image align-self-start py-3">
                        <img src="https://media.giphy.com/media/ji6zzUZwNIuLS/giphy.gif" class="align-self-start" width="60px" height="60px">
                    </div>

                    <div class="px-2 py-3 w-100">
                        
                        <h1 class="mb-0 mt-0" id="deleteUserFullname"></h1>
                        <span id="deleteUserEmail"></span>
                        <div class="mt-3 d-flex justify-content-between rounded text-white">
                                <div class="d-flex flex-column">
                                    <span class="articles">Username</span>
                                    <span class="number1 text-truncate text-secondary" style="max-width: 40px;" id="deleteUserUsername"></span>
                                </div>

                                <div class="d-flex flex-column">
                                    <span class="articles">Password</span>
                                    <span class="number1 text-truncate text-secondary" style="max-width: 40px;" id="deleteUserPassword"></span>
                                </div>
                        </div>
                    </div>
                    
                </div>
        
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <button type="button" class="btn w-100 btn-secondary text-light btn-sm" style="border-radius: 0px;" data-bs-dismiss="modal">No <i class="bi bi-x-octagon"></i></button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 btn-primary btn-sm" style="border-radius: 0px;" data-bs-dismiss="modal" onclick=deleteUser()>Yes <i class="bi bi-check2"></i></button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>