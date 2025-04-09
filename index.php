<?php
// 설정 및 데이터 불러오기
require_once 'config/settings.php';
require_once 'data/profile.php';
require_once 'data/skills.php';
require_once 'data/timeline.php';
require_once 'data/experiences.php';
require_once 'data/projects.php';
?>
<!DOCTYPE html>
<html lang="ko" data-bs-theme="<?php echo $settings['theme']; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lee SeungHwan</title>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- ProgressBar.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/progressbar.js/dist/progressbar.min.js"></script>
  <link rel="stylesheet" href="css/style.css?v=<?= time(); ?>">
</head>
<body>
  <div class="wrap d-flex w-100">
    <!-- 사이드 메뉴 -->
    <div class="w-25" style="min-width: 300px; max-width:350px">
      <div class="sidebar-container">
        <?php include 'includes/sidebar.php'; ?>
      </div>
      <!-- 핸드폰사이즈 사이드 메뉴 -->
      <div class="header-menu" style="display: none;">
        <?php include 'includes/mobile-menu.php'; ?>
      </div>
    </div>
    <!-- 메인 -->
    <main class="ps-4 pt-3">
      <!-- 메인 header -->
      <?php include 'includes/main-top.php'; ?>
      <!-- 메인 about-me -->
      <?php include 'includes/about-me.php'; ?>
      <!-- 메인 skill -->
      <?php include 'includes/skills.php'; ?>

      <!-- 메인 bottom (경력) -->
      <?php include 'includes/experience.php'; ?>
      
      <!-- 메인 프로젝트 섹션 -->
      <?php include 'includes/projects.php'; ?>
    </main>
  </div>
  
  <!-- 프로젝트 모달 -->
  <?php foreach ($projects as $index => $project): ?>
  <div class="modal fade" id="projectModal<?php echo $index; ?>" tabindex="-1" aria-labelledby="projectModalLabel<?php echo $index; ?>" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="projectModalLabel<?php echo $index; ?>"><?php echo $project['title']; ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8">
              <h5 class="text-<?php echo $settings['accent_color']; ?> fw-bold"><?php echo $project['description']; ?></h5>
              <p><strong style="color:#58a6ff;" class=" fw-bold">기간:</strong> <?php echo $project['period']; ?> <?php echo $project['duration']; ?></p>
              <p><strong style="color:#58a6ff;" class=" fw-bold">인원:</strong> <?php echo $project['member_detail']; ?> <?php echo $project['member']; ?></p>

              <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">사용한 기술 스택</h6>
              <p><?php echo $project['tech_stack']; ?></p>
              
              <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">프로젝트 목표</h6>
              <ul>
                <?php foreach ($project['goals'] as $goal): ?>
                <li><?php echo strip_tags($goal); ?></li>
                <?php endforeach; ?>
              </ul>
              
              <?php if (isset($project['planning_links'])): ?>
              <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">프로젝트 계획</h6>
              <p>
                <?php foreach ($project['planning_links'] as $link): ?>
                <a href="<?php echo $link['url']; ?>" download="<?php echo basename($link['url']); ?>" target="_blank" rel="noopener noreferrer" class="me-2 btn btn-sm btn-outline-secondary">
                  <?php echo $link['name']; ?>
                </a>
                <?php endforeach; ?>
              </p>
              <?php endif; ?>
              
              <?php if (isset($project['planning']) && !empty($project['planning'][0])): ?>
              <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">기능 상세</h6>
              <?php echo $project['planning'][0]; ?>
              <?php endif; ?>

              <?php if (isset($project['roles']) && !empty($project['roles'][0])): ?>
              <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">맡은 역할</h6>
              <?php echo $project['roles'][0]; ?>
              <?php endif; ?>

            </div>
            <div class="col-md-4 fw-bold">
              <h6 class="mb-3" >프로젝트 결과물</h6>

              <?php if (isset($project['site'])): ?>
              <a href="<?php echo $project['site']; ?>" class="btn btn-primary mb-3 w-100" target="_blank">
                <i class="fa-solid fa-globe me-2"></i> 사이트 바로가기
              </a>
              <?php endif; ?>
              
              <?php if (isset($project['github'])): ?>
              <a href="<?php echo $project['github']; ?>" class="btn btn-dark mb-3 w-100" target="_blank">
                <i class="fa-brands fa-github me-2"></i> GitHub 저장소
              </a>
              <?php endif; ?>

              <?php if (isset($project['result_images'])): ?>
              <div id="carousel<?php echo $index; ?>" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <?php foreach ($project['result_images'] as $imgIndex => $img): ?>
                  <div class="carousel-item <?php echo $imgIndex === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $img; ?>" class="d-block w-100" alt="프로젝트 이미지">
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php if (count($project['result_images']) > 1): ?>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo $index; ?>" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $index; ?>" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>

  <script src="js/main.js"></script>
</body>
</html>