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
$introduction = '저는 웹개발 분야에서 2년7개월의 경력을 가지고 있습니다. (주)메이크봇에서는 대한항공 근무한 이력이있고, 환경부(생활화학제품 중독 응급 대응 시스템)을 개발하였습니다. 
웨인테크놀로지에서는 키움YES저축은행과 진영자산관리대부, 삼호저축은행 등 다양한 프로젝트를 수행했습니다.
코딩을 즐기는 저는 Java, PHP, Node.js, Python, React 등 언어에 대한 거부감이 없고, CI/CD, AWS, Docker, 
모니터링 서비스인 Prometheus / Grafana 같이 새로운 기술에 대한 열정 또한 가지고 있어, 기업의 성과 향상에 기여할수 있는 역량을 보유하고 있습니다. 함께 일하게 된다면, 효율적이고 혁신적인 
결과물을 만들어내기 위해 최선을 다할 것입니다';
?>


<!-- 프로필 섹션 -->
<section class="profile-section py-5 px-3">
    <div class="section-header mb-4 mt-3">
      <h2 class="border-start border-4 border-<?php echo $settings['accent_color']; ?> ps-3 mb-3 fw-bold">About Me</h2>
    </div>

    <div class="ms-3 main-middle d-flex justify-content-around flex-wrap my-5">
      <?php foreach ($timeline as $item): ?>
      <div class="d-flex align-items-center">
        <p class="fw-bold" style="color:#58a6ff"><?php echo $item['period']; ?></p>
        <p class="ms-2"><?php echo $item['description']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="row" style="align-items: center;">
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
              <span><?php echo $profile['phone']; ?></span>
            </div>
            
            <div class="contact-item mb-2">
              <i class="fas fa-envelope me-2"></i>
              <span><?php echo $profile['email']; ?></span>
            </div>
            
            <div class="contact-item mb-2">
              <i class="fab fa-github me-2"></i>
              <a href="<?php echo $profile['github']; ?>" target="_blank" class="text-light"><?php echo $profile['github']; ?></a>
            </div>
            

          </div>
        </div>
      </div>
    </div>
</section>