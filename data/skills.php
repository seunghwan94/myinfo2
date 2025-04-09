<?php
// 기술 스택 데이터
$skills = [
  [
    'name' => 'Java ( Spring )',
    'percentage' => 70
  ],
  [
    'name' => 'PHP ( CodeIgniter )',
    'percentage' => 80
  ],
  [
    'name' => 'Python ( Flask )',
    'percentage' => 65
  ],
  [
    'name' => 'JavaScript & jQuery',
    'percentage' => 80
  ],
  [
    'name' => 'MySQL & PostgreSQL',
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
    ['name' => 'Thymeleaf', 'color' => 'success'],
    ['name' => 'mustache', 'color' => 'danger'],
    ['name' => 'Flask', 'color' => 'dark'],
    ['name' => 'Express', 'color' => 'dark']
  ],
  'RDBMS' => [
      ['name' => 'MySQL', 'color' => 'secondary'],
      ['name' => 'MariaDB', 'color' => 'secondary'],
      ['name' => 'PostgreSQL', 'color' => 'secondary'],
      ['name' => 'Oracle', 'color' => 'secondary'],
      ['name' => 'Tibero', 'color' => 'danger']
  ],
  'DevOps' => [
      ['name' => 'AWS', 'color' => 'warning'],
      ['name' => 'DNS(Cloudflare)', 'color' => 'primary'],
      ['name' => 'Swagger', 'color' => 'secondary'],
      ['name' => 'Docker', 'color' => 'info'],
      ['name' => 'Apache', 'color' => 'danger'],
      ['name' => 'Jacoco', 'color' => 'warning']
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
  'DataBase' => 70
];
?>