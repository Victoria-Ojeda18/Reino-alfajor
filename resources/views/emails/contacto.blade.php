<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #8B4513; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #8B4513; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nueva Solicitud de Alfajores</h2>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Nombre:</span> {{ $datos['nombre'] }}
            </div>
            <div class="field">
                <span class="label">Email:</span> {{ $datos['email'] }}
            </div>
            <div class="field">
                <span class="label">Teléfono:</span> {{ $datos['telefono'] }}
            </div>
            <div class="field">
                <span class="label">Tipo de Alfajor:</span> {{ $datos['tipo'] }}
            </div>
            <div class="field">
                <span class="label">Cantidad:</span> {{ $datos['cantidad'] }} unidades
            </div>
            @if($datos['mensaje'])
            <div class="field">
                <span class="label">Mensaje:</span><br>
                {{ $datos['mensaje'] }}
            </div>
            @endif
        </div>
    </div>
</body>
</html>