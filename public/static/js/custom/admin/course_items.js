try {
    // Define form element
    const editItemForm = document.getElementById('update_course_item_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editCourseItemValidator = FormValidation.formValidation(
        editItemForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },


                'video_url': {
                    validators: {
                        notEmpty: {
                            message: 'Video url is required'
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
    const CourseItemEditButton = document.getElementById('edit_course_item_submit');
    CourseItemEditButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editCourseItemValidator) {
            editCourseItemValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    CourseItemEditButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    CourseItemEditButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        CourseItemEditButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        CourseItemEditButton.disabled = false;

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

                        editItemForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add Item ",err)
}


// Delete Success Story

function deleteCourseItem(id) {
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
            window.location.replace("/adb/delete-course-item/" + id);
        }
    });
}
