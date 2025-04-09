$(document).ready(function(){
  // 원형 프로그레스바 초기화
  initializeProgressCircles();
  
  // 프로젝트 모달 이벤트
  initializeProjectModals();
});

// 원형 프로그레스바 초기화 함수
function initializeProgressCircles() {
  const containers = $('.container-circle');
  
  const containerData = {
    color: '#6c757d',
    trailColor: '#eee',
    trailWidth: 8,
    duration: 1400,
    easing: 'bounce',
    strokeWidth: 10,
    from: { color: '#dc3545', width: 2 },
    to: { color: '#dc3545', width: 10 },
    // 원 안의 텍스트
    text: {
      autoStyleContainer: false,
    },
    step: function (state, circle) {
      circle.path.setAttribute('stroke', state.color);
      circle.path.setAttribute('stroke-width', state.width);

      const value = Math.round(circle.value() * 100);
      circle.setText(value ? `${value}%` : '');
    },
  };

  containers.each(function(i, e) {
    const value = $(e).data('value');
    const circle = new ProgressBar.Circle(e, containerData);
    
    $(e).css('position', 'relative'); // 부모 컨테이너에 상대 위치 설정
    $(circle.text).css({
      position: 'absolute',
      top: '50%',
      left: '50%',
      transform: 'translate(-50%, -50%)',
      fontFamily: '"Raleway", Helvetica, sans-serif',
      fontSize: '13px',
    });
    
    // 페이지 로드 시 프로그레스바 애니메이션
    circle.animate(value);
  });
}

// 프로젝트 모달 관련 함수
function initializeProjectModals() {
  // 모달이 표시될 때 이벤트
  $('.modal').on('shown.bs.modal', function () {
    // 필요한 경우 캐러셀 재초기화
    $(this).find('.carousel').carousel();
  });
  
  // 모달이 닫힐 때 이벤트
  $('.modal').on('hidden.bs.modal', function () {
    // 비디오가 있다면 일시정지
    $(this).find('video').each(function() {
      this.pause();
    });
  });
}

// 이미지가 로드된 후 레이지 로딩 처리
document.addEventListener('DOMContentLoaded', function() {
  // 레이지 로딩 이미지 처리
  const lazyImages = document.querySelectorAll('img[loading="lazy"]');
  if ('loading' in HTMLImageElement.prototype) {
    // 브라우저가 지원하는 경우 native lazy loading 사용
    lazyImages.forEach(img => {
      img.src = img.dataset.src;
    });
  } else {
    // IntersectionObserver를 통한 레이지 로딩 폴백
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const image = entry.target;
          image.src = image.dataset.src;
          imageObserver.unobserve(image);
        }
      });
    });
    
    lazyImages.forEach(img => {
      imageObserver.observe(img);
    });
  }
});