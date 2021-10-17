<?php
require('default.php'); ?>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<div class="bg-primary py-2 text-center">
    <h1 class="text-dark mb-3">Upload Files</h1>
    <div class="text-gray-400 fw-bold fs-4"><a class="link-white fw-bolder">Need Help?</a></div>
</div>
<form class=" card-body bg-white form w-100" novalidate="novalidate" id="kt_sign_up_form" autocomplete="off">
    <div class="fv-row mb-7"><label class="form-label fw-bolder text-dark fs-6">Title</label><input type="text" name="title" id="name" rows="1" class="form-control form-control-lg form-control-solid" placeholder="Title" autocomplete="off"></div>
    <div class="fv-row mb-7"><label class="form-label fw-bolder text-dark fs-6">Class</label>
        <select id="classs" name="class" class="form-control form-control-lg form-control-solid" data-control="select2" data-placeholder="Choose Class">
            <option></option>
            <option value="10">12th</option>
            <option value="11">11th</option>
            <option value="12">10th</option>
            <option value="9">9th</option>
            <option value="8">8th</option>
            <option value="7">7th</option>
            <option value="6">6th</option>
        </select>
    </div>
    <div class="fv-row mb-7"><label class="form-label fw-bolder text-dark fs-6">Medium</label>
        <select id="medium" name="Medium" class="form-select form-select-solid" data-control="select2" data-placeholder="Choose Subject">
            <option></option>
            <option value="tm">Tamil Medium(TM)</option>
            <option value="em">English Medium (EM)</option>
        </select>
    </div>
    <div class="fv-row mb-7"><label class="form-label fw-bolder text-dark fs-6">Subject</label>
        <select id="gender" name="subject" class="form-select form-select-solid" data-control="select2" data-placeholder="Choose Subject">
            <option></option>
            <option value="Tamil">Tamil</option>
            <option value="English">English</option>
            <option value="Maths">Maths</option>
            <option value="Science">Science</option>
            <option value="Social Science">Social Science</option>
            <option value="Physics">Physics</option>
            <option value="2"></option>
            <option value="2"></option>
            <option value="2"></option>
            <option value="2"></option>
        </select>
    </div>
    <div class="fv-row mb-7"><label class="form-label fw-bolder text-dark fs-6">Description</label><input id="about" class="form-control form-control-lg form-control-solid" type="text" name="about" placeholder="Enter Description Here"></div><br><br>
    <div class="fv-row">
        <div class="dropzone">
            <div class="dz-message needsclick"><i class="material-icons-outlined text-primary fs-3x">upload</i>
                <div class="ms-4">
                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3><span class="fs-7 fw-bold text-gray-400">Accepted Formats : PDF, DOC, PPT, JPEG, JPG, PNG, PPT </span>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="fv-row mb-10"><label class="form-check form-check-custom form-check-solid"><input class="form-check-input" type="checkbox" name="toc" value="1" /><span class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp; <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span></label></div>
    <div class="text-center"><button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary"><span class="indicator-label">Submit</span><span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></button></div>
    <script>
        var myDropzone = new Dropzone(".dropzone", {
            url: "test.php",
            paramName: "file",
            maxFiles: 1,
            addRemoveLinks: true,
            accept: function(file, done) {
                if (file.name == "wow.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
    </script>
    <script>
        "use strict";
        var KTSigninGeneral = function() {
            var t, n, e;
            return {
                init: function() {
                    t = document.querySelector("#kt_sign_in_form"), n = document.querySelector("#kt_sign_in_submit"), e = FormValidation.formValidation(t, {
                        fields: {
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: "Email address is required"
                                    },
                                    emailAddress: {
                                        message: "The value is not a valid email address"
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: "The password is required"
                                    },
                                    callback: {
                                        message: "Please enter valid password",
                                        callback: function(t) {
                                            if (0 < t.value.length) return _validatePassword()
                                        }
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }), n.addEventListener("click", function(t) {
                        t.preventDefault(), e.validate().then(function(t) {
                            if ("Valid" == t) {
                                var e = $("#email").val(),
                                    i = $("#password").val();
                                $.ajax({
                                    method: "POST",
                                    url: "../server/login.php",
                                    data: {
                                        email: e,
                                        password: i
                                    },
                                    beforeSend: function() {
                                        $("#kt_sign_in_submit").attr("data-kt-indicator", "on")
                                    },
                                    success: function(t) {
                                        1 != t ? ($("#kt_sign_in_submit").attr("data-kt-indicator", "off"), Swal.fire({
                                            text: "Wrong Login Details, Please Try Again.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        })) : (n.setAttribute("data-kt-indicator", "on"), n.disabled = !0, setTimeout(function() {
                                            n.removeAttribute("data-kt-indicator"), n.disabled = !1, Swal.fire({
                                                text: "Your Are Successfully Log In!",
                                                icon: "success",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Go To Home Page!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary"
                                                }
                                            }).then(setTimeout(function() {
                                                window.location.href = '<?php if (isset($_GET['c'])) {
                                                                            echo ('..' . $_GET['c']);
                                                                        } else {
                                                                            echo "../home.php";
                                                                        } ?>';
                                            }, 1e3))
                                        }))
                                    }
                                })
                            }
                            elseSwal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })
                        })
                    })
                }
            }
        }();
        KTUtil.onDOMContentLoaded(function() {
            KTSigninGeneral.init()
        })
    </script>
</form>
<?php
require('footer.php'); ?>