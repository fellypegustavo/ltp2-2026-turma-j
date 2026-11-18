<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Principal - Sistema</title>
</head>
<body>
    <header style="background: #f4f4f4; padding: 10px;
    display: flex; justify-content: space-between;
    allign-items: center;">
    <h1>🚀 Painel do Sistema</h1>
    <div>
        Olá, <strong><?= $_SESSION ['usuario_nome'] ?>
        </strong> (Perfil: <em><?= strtoupper($_SESSION['usuario_perfil']) ?></em>) |
        <a href="index.php?controller=login&action=sair"
        style="color: red; font-weight: bold;">Sair</a>
    </div>
  </header>