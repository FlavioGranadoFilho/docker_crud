<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Novo Show</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <br><br><br>
    <div style="width: 50%; margin: 0 auto">
    <h2>NOVO SHOW</h2>
        <form class="form-new" method="POST" action="{{ route('store') }}">
            @csrf
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" placeholder="Nome do evento.." value="Insira o titulo do evento...">

            <label for="location">Localização</label>
            <select id="location" name="location">
            <option value="Copacabana Beach, Rio de Janeiro">Praia de Copacabana, RJ</option>
            <option value="Praia Grande, São Paulo">Praia Grande, SP</option>
            </select>

            <label for="day">Dia da Semana</label>
            <select id="day" name="day">
            <option value="Segunda">Segunda</option>
            <option value="Terca">Terça</option>
            <option value="Quarta">Quarta</option>
            <option value="Quinta">Quinta</option>
            <option value="Sexta">Sexta</option>
            <option value="Sabado">Sábado</option>
            <option value="Domingo">Domingo</option>
            </select>

            <label for="hour">Hora</label>
            <select id="hour" name="hour">
            <option value="15:30 - 19:30">15:30 - 19:30</option>
            <option value="09:00 - 22:00">09:00 - 22:00</option>
            <option value="10:00 - 14:00">10:00 - 14:00</option>
            <option value="12:00 - 16:00">12:00 - 16:00</option>
            </select>

        
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>