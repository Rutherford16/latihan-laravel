@extends('layouts.dashboard')

@section('content')
    <table class="table-fixed">
        <thead class="bg-slate-500">
            <th class="px-2">Name</th>
            <th class="px-2">Email</th>
            <th class="px-2">Title</th>
            <th class="px-2">Extension</th>
        </thead>
        <tbody class="bg-slate-500">
            @foreach ($employees as $employee)
                <tr class="odd:bg-white even:bg-slate-300 hover:bg-slate-400">
                    <td class="px-2">{{ $employee['firstName'] }} {{ $employee['lastName'] }}</td>
                    <td class="px-2">{{ $employee['email'] }}</td>
                    <td class="px-2">{{ $employee['jobTitle'] }}</td>
                    <td class="px-2">{{ $employee['extension'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
