<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <!-- Liens vers les fichiers CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles personnalisés */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            height: 100vh; /* Remplace la hauteur */
        }
        .sidebar h2 {
            margin-bottom: 30px;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .sidebar ul {
            padding: 0;
            list-style: none;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            transition: all 0.3s ease;
        }
        .sidebar ul li a:hover {
            background-color: #4e545b;
            border-left: 4px solid #ffc107;
            padding-left: 16px;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #007bff;
        }
        .content p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            @include('admin.layoutsAdmin.aside')
            <div class="col-md-9">
                <!-- Contenu principal -->
                <div class="content">
                    <h2>Tableau de bord</h2>
                    <p>Bienvenue sur votre tableau de bord. Profitez de l'interface conviviale pour gérer votre contenu en toute simplicité.</p>
                    <!-- Ajoutez ici d'autres éléments de votre tableau de bord -->
                </div>
            </div>
        </div>
    </div>

    <!-- Liens vers les fichiers JavaScript de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
