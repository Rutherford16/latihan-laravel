@extends('layouts.head')
@section('body')
<body class="bg-stone-800 font-mono">
    <div class="w-screen h-screen flex items-center">
        <div class="border-stone-500 border w-fit h-fit p-8 m-auto rounded">
            <form action="/login" method="post">
                @csrf
                <input class="rounded-sm p-2 block mb-3 w-full" type="text" name="email" placeholder="Email" autofocus>
                <input class="rounded-sm p-2 block mb-3 w-full" type="password" name="password" placeholder="Password">
                <button class="bg-stone-500 hover:bg-stone-400 rounded-sm p-2 w-full" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
@endsection