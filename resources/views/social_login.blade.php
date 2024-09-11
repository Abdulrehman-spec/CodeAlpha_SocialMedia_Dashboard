<!DOCTYPE html>
<html>
<head>
    <title>Social Dashboard Login </title>
    <link rel="stylesheet" href="{{ asset('/css/social_login.css') }}">
</head>
<body>
<div class="container">
        <h1>Login with Social Media</h1>
        <div class="buttons">
            <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-facebook">Facebook</a>
            <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-google">Google</a>
            <a href="{{ route('social.redirect', ['provider' => 'github']) }}" class="btn btn-github">GitHub</a>
            <a href="{{ route('social.redirect', ['provider' => 'instagram']) }}" class="btn btn-instagram">Instagram</a>
        </div>
    </div>
    
</html>
