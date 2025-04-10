<?php 
$file = '../assets/data/seunghwan_work_experience.docx';

if (file_exists($file)) {
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename="seunghwan_work_experience.docx"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    http_response_code(404);
    echo "파일을 찾을 수 없습니다.";
}
?>
