<!-- src/Template/Users/index.ctp -->
<h1>Lista de Usuários</h1>
<link rel="stylesheet" href="/css/csslogin.css">
<head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/csslogin.css">
       
    </head>
<body>
    <div style="width : 100% ; text-align:center; display:flex; justify-content:center;">
        <table>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user['User']['nome'];?></td> <!-- Utiliza h() para evitar XSS -->
                        <td><?php echo $user['User']['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
        
        </table>
    </div>
    <a href="/users/logout">Logout</a>
</body>
