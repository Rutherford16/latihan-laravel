@extends('layouts.head')
@section('body')
<body class="bg-stone-800 font-mono">
    <div class="w-3/12 h-screen bg-stone-300 inline-block absolute">
        <div class="bg-stone-600 rounded-full w-20 h-20 mt-2 ms-2 inline-block"></div>
        <h2 class="text-2xl ms-1 relative -top-16 left-24 w-2/3">Ronny Hidayat</h2>
        <h3 class="text-md italic -mt-3 ms-1 mb-10 relative -top-16 left-24">Engineer</h3>
        <ul>
            <a href="/beranda">
                <li class="text-xl border-t bg-stone-300 hover:bg-stone-400 border-black p-2 text-center">Beranda</li>
            </a>
            <a href="#">
                <li class="text-xl border-t bg-stone-400 border-black p-2 text-center">Tugas</li>
            </a>
            <a href="#">
                <li class="text-xl border-y bg-stone-400 border-black p-2 text-center">Statistik</li>
            </a>
        </ul>
    </div>
    <div class="text-stone-300 w-9/12 p-3 right-0 inline-block absolute">
        @yield('content')
    </div>
</body>
@endsection