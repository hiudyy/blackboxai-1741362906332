<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Site de Recompensas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <p>Bem-vindo ao seu painel de controle!</p>
    </header>
    <main>
        <section>
            <h2>Seu Saldo</h2>
            <p id="coinBalance">0 coins</p>
            <h2>Tarefas Completadas</h2>
            <p id="tasksCompleted">0</p>
            <h2>Pessoas Convidadas</h2>
            <p id="referrals">0</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 - <span id="currentYear"></span> Todos os direitos reservados para Hiudy</p>
    </footer>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>
