<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background: url('/images/football-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 2rem;
            max-width: 400px;
            margin: 3rem auto;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .login-header h1 {
            color: #333;
            font-size: 2rem;
        }
        .login-header p {
            color: #666;
        }
        .login-header a {
            color: #1d4ed8;
            text-decoration: none;
        }
        .login-header a:hover {
            text-decoration: underline;
        }
        .login-button {
            background: #1d4ed8;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .login-button:hover {
            background: #2563eb;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .form-group input:focus {
            border-color: #1d4ed8;
            outline: none;
        }
        .login-alternative {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 1.5rem 0;
            color: #666;
        }
        .login-alternative::before,
        .login-alternative::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #ccc;
            margin: 0 1rem;
        }
    </style>
</head>
<body>
@include('pages.nav')

<div class="login-container">
    <div class="login-header">
        <h1>Connexion</h1>
        <p>Pas encore de compte ? <a href="">Inscrivez-vous ici</a></p>
    </div>

    <div>
        <button type="button" class="login-button w-full mb-4 flex items-center justify-center gap-2">
            <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                <path d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z" fill="#4285F4"/>
                <path d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z" fill="#34A853"/>
                <path d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z" fill="#FBBC05"/>
                <path d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z" fill="#EB4335"/>
              </svg>            Se connecter avec Google
        </button>

        <div class="login-alternative">Ou</div>

        <form method="POST" action="{{ route('client.login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" required>
            </div>

            <div class="form-group flex items-center justify-between">
                <div>
                    <input type="checkbox" id="remember-me" name="remember-me">
                    <label for="remember-me">Se souvenir de moi</label>
                </div>
                <a href="" class="text-sm text-blue-600 hover:underline">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="login-button w-full">Se connecter</button>
        </form>
    </div>
</div>

</body>
</html>
