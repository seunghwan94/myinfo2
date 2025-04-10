<?php 
$file = '../assets/data/더좋은아카데미_수료증(구로).pdf';

if (file_exists($file)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="seunghwan.pdf"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    http_response_code(404);
    echo "파일을 찾을 수 없습니다.";
}
?>
