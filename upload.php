<?php
require('default.php');
include('controls/damo_subjects.php'); ?>
<title>Upload File | Damo Softwares</title>
<div id="upload_form" class="card">
    <div class="card-body scroll-y px-10 px-lg-15 pt-0 pb-15">
        <form id="form_fields" class="form" action="#">
            <div class="mb-13 mt-13 text-center">
                <h1 class="mb-3">Upload</h1>
                <div class="text-gray-400 fw-bold fs-5">If you need more info, please check <a href="#" class="fw-bolder link-primary">Project Guidelines</a>. </div>
            </div>
            <div class="d-flex flex-column mb-8 fv-row"><label class="d-flex align-items-center fs-6 fw-bold mb-2"><span class="required">Title</span><i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a name for future usage and reference"></i></label><input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="target_title" />
            </div>
            <div class="row g-9 mb-8">
                <div class="col-md-4 fv-row"><label class="required fs-6 fw-bold mb-2">Standard</label>
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select standard..." name="class">
                        <option value="">Select standard...</option>
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-4 fv-row"><label class="required fs-6 fw-bold mb-2">Subject</label>
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-placeholder="Select subject..." name="subject">
                        <option value="">Select subject...</option>
                        <d_subjects></d_subjects>
                    </select>
                    <script>
                        $('d_subjects').html(``)
                    </script>
                </div>
            </div>
            <div class="text-center"><button type="reset" id="form_cancel" class="btn btn-white me-3">Cancel</button><button type="submit" id="form_submit" class="btn btn-primary"><span class="indicator-label">Submit</span><span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></button></div>
        </form>
    </div>
</div>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script>
    "use strict";
    var KTModalNewTarget = (function() {
        var t, n, a, o, i;
        return {
            init: function() {
                (i = document.querySelector("#upload_form")) &&
                ((o = new bootstrap.Modal(i)),
                    (a = document.querySelector("#form_fields")),
                    (t = document.getElementById("form_submit")),
                    $(a.querySelector('[name="due_date"]')).flatpickr({
                        enableTime: !0,
                        dateFormat: "d, M Y, H:i",
                    }),
                    (n = FormValidation.formValidation(a, {
                        fields: {
                            target_title: {
                                validators: {
                                    notEmpty: {
                                        message: "Title is required"
                                    }
                                },
                            }
                            // ,
                            // target_assign: {
                            //     validators: {
                            //         notEmpty: { message: "Assign is required" },
                            //     },
                            // },
                            // target_due_date: {
                            //     validators: {
                            //         notEmpty: { message: "due date is required" },
                            //     },
                            // },
                            // target_tags: {
                            //     validators: { notEmpty: { message: "tags are required" } },
                            // },
                            // "targets_notifications[]": {
                            //     validators: {
                            //         notEmpty: {
                            //             message: "Please select at least one communication method",
                            //         },
                            //     },
                            // },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: "",
                            }),
                        },
                    })),
                    t.addEventListener("click", function(e) {
                        e.preventDefault(),
                            n &&
                            n.validate().then(function(e) {
                                console.log("validated!"),
                                    "Valid" == e ?
                                    (t.setAttribute("data-kt-indicator", "on"),
                                        (t.disabled = !0),
                                        setTimeout(function() {
                                            t.removeAttribute("data-kt-indicator"),
                                                (t.disabled = !1),
                                                Swal.fire({
                                                    text: "Form has been successfully submitted!",
                                                    icon: "success",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: {
                                                        confirmButton: "btn btn-primary"
                                                    },
                                                }).then(function(t) {
                                                    t.isConfirmed && o.hide();
                                                });
                                        }, 2e3)) :
                                    Swal.fire({
                                        text: "Sorry, please fill all fields.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        },
                                    });
                            });
                    })
                )
            },
        };
    })();
    KTUtil.onDOMContentLoaded(function() {
        KTModalNewTarget.init();
    });
</script>
<?php
require('footer.php'); ?>