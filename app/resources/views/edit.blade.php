<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar {{ $show->name }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <br><br><br>
    <div style="width: 50%; margin: 0 auto">
        <h2>EDITAR</h2>
        <form class="form-new" action="{{ route('update', [$show->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" placeholder="Nome do evento.." value="{{ $show->name }}">

            <label for="location">Localização</label>
            <select id="location" name="location">
            <option value="Copacabana Beach, Rio de Janeiro" @if ($show->location == 'Copacabana Beach, Rio de Janeiro') selected @endif >Praia de Copacabana, RJ</option>
            <option value="Praia Grande, São Paulo" @if ($show->location == 'Praia Grande, São Paulo') selected @endif >Praia Grande, SP</option>
            </select>

            <label for="day">Dia da Semana</label>
            <select id="day" name="day">
            <option value="Segunda" @if ($show->day == 'Segunda') selected @endif >Segunda</option>
            <option value="Terca" @if ($show->day == 'Terca') selected @endif>Terça</option>
            <option value="Quarta" @if ($show->day == 'Quarta') selected @endif>Quarta</option>
            <option value="Quinta" @if ($show->day == 'Quinta') selected @endif>Quinta</option>
            <option value="Sexta" @if ($show->day == 'Sexta') selected @endif>Sexta</option>
            <option value="Sabado" @if ($show->day == 'Sabado') selected @endif>Sábado</option>
            <option value="Domingo" @if ($show->day == 'Domingo') selected @endif>Domingo</option>
            </select>

            <label for="hour">Hora</label>
            <select id="hour" name="hour">
            <option value="15:30 - 19:30" @if ($show->hour == '15:30 - 19:30') selected @endif>15:30 - 19:30</option>
            <option value="09:00 - 22:00" @if ($show->hour == '09:00 - 22:00') selected @endif>09:00 - 22:00</option>
            <option value="10:00 - 14:00" @if ($show->hour == '10:00 - 14:00') selected @endif>10:00 - 14:00</option>
            <option value="12:00 - 16:00" @if ($show->hour == '12:00 - 16:00') selected @endif>12:00 - 16:00</option>
            </select>

        
            <input type="submit" value="Salvar Edições">
        </form>
    </div>
</body>
</html>