<?php

require_once 'app/helpers.php';
sess_start('digg');
$page_title = 'Home Page';

?>

<?php include 'tpl/header.php'; ?>
<main style="min-height: 800px;">
  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-6 m-auto text-center">
        <h1 class="display-2">Let's digg</h1>
        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, dolorem.</p>
        <p><a href="blog.php" class="btn btn-outline-warning btn-lg">START NOW!</a></p>
      </div>
    </div>
  </div>
</main>
<?php include 'tpl/footer.php'; ?>