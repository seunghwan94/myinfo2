<div class="main-bottom py-5">
  <div class="container-fluid">
    <!-- 프로젝트 섹션 헤더 -->
    <div class="d-flex align-items-end my-4 main-bottom-title">
      <h2 class="border-start border-4 border-<?php echo $settings['accent_color']; ?> ps-3 mb-3 fw-bold">Project</h2>
    </div>

    <!-- 프로젝트 카드 그리드 -->
    <div class="d-flex flex-wrap gap-4 ms-2 me-4">
      <?php foreach ($projects as $index => $project): ?>
      <div class="project-card-wrapper">
        <div class="card project-card" data-bs-toggle="modal" data-bs-target="#projectModal<?php echo $index; ?>">
          <!-- 카드 이미지 -->
          <img src="<?php echo $project['thumbnail']; ?>" class="card-img-top" alt="<?php echo $project['title']; ?>">
          
          <!-- 카드 내용 -->
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h5 class="card-title fw-bold"><?php echo $project['title']; ?></h5>
              <small class="text-secondary"><?php echo $project['duration']; ?></small>
            </div>
          </div>
          
          <!-- 호버 시 나타나는 오버레이 -->
          <div class="project-hover-overlay">
            <div class="project-hover-content p-4">
              <h5 class="fw-bold text-white mb-3"><?php echo $project['title']; ?></h5>
              <p class="text-white"><?php echo $project['short_desc']; ?></p>
              <div class="d-flex flex-wrap gap-2 mb-3">
                <?php foreach ($project['tech_tags'] as $tag): ?>
                <span class="badge bg-<?php echo $settings['accent_color']; ?>"><?php echo $tag; ?></span>
                <?php endforeach; ?>
              </div>
              <button class="btn btn-outline-light">자세히 보기</button>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>