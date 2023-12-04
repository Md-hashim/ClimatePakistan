

var target = document.querySelector("#kt_post");
var blockUI = new KTBlockUI(target);

function editActivityLog(id) {
    blockUI.block();
    $.ajax({
        url: "/tasks/edit/" + id,
        type: "GET",
        success: function (data) {
            console.log(data.activityLog, "hi");

            if (data.activityLog && data.activityLog.length > 0) {
                var activityLog = data.activityLog[0];
                console.log(activityLog.task_id, "id");

                $("#id").val(activityLog.id);
                $("#task_id").val(activityLog.task_id);
                $("#task_note").val(activityLog.task_note);
                $("#task_date").val(activityLog.date);
                $("#task_attachment").text(activityLog.task_attachment);
                $("#edit_type").val(activityLog.task_action);
                $("#re_edit_activity_log").modal("show");
            } else {
                // Handle case when activityLog is empty or not found
            }

            blockUI.release();
        },
        error: function () {
            $("#re_edit_activity_log").modal("hide");
            blockUI.release();
        }
    });
}


function deleteActivityLog(id){

    Swal.fire({
        html: `Are you sure you want to delete this award?`,
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-primary'
        }
    }).then((result) =>{
        if (result.isConfirmed){
            window.location.replace("/task/delete/"+id);
        }
    });

}
