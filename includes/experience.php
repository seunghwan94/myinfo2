<div class="main-bottom py-5 pe-3">
  <div class="container-fluid">
    <h2 class="border-start border-4 border-<?php echo $settings['accent_color']; ?> ps-3 mb-3 fw-bold">Experience</h2>
    <?php foreach ($experiences as $experience): ?>
    <!-- 경력별 섹션 -->
    <div class="d-flex align-items-end my-4 ms-3 main-bottom-title">
      <p class="fw-bold fs-5 m-0 me-1"><?php echo $experience['company']; ?></p>
      <p class="text-secondary m-0"><?php echo $experience['period']; ?> <?php echo $experience['duration']; ?></p>
    </div>

    <div class="d-flex main-bottom-card  ms-3">
      <?php foreach ($experience['projects'] as $project): ?>
      <div class="card mx-2">
        <div class="card-header">
          <div class="d-flex align-items-end justify-content-between">
            <p class="fw-bold m-0 me-1"><?php echo $project['client']; ?></p>
            <p class="text-secondary m-0 small"><?php echo $project['period']; ?> <?php echo $project['duration']; ?></p>
          </div>
        </div>
        <div class="card-body">
          <h5 class="fw-bold"  style="color:#58a6ff"><?php echo $project['title']; ?></h5>
          <div class="p-2">
            사용한 기술 스택<br/>
            <div class="ps-3">
            <?php echo $project['tech_stack']; ?><br/><br/>
            </div>
            주요 업무 및 성과
            <div class="ps-3">
              <?php foreach ($project['details'] as $detail): ?>
              <?php echo $detail; ?><br/>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
  </div>
</div>