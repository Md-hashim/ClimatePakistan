// Define form element
const addAwardForm = document.getElementById('add_lead_status');

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

// Submit button handler
const AwardSubmitButton = document.getElementById('add_new_status');
AwardSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (addAwardValidator) {
        addAwardValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                AwardSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                AwardSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    AwardSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    AwardSubmitButton.disabled = false;

                    // Show popup confirmation
                    // Swal.fire({
                    //     text: "Form has been successfully submitted!",
                    //     icon: "success",
                    //     buttonsStyling: false,
                    //     confirmButtonText: "Ok, got it!",
                    //     customClass: {
                    //         confirmButton: "btn btn-primary"
                    //     }
                    // });

                    addAwardForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});

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
                window.location.replace("/admin/settings/lead/status/delete/"+id);
            }
        });
    });
}
