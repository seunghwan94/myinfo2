<?php
// 프로젝트 데이터
$projects = [
  [
    'title' => '가구의집 (House of Furniture)',
    'period' => '(2025.01.31 ~ 2025.03.06)',
    'duration' => '[1개월]',
    'member' => '3명 (이승환, 김용태, 함형준)',
    'member_detail' => '[팀장]',
    'overview' => '1인 가구의 증가와 인테리어에 대한 관심이 높아지는 현대 사회에서, 소비자들이 쉽게 인테리어 제품을 비교하고 구매할 수 있는 플랫폼의 필요성을 인식했습니다. \'가구의 집\'은 단순한 쇼핑몰이 아닌 인테리어 소품 판매, 커뮤니티, 시공업체 연결 서비스가 결합된 통합 플랫폼으로 기획되었습니다. 사용자들이 다양한 인테리어 소품을 한 곳에서 구매하고, 인테리어 노하우를 공유하며, 필요시 전문 시공업체와 연결될 수 있는 원스톱 서비스를 제공하여 1인 가구의 주거 환경 개선을 목표로 했습니다.',
    'github_back' => 'https://github.com/seunghwan94/hof-back',
    'github_front' => 'https://github.com/seunghwan94/hof-front',
    'site' => 'https://hof.lshwan.com',
    'description' => '인테리어 소품 판매, 커뮤니티 시공업체 연결 서비스가 결합된 플랫폼 개발 프로젝트',
    'short_desc' => '가구 판매와 커뮤니티, 시공업체 연결 서비스가 통합된 원스톱 인테리어 플랫폼',
    'tech_stack' => 'CI/CD [ AWS(EC2, RDS, S3), Github (GitHub Actions), Docker, Discord ], Prometheus / Grafana, Java(Spring boot 3.4.2V), Security, MariaDB, MongoDB, JPA, MyBatis, Swagger, Jacoco, Crawling(Selenium), React, Bootstrap, Android Studio',
    'tech_tags' => ['Java', 'Spring Boot', 'React', 'AWS', 'CI/CD', 'Docker'],
    'roles' => [
      'AWS (EC2) & Cloudflare: 도메인 및 DNS 연결',
      'Nginx Reverse Proxy 사용 (SSH)',
      'DevOps 구축: AWS (EC2, S3, RDS), GitHub Action, Docker, Discord',
      '파이프라인 (GitHub Actions 기반, Git 전략 사용: Merge Commit 전략)',
      '모니터링 및 로깅: Prometheus / Grafana',
      '테스트 및 문서화: Swagger, JaCoCo',
      '메인 화면 전체적인 기능',
      'PORTONE (아임포트 결제 시스템 연동)',
      '웹 크롤링 (Selenium 활용)'
    ],
    'architecture' => [
      '프론트엔드: React, Bootstrap (반응형 웹), Android Studio (웹뷰)',
      '백엔드: Java (Spring Boot 3.2.x), JPA, MyBatis, Spring Security (JWT, OAuth2)',
      '데이터베이스: MariaDB(관계형 데이터), MongoDB(비정형 데이터)',
      '인프라: AWS EC2, RDS, S3, Cloudflare, Docker, GitHub Actions',
      '모니터링: Prometheus/Grafana',
      '보안: Spring Security, JWT, OAuth2',
      '기타: Swagger(API 문서화), Jacoco(테스트 커버리지)'
    ],
    'main_features' => [
      [
        'title' => '도메인 및 DNS 연결',
        'content' => 'AWS EC2 인스턴스와 Cloudflare를 활용하여 도메인 설정 및 DNS 연결을 구현했습니다. Nginx Reverse Proxy를 통해 여러 서비스를 하나의 도메인에서 효율적으로 관리하고, HTTPS 보안 연결을 설정하여 안전한 서비스 접근을 보장했습니다.'
      ],
      [
        'title' => 'CI/CD 파이프라인 구축',
        'content' => 'GitHub Actions를 활용한 CI/CD 파이프라인을 구축하여 코드 변경사항이 자동으로 테스트, 빌드, 배포되는 시스템을 구현했습니다. 배포 시간 90% 단축 (수동 20분 → 자동화 4분), 배포 오류율 75% 감소, Discord를 통한 실시간 배포 알림으로 팀 커뮤니케이션 향상 성과를 달성했습니다.'
      ],
      [
        'title' => '모니터링 시스템 구축',
        'content' => 'Docker 기반의 Prometheus와 Grafana를 활용하여 서비스 상태 모니터링 및 로그 분석 시스템을 구축했습니다. Spring 응답 시간 및 오류율, 서버 자원 사용량 등 실시간 모니터링으로 문제 발생 시 신속한 대응 환경을 마련했습니다. (EC2 메모리 부족으로 프로젝트에서 확인 불가합니다.)'
      ],
      [
        'title' => '결제 시스템 연동 (PORTONE)',
        'content' => '아임포트(PORTONE) 결제 시스템을 연동하여 다양한 결제 수단을 지원하는 안전한 결제 프로세스를 구현했습니다.'
      ],
      [
        'title' => '웹 크롤링 시스템 (쿠팡)',
        'content' => 'Selenium을 활용하여 다양한 인테리어 소품 정보를 수집하는 크롤링 시스템을 개발했습니다. 자동화된 데이터 추출 프로세스를 구축하여 여러 인테리어 사이트에서 제품 정보, 가격, 이미지 등을 효율적으로 수집했습니다. 수집된 데이터는 AWS RDS와 S3에 체계적으로 저장하여 서비스 초기 기반 데이터로 활용하였습니다.'
      ],
      [
        'title' => '메인 화면 UI/UX',
        'content' => '메인 페이지의 전체적인 UI/UX 디자인과 구현을 담당했습니다. 풀페이지 영상 재생, 스크롤 기반 콘텐츠 표시, 반응형 디자인을 적용하여 다양한 기기에서 최적의 사용자 경험을 제공했습니다. React 컴포넌트를 활용한 모듈화된 구조로 개발하여 유지보수와 확장이 용이하도록 설계했습니다.'
      ],
      [
        'title' => '테스트 및 문서화',
        'content' => 'Swagger를 활용하여 REST API 문서를 자동화하고 개발자와 클라이언트 간의 원활한 소통 기반을 마련했습니다. JaCoCo 도구를 통해 코드 커버리지를 측정하고 테스트 리포트를 생성하여 소프트웨어 품질을 향상시켰습니다. 이를 통해 개발 과정에서 발생할 수 있는 오류를 사전에 탐지하고 안정적인 서비스를 제공할 수 있었습니다.'
      ]
    ],
    'project_outputs' => [
      ['name' => '정의서', 'url' => 'https://hof-bucket.s3.ap-northeast-2.amazonaws.com/assets/%EC%A0%95%EC%9D%98%EC%84%9C.xlsx'],
      ['name' => 'WBS', 'url' => 'https://hof-bucket.s3.ap-northeast-2.amazonaws.com/assets/WBS.xlsx'],
      ['name' => 'ERD', 'url' => 'https://hof-bucket.s3.ap-northeast-2.amazonaws.com/assets/ERD.xlsx'],
      ['name' => 'Paper Prototype (영상)', 'url' => 'https://youtu.be/X1xhnW_Am7w'],
      ['name' => 'API 문서 (Swagger)', 'url' => 'https://hof.lshwan.com/api/v1/swagger-ui/index.html'],
      ['name' => '테스트 커버리지 리포트 (Jacoco)', 'url' => 'https://hof.lshwan.com/jacoco/index.html'],
      ['name' => '발표자료(PPT)', 'url' => 'https://magolee.my.canva.site/']
    ],
    'learning' => [
      'DevOps와 클라우드 인프라에 대한 깊은 이해와 경험',
      'CI/CD 파이프라인 구축과 Docker 컨테이너화를 통한 현대적인 개발 환경 경험',
      'AWS 클라우드 환경에서의 서비스 운영 경험',
      '모니터링 시스템 구축을 통한 서비스 안정성 확보 방법 학습',
      'Git 브랜치 전략을 통한 체계적인 버전 관리와 협업 워크플로우 구축 경험',
      '팀장으로서의 기술적 리더십 발휘 및 효과적인 협업 방식 발전'
    ],
    'results' => [
      '프로젝트 발표에서 인프라 구성과 DevOps 파이프라인에 대한 높은 평가 획득',
      '1인 가구를 위한 직관적인 UI/UX 설계로 사용자 테스트에서 만족도 90% 달성',
      'GitHub Actions와 Docker를 활용한 CI/CD 파이프라인 구축으로 배포 프로세스 자동화 달성',
      'Prometheus/Grafana 기반 모니터링 시스템 구축으로 서비스 안정성 30% 향상'
    ],
    'tech_stacks' => [
      ['category' => '프론트엔드', 'items' => ['React', 'Bootstrap (반응형 웹)', 'Android Studio (웹뷰)']],
      ['category' => '백엔드', 'items' => ['Java (Spring Boot 3.2.x)', 'JPA, MyBatis', 'Spring Security (JWT, OAuth2)']],
      ['category' => '데이터베이스', 'items' => ['MariaDB', 'MongoDB']],
      ['category' => 'DevOps & 인프라', 'items' => ['AWS (EC2, RDS, S3)', 'Docker, GitHub Actions', 'Nginx (리버스 프록시)', 'Prometheus/Grafana (모니터링)']],
      ['category' => '개발 도구', 'items' => ['Swagger (API 문서화)', 'Jacoco (테스트 커버리지)', 'Selenium (웹 크롤링)', 'TINYMCE API (WYSIWYG 에디터)']]
    ],
    'thumbnail' => '../assets/img/project/hof/hof_main.png',
    'result_images' => [
      '../assets/img/project/hof/hof_main.png',
      '../assets/img/project/hof/hof_image.png',
      '../assets/img/project/hof/hof_image1.png',
      '../assets/img/project/hof/hof_image2.png',
      '../assets/img/project/hof/hof_image3.png',
      '../assets/img/project/hof/hof_image4.png',
      '../assets/img/project/hof/hof_result.png',
      '../assets/img/project/hof/hof_result2.png',
    ]
  ],  
  // The-k 프로젝트
  [
    'title' => 'The-k (Team project)',
    'period' => '(2024.10.29 ~ 2024.11.29)',
    'duration' => '[1개월]',
    'member' => '3명 (이승환, 이상원, 김한민)',
    'member_detail' => '[팀원]',
    'github' => 'https://github.com/seunghwan94/semi-theK',
    'description' => 'K-컬쳐 관광객 커뮤니티(정보) 플랫폼 개발 프로젝트',
    'short_desc' => '한국 문화 관광객을 위한 정보 공유 및 커뮤니티 사이트',
    'overview' => 'K-컬쳐에 관심 있는 관광객들을 위한 정보 공유 및 커뮤니티 플랫폼입니다. 정보 공유를 위해 사용자들이 참여하고 소통할 수 있는 환경을 제공하고, 정서적 연결과 유대감을 충족시킬 수 있는 커뮤니티 사이트를 목표로 개발했습니다. 트위터("X"), 블라인드 등을 참고하여 JSP 및 Servlet 학습 과정을 최대한 반영했습니다.',
    'tech_stack' => 'Java, JSP, Servlet, MariaDB, MyBatis, AWS, Tomcat',
    'tech_tags' => ['Java', 'JSP', 'Servlet', 'MariaDB', 'MyBatis'],
    'roles' => [
      '서버 환경: AWS(EC2) & Cloudflare - 도메인 및 DNS 연결',
      '서버 환경: Maven, Java(JSP, Servlet) 설정 및 활용',
      '서버 환경: Tomcat을 사용한 수동 배포',
      '게시판 관리: 게시글 CRUD 기능 구현',
      '관리자 페이지: Chart.js를 활용한 통계 표시',
      '관리자 페이지: 회원 관리 CRUD 구현',
      '관리자 페이지: 드래그 앤 드롭으로 메인 header 메뉴 관리',
      '관리자 페이지: 금지단어 CRUD 기능'
    ],
    'architecture' => [
      '프론트엔드: JSP, JavaScript, JQuery, AJAX, Bootstrap',
      '백엔드: Java, Servlet, JSP',
      '데이터베이스: MariaDB',
      '서버: AWS EC2, Tomcat',
      '배포: AWS EC2에 Tomcat 설치 후, WAR 파일 수동 배포'
    ],
    'main_features' => [
      [
        'title' => '서버 환경 구축',
        'content' => 'AWS EC2 인스턴스와 Cloudflare를 활용하여 도메인 설정 및 DNS 연결을 구현했습니다. 보안 설정과 네트워크 구성을 최적화하여 안정적인 서비스 환경을 구축했습니다.'
      ],
      [
        'title' => '게시판 기능',
        'content' => '게시글 CRUD 기능을 개발했습니다. 페이징 처리를 통해 효율적인 데이터 접근이 가능하도록 했습니다. 첨부 파일 기능도 추가하여 다양한 형태의 콘텐츠 공유가 가능하게 했습니다.'
      ],
      [
        'title' => '관리자 페이지',
        'content' => '사용자 통계, 게시판 통계, 회원 관리, 메뉴 관리, 금지단어 기능을 개발했습니다. Chart.js를 활용하여 직관적인 시각화를 제공하고, 관리자가 효율적으로 사이트를 운영할 수 있도록 지원했습니다. 드래그 앤 드롭 기능을 통해 메뉴 구조를 손쉽게 관리할 수 있는 인터페이스를 구현했습니다.'
      ],
      [
        'title' => '수동 배포 (Tomcat)',
        'content' => 'Tomcat 서버를 활용한 수동 배포 프로세스를 구축했습니다. WAR 파일 생성 및 배포, 서버 설정 최적화 수행하여 안정적인 애플리케이션 운영 환경을 마련했습니다. '
      ]

    ],
    'project_outputs' => [
      ['name' => '사전기획 캡처', 'url' => '../assets/img/project/thek/theKplan.png'],
      ['name' => 'ERD 캡처', 'url' => '../assets/img/project/thek/erd.png'],
      ['name' => '요구사항정의서 및 WBS 캡처', 'url' => '../assets/img/project/thek/wbs.png'],
      ['name' => 'the-k ppt 다운로드', 'url' => '../assets/img/project/thek/the-k.pptx']
    ],
    'learning' => [
      'JSP와 Servlet을 활용한 웹 애플리케이션 개발 경험',
      'MVC 패턴 기반의 웹 서비스 설계 및 구현 능력 향상',
      'AWS EC2를 활용한 서버 구축 및 도메인 연결 경험',
      'Chart.js를 활용한 데이터 시각화 기술 습득',
      '팀 프로젝트를 통한 협업 능력 강화'
    ],
    'results' => [
      '사용자 중심의 UI/UX 설계로 K-컬쳐 관련 정보 접근성 향상',
      '관리자 페이지를 통한 효율적인 콘텐츠 및 사용자 관리 시스템 구축',
      '드래그 앤 드롭 기능을 활용한 직관적인 메뉴 관리 시스템 구현'
    ],
    'tech_stacks' => [
      ['category' => '프론트엔드', 'items' => ['JSP', 'JavaScript', 'JQuery', 'AJAX', 'Bootstrap']],
      ['category' => '백엔드', 'items' => ['Java', 'Servlet', 'JSP']],
      ['category' => '데이터베이스', 'items' => ['MariaDB', 'MyBatis']],
      ['category' => '서버', 'items' => ['AWS EC2', 'Tomcat']],
      ['category' => '개발 도구', 'items' => ['Eclipse', 'Maven', 'Git']]
    ],
    'thumbnail' => '../assets/img/project/thek/thek_main.png',
    'result_images' => [
      '../assets/img/project/thek/image1.png',
      '../assets/img/project/thek/image2.png',
      '../assets/img/project/thek/image3.png',
      '../assets/img/project/thek/image4.png',
      '../assets/img/project/thek/thek_main.png',
    ]
  ],
  // GeminiCook 프로젝트
  [
    'title' => 'GeminiCook (Gemini API 개발자 대회 제출)',
    'period' => '(2024.08.01 ~ 2024.08.12)',
    'duration' => '[11일]',
    'member' => '1명 (이승환)',
    'member_detail' => '[본인]',
    'github' => 'https://github.com/seunghwan94/Gemini_cook.git',
    'site' => 'https://youtu.be/FLRkyRzsFpE',
    'description' => 'Gemini API를 활용해 사용자의 취향과 재료를 분석하여 레시피를 자동으로 추천해주는 프로그램',
    'short_desc' => 'Gemini API 기반의 개인 맞춤형 레시피 추천 앱',
    'overview' => 'Gemini API를 활용하여 사용자의 취향과 가지고 있는 재료를 분석해 맞춤형 레시피를 자동으로 추천해주는 애플리케이션입니다. Google의 Gemini API 경진대회 제출작으로, 사용자가 좋아하는 요리 스타일과 냉장고에 있는 재료를 입력하면 AI가 분석하여 최적의 레시피를 제안합니다. 추천된 레시피는 상세한 조리 방법과 함께 제공되며, API 키 입력 시 관련 이미지도 함께 표시됩니다.',
    'tech_stack' => 'Python, Streamlit, Gemini API, Google Search Engine, PyInstaller',
    'tech_tags' => ['Python', 'Gemini API', 'Streamlit'],
    'roles' => [
      'Python 기반 애플리케이션 전체 설계 및 개발',
      'Gemini API 연동 및 활용 로직 구현',
      'Google Search, Google API 통합',
      'Streamlit 프레임워크를 활용한 사용자 인터페이스 구현',
      'PyInstaller를 사용한 실행 파일(.exe) 배포'
    ],
    'architecture' => [
      '프론트엔드: Streamlit(Python 기반 웹 애플리케이션 프레임워크)',
      '백엔드: Python',
      'API: Gemini API, Google Search API',
      '배포: PyInstaller를 통한 독립 실행 파일(.exe) 생성'
    ],
    'main_features' => [
      [
        'title' => 'AI 기반 레시피 추천',
        'content' => 'Gemini API를 활용하여 사용자의 취향과 가용 재료를 분석해 맞춤형 레시피를 추천합니다. 개인의 식습관과 선호도에 맞는 요리법을 제공하여 더 만족스러운 요리 경험을 가능하게 합니다.'
      ],
      [
        'title' => '재료 기반 요리 추천',
        'content' => '사용자가 냉장고에 있는 재료를 입력하면, 해당 재료를 최대한 활용할 수 있는 요리 레시피를 제안합니다. 남은 재료를 효율적으로 사용할 수 있어 식재료 낭비를 줄이는 데 도움이 됩니다.'
      ],
      [
        'title' => '이미지 표시 기능',
        'content' => 'Google API Key 입력 시 추천 요리와 관련된 이미지를 함께 표시하여 사용자가 완성된 요리의 모습을 미리 확인할 수 있습니다. 시각적 참고자료를 통해 요리에 대한 이해도를 높일 수 있습니다.'
      ],
      [
        'title' => '상세 레시피 제공',
        'content' => '요리를 선택하면 Gemini API를 통해 상세한 레시피 정보를 제공합니다. 재료 목록, 조리 단계, 팁 등을 포함하여 누구나 쉽게 따라할 수 있는 형태로 제공됩니다.'
      ],
      [
        'title' => '독립 실행 애플리케이션',
        'content' => 'PyInstaller를 사용하여 exe 파일 형태로 배포됨으로써, Python 환경 설정 없이도 일반 사용자가 쉽게 애플리케이션을 실행할 수 있습니다.'
      ]
    ],
    'project_outputs' => [
      ['name' => '시연 영상', 'url' => 'https://youtu.be/FLRkyRzsFpE'],
      ['name' => '소스 코드', 'url' => 'https://github.com/seunghwan94/Gemini_cook.git']
    ],
    'learning' => [
      'Gemini API 활용 경험 및 대규모 언어 모델(LLM) 프롬프트 엔지니어링 기술 습득',
      'Streamlit을 활용한 Python 기반 웹 애플리케이션 개발 능력 향상',
      'API 연동 및 데이터 처리 능력 강화',
      'PyInstaller를 통한 애플리케이션 패키징 및 배포 경험'
    ],
    'results' => [
      'Gemini API 개발자 대회 출품작으로 AI 기반 서비스 개발 역량 입증',
      '사용자 맞춤형 레시피 추천 시스템 구현으로 개인화된 요리 경험 제공',
      '직관적인 UI를 통해 사용자 접근성 향상 및 편의성 확보',
      '독립 실행형 애플리케이션으로 개발하여 배포 및 설치 용이성 확보'
    ],
    'tech_stacks' => [
      ['category' => '프로그래밍 언어', 'items' => ['Python']],
      ['category' => '프레임워크', 'items' => ['Streamlit']],
      ['category' => 'API', 'items' => ['Gemini API', 'Google Search API']],
      ['category' => '개발 도구', 'items' => ['PyCharm', 'Git', 'PyInstaller']],
      ['category' => '배포', 'items' => ['PyInstaller']]
    ],
    'thumbnail' => '../assets/img/project/geminicook/main.png',
    'result_images' => [
      '../assets/img/project/geminicook/prod1.png',
      '../assets/img/project/geminicook/prod2.png',
      '../assets/img/project/geminicook/prod3.png'
    ]
  ],
  // m/place 프로젝트
  [
    'title' => 'm/place (r/place 모방 프로젝트)',
    'period' => '(2024.07.01 ~ 2024.07.25)',
    'duration' => '[3주]',
    'member' => '1명 (이승환)',
    'member_detail' => '[본인]',
    'github' => 'https://github.com/seunghwan94/node-vue-mplace',
    'site' => 'https://www.youtube.com/shorts/Rj8UQSbKMVA',
    'description' => 'Reddit r/place 이벤트를 모방한 픽셀 드로잉 협업 플랫폼',
    'short_desc' => 'Vue 기반 픽셀 협업 보드, 도메인 연결 후 실제 운영',
    'overview' => 'Reddit에서 개최한 r/place 이벤트에서 영감을 받아 개발한 실시간 픽셀 드로잉 협업 플랫폼입니다. 사용자들이 공유 캔버스에 픽셀 단위로 색상을 그리고 서로 협업하여 하나의 큰 그림을 만들어가는 서비스입니다. Node.js, Vue.js, Socket.io를 활용하여 실시간 통신 기능을 구현했으며, 개인 서버에 직접 도메인을 연결하여 실제 운영 경험을 쌓았습니다.',
    'tech_stack' => 'Node.js, Vue.js, Socket.io, MariaDB, Docker, Nginx, CentOS, FTP',
    'tech_tags' => ['Node.js', 'Vue.js', 'Docker', 'CentOS', 'Socket.io'],
    'roles' => [
      '서버 환경 구축 (로컬): Docker 사용하여 CentOS 7 설치 및 설정',
      '인프라 설정: FTP, MariaDB, Node.js, Nginx 등 필수 소프트웨어 설치 및 설정',
      '백엔드 개발: Express 기반 RESTful API 설계 및 구현',
      '프론트엔드 개발: Vue.js를 활용한 사용자 인터페이스 개발',
      '실시간 통신: Socket.io를 활용한 실시간 픽셀 변경 및 동기화 구현',
      '데이터베이스 설계: 픽셀 정보 및 사용자 데이터 스키마 설계',
      '보안 설정: 방화벽 구성 및 접근 제어 설정',
      '도메인 연결: 가비아에서 도메인 구매 및 서버 연결 설정'
    ],
    'architecture' => [
      '프론트엔드: Vue.js, HTML5 Canvas',
      '백엔드: Node.js, Express',
      '실시간 통신: Socket.io',
      '데이터베이스: MariaDB',
      '웹 서버: Nginx (리버스 프록시)',
      '운영체제: CentOS 7',
      '배포: 로컬 서버(포트 포워딩), 도메인 연결'
    ],
    'main_features' => [
      [
        'title' => '실시간 픽셀 드로잉',
        'content' => 'Socket.io를 활용하여 사용자가 선택한 픽셀과 색상을 실시간으로 모든 접속자에게 동기화하는 기능을 구현했습니다. 여러 사용자가 동시에 캔버스에 그림을 그릴 수 있으며, 변경 사항은 즉시 모든 접속자에게 반영됩니다.'
      ],
      [
        'title' => '픽셀 데이터 영구 저장',
        'content' => 'MariaDB를 통해 캔버스의 모든 픽셀 데이터를 저장하여, 서버 재시작이나 사용자 재접속 시에도 기존 그림이 유지되도록 구현했습니다. 각 픽셀의 좌표, 색상, 수정 시간, 수정한 사용자 정보 등을 체계적으로 관리합니다.'
      ],
      [
        'title' => '사용자 인터페이스',
        'content' => 'Vue.js를 활용하여 직관적이고 반응형 사용자 인터페이스를 개발했습니다. 색상 팔레트, 확대/축소 기능, 픽셀 위치 정보 등 사용자 경험을 높이는 UI 요소를 구현했습니다.'
      ],
      [
        'title' => '서버 인프라 구축',
        'content' => 'Docker를 사용하여 CentOS 7를 설치하고 필요한 소프트웨어(Node.js, MariaDB, Nginx 등)를 설정하여 안정적인 서비스 환경을 구축했습니다. Nginx를 리버스 프록시로 활용하여 보안 및 성능을 향상시켰습니다.'
      ],
      [
        'title' => '도메인 연결 및 포트포워딩',
        'content'=> '가비아에서 구매한 도메인을 개인 서버(로컬)에 연결하고, 포트포워딩을 설정하여 외부에서 접근 가능한 서비스로 구축했습니다. DNS 설정 및 네트워크 구성을 통해 안정적인 서비스 접근 환경을 마련했습니다.'
      ]
    ],
    'project_outputs' => [
      ['name' => '서비스 데모 영상', 'url' => 'https://www.youtube.com/shorts/Rj8UQSbKMVA'],
      ['name' => '소스 코드', 'url' => 'https://github.com/seunghwan94/node-vue-mplace']
    ],
    'learning' => [
      'Node.js와 Socket.io를 활용한 실시간 통신 애플리케이션 개발 경험',
      'Vue.js를 활용한 동적이고 반응형 웹 애플리케이션 구현 능력 향상',
      'Docker를 사용하여 CentOS 서버 환경 구축 및 관리 경험',
      'Nginx 웹 서버 설정 및 리버스 프록시 활용 방법 습득',
      '도메인 구매부터 서버 연결까지 웹 서비스 배포 전 과정 경험',
      '데이터베이스 스키마 설계 및 최적화 능력 향상'
    ],
    'results' => [
      '실시간 사용자 상호작용이 가능한 웹 애플리케이션 성공적 구현',
      '개인 서버 환경에서 안정적으로 운영되는 웹 서비스 구축',
      'Socket.io를 활용한 효율적인 실시간 데이터 동기화 시스템 개발',
      '서버 인프라 구축부터 배포까지 전체 개발 라이프사이클 경험'
    ],
    'tech_stacks' => [
      ['category' => '프론트엔드', 'items' => ['Vue.js', 'HTML5 Canvas', 'CSS3', 'JavaScript']],
      ['category' => '백엔드', 'items' => ['Node.js', 'Express', 'Socket.io']],
      ['category' => '데이터베이스', 'items' => ['MariaDB']],
      ['category' => '서버 & 인프라', 'items' => ['CentOS 7', 'Nginx', 'FTP', 'Docker']],
      ['category' => '개발 도구', 'items' => ['Git', 'VS Code', 'npm']]
    ],
    'thumbnail' => '../assets/img/project/mplace/main.png',
    'result_images' => [
      '../assets/img/project/mplace/main.png'
    ]
  ],
  // Stock Alphago 프로젝트
  [
    'title' => 'Stock Alphago (주식 자동 매매 시스템)',
    'period' => '(2024.08 ~ 2024.10)',
    'duration' => '[2개월]',
    'member' => '5명 (이승환, 백건우, 이세연, 최지웅, 이주윤)',
    'member_detail' => '[팀장]',
    'site' => '../assets/img/project/stock/ppt.pdf',
    'description' => '강화학습 및 대신증권 API를 이용한 자동 매매 시스템 구축',
    'short_desc' => 'AI 강화학습 기반 자동 주식 매매 시스템',
    'overview' => '강화학습 알고리즘과 딥러닝 모델을 활용하여 주식 시장 데이터를 분석하고 자동으로 매매 결정을 내리는 시스템을 개발했습니다. 대신증권 API를 연동하여 실시간 시장 데이터를 수집하고, LSTM, Transformer 등 다양한 딥러닝 모델을 적용하여 주가 예측의 정확도를 높였습니다. 프로젝트 목표는 1억원의 모의투자를 통해 2% 이상의 수익률을 달성하는 것이었으며, 강화학습을 통해 매수, 매도, 홀딩 결정을 최적화하는 자동 매매 시스템을 구현했습니다.',
    'tech_stack' => 'Python, GCP, Docker, Selenium, LSTM, Transformer, 대신증권 API, MariaDB, NumPy, Pandas, TensorFlow, Keras, Jupyter, GitHub, Colab, Anaconda, PuTTY',
    'tech_tags' => ['Python', 'GCP', 'AI', '강화학습', 'Docker', 'Windows10', 'CentOS', 'NumPy', 'Pandas', 'TensorFlow', 'Keras', 'MariaDB', 'Matplotlib', 'Seaborn'],
    'roles' => [
      '프로젝트 팀장: 전체 개발 과정 관리 및 일정 조율',
      'GCP 인프라 구축: VM 인스턴스 설정 및 개발 환경 구성',
      '데이터 수집: Selenium을 활용한 주식 데이터 크롤링 시스템 개발',
      '딥러닝 모델 개발: LSTM, Attention, Transformer 모델 구현 및 최적화',
      '강화학습 알고리즘 적용: 매수/매도/홀딩 결정을 위한 강화학습 모델 개발',
      '대신증권 API 연동: 실시간 주식 데이터 수집 및 자동 매매 시스템 연결',
      '시스템 최적화: 데이터 처리 및 모델 성능 개선'
    ],
    'architecture' => [
      '개발 환경: Google Cloud Platform(GCP) VM 인스턴스',
      '언어 및 프레임워크: Python, TensorFlow/Keras',
      '데이터베이스: MariaDB',
      '데이터 수집: Selenium, 대신증권 API',
      '모델링: LSTM, Attention, Transformer, 강화학습(A2C)',
      '데이터 시각화: Matplotlib 라이브러리 사용'
    ],
    'main_features' => [
      [
        'title' => '데이터 수집 시스템',
        'content' => 'Selenium을 활용하여 한국증권거래소 데이터를 크롤링하고, 대신증권 API를 통해 코스피200 종목의 분단위, 일단위 시장 데이터를 수집했습니다. 수집된 데이터는 MariaDB에 저장되어 모델 학습 및 예측에 활용되었습니다.'
      ],
      [
        'title' => '딥러닝 기반 주가 예측 모델',
        'content' => 'LSTM(Long Short-Term Memory), Attention 메커니즘, BatchNormalization을 결합한 모델과 Transformer 기반 모델을 개발하여 카카오, 현대모비스 등 주요 종목의 주가 예측 정확도를 높였습니다. GPU 환경에서 최적화된 모델 학습을 통해 효율적인 예측 시스템을 구축했습니다.'
      ],
      [
        'title' => '강화학습 기반 매매 결정 시스템',
        'content' => '강화학습 알고리즘을 적용하여 주식 매수(buy), 매도(sell), 관망(hold) 결정을 자동화했습니다. 초기 A3C 모델에서 처리 속도 문제로 A2C 모델로 최적화하여 실시간 의사결정 성능을 개선했습니다. 주가 상승 확률에 따라 매수량을 조절하는 전략을 적용하여 수익률을 향상시켰습니다.'
      ],
      [
        'title' => '자동 매매 시스템 연동',
        'content' => '대신증권 API를 활용하여 실시간 주식 데이터 수집, 강화학습 모델 예측, 자동 매매 실행까지 전체 플로우를 구현했습니다. 모의투자 계좌와 연동하여 실제 시장 상황에서 매매 시스템의 성능을 검증했습니다.'
      ],
      [
        'title' => '시스템 최적화 및 개선',
        'content' => '데이터 처리 및 학습 속도 문제를 해결하기 위해 다양한 최적화 작업을 수행했습니다. 분단위 2년치 데이터에서 1~3개월 데이터로 축소 실험을 진행하여 최적의 학습 데이터셋을 찾았으며, 매매 전략을 개선하여 수익률을 극대화했습니다.'
      ]
    ],
    'project_outputs' => [
      ['name' => '시스템 데모 영상', 'url' => '../assets/img/project/stock/stock.mp4'],
      ['name' => '자동매매 결과1 (이미지)', 'url' => '../assets/img/project/stock/image1.png'],
      ['name' => '자동매매 결과2 (이미지)', 'url' => '../assets/img/project/stock/image2.png'],
      ['name' => '발표자료(PPT)', 'url' => '../assets/img/project/stock/ppt.pdf']
    ],
    'learning' => [
      'LSTM, Transformer 등 최신 딥러닝 모델 설계 및 구현 경험',
      '강화학습 알고리즘의 실제 금융 데이터 적용 및 최적화 방법 습득',
      'GCP 클라우드 환경에서 GPU 컴퓨팅 자원 활용 기술',
      '대규모 시계열 데이터 처리 및 분석 역량 강화',
      '주식 시장 데이터 기반 예측 모델 개발 및 검증 경험',
      '팀장으로서 AI 프로젝트 관리 및 조율 능력 향상'
    ],
    'results' => [
      '딥러닝 및 강화학습 모델을 적용한 주가 예측 시스템 성공적 구축',
      '주가 예측 기반 자동 매매 전략 최적화로 모의투자 목표 수익률 달성',
      '실시간 데이터 처리 및 분석 파이프라인 구축으로 효율적인 시스템 운영',
      'LSTM, Attention, Transformer 등 다양한 모델 실험을 통한 최적 예측 모델 발굴',
      '대신증권 API 연동으로 실제 증권 시스템과 호환되는 자동 매매 시스템 개발'
    ],
    'tech_stacks' => [
      ['category' => '운영 체제', 'items' => ['Windows10', 'CentOS']],
      ['category' => '데이터베이스', 'items' => ['MariaDB']],
      ['category' => '개발 툴', 'items' => ['GCP(Google Cloud Platform)', 'GitHub', 'Colab', 'Anaconda', 'Jupyter', 'PuTTY', 'HeidiSQL']],
      ['category' => 'AI & 딥러닝', 'items' => ['TensorFlow', 'Keras', 'LSTM', 'Transformer', '강화학습(A2C)']],
      ['category' => '프로그래밍 언어', 'items' => ['Python']],
      ['category' => 'API', 'items' => ['대신증권 API']],
      ['category' => '데이터 처리', 'items' => ['Pandas', 'NumPy', 'Selenium']],
      ['category' => '데이터 시각화', 'items' => ['Matplotlib', 'Seaborn']],

    ],
    'thumbnail' => '../assets/img/project/stock/main.png',
    'result_images' => [
      '../assets/img/project/stock/main.png'
    ]
  ],
];
?>