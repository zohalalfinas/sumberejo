@extends('layouts.apps')

@section('content')
<main>
    <aside>
        <div style="width:50%;" class="container">
            <div class="py-5 text-center">
                <img style="width:10%;" src="{{asset('aznews/assets/img/logo/pemkab.png')}}" alt="" class="d-block mx-auto mb-4">
                <h2>BUMDES</h2>
                <p>introduction about all product BUMDES Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, corporis obcaecati eligendi consequuntur earum autem </p>
                <div class="border-bottom"></div>
            </div>
        </div>
    </aside>
    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                @foreach ($data as $produk)
                <div class="col-md-4 mb-5">
                    <div style="background-color:transparent;border:none;" class="card mb-4 shadow-sm">
                        <div class="panel-body " style="max-height:100px;text-align:center;overflow:hidden;padding:0;">
                            <img  src="{{asset('foto/produk')}}/{{$produk->foto}}" class=" mx-auto d-block mt-2 " alt="Responsive image" width="50%">
                        </div>
                        <div class="card-body">
                            <center>
                                <h4 class="card-text">{{$produk->judul}}</h4>
                                <a href="{{url('produk/detail' , $produk->id_produk)}}">
                                    <button type="button" class="btn-custom">Detail</button>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection