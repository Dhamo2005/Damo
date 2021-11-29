<?php
include('default.php');
?>
<div id="root"></div>
<script>
$('#root').html(`

`);
</script>
<script>
      var triggerEl = document.querySelector('#navId a')
      bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
   </script>
<?php
include('footer.php');
