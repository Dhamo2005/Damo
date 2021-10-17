<?php require('default.php'); ?>
<link rel="stylesheet" href="assets/css/toast.css">
<script src="assets/js/toast.js"></script>
<?php if (isset($_POST['query']) && isset($_POST['subject']) && !empty($_POST['query']) && !empty($_POST['subject'])) {
  $query = trim(mysqli_real_escape_string($GLOBALS['con'], htmlspecialchars($_POST['query'])));
  $subject = trim(mysqli_real_escape_string($GLOBALS['con'], htmlspecialchars($_POST['subject'])));
  $uid = $_SESSION['myid'];
  $sql = "INSERT INTO `feedbacks` (`uid`, `query`, `subject`, `date`) VALUES ('$uid', '$query', '$subject' , now());";
  if ($GLOBALS['con']->query($sql)) {
    echo '<script>
    Command: toastr["success"]("We have received your feedback. We working on them! ", "Thank you for your feedback!");
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": false,
      "positionClass": "toast-top-center",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "600",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
  </script>';
  }
} else {
  echo '';
}
?>
<div class="post d-flex flex-column-fluid" id="kt_post">
  <div id="kt_content_container" class="container p-0">
    <div class="card">
      <div class="card-body p-lg-17">
        <div class="row mb-3">
          <div class="col-md-6 pe-lg-10">
            <form method="POST" class="form mb-15" method="post" id="kt_contact_form">
              <h1 class="fw-bolder text-dark mb-9">Feedback Us</h1>
              <div class="d-flex flex-column mb-5 fv-row"><label class="fs-5 fw-bold mb-2">Name</label><input required disabled value="<?php echo $_SESSION['name']; ?>" class="noselect form-control form-control-solid" placeholder="" name="name" /></div>
              <div class="d-flex flex-column mb-5 fv-row"><label class="fs-5 fw-bold mb-2">Subject</label><input required name="subject" class="form-control form-control-solid" placeholder="" name="subject" /></div>
              <div class="d-flex flex-column mb-10 fv-row"><label class="fs-6 fw-bold mb-2">Message</label><textarea  required name="query" class="form-control form-control-solid" rows="6" name="message" placeholder=""></textarea></div><button type="submit" class="btn btn-primary" id="kt_contact_submit_button"><span class="indicator-label">Send Feedback</span><span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></button>
            </form>
          </div>
          <div class="col-md-6 ps-lg-10">
            <div><iframe id="kt_contact_map" class="w-100 rounded mb-5 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d896.7872363992057!2d79.61684670687978!3d12.97968538769026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzQ2LjkiTiA3OcKwMzcnMDIuNyJF!5e1!3m2!1sen!2sin!4v1627373049360!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
          </div>
        </div>
        <div class="row g-5 mb-5 mb-lg-15">
          <div class="col-sm-6 pe-lg-10">
            <div onclick="window.location.href='tell:9994079531'" class="cursor-pointer hover-shadow text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100"><span class="svg-icon svg-icon-3tx svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <g clip-path="url(#clip0)">
                    <path opacity="0.25" d="M21.3902 19.5804L19.4852 21.4853C19.4852 21.4853 14.5355 23.6066 7.46441 16.5356C0.39334 9.46451 2.51466 4.51476 2.51466 4.51476L4.41959 2.60983C5.28021 1.74921 6.70355 1.85036 7.43381 2.82404L9.25208 5.24841C9.84926 6.04465 9.77008 7.15884 9.06629 7.86262L7.46441 9.46451C7.46441 9.46451 7.46441 10.8787 10.2928 13.7071C13.1213 16.5356 14.5355 16.5356 14.5355 16.5356L16.1374 14.9337C16.8411 14.2299 17.9553 14.1507 18.7516 14.7479L21.1759 16.5662C22.1496 17.2964 22.2508 18.7198 21.3902 19.5804Z" fill="#191213" />
                    <path d="M4.41959 2.60987L3.92887 3.10059L8.17151 8.75745L9.06629 7.86267C9.77007 7.15888 9.84926 6.0447 9.25208 5.24846L7.4338 2.82409C6.70354 1.85041 5.28021 1.74926 4.41959 2.60987Z" fill="#121319" />
                    <path d="M21.3901 19.5804L20.8994 20.0711L15.2426 15.8285L16.1373 14.9337C16.8411 14.2299 17.9553 14.1507 18.7515 14.7479L21.1759 16.5662C22.1496 17.2965 22.2507 18.7198 21.3901 19.5804Z" fill="#121319" />
                  </g>
                </svg></span>
              <h1 class="text-dark fw-bolder my-5">Let’s Speak</h1>
              <div class="text-gray-700 fw-bold fs-2">+91 9994079531</div>
            </div>
          </div>
          <div class="col-sm-6 ps-lg-10 ">
            <div onclick="window.location.href='mailto:Ts465335@gmail.com'" class="cursor-pointer hover-shadow text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-lg-100"><span class="svg-icon svg-icon-3tx svg-icon-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <path d="M5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                </svg></span>
              <h1 class="text-dark fw-bolder my-5">Email Us</h1>
              <div class="text-gray-700 fs-3 fw-bold">Ts465335@gmail.com</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <script>
  "use strict";
  var KTContactApply = (function() {
    var t, e, o, n;
    return {
      init: function() {
        (o = document.querySelector("#kt_contact_form")),
        (t = document.getElementById("kt_contact_submit_button")),
        (e = FormValidation.formValidation(o, {
          fields: {
            message: {
              validators: {
                notEmpty: {
                  message: "Message is required"
                }
              },
            },
            subject: {
              validators: {
                notEmpty: {
                  message: "Message is required"
                }
              },
            },
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
        t.addEventListener("click", function(o) {
          o.preventDefault(),
            e &&
            e.validate().then(function(e) {
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
                        t.isConfirmed;
                      });
                  }, 2e3)) :
                Swal.fire({
                  text: "Sorry, looks like there are some errors detected, please try again.",
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  },
                }).then(function(t) {
                  KTUtil.scrollTop();
                });
            });
        });
      },
    };
  })();
  KTUtil.onDOMContentLoaded(function() {
    KTContactApply.init();
  });
</script> -->
<?php require('footer.php'); ?>