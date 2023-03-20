<?php
$menu = [
    'home' => [
        'name' => 'Domov',
        'path' => 'index.php',
    ],
    'portfolio' => [
        'name' => 'Portfólio',
        'path' => 'portfolio.php',
    ],
    'qna' => [
        'name' => 'Q&A',
        'path' => 'qna.php',
    ],
    'kontakt' => [
        'name' => 'Kontakt',
        'path' => 'kontakt.php',
    ]
];

$file = fopen('headerMenu.csv', 'w');
foreach ($menu as $hodnota) {
    fputcsv($file, $hodnota);
}
fclose($file);

?>