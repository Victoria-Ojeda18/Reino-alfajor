<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Club del Alfajor</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 50px; }
        .card { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .btn { background: #6b46c1; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .btn:hover { background: #553c9a; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px; }
        .error { color: red; font-size: 0.9em; }
        a { color: #6b46c1; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Iniciar Sesión</h2>

        @if ($errors->any())
            <div style="color: red; margin-bottom: 15px;">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn">Iniciar Sesión</button>
        </form>

        <p style="margin-top: 20px;">
            ¿No tenés cuenta? <a href="{{ route('register') }}">Regístrate aquí</a>
        </p>
    </div>
</body>
</html>