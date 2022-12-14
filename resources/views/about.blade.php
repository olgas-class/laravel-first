<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('main') }}">Home</a>
    <h1>{{ $pageTitle }}</h1>
    <p>{{ $description }}</p>
    @php
        $i = 0;
    @endphp

    @while ($i < 5)
        {{ $i }}

        @php
            $i++;
        @endphp
    @endwhile
    <h2>Students</h2>
    <ul>
        @foreach ($students as $student)
            @if ($loop->first)
                <li>Inizio della lista</li>
            @endif
            <li> {{ $student }} </li>
        @endforeach
    </ul>
    <h2>Teachers</h2>
    <ul>
        @if (count($teachers) > 0)
            @foreach ($teachers as $teacher)
                <li>{{ $teacher }}</li>
            @endforeach
        @else
            <p>Non ci sono ancora inseegnanti assegnati a questa classe</p>
        @endif

    </ul>

</body>

</html>
