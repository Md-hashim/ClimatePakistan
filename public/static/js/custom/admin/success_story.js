// Define form element
const addSuccessStoryForm = document.getElementById('add_success_story');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var addSuccessStoryValidator = FormValidation.formValidation(
    addSuccessStoryForm,
    {
        fields: {
            'name': {
                validators: {
                    notEmpty: {
                        message: 'Name is required'
                    }
                }
            },

            'city': {
                validators: {
                    notEmpty:{
                        message: 'City is required'
                    }
                }
            },
            'story': {
                validators: {
                    notEmpty:{
                        message: 'Story is required'
                    }
                }
            },
            'video_title': {
                validators: {
                    notEmpty:{
                        message: 'Video title is required'
                    }
                }
            },
            'video_description': {
                validators: {
                    notEmpty:{
                        message: 'video story is required'
                    }
                }
            },
            //
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
const SuccessStorySubmitButton = document.getElementById('add_success_story_submit');
SuccessStorySubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (addSuccessStoryValidator) {
        addSuccessStoryValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                SuccessStorySubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                SuccessStorySubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    SuccessStorySubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    SuccessStorySubmitButton.disabled = false;

                    // Show popup confirmation
                    Swal.fire({
                        text: "Form has been successfully submitted!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                    addSuccessStoryForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});



// Delete Success Story

function deleteSuccessStory(id) {
    Swal.fire({
        html: `Are you sure you want to delete this client?`,
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-primary'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace("/adb/delete-success-stories/" + id);
        }
    });
}
