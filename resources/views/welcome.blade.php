@extends('layouts.main')
@section('content')
@section('title', 'HDC Events')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="{{ route('index') }}" method="get">
        @csrf
        <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar Evento...">
    </form>
    <h3>Os melhores eventos você encontra aqui</h3>

    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos proximos dias </p>
        <div id="cards-container" class="row">

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img src="img/seguranca-da-informcão.png">
                        <br>
                        <h2 class="fw-normal">Seguro</h2>
                        <p>Basta preencher as informações, escolher o layout e publicar. Pronto! Site no ar e inscrições disponíveis para venda.</p>
                        <p><a class="btn btn-primary" href="#">Saber Mais &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">

                        <img src="img/Microsoft.png">
                        <h2 class="fw-normal">Fácil</h2>
                        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                        <p><a class="btn btn-primary" href="#">Saber Mais&raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="img/solucoes-open-source.png">
                        <br>
                        <h2 class="fw-normal">Exclusivo</h2>
                        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                        <p><a class="btn btn-primary" href="#">Saber Mais&raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->

                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <div class="container">
                            <div class="row justify-content-center">
                                <h2 class="featurette-heading fw-normal lh-1">NOC 24×7 para gestão<span class="text-muted"> de incidentes de TI</span></h2>
                                <p class="lead">Aumente a disponibilidade do seu ambiente de TI para entregar a melhor experiência para seus clientes e usuários. Nossos especialistas atuam 24 horas por dia para tratar incidentes no exato momento em que eles ocorrem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <br><br><br>
                        <img src="img/interop-noc-24x7-para-gestao.png">
                        </svg>

                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->

            @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <div class="card-date">{{date('d/m/Y', strtotime($event->date) )}}</div>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
            @endforeach

            @if(count($events)==0)
            <p>Não têm eventos disponiveis</p>
            @endif
        </div>
    </div>

    @endsection