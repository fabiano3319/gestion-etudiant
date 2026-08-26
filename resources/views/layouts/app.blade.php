<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Étudiants</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f4; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #333; color: #fff; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 4px; color: #fff; }
        .btn-primary { background: #007bff; }
        .btn-warning { background: #ffc107; color: #000; }
        .btn-danger { background: #dc3545; border: none; cursor: pointer; }
        .alert { padding: 10px; background: #d4edda; margin-bottom: 15px; border-radius: 4px; }
        form input, form label { display: block; margin-bottom: 10px; width: 100%; padding: 6px; }
    </style>
</head>
<body>
    <h1>Gestion des Étudiants</h1>
    @yield('content')
</body>
</html>