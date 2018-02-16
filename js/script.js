// Add Record
function addRecord() {
    // get values
    var fio = $("#fio").val();
    var data = $("#data").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var city = $("#city").val();
    var fakulty = $("#fakulty").val();
    var spec = $("#spec").val();




    // Add record
    $.post("ajax/addRecord.php", {
        fio: fio,
        data: data,
        email: email,
        phone: phone,
        city: city,
        fakulty: fakulty,
        spec: spec
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#fio").val("");
        $("#data").val("");
        $("#email").val("");
        $("#phone").val("");
        $("#city").val("");
        $("#fakulty").val("");
        $("#spec").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Подтвердите удаление?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_fio").val(user.fio);
            $("#update_data").val(user.data);
            $("#update_email").val(user.email);
            $("#update_phone").val(user.phone);
            $("#update_city").val(user.city);
            $("#update_fakulty").val(user.fakulty);
            $("#update_spec").val(user.spec);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var fio = $("#update_fio").val();
    var data = $("#update_data").val();
    var email = $("#update_email").val();
    var phone = $("#update_phone").val();
    var city = $("#update_city").val();
    var fakulty = $("#update_fakulty").val();
    var spec = $("#update_spec").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            fio: fio,
            data: data,
            email: email,
            phone: phone,
            city: city,
            fakulty: fakulty,
            spec: spec


        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});