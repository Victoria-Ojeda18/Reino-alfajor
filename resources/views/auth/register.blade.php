<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Club del Alfajor</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff3e0; padding: 50px; }
        .card { max-width: 500px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .btn { background: #e67e22; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .btn:hover { background: #d35400; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 5px; }
        .error { color: red; font-size: 0.9em; }
        a { color: #e67e22; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h2>¡Asociate al Club del Alfajor! 🍪</h2>

        @if ($errors->any())
            <div style="color: red; margin-bottom: 15px;">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if (session('success'))
            <div style="color: green; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña (mínimo 8 caracteres)</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="acepta_directrices" required>
                    Acepto las <a href="/directrices" target="_blank">directrices del Club</a> y quiero recibir alfajores mensuales.
                </label>
            </div>
            <button type="submit" class="btn">Registrarme y asociarme</button>
        </form>

        <p style="margin-top: 20px;">
            ¿Ya tenés cuenta? <a href="{{ route('login') }}">Iniciá sesión aquí</a>
        </p>
    </div>
</body>
</html>