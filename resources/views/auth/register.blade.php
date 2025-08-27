<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Crear Cuenta</h2>

        <form method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-600 mb-1">Nombre completo</label>
                <input type="text" name="name" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Correo electrónico</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Contraseña</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600 transition">
                Registrarme
            </button>
        </form>

        <p class="text-sm text-gray-600 text-center mt-6">
            ¿Ya tienes cuenta?
            <a class="text-blue-500 hover:underline">Inicia sesión</a>
        </p>
    </div>
</body>

</html>
