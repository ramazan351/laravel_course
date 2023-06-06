<!DOCTYPE html>
<html lang="tr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page- View </title>
</head>

<body>
    <h1>Login Page</h1>
    <?= $name ?? 'fdgd' ?>
    <br>
    <?= $surname ?? 'asadas' ?>
    <br>
    {{ $name ?? 'dffsdfs' }}
    <?php if (1 > 0) {
        echo '1 greater than 0';
    } ?>
    <br>
    @if (1 > 0)
        1 greater than 0
    @else
        0 greater than 1
    @endif
    <br>
    @isset($name)
        $name isminde bir değişken var ve değeri: {{ $name }}. olmasaydı görünmezdi.
    @endisset
    @include('contact', ['name' => 'Mehmet', 'surname' => 'Kara'])
    <br>
    @foreach ($names as $name)
        <li>{{ $loop->iteration }} {{ $name }} @if ($loop->first)
                it is First,
            @elseif ($loop->last)
                it is Last.
            @endif
        </li>
    @endforeach
    @for ($i = 0; ; $i++)
        @if ($i > 5)
        @break
    @endif
    <li>{{ $i }}</li>
    {!! $blogData !!}
@endfor
</body>

</html>
