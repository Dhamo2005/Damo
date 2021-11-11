$(document).ready(function () {
    
});

$(document).keydown(function (e) {
  e.ctrlKey &&
    e.shiftKey &&
    76 == e.keyCode &&
    (window.location.href = "pages/sign-in.php?out"),
    e.ctrlKey &&
      191 == e.keyCode &&
      jQuery("#kt_header_search_toggle")[0].click();
});