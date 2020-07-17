@extends('layouts.apps')

@section('content')
<main>
    <div class="container  mt-5 mb-5 ">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @php $i=1; @endphp
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            @foreach ($data as $item)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}"></li>
            @php $i++; @endphp
            @endforeach
        </ol>
        <div class="carousel-inner">
            @php $j = 0 ;@endphp
            @foreach ($data as $p)
            @if( $j === 0 )
            <div class="carousel-item active">
            <img src="{{asset('foto/event')}}/{{$p->foto}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a href="">
                    <h5 style="font-size:300%;color:white;">Event</h5>
                </a>
                <p style="color:white;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
            </div>
            @endif
            <div class="carousel-item">
            <img src="{{asset('foto/event')}}/{{$p->foto}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="font-size:300%;color:white;">Event</h5>
                <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </div>      
            @php $j++; @endphp                    
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div> 
        <section>
            <div class="container">
                <div class="row col-md-12">
                    @foreach ($data as $event)                   
                    <div class="card mt-5 ml-1 mb-3" style="width: 18rem; display:block;">
                        <img src="{{asset('foto/event')}}/{{$event->foto}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->nama}}</h5>
                            <div class="row">
                                <div class="col">
                                    <p>Tanggal</p>
                                </div>
                                <div class="col-sm-7">
                                    <p>{{$event->tgl}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>waktu :</p>
                                </div>
                                <div class="col-sm-7">
                                    <p>{{$event->waktu}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>lokasi :</p>
                                </div>
                                <div class="col-sm-7">
                                    <p>{{$event->lokasi}}</p>
                                </div>
                            </div>
                             <a href="{{url('event/detail')}}/{{$event->id_event}}" class="btn btn-primary">Lihat selengkapnya</a>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</main>

@endsection