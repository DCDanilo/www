<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

use App\controllers\UserController;

// public/index.php

// Recuperiamo l'URL pulita (es. "prodotti/scarpe")
$url = $_GET['url'] ?? 'home';

// Dividiamo l'URL in pezzi usando lo slash /
$segments = explode('/', rtrim($url, '/'));

// $segments[0] sarà il Controller (es: "prodotti")
// $segments[1] sarà l'Azione o l'ID (es: "scarpe")

echo "Stai cercando di accedere a: " . $segments[0];