$( document ).ready(function() {
    
   
    (function () {
        $.ajax({
            url: "../controllers/viewUsers.php",
            type: "POST",
            data: {},
            // cache: false,
            success: function(res){
                var dataResult = JSON.parse(res);
                $("table tbody").empty();
                $.each(JSON.parse(res), function(i, data){
                    console.log(data);
                    $("table tbody")
                    .append(
                        "<tr>"+
                            "<td>" + (i+1) + "</td>"+
                            "<td>" + data.name + "</td>"+
                            "<td>" + data.email + "</td>"+
                            "<td>" + data.username + "</td>"+
                            "<td class='d-flex flex-row gap-2'>" +
                                "<button class='btn btn-sm btn-outline-warning w-100' data-bs-toggle='modal' data-bs-target='#editModal' onClick='editDialog("+JSON.stringify(data)+")'> Edit <i class='bi bi-pencil-square'></i> </button>" +
                                "<button class='btn btn-sm btn-outline-danger w-100' data-bs-toggle='modal' data-bs-target='#deleteModal' onClick='deleteUserPrompt("+JSON.stringify(data)+")'> Delete <i class='bi bi-trash3'></i> </button>" +
                            "</td>"+
                        "</tr>"
                    );
               });
            }
        });

    })();

});

function createUser() {
    var name = $("#createUserFullname").val();
    var email = $("#createUserEmail").val();
    var username = $("#createUserUsername").val();
    var password = $("#createUserPassword").val();

    $.ajax({
        url: "../controllers/createUsers.php",
        type: "POST",
        data: {
            name: name,
            email: email,
            username: username,
            password: password,
        },
        // cache: false,
        success: function(res){
            console.log(res);
            if(res == 1){
                viewUsers();
            }
        },
        complete: function(){
            $("#createNotifToast").toast("show");
        }
    });
}

function editDialog(data) {
    console.log(data);

    $("#side_fullname").empty();
    $("#side_email").empty();
    $("#side_fullname").append(data.name);
    $("#side_email").append(data.email);
    
    $("#editUserID").val(data.id);
    $("#editUserFullname").val(data.name);
    $("#editUserEmail").val(data.email);
    $("#editUserUsername").val(data.username);
    $("#editUserPassword").val(data.password);
}

function editUser() {

    var id = $("#editUserID").val();
    var name = $("#editUserFullname").val();
    var email = $("#editUserEmail").val();
    var username = $("#editUserUsername").val();
    var password = $("#editUserPassword").val();

    $.ajax({
        url: "../controllers/editUsers.php",
        type: "POST",
        data: {
            id: id,
            name: name,
            email: email,
            username: username,
            password: password,
        },
        // cache: false,
        success: function(res){
            console.log(res);
            if(res == 1){
                viewUsers();
            }
        },
        complete: function(){
            $("#updateNotifToast").toast("show");
        }
    });
}

function togglePasswordVis(params) {
    var switchBtn = $('#togglePassword');
    if(switchBtn.prop("checked")==true){
        console.log("true");
        $("#"+params)[0].type = "text";
    }else{
        console.log("false");
        $("#"+params)[0].type = "password";
    }
}

function deleteUserPrompt(data) {
    console.log(data.name);
    $("#deleteUserFullname").empty();
    $("#deleteUserEmail").empty();
    $("#deleteUserUsername").empty();
    $("#deleteUserPassword").empty();

    $("#deleteUserFullname").append(data.name);
    $("#deleteUserEmail").append(data.email);
    $("#deleteUserUsername").append(data.username);
    $("#deleteUserPassword").append(data.password);
}

function deleteUser() {
    var email = $('span#deleteUserEmail').text();
    console.log(email);

    $.ajax({
        url: "../controllers/deleteUsers.php",
        type: "POST",
        data: {
            email:email,
        },
        // cache: false,
        success: function(res){
            console.log(res);
            if(res == 1){
                console.log("dsds");
                viewUsers();
            }
        },
        complete: function(){
            $("#deleteNotifToast").toast("show");
        }
    });
}

function viewUsers() {
    
    $.ajax({
        url: "../controllers/viewUsers.php",
        type: "POST",
        data: {},
        // cache: false,
        success: function(res){
            var dataResult = JSON.parse(res);
            $("table tbody").empty();
            $.each(JSON.parse(res), function(i, data){
                console.log(i);
                console.log(data);
                $("table tbody")
                .append(
                    "<tr>"+
                        "<td>" + (i+1) + "</td>"+
                        "<td>" + data.name + "</td>"+
                        "<td>" + data.email + "</td>"+
                        "<td>" + data.username + "</td>"+
                        "<td class='d-flex flex-row gap-2'>" +
                            "<button class='btn btn-sm btn-outline-warning w-100' data-bs-toggle='modal' data-bs-target='#editModal' onClick='editDialog("+JSON.stringify(data)+")'> Edit <i class='bi bi-pencil-square'></i> </button>" +
                            "<button class='btn btn-sm btn-outline-danger w-100' data-bs-toggle='modal' data-bs-target='#deleteModal' onClick='deleteUserPrompt("+JSON.stringify(data)+")'> Delete <i class='bi bi-trash3'></i> </button>" +
                        "</td>"+
                    "</tr>"
                );
           });
        }
    });

}