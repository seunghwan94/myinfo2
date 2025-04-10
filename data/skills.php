<?php
// 기술 스택 데이터
$skills = [
  [
    'name' => 'Java ( Spring )',
    'percentage' => 70
  ],
  [
    'name' => 'Python ( TensorFlow )',
    'percentage' => 75
  ],
  [
    'name' => 'JavaScript & jQuery',
    'percentage' => 80
  ],
  [
    'name' => 'React & Vue.js',
    'percentage' => 65
  ],
  [
    'name' => 'MariaDB & MongoDB',
    'percentage' => 70
  ]
];

$skill_categories = [
  'Backend' => [
      ['name' => 'PHP', 'color' => 'danger'],
      ['name' => 'Java', 'color' => 'success'],
      ['name' => 'Kotlin', 'color' => 'purple'],
      ['name' => 'Node.js', 'color' => 'info'],
      ['name' => 'Python', 'color' => 'danger']
  ],
  'Frontend' => [
      ['name' => 'HTML', 'color' => 'danger'],
      ['name' => 'CSS', 'color' => 'warning'],
      ['name' => 'JavaScript', 'color' => 'success'],
      ['name' => 'React', 'color' => 'info'],
      ['name' => 'Vue.js', 'color' => 'success']
  ],
  'Framework' => [
    ['name' => 'SpringBoot', 'color' => 'success'],
    ['name' => 'JSP/Servlet', 'color' => 'info'],
    ['name' => 'BootStrap', 'color' => 'purple'],
    ['name' => 'CodeIgniter', 'color' => 'dark'],
    ['name' => 'TensorFlow/Keras', 'color' => 'danger'],
    ['name' => 'Flask', 'color' => 'dark'],
    ['name' => 'Express', 'color' => 'dark'],
    ['name' => 'Socket.io', 'color' => 'info']
  ],
  'RDBMS' => [
      ['name' => 'MySQL', 'color' => 'secondary'],
      ['name' => 'MariaDB', 'color' => 'secondary'],
      ['name' => 'MongoDB', 'color' => 'success'],
      ['name' => 'PostgreSQL', 'color' => 'secondary'],
      ['name' => 'Oracle', 'color' => 'secondary']
  ],
  'DevOps' => [
      ['name' => 'AWS', 'color' => 'warning'],
      ['name' => 'GCP', 'color' => 'primary'],
      ['name' => 'DNS(Cloudflare)', 'color' => 'primary'],
      ['name' => 'Swagger', 'color' => 'secondary'],
      ['name' => 'Docker', 'color' => 'info'],
      ['name' => 'GitHub Actions', 'color' => 'dark'],
      ['name' => 'Jacoco', 'color' => 'warning']
  ],
  'AI/ML' => [
      ['name' => '강화학습', 'color' => 'success'],
      ['name' => 'LSTM', 'color' => 'info'],
      ['name' => 'Transformer', 'color' => 'warning'],
      ['name' => 'Attention', 'color' => 'danger'],
      ['name' => 'Gemini API', 'color' => 'primary']
  ],
  'Server OS' => [
      ['name' => 'CentOS(Red Hat)', 'color' => 'danger'],
      ['name' => 'Ubuntu', 'color' => 'danger'],
      ['name' => 'Window', 'color' => 'info']
  ]
];

// 역량 원형 그래프 데이터
$capabilities = [
  'BackEnd' => 80,
  'FrontEnd' => 60, 
  'DataBase' => 70,
];
?>