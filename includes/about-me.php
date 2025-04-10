<?php 

// 프로필 데이터 
$profile = [
    'name' => '이승환',
    'position' => '꾸준이 성장하는 개발자',
    'last_updated' => '2025/04/09',
    'phone' => '+82-10-9105-0889',
    'email' => 'seunghwan94.dev@gmail.com',
    'github' => 'https://github.com/seunghwan94' 
]; 

// 자기소개 텍스트 
$introduction = '저는 웹개발 분야에서 2년7개월의 경력을 가지고 있습니다. (주)메이크봇에서는 대한항공 근무한 이력이있고, 환경부(생활화학제품 중독 응급 대응 시스템)을 개발하였습니다. 웨인테크놀로지에서는 키움YES저축은행과 진영자산관리대부, 삼호저축은행 등 다양한 프로젝트를 수행했습니다. 코딩을 즐기는 저는 Java, PHP, Node.js, Python, React 등 언어에 대한 거부감이 없고, CI/CD, AWS, Docker, 모니터링 서비스인 Prometheus / Grafana 같이 새로운 기술에 대한 열정 또한 가지고 있어, 기업의 성과 향상에 기여할수 있는 역량을 보유하고 있습니다. 함께 일하게 된다면, 효율적이고 혁신적인 결과물을 만들어내기 위해 최선을 다할 것입니다'; 

// 학력 사항
$education = [
    [
        'period' => '2024.08 ~ 2025.03',
        'school' => '더 조은 컴퓨터 아카데미(구로)',
        'major' => 'AWS 풀스택 웹 앱 개발자',
        'details' => '더좋은아카데미 수료증(구로)',
        'data' => '../config/download_resume_guro.php'
    ],
    [
        'period' => '2021.05 ~ 2021.11',
        'school' => '더 조은 컴퓨터 아카데미 (강남)',
        'major' => '빅데이터 플랫폼 개발자 양성 스마트 ',
        'details' => '더조은아카데미 취업추천서(강남)',
        'data' => '../assets/data/더조은아카데미 취업추천서(강남).jpg'
    ]
];

// 자격증 및 수상 내역
$certifications = [
    ['name' => 'SQLD(SQL Developer)', 'date' => '2024.12', 'org' => '한국데이터산업진흥원']
];
?>

<!-- 프로필 섹션 -->
<section class="profile-section pt-5 px-3">
    <div class="section-header d-flex justify-content-between align-items-center mb-4 mt-3">
      <h2 class="border-start border-4 border-<?php echo $settings['accent_color']; ?> ps-3 fw-bold m-0">About Me</h2>
      <small class="text-muted me-3">
        <a href="../config/download_resume.php" class="text-muted text-decoration-none">(이력서 다운로드)</a>
      </small>

    </div>
    
    <div class="row mb-5" style="align-items: center;">
        <div class="col-md-4 text-center">
            <div class="profile-image-container">
                <img src="../assets/img/aboutme.png" alt="<?php echo $profile['name']; ?>" class="img-fluid profile-image">
            </div>
        </div>
            
        <div class="col-md-8">
            <div class="profile-info">
                <div class="last-updated mb-3">
                    <div class="contact-item mb-2">
                        <i class="fas fa-user-tie me-2"></i>
                        <span class="fw-bold" style="color:#58a6ff"><?php echo $profile['position']; ?></span>
                    </div>                        
                </div>
                <p class="introduction-text">
                    <?php echo $introduction; ?>
                </p>
                            
                <div class="contact-info">
                    <div class="contact-item mb-2">
                        <i class="fas fa-phone-alt me-2"></i>
                        <a href="tel:<?php echo $profile['phone']; ?>" target="_blank" class="text-light"><?php echo $profile['phone']; ?></a>
                    </div>
                    <div class="contact-item mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:<?php echo $profile['email']; ?>" target="_blank" class="text-light"><?php echo $profile['email']; ?></a>
                    </div>
                    <div class="contact-item mb-2">
                        <i class="fab fa-github me-2"></i>
                        <a href="<?php echo $profile['github']; ?>" target="_blank" class="text-light"><?php echo $profile['github']; ?></a>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
    <!-- 학력 섹션 -->
    <div class="section-header mb-4">
        <h2 class="border-start border-4 border-<?php echo $settings['accent_color']; ?> ps-3 mb-3 fw-bold">Education</h2>
    </div>
    <div class="row mb-5 px-4">
        <?php foreach ($education as $item): ?>
        <div class="col-md-6 mb-4">
            <div class="card bg-dark">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-bold"><?php echo $item['school']; ?></h5>
                        <span class="badge bg-secondary" style="height: 22px;"><?php echo $item['period']; ?></span>
                    </div>
                    <p class="card-text mb-2" style="color:#58a6ff"><?php echo $item['major']; ?></p>
                    <small class="text-muted me-3">
                      <a href="<?php echo $item['data']; ?>" class="text-muted text-decoration-none"><?php echo $item['details']; ?></a>
                    </small>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- 자격증 및 수상내역 섹션 -->
    <div class="section-header mb-4">
        <h2 class="border-start border-4 border-<?php echo $settings['accent_color']; ?> ps-3 mb-3 fw-bold">Qualifications and Awards</h2>
    </div>
    <div class="row px-4">
        <?php foreach ($certifications as $item): ?>
        <div class="col-md-4 mb-3">
            <div class="card h-100 bg-dark ">
                <div class="card-body">
                    <h5 class="card-title fw-bold"><?php echo $item['name']; ?></h5>
                    <p class="card-text mb-1"><?php echo $item['org']; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $item['date']; ?></small></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>


