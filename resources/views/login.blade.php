<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sedayu Dharma Group - Login</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-stone-800 font-mono">
    <div class="w-screen h-screen flex items-center">
        <div class="border-stone-500 border w-fit h-fit p-8 m-auto rounded">
            <form action="/dashboard" method="post">
                @csrf
                <input class="rounded-sm p-2 block mb-3 w-full" type="text" name="username" placeholder="Username">
                <input class="rounded-sm p-2 block mb-3 w-full" type="password" name="password" placeholder="Password">
                <button class="bg-stone-500 hover:bg-stone-400 rounded-sm p-2 w-full" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
