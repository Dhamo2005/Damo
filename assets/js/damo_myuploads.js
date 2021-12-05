(h = document.querySelector("#kt_user_follow_button")) &&
  h.addEventListener("click", function (e) {
    e.preventDefault(),
      h.setAttribute("data-kt-indicator", "on"),
      (h.disabled = !0),
      h.classList.contains("btn-success")
        ? // unfollow
          setTimeout(function () {
            $.ajax({
              url: "controls/follow.php",
              type: "POST",
              data: {
                unfollowid:
                  "<?php echo base64_encode(base64_encode($row['uid'])); ?>",
              },
              beforeSend: function () {
                h.removeAttribute("data-kt-indicator");
              },
              success: function (o) {
                h.classList.remove("btn-success"),
                  h.classList.add("btn-light"),
                  h.querySelector(".svg-icon").classList.add("d-none"),
                  (h.querySelector(".indicator-label").innerHTML = "Follow"),
                  (h.disabled = !1);
              },
              error: function (o, a) {
                setTimeout(() => {
                  $.ajax(this);
                }, 2500);
              },
            });
          }, 1500)
        : // follow
          setTimeout(function () {
            $.ajax({
              url: "controls/follow.php",
              type: "POST",
              data: {
                followid:
                  "<?php echo base64_encode(base64_encode($row['uid'])); ?>",
              },
              beforeSend: function () {
                h.removeAttribute("data-kt-indicator");
              },
              success: function (o) {
                h.classList.add("btn-success"),
                  h.classList.remove("btn-light"),
                  h.querySelector(".svg-icon").classList.remove("d-none"),
                  (h.querySelector(".indicator-label").innerHTML = "Following"),
                  (h.disabled = !1);
              },
              error: function (o, a) {
                setTimeout(() => {
                  $.ajax(this);
                }, 2500);
              },
            });
          }, 1e3);
  });
