<?php
$publicPath = str_replace('\\', '/', dirname(__DIR__));
$projectPath = str_replace('\\', '/', dirname($publicPath));
$documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);

$publicUrl = str_replace($documentRoot, '', $publicPath);
$projectUrl = str_replace($documentRoot, '', $projectPath);

if (session_status() === PHP_SESSION_NONE) session_start();
$titulo = $titulo ?? 'VetCare';
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($titulo) ?> | VetCare</title>
<link rel="stylesheet" href="/vetcare_manutencao_djeniffer/assets/style.css">
</head>
<body>
<header class="topbar">
  <a class="brand" href="/vetcare_manutencao_djeniffer/index.php">🐾 VetCare</a>
  <nav>
    <?php if (!empty($_SESSION['usuario_id'])): ?>
      <a href= "<?php echo $publicUrl; ?>/index.php">Painel</a>
      <a href="<?php echo $publicUrl; ?>/tutores/index.php">Tutores</a>
      <a href="<?php echo $publicUrl; ?>/animais/index.php">Animais</a>
      <a href="<?php echo $publicUrl; ?>/consultas/index.php">Consultas</a>
      <a href="<?php echo $publicUrl; ?>/chamados/index.php">Suporte</a>
      <a href="<?php echo $publicUrl; ?>/logout.php">Sair</a>
    <?php endif; ?>
  </nav>
</header>
<main class="container">
