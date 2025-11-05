<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD Futebol</title>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD Futebol</title>
    <style>
        body { background: #f8f9fa; font-family: Arial, sans-serif; margin: 0; }
        .navbar { background: #222; color: #fff; padding: 1em; display: flex; justify-content: space-between; }
        .navbar a { color: #fff; text-decoration: none; margin-right: 1em; }
        .container { max-width: 600px; margin: 40px auto; background: #fff; padding: 2em; border-radius: 8px; box-shadow: 0 2px 8px #ccc; text-align: center; }
        .cards { display: flex; gap: 20px; justify-content: center; margin-top: 30px; }
        .card { background: #f1f1f1; padding: 1.5em; border-radius: 6px; width: 150px; }
        .card-title { font-size: 1.2em; margin-bottom: 1em; }
        .btn { display: inline-block; padding: 0.5em 1em; border: none; border-radius: 4px; background: #222; color: #fff; text-decoration: none; }
        .btn-primary { background: #007bff; }
        .btn-success { background: #007bff; }
        .btn-danger { background: #007bff; }
    </style>
</head>
<body>
    <div class="navbar">
        <span><strong>CRUD e Futebol</strong></span>
    </div>
    <div class="container">
        <h1>CRUD e Futebol</h1>
        <p>Times, Jogadores e Partidas.</p>
        <div class="cards">
            <div class="card">
                <div class="card-title">Times</div>
                <a href="times/index.php" class="btn btn-primary">Acessar</a>
            </div>
            <div class="card">
                <div class="card-title">Jogadores</div>
                <a href="jogadores/index.php" class="btn btn-success">Acessar</a>
            </div>
            <div class="card">
                <div class="card-title">Partidas</div>
                <a href="partidas/index.php" class="btn btn-danger">Acessar</a>
            </div>
        </div>
    </div>
</body>
</html>