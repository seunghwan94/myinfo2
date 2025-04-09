<?php
// 경력 데이터
$experiences = [
  [
    'company' => '(주)메이크봇',
    'period' => '(2023.3 ~ 2024.06)',
    'duration' => '[1년3개월]',
    'projects' => [
      [
        'client' => '대한항공',
        'period' => '(2023.5 ~ 2024.6)',
        'duration' => '[1년 1개월]',
        'title' => '시스템 유지보수 개발',
        'tech_stack' => 'PHP, PostgreSQL, JavaScript, Linux, Node.js',
        'details' => [
          '- iOS 앱 백그라운드 전환 시 연결 끊김 현상 해결',
          '&emsp;→ 세션 관리 로직 개선 및 통신 재연결 로직 추가로 시스템 안정성 향상 및 사용자 불만 감소',
          '- DB 성능 개선 및 응답 속도 최적화',
          '&emsp;→ 로그 데이터 쿼리 수정으로 평균 조회 시간 4~5분에서',
          '&emsp;&emsp; 1분으로 약 <span class="text-danger">75%</span> 감소, 운영 효율성 증대',
          '- 운영 중 발생하는 이슈 분석 및 신속한 대응을 통해 시스템 다운타임 최소화'
        ]
      ],
      [
        'client' => '환경부',
        'period' => '(2023.12 ~ 2024.3)',
        'duration' => '[4개월]',
        'title' => '생활화학제품 중독 응급 대응 시스템 개발',
        'tech_stack' => 'PHP(CodeIgniter), MySQL, Apache, GitLab, JavaScript',
        'details' => [
          '- 시스템 환경 초기 구축',
          '&emsp;→ 서버 및 소프트웨어 환경 구성, 안정적인 서비스 운영 기반 마련',
          '- 관리자 페이지 및 사용자 인터페이스 개발',
          '&emsp;→ 사용자 니즈 반영한 UI/UX 설계로 관리자 작업 효율 향상'
        ]
      ],
      [
        'client' => '풀무원',
        'period' => '(2023.3 ~ 2023.5)',
        'duration' => '[2개월]',
        'title' => '유지보수',
        'tech_stack' => 'PHP, PostgreSQL, JavaScript, Linux, HTML, CSS',
        'details' => [
          '- 동시 주문 시 주문번호 중복 발행 이슈 해결',
          '&emsp;→ 트랜잭션 처리 개선을 통해 주문 오류 방지, 고객 만족도 <span class="text-danger">10%</span> 증가'
        ]
      ]
    ]
  ],
  [
    'company' => '(주)웨인테크놀로지',
    'period' => '(2021.12 ~ 2023.03)',
    'duration' => '[1년 4개월]',
    'projects' => [
      [
        'client' => '키움YES저축은행',
        'period' => '(2022.10 ~ 2023.3)',
        'duration' => '[6개월]',
        'title' => '유지보수',
        'tech_stack' => 'PHP, Tibero, JavaScript, Linux, HTML, CSS',
        'details' => [
          '- 금융 및 공공 API 연동 (금융감독원 신용조회, 카히스토리, MY홈택스 등)',
          '&emsp;→  외부 시스템과의 연동 안정화로 대출 관련 사용자 접속률 <span class="text-danger">5%</span> 증가',
          '- 1원 송금 인증 페이지 신규 개발 (다우기술 협업)',
          '&emsp;→ 인증 수단 추가로 보안성 및 사용자 만족도 향상'
        ]
      ],
      [
        'client' => '진영자산관리대부, 삼호저축은행',
        'period' => '(2021.12 ~ 2022.10)',
        'duration' => '[10개월]',
        'title' => '유지보수',
        'tech_stack' => 'PHP, PostgreSQL, JavaScript, Linux, HTML, CSS',
        'details' => [
          '- 브라우저 전환 대응 (IE → Edge & Chrome)',
          '&emsp;→ IE 종료 전 페이지 오류 전면 수정으로 서비스 안정성 및 신뢰도 향상',
          '- 커뮤니케이션 툴 API 연동',
          '&emsp;→ 실시간 고객 문의 확인 가능하게 하여 고객 만족도 <span class="text-danger">80%</span> 증가'
        ]
      ]
    ]
  ]
];
?>