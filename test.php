<?php
include('default.php');
?>
<load_more_btn onclick="d()" data-page="1" class="d-flex justify-content-center mt-4">
   <button
      class="d-flex align-items-center btn btn-success flex-auto mx-3 ml-md-3 mr-md-0 ml-lg-0 mb-3 mb-md-0 py-1 px-4">
      Load More
   </button>
</load_more_btn>
<script>
   function d() {
      'use strict';
      var page = $('load_more_btn').data('page');
      page++;
      $('load_more_btn').attr('data-page', page);
   }
</script>
<?php
include('footer.php');