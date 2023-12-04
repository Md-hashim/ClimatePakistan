// Define form element
const addAwardForm = document.getElementById('add_lead_source');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var addAwardValidator = FormValidation.formValidation(
    addAwardForm,
    {
        fields: {
            'status_name': {
                validators: {
                    notEmpty: {
                        message: 'Lead name is required'
                    }
                }
            },



        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

function deleteSource(id){
    const button = document.getElementById('delete_source_btn_'+id);

    button.addEventListener('click', e =>{
        e.preventDefault();

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
                window.location.replace("/admin/settings/lead/source/delete/"+id);
            }
        });
    });
}

