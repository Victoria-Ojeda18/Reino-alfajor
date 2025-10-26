<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nuevo Pedido</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h2>¡Nuevo pedido recibido! 🍪</h2>
    <p><strong>Usuario:</strong> {{ $pedido->user->name }} ({{ $pedido->user->email }})</p>
    <p><strong>Alfajor:</strong> {{ $pedido->tipo_alfajor }}</p>
    <p><strong>Cantidad:</strong> {{ $pedido->cantidad }}</p>
    <p><strong>Fecha:</strong> {{ $pedido->created_at->format('d/m/Y H:i') }}</p>
</body>
</html>