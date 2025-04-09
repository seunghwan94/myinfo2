<?php
// 프로젝트 데이터
$projects = [
  [
    'title' => '가구의집 (House of Furniture)',
    'period' => '(2025.01.31 ~ 2025.03.06)',
    'duration' => '[1개월]',
    'member' => '3명 (이승환, 김용태, 함형준)',
    'member_detail' => '[팀장]',
    'github' => 'https://github.com/seunghwan94',
    'github_back' => 'https://github.com/seunghwan94/hof-back',
    'github_front' => 'https://github.com/seunghwan94/hof-front',
    'site' => 'https://hof.lshwan.com',
    'description' => '인테리어 소품 판매, 커뮤니티 시공업체 연결 서비스가 결합된 플랫폼 개발 프로젝트',
    'short_desc' => '가구 판매와 커뮤니티, 시공업체 연결 서비스가 통합된 원스톱 인테리어 플랫폼',
    'tech_stack' => '<span class="text-danger">CI/CD</span> [ AWS(EC2, RDS, S3), Github (GitHub Actions), Docker, Discord ], Prometheus / Grafana,
                  <span class="text-danger">Java(Spring boot 3.4.2V)</span>, Security, MariaDB, MongoDB, <span class="text-danger">JPA</span>, MyBatis, Swagger, Jacoco,  Crawling(Selenium),
                  <span class="text-danger">React</span>, Bootstrap, Android Studio',
    'tech_tags' => ['Java', 'Spring Boot', 'React', 'AWS', 'CI/CD', 'Docker'],
    'goals' => [
      '1인 가구를 위한 원룸 인테리어 커뮤니티 사이트를 개발하는 것을 목표',
      '단순한 쇼핑물이 아닌 인테리어 소품 판매, 커뮤니티, 시공업체 연결 서비스가 결합된 플랫폼 ‘가구의 집’을 기획',
      '인테리어 시공업체와 연결하여 맞춤형 시공 서비스를 지원'
    ],
    'planning_links' => [
      ['name' => '정의서', 'url' => 'https://hof-bucket.s3.ap-northeast-2.amazonaws.com/assets/%EC%A0%95%EC%9D%98%EC%84%9C.xlsx'],
      ['name' => 'WBS', 'url' => 'https://hof-bucket.s3.ap-northeast-2.amazonaws.com/assets/WBS.xlsx'],
      ['name' => 'ERD', 'url' => 'https://hof-bucket.s3.ap-northeast-2.amazonaws.com/assets/ERD.xlsx'],
      ['name' => 'Prototype', 'url' => 'https://youtu.be/X1xhnW_Am7w'],
      ['name' => '발표자료(PPT)', 'url' => 'https://magolee.my.canva.site/']
    ],
    'planning' => [
      '<ul class="planning-list">
        <li><strong>메인 페이지 (인트로)</strong>
          <ul>
            <li>풀페이지 영상 재생</li>
            <li>스크롤 시 쇼핑/커뮤니티/앱 다운로드 정보</li>
            <li>하단에서 프로젝트 자료 & 코드 다운로드</li>
          </ul>
        </li>
        <li><strong>쇼핑</strong>
          <ul>
            <li>카테고리 선택 & 검색 기능</li>
            <li>페이징 상품 리스트</li>
            <li>상세 페이지에서 썸네일 클릭 시 메인 이미지 변경</li>
            <li>옵션 선택 후 주문 가능 (수량, 사이즈, 색상)</li>
            <li>고객 리뷰 별점 차트 & 문의 기능 제공</li>
          </ul>
        </li>
        <li><strong>결제 및 장바구니</strong>
          <ul>
            <li>회원제 운영</li>
            <li>로그인 후 결제/장바구니 이용 가능</li>
          </ul>
        </li>
        <li><strong>회원 기능</strong>
          <ul>
            <li>SNS 간편 로그인 지원 (구글)</li>
            <li>회원 CURD</li>
            <li>카카오 주소 API</li>
          </ul>
        </li>
        <li><strong>주문 및 찜 목록</strong>
          <ul>
            <li>구매 내역 확인 + 주문 취소 / 환불 요청 가능</li>
            <li>장바구니: 여러 상품 선택 후 결제 가능</li>
            <li>찜 목록에서 상품 추가 / 해제 가능</li>
          </ul>
        </li>
        <li><strong>커뮤니티 & 인테리어</strong>
          <ul>
            <li>인테리어 사진 공유 (슬라이드 형태)</li>
            <li>게시글 좋아요 & 댓글 지원 (대댓글 포함)</li>
            <li>업체 리뷰 및 정보 제공</li>
          </ul>
        </li>
        <li><strong>관리자 페이지</strong>
          <ul>
            <li>상품 관리: 상품 추가/수정/삭제</li>
            <li>팝업 관리: 팝업 목록 조회 & 설정</li>
            <li>결제 관리: 결제 및 환불 내역 관리</li>
            <li>Q&A 관리: 상품 문의 답변 가능</li>
            <li>금지 단어(FWL) 관리</li>
            <li>사용자 화면 이동 지원</li>
          </ul>
        </li>
        <li><strong>기타 기능</strong>
          <ul>
            <li>WYSIWYG : TINYMCE API</li>
            <li>VISION API (유해 사진 걸러내기 용)</li>
            <li>Android Studio (웹뷰) - 모든 화면 반응형 웹</li>
            <li>Swagger, Jacoco, Prometheus / Grafana</li>
            <li>Crawling (Selenium)</li>
            <li>Security (JWT, OAuth2)</li>
            <li>PortOne (결제)</li>
          </ul>
        </li>
      </ul>'
    ],
    'roles' => [
      '<ul class="roles-list">
        <li><strong>AWS (EC2) & Cloudflare</strong>
          <ul>
            <li>도메인 및 DNS 연결</li>
          </ul>
        </li>
        <li><strong>Nginx Reverse Proxy 사용 (SSH)</strong></li>
        <li><strong>DevOps 구축</strong>
          <ul>
            <li>AWS (EC2, S3, RDS)</li>
            <li>GitHub Action</li>
            <li>Docker</li>
            <li>Discord</li>
          </ul>
          <div class="info-box">
            <strong>파이프라인</strong> (GitHub Actions 기반, <code>Merge Commit</code> 전략)
            <ul>
              <li>GitHub 코드 푸시</li>
              <li>GitHub Actions 실행 (백엔드/프론트엔드 빌드 및 테스트)</li>
              <li>Docker 이미지 빌드 & Docker Hub 푸시</li>
              <li>AWS 서버에서 최신 Docker 이미지 Pull & 컨테이너 재시작</li>
              <li>배포 완료 후 Discord 알림 전송</li>
            </ul>
          </div>
        </li>
        <li><strong>모니터링 및 로깅</strong>
          <ul>
            <li>Prometheus / Grafana (Docker 기반, 서비스 상태 모니터링 및 로그 분석)</li>
          </ul>
        </li>
        <li><strong>테스트 및 문서화</strong>
          <ul>
            <li>Swagger (API 문서 자동화)</li>
            <li>JaCoCo (코드 커버리지 측정 및 테스트 리포트 생성)</li>
          </ul>
        </li>
        <li><strong>메인 화면 전체적인 기능</strong></li>
        <li><strong>PORTONE</strong> (아임포트 결제 시스템 연동)</li>
        <li><strong>웹 크롤링</strong> (Selenium 활용)</li>
      </ul>'
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
  [
    'title' => 'The-k (Team project)',
    'period' => '(2024.10.29 ~ 2024.11.29)',
    'duration' => '[1개월]',
    'member' => '3명 (이승환, 이상원, 김한민)',
    'member_detail' => '[팀원]',
    'github' => 'https://github.com/seunghwan94/semi-theK',
    'description' => 'K-컬쳐 관광객 커뮤니티(정보) 플랫폼 개발 프로젝트',
    'short_desc' => '한국 문화 관광객을 위한 정보 공유 및 커뮤니티 사이트',
    'tech_stack' => 'Java, JSP, Servlet, MariaDB, MyBatis, AWS, Tomcat',
    'tech_tags' => ['Java', 'JSP', 'Servlet', 'MariaDB', 'MyBatis'],
    'goals' => [
      '정보 공유를 위해 사용자들이 참여하고 소통할 수 있는 사이트를 개설',
      '정서적 연결과 유대감을 충족시킬 수 있는 커뮤니티 사이트 목표',
      '트위터(“X”), 블라인드 등을 참고하여 수업에 진행하였던 JSP 및 Servlet 학습 과정을 최대한 반영'
    ],
    'planning_links' => [
      ['name' => '사전기획 캡처', 'url' => '../assets/img/project/thek/theKplan.png'],
      ['name' => 'ERD 캡처', 'url' => '../assets/img/project/thek/erd.png'],
      ['name' => '요구사항정의서 및 WBS 캡처', 'url' => '../assets/img/project/thek/erd.png'],
      ['name' => 'the-k ppt 다운로드', 'url' => '../assets/img/project/thek/the-k.pptx'],
    ],
    'planning' => [
      '<ul class="planning-list">
        <li><strong>회원 기능</strong> : 회원 가입, 로그인, 마이페이지, 회원 탈퇴</li>
        <li><strong>인증 기능</strong> : 이메일 인증</li>
        <li><strong>게시판 관리</strong> : 게시글 CRUD, 검색 기능, 카테고리 관리</li>
        <li><strong>프로모션 관리</strong> : 사업자 프로모션 게시, 관리자 프로모션 승인/거절</li>
        <li><strong>통계 및 관리</strong> : 사용자 통계, 게시판 통계, 프로모션 기부금 관리</li>
      </ul>
      '
    ],
    'roles' => [
      '<ul class="roles-list">
        <li><strong>서버 환경</strong>
          <ul>
            <li>AWS ( EC2 ) & Cloudflare : 도메인 및 DNS 연결</li>
            <li>Maven, Java (JSP, Servlet 사용) </li>
            <li>Tomcat 사용 하여 수동 배포</li>
          </ul>
        </li>
        <li><strong>게시판 관리</strong>
          <ul>
            <li>게시글 CRUD</li>
          </ul>
        </li>
        <li><strong>관리자 페이지 </strong>
          <ul>
            <li>Chart.js 사용하여 통계 표시</li>
            <li>회원 관리 CRUD</li>
            <li>드래그 앤 드랍으로 메인 header 메뉴 관리</li>
            <li>금지단어 CRUD</li>
          </ul>
        </li>'
    ],
    'thumbnail' => '../assets/img/project/thek/thek_main.png',
    'result_images' => [
      '../assets/img/project/thek/image1.png',
      '../assets/img/project/thek/image2.png',
      '../assets/img/project/thek/image3.png',
      '../assets/img/project/thek/image4.png',
      '../assets/img/project/thek/theK.png',
    ]
  ],
  [
    'title' => 'GeminiCook (Gemini API 개발자 대회 제출)',
    'period' => '(2024.08.01 ~ 2024.12)',
    'duration' => '[2주]',
    'member' => '1명 (이승환)',
    'member_detail' => '[본인]',
    'github' => 'https://github.com/seunghwan94/Gemini_cook.git',
    'site' => 'https://youtu.be/FLRkyRzsFpE',
    'description' => 'Gemini API를 활용해 사용자의 취향과 재료를 분석하여 레시피를 자동으로 추천해주는 프로그램',
    'short_desc' => 'Gemini API 기반의 개인 맞춤형 레시피 추천 앱',
    'tech_stack' => 'Python, Streamlit, Gemini API, Google Search Engine, PyInstaller',
    'tech_tags' => ['Python', 'Gemini API', 'Streamlit'],
    'goals' => [
      'Gemini API 활용 경험 및 사용자 편의 기능 구현',
      '개인의 재료 기반 맞춤형 레시피 제공'
    ],
    'planning' => [
      '<ul class="planning-list">
        <li><strong>API 연동</strong> : Gemini, Google Search, Google API</li>
        <li><strong>Streamlit</strong> : 화면 구성</li>
        <li><strong>진행 구성</strong>
          <ul>
            <li>좋아하는 요리, 냉장고에 있는 요리 입력</li>
            <li>gemini 이용하여 요리 리스트 표출</li>
            <li>이미지 api key를 입력한 경우 이미지도 같이 표출</li>
            <li>요리를 선택 했을시 레시피 gemini로 한번 더 요청하여 화면에 표출</li>
          </ul>
        <li>pyinstaller 사용하여 exe 파일로 배포</li>
      </ul>'
    ],
    'thumbnail' => '../assets/img/project/geminicook/main.png',
    'result_images' => [
      '../assets/img/project/geminicook/prod1.png',
      '../assets/img/project/geminicook/prod2.png',
      '../assets/img/project/geminicook/prod3.png'
    ]
  ],
  [
      'title' => 'm/place (r/place 모방 프로젝트)',
      'period' => '(2024.07.01 ~ 2024.07.25)',
      'duration' => '[2주]',
      'member' => '1명 (이승환)',
      'member_detail' => '[본인]',
      'github' => 'https://github.com/seunghwan94/node-vue-mplace',
      'site' => 'https://www.youtube.com/shorts/Rj8UQSbKMVA',
      'description' => 'Reddit r/place 이벤트를 모방한 픽셀 드로잉 협업 플랫폼',
      'short_desc' => 'Vue 기반 픽셀 협업 보드, 도메인 연결 후 실제 운영',
      'tech_stack' => 'Node.js, Vue.js, Socket.io, MariaDB, Docker, Nginx, CentOS, FTP',
      'tech_tags' => ['Node.js', 'Vue.js', 'Docker', 'CentOS', 'Socket.io'],
      'goals' => [
        '다수의 사용자 간 실시간 픽셀 협업 서비스 구현',
        '도메인 연결 및 서버 운영 경험 (로컬 배포)'
      ],
      'planning' => [
        '<ul class="planning-list">
          <li>
            <strong>서버 설정</strong>
            <ul>
              <li>CentOS 7 설치: 서버 환경 구축</li>
              <li>필수 소프트웨어 설치
                <ul>
                  <li>FTP : 파일 전송을 위한 FTP 서버 설정</li>
                  <li>MariaDB : 데이터베이스 설치</li>
                  <li>Node.js 설치</li>
                  <li>GitHub : 소스 코드 버전 관리</li>
                  <li>Firewall : 보안을 위한 방화벽 설정</li>
                  <li>Nginx : 웹 서버 및 리버스 프록시</li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <strong>BackEnd</strong>
            <ul>
              <li>사용한 라이브러리
                <ul>
                  <li>Express: 웹 애플리케이션 프레임워크</li>
                  <li>Cors: 교차 출처 리소스 공유 설정</li>
                  <li>Socket.io: 실시간 양방향 통신을 위한 라이브러리</li>
                  <li>mysql: MySQL 데이터베이스와의 상호 작용을 위한 라이브러리</li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <strong>FrontEnd</strong>
            <ul>
              <li>Vue.js 사용
                <ul>
                  <li>프론트엔드 개발에 Vue.js 프레임워크 사용</li>
                  <li>배포를 위해 "vue run build" 명령어를 사용하여 프로젝트 빌드</li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <strong>포트포워딩</strong>
            <ul>
              <li>외부 접근을 위한 포트포워딩 설정
                <ul>
                  <li>서버에 외부 IP로 접근할 수 있도록 포트포워딩 설정</li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <strong>도메인 연결</strong>
            <ul>
              <li>도메인 구매 및 연결
                <ul>
                  <li>가비아에서 도메인 구매 후 서버와 도메인을 연결하여 접근 가능하게 설정</li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>'
      ],

      'thumbnail' => '../assets/img/project/mplace/main.png',
      'result_images' => [
        '../assets/img/project/mplace/main.png'
      ]
    ],
    [
      'title' => 'Stock Alphago (주식 자동 매매 시스템)',
      'period' => '(2024.08 ~ 2024.10)',
      'duration' => '[2개월]',
      'member' => '5명 (이승환, 백건우, 이세연, 최지웅, 이주윤)',
      'member_detail' => '[팀장]',
      'site' => '../assets/img/project/stock/stock.mp4',
      'description' => '강화학습 및 대신증권 API를 이용한 자동 매매 시스템 구축',
      'short_desc' => 'AI 강화학습 기반 자동 주식 매매 시스템',
      'tech_stack' => 'Python, GCP, Docker, Selenium, LSTM, Transformer, 대신증권 API, MariaDB',
      'tech_tags' => ['Python', 'GCP', 'AI', '강화학습', 'Docker'],
      'goals' => [
        '실제 데이터를 기반으로 자동 매매 AI 학습 및 실거래 시뮬레이션',
        '강화학습 기법 적용으로 판단력 있는 트레이딩 AI 개발',
        '대신증권 API, ML/DL, 강화학습을 이용한 주식 자동 매매 시스템 생성',
        '프로젝트 목표 : 1억원의 모의투자 → 2% 수익률 달성'
      ],
      'planning' => [
        '<ul class="planning-list">
          <li>
            <strong>GCP 환경 구축</strong>
            <ul>
              <li>GCP 활용 VM 인스턴스 구축
                <ul>
                  <li>CentOS에 SSH 연결</li>
                  <li>MariaDB 설치</li>
                  <li>HeidiSQL 설치</li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <strong>데이터 수집</strong>
            <ul>
              <li>Selenium을 이용한 한국증권거래소 데이터 크롤링</li>
              <li>대신증권 API를 이용한 코스피200 분단위, 일단위 데이터 크롤링</li>
            </ul>
          </li>
          <li>
            <strong>딥러닝 모델 생성</strong>
            <ul>
              <li>GPU 설치</li>
              <li>LSTM 적용 - 카카오</li>
              <li>Attention & BatchNormalization 적용 - 카카오</li>
              <li>Transformer - 현대모비스</li>
            </ul>
          </li>
          <li>
            <strong>강화학습 적용</strong>
            <ul>
              <li>주식투자를 어떠한 환경에서 매수(buy), 매도(sell), 관망(hold)할지 강화학습에 적용</li>
            </ul>
          </li>
          <li>
            <strong>대신증권 API 연결</strong>
            <ul>
              <li>대신증권 API 이용 → MariaDB에 데이터 수집 → 강화학습 모델 생성 → 대신증권 API 이용 매수, 매도, 홀딩 결정하는 자동 매매 시스템 생성</li>
            </ul>
          </li>
          <li>
            <strong>개선사항</strong>
            <ul>
              <li>데이터의 양
                <ul>
                  <li>속도문제로 분단위 2년치 데이터 → 현대모비스 1개월, 2개월, 3개월 모델 생성 → 수익률 비교</li>
                </ul>
              </li>
              <li>강화학습
                <ul>
                  <li>처리속도 문제로 A3C 모델 → A2C 모델</li>
                </ul>
              </li>
              <li>대신증권 API 연결
                <ul>
                  <li>주가 상승 확률과 무관하게 동일한 주식의 개수 매수 → 주가 상승 확률이 높을 때 50주 매수, 주가 상승 확률이 낮을 때 10주 매수</li>
                </ul>
              </li>
              <li>Docker 사용</li>
              <li>CentOS 및 FTP, MySQL, Node 설치 </li>
            </ul>
          </li>
        </ul>'
      ],
      'roles' => [
        '<ul class="roles-list">
          <li><strong>GCP VM 환경 구성 및 DB 설치</strong></li>
          <li><strong>Selenium으로 증권 데이터 크롤링</strong></li>
          <li><strong>LSTM, Attention, Transformer 기반 모델 개발</strong></li>
          <li><strong>대신증권 API 연동 자동 매매 로직 구현</strong></li>
        </ul>'
      ],
      'thumbnail' => '../assets/img/project/stock/main.png',
      'result_images' => [
        '../assets/img/project/stock/main.png'
      ]
    ]
];
?>