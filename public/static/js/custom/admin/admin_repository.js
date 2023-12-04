try {
    // Define form element
    const addRepositoryForm = document.getElementById('add_repository_item_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addCategoryValidator = FormValidation.formValidation(
        addRepositoryForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
                'cat_id': {
                    validators: {
                        notEmpty: {
                            message: 'Category is required'
                        }
                    }
                },
                'file': {
                    validators: {
                        notEmpty: {
                            message: 'File/Document is required'
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
    const CategorySubmitButton = document.getElementById('add_repository_item_submit');
    CategorySubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addCategoryValidator) {
            addCategoryValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    CategorySubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    CategorySubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        CategorySubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        CategorySubmitButton.disabled = false;

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

                        addRepositoryForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add ",err)
}

// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}

$('#cat_id').select2(); // Initialize the Select2 dropdown
function editRepository(id) {
    console.log("Function calling",id)
    blockUI.block();
    $.ajax({
        url: "/adb/edit-repository/" + id,
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log("hi",data.data[0].id)
            $("#id").val(data.data[0].id);
            $("#title").val(data.data[0].title);
            // $("#cat_id").val(data.data[0].cat_id);
            // Get the category ID from your response
            var categoryId = data.data[0].cat_id;

            // Loop through the options in the Select2 dropdown
            $("#edit_cat_id option").each(function () {
                var optionValue = $(this).val();

                // Check if the option's value matches the categoryId
                if (optionValue == categoryId) {
                    // Set the selected attribute for the matching option
                    $(this).prop("selected", true);
                } else {
                    // Remove the selected attribute for other options
                    $(this).prop("selected", false);
                }
            });

            // Trigger the Select2 dropdown to update the displayed selected option
            $("#edit_cat_id").trigger("change");

            $("#edit_repository_item").modal("show");
            blockUI.release();
        },
        error: function () {
            $("#edit_repository_item").modal("hide");
            blockUI.release();
        }
    });
}


{
    function deleteRepository(id) {
        Swal.fire({
            html: `Are you sure you want to delete this unit category?`,
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
                window.location.replace("/adb/delete-repository/" + id);
            }
        });
    }
}

//Edit Category
try {
    // Define form element
    const editRepositoryCategoryForm = document.getElementById('edit_repository_item_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editCategoryValidator = FormValidation.formValidation(
        editRepositoryCategoryForm,
        {
            fields: {

                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
                'cat_id': {
                    validators: {
                        notEmpty: {
                            message: 'Category is required'
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
    const EditRepositorySubmitButton = document.getElementById('edit_repository_item_submit');
    EditRepositorySubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editCategoryValidator) {
            editCategoryValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    EditRepositorySubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    EditRepositorySubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        EditRepositorySubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        EditRepositorySubmitButton.disabled = false;

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

                        editRepositoryCategoryForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Edit ",err)
}
