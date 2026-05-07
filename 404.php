<?php
require_once 'includes/config.php';
http_response_code(404);
$page_title = 'Page Not Found';
include 'includes/header.php';
?>
<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;text-align:center;padding:120px 20px;">
  <div>
    <div style="font-family:var(--font-display);font-size:8rem;font-weight:700;color:var(--gold);line-height:1;margin-bottom:16px;">404</div>
    <h1 class="headline" style="margin-bottom:16px;">Page Not <em>Found</em></h1>
    <p class="subhead" style="margin-bottom:40px;max-width:400px;margin-left:auto;margin-right:auto;">
      Looks like this page wandered off to the coffee farm. Let's get you back on track.
    </p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
      <a href="/" class="btn btn-primary"><i class="fa-solid fa-home"></i> Go Home</a>
      <a href="/menu.php" class="btn btn-outline"><i class="fa-solid fa-mug-hot"></i> View Menu</a>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
