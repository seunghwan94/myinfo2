<?php
// 설정 및 데이터 불러오기
require_once 'config/settings.php';
require_once 'data/profile.php';
require_once 'data/skills.php';
require_once 'data/timeline.php';
// require_once 'data/experiences.php';
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
          <!-- 왼쪽 섹션 (프로젝트 정보) -->
          <div class="col-md-8">
            <h5 class="text-<?php echo $settings['accent_color']; ?> fw-bold"><?php echo $project['description']; ?></h5>
            
            <!-- 프로젝트 개요 -->
            <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">프로젝트 개요</h6>
            <p><?php echo $project['overview']; ?></p>
            
            <!-- 기간 및 인원 -->
            <div class="row mb-3">
              <div class="col-md-6">
                <p><strong style="color:#58a6ff;" class="fw-bold">기간:</strong> <?php echo $project['period']; ?> <?php echo $project['duration']; ?></p>
              </div>
              <div class="col-md-6">
                <p><strong style="color:#58a6ff;" class="fw-bold">인원:</strong> <?php echo $project['member_detail']; ?> <?php echo $project['member']; ?></p>
              </div>
            </div>
            
            <!-- 담당 역할 -->
            <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">담당 역할</h6>
            <ul>
              <?php foreach ($project['roles'] as $role): ?>
              <li><?php echo $role; ?></li>
              <?php endforeach; ?>
            </ul>
            
            <!-- 시스템 아키텍처 -->
            <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">시스템 아키텍처</h6>
            <ul>
              <?php foreach ($project['architecture'] as $arch): ?>
              <li><?php echo $arch; ?></li>
              <?php endforeach; ?>
            </ul>
            
            <!-- 주요 기능 구현 -->
            <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">주요 기능 구현</h6>
            <div class="accordion" id="featuresAccordion<?php echo $index; ?>">
              <?php foreach ($project['main_features'] as $featureIndex => $feature): ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="feature<?php echo $featureIndex; ?>Header<?php echo $index; ?>">
                  <button class="accordion-button <?php echo $featureIndex !== 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#feature<?php echo $featureIndex; ?>Collapse<?php echo $index; ?>" aria-expanded="<?php echo $featureIndex === 0 ? 'true' : 'false'; ?>" aria-controls="feature<?php echo $featureIndex; ?>Collapse<?php echo $index; ?>">
                    <?php echo ($featureIndex + 1) . '. ' . $feature['title']; ?>
                  </button>
                </h2>
                <div id="feature<?php echo $featureIndex; ?>Collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $featureIndex === 0 ? 'show' : ''; ?>" aria-labelledby="feature<?php echo $featureIndex; ?>Header<?php echo $index; ?>" data-bs-parent="#featuresAccordion<?php echo $index; ?>">
                  <div class="accordion-body">
                    <?php echo $feature['content']; ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            
            <!-- 프로젝트 산출물 -->
            <?php if (isset($project['project_outputs']) && !empty($project['project_outputs'])): ?>
            <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">프로젝트 산출물</h6>
            <div class="d-flex flex-wrap">
              <?php foreach ($project['project_outputs'] as $output): ?>
              <a href="<?php echo $output['url']; ?>" class="me-2 mb-2 btn btn-sm btn-outline-secondary" target="_blank">
                <?php echo $output['name']; ?>
              </a>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
            <!-- 배움과 성장 -->
            <?php if (isset($project['learning']) && !empty($project['learning'])): ?>
            <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">배움과 성장</h6>
            <ul>
              <?php foreach ($project['learning'] as $learning): ?>
              <li><?php echo $learning; ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            
            <!-- 결과 및 성과 -->
            <?php if (isset($project['results']) && !empty($project['results'])): ?>
            <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">결과 및 성과</h6>
            <ul>
              <?php foreach ($project['results'] as $result): ?>
              <li><?php echo $result; ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            
            <!-- 사용 기술 스택 -->
            <?php if (isset($project['tech_stacks']) && !empty($project['tech_stacks'])): ?>
            <h6 class="mt-4 mb-2 fw-bold" style="color:#58a6ff;">사용 기술 스택</h6>
            <div class="row">
              <?php foreach ($project['tech_stacks'] as $stack): ?>
              <div class="col-md-6 mb-3">
                <div class="tech-category">
                  <strong><?php echo $stack['category']; ?></strong>
                  <ul>
                    <?php foreach ($stack['items'] as $item): ?>
                    <li><?php echo $item; ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
          
          <!-- 오른쪽 섹션 (프로젝트 결과물) -->
          <div class="col-md-4">
            <h6 class="mb-3 fw-bold">프로젝트 결과물</h6>

            <!-- 사이트 링크 -->
            <?php if (isset($project['site'])): ?>
            <a href="<?php echo $project['site']; ?>" class="btn btn-primary mb-3 w-100" target="_blank">
              <i class="fa-solid fa-globe me-2"></i> 사이트 바로가기
            </a>
            <?php endif; ?>
            
            <!-- GitHub 저장소 링크 -->
            <?php if (isset($project['github'])): ?>
            <a href="<?php echo $project['github']; ?>" class="btn btn-dark mb-3 w-100" target="_blank">
              <i class="fa-brands fa-github me-2"></i> GitHub 저장소
            </a>
            <?php endif; ?>
            
            <!-- 프론트엔드 저장소 링크 -->
            <?php if (isset($project['github_front'])): ?>
            <a href="<?php echo $project['github_front']; ?>" class="btn btn-dark mb-2 w-100" target="_blank">
              <i class="fa-brands fa-github me-2"></i> 프론트엔드 저장소
            </a>
            <?php endif; ?>
            
            <!-- 백엔드 저장소 링크 -->
            <?php if (isset($project['github_back'])): ?>
            <a href="<?php echo $project['github_back']; ?>" class="btn btn-dark mb-3 w-100" target="_blank">
              <i class="fa-brands fa-github me-2"></i> 백엔드 저장소
            </a>
            <?php endif; ?>

            <!-- 결과 이미지 캐러셀 -->
            <?php if (isset($project['result_images']) && !empty($project['result_images'])): ?>
            <div id="carousel<?php echo $index; ?>" class="carousel slide mt-3" data-bs-ride="carousel">
              <div class="carousel-inner rounded">
                <?php foreach ($project['result_images'] as $imgIndex => $img): ?>
                <div class="carousel-item <?php echo $imgIndex === 0 ? 'active' : ''; ?>">
                  <img src="<?php echo $img; ?>" class="d-block w-100" alt="프로젝트 이미지">
                  <div class="carousel-caption d-none d-md-block">
                    <span class="badge bg-dark"><?php echo $imgIndex + 1; ?>/<?php echo count($project['result_images']); ?></span>
                  </div>
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