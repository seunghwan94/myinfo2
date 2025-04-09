<header class="card m-3 position-fixed" >
  <div class="card-header text-center p-4">
    <img src="../assets/img/side.jpg" class="rounded-circle" alt="img">
    <div class="mt-2">
      <h3 class="fw-bold"><?php echo $profile['name']; ?></h3>
      <p class="m-0 small"><?php echo $profile['tagline']; ?></p>
    </div>
  </div>
  <div class="card-body">
    <div class="d-flex justify-content-between">
      <p class="fw-bold">경력</p>
      <p class="text-secondary"><?php echo $profile['experience']; ?></p>
    </div>
    <div class="d-flex justify-content-between">
      <p class="fw-bold">교육</p>
      <p class="text-secondary"><?php echo $profile['education1']; ?></p>
    </div>
    <div class="d-flex justify-content-between">
      <p class="fw-bold">교육</p>
      <p class="text-secondary"><?php echo $profile['education2']; ?></p>
    </div>

    <hr>
    <div class="position-relative d-flex justify-content-around">
      <?php foreach ($capabilities as $name => $value): ?>
      <div class="text-center">
        <div class="container-circle" data-value="<?php echo $value/100; ?>"></div>
        <p><?php echo $name; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    
    <hr>
    <div>
      <?php foreach ($skills as $skill): ?>
      <div class="mb-3 text-end">
        <div class="mb-1 d-flex justify-content-between">
          <p class="m-0 text-secondary small"><?php echo $skill['name']; ?></p>
          <p class="m-0 text-secondary small"><?php echo $skill['percentage']; ?>%</p>
        </div>
        <div class="progress">
          <div class="progress-bar bg-<?php echo $settings['accent_color']; ?>" role="progressbar" style="width: <?php echo $skill['percentage']; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="card-footer p-3 d-flex justify-content-around">
    <a href="tel:<?php echo $profile['contacts']['phone']; ?>" class="text-light"><i class="fa-solid fa-phone fa-lg"></i></a>
    <div class="vr"></div>
    <a href="<?php echo $profile['contacts']['github']; ?>" class="text-light"><i class="fa-brands fa-github fa-xl"></i></a>
    <div class="vr"></div>
    <a href="mailto:<?php echo $profile['contacts']['email']; ?>" class="text-light"><i class="fa-solid fa-square-envelope fa-xl"></i></a>
  </div>
</header>