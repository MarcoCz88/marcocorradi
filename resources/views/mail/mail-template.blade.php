<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Template</title>
</head>
<body>
    <h1>Hai ricevuto una mail:</h1>
    <p>Nome:{{ $messageContent ['name']}}</p>
    <p>Email:{{ $messageContent ['email']}}</p>
    <p>Messaggio:{{ $messageContent ['message']}}</p>
    
</body>
</html>