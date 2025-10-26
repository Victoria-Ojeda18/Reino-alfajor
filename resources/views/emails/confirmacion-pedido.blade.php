<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tu Pedido - Reino Alfajor</title>
</head>
<body style="font-family: Arial, sans-serif; background: #fff8e1; padding: 20px;">
    <h2>¡Hola, {{ $pedido->user->name }}! 🍪</h2>
    <p>Gracias por tu pedido en <strong>Reino Alfajor</strong>.</p>
    <p>Estamos preparando tu pedido:</p>
    <ul>
        <li><strong>Producto:</strong> {{ $pedido->tipo_alfajor }}</li>
        <li><strong>Cantidad:</strong> {{ $pedido->cantidad }}</li>
        <li><strong>Fecha:</strong> {{ $pedido->created_at->format('d/m/Y') }}</li>
    </ul>
    <p>¡Lo recibirás muy pronto! 🎁</p>
    <p>— El equipo de Reino Alfajor</p>
</body>
</html>