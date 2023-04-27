<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tooplate">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>CRUD SHOWS</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/tooplate-artxibition.css') }}">
    </head>
    <body>

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </div>

    <div class="section-heading">
        <h2>Show Cadastrados</h2>
    </div>
    <div class="coming-events">
        <div class="container">
            <div class="row">
                @forelse ($shows as $show)
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="{{ route('edit', [$show->id]) }}"><img src="assets/images/event-01.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>{{ $show->name }}</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> {{ $show->day }} {{ $show->hour }}</li>
                                <li><i class="fa fa-map-marker"></i> {{ $show->location }}</li>
                            </ul>
                            <div>
                                <form action="{{ route('destroy', [$show->id]) }}" method="POST">
                                <br>
                                <a href="{{ route('edit', [$show->id]) }}" class="btn btn-primary edit-btn">Editar</a>
                                <button class="btn btn-danger edit-btn">Excluir</button>
                                @csrf
                                @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <div class="section-heading">
                    <p>Não existem shows no momento</p>
                </div>
                @endforelse
            </div>
            <div>
                <br>
                <a href="{{ route('create') }}" class="button button2">Cadastrar Novo Show</a>
            </div>
        </div>
    </div>
    </body>
</html>