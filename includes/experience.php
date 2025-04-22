<?php
$timeline = [
  [
    'period' => '2023.03 ~ 2024.06',
    'company' => '(주)메이크봇',
    'position' => '웹 개발자',
    'description' => '대한항공 및 환경부, 풀무원 시스템 개발 및 유지보수',
    'projects' => [
        '대한항공 내부 시스템 유지보수 및 최적화',
        '환경부 생활화학제품 중독 응급 대응 시스템 개발',
        '풀무원 웹사이트 유지보수'
    ]
  ],
  [
      'period' => '2021.12 ~ 2023.03',
      'company' => '웨인테크놀로지',
      'position' => '웹 개발자',
      'description' => '금융권 웹 개발 및 유지보수 담당',
      'projects' => [
          '키움YES저축은행 개발 및 유지보수',
          '진영자산관리대부 유지보수',
          '삼호저축은행 유지보수'
      ]
  ]
];
?>

<div class="main-bottom pb-4 px-3">

    <!-- 제목 + 다운로드 링크 -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="border-start border-4 border-<?php echo $settings['accent_color']; ?> ps-3 fw-bold m-0">Work Experience</h2>
      <small class="text-muted me-3">
        <a href="../config/download_work_experience.php" download class="text-muted text-decoration-none">(경력기술서 다운로드)</a>
      </small>
    </div>
    <div class="row px-4" >
      <?php foreach ($timeline as $item): ?>
      <div class="experience-group mb-4">
        <div class="experience-text">
          <div class="d-flex justify-content-between align-items-start mb-2">
            <h5 class="fw-bold mb-0" style="color:#58a6ff"><?php echo $item['company']; ?></h5>
            <div class="text-end small text-muted">
              <span class="badge bg-<?php echo $settings['accent_color']; ?> mb-1"><?php echo $item['position']; ?></span>
              <span><?php echo $item['period']; ?></span>
            </div>
          </div>
        </div>
        <!-- 설명 -->
        <p class="small mb-2"><?php echo $item['description']; ?></p>
        <!-- 프로젝트 리스트 -->
        <p class="fw-bold small mb-1 text-<?php echo $settings['accent_color']; ?>">주요 프로젝트</p>
        <ul class="ps-3 small mb-0">
          <?php foreach ($item['projects'] as $project): ?>
          <li class="mb-1"><?php echo $project; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
</div>
