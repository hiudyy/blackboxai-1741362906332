<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin - Site de Recompensas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Painel Admin</h1>
    </header>
    <main>
        <section>
            <h2>Dashboard Admin</h2>
            <p>Visualize as estatísticas dos usuários e ganhos.</p>
        </section>
        <nav>
            <ul>
                <li><a href="#">Gerenciar Usuários</a></li>
                <li><a href="#">Configurações</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </nav>
    </main>
    <footer>
        <p>&copy; 2025 - <span id="currentYear"></span> Todos os direitos reservados para Hiudy</p>
    </footer>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>
