try {
    // Define form element
    const addCourseForm = document.getElementById('add_courses_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addCoursesValidator = FormValidation.formValidation(
        addCourseForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },

                'image': {
                    validators: {
                        notEmpty: {
                            message: 'Course thumbnail is required'
                        }
                    }
                },
                'description': {
                    validators: {
                        notEmpty: {
                            message: 'Course description is required'
                        }
                    }
                },
                'cat_id': {
                    validators: {
                        notEmpty: {
                            message: 'Course category is required'
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
    const CoursesSubmitButton = document.getElementById('add_courses_submit');
    CoursesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addCoursesValidator) {
            addCoursesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    CoursesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    CoursesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        CoursesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        CoursesSubmitButton.disabled = false;

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

                        addCourseForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add ",err)
}

// Delete Success Story
function deleteCourse(id) {
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
            window.location.replace("/adb/delete-course/" + id);
        }
    });
}

try {
    // Define form element
    const editCourseForm = document.getElementById('edit_course_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editCoursesValidator = FormValidation.formValidation(
        editCourseForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },


                'description': {
                    validators: {
                        notEmpty: {
                            message: 'Course description is required'
                        }
                    }
                },
                'cat_id': {
                    validators: {
                        notEmpty: {
                            message: 'Course category is required'
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
    const EditCoursesSubmitButton = document.getElementById('edit_course_submit');
    EditCoursesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editCoursesValidator) {
            editCoursesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    EditCoursesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    EditCoursesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        EditCoursesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        EditCoursesSubmitButton.disabled = false;

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

                        editCourseForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Edit ",err)
}


//Add Course Item Validation
try {
    // Define form element
    const addItemForm = document.getElementById('add_course_item_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addCourseItemValidator = FormValidation.formValidation(
        addItemForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },

                // 'image': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Training image is required'
                //         }
                //     }
                // },

                // 'video': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Training video is required'
                //         }
                //     }
                // },
                // 'document': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Training document  is required'
                //         }
                //     }
                // },
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
    const CourseItemSubmitButton = document.getElementById('add_course_item_submit');
    CourseItemSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();


        // Validate form before submit
        if (addCourseItemValidator) {
            addCourseItemValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    CourseItemSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    CourseItemSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        CourseItemSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        CourseItemSubmitButton.disabled = false;

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

                        addItemForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add Item ",err)
}
