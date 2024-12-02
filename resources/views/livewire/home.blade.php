<div class="container">
    {{-- BANNER --}}
    <div class="banner">
        <img src="{{ asset('assets/slider/slider1.png') }}" alt="slider">
    </div>

    {{-- PILIH LIGA --}}
    <section class="pilih-liga mt-4">
        <h3><strong>Pilih Liga</strong></h3>
        <div class="row mt-4">
            @foreach ($ligas as $liga)
            <div class="col">
                <div class="card shadow mt-4">
                    <div class="card-body text-center">
                        <img class="img-fluid" src="{{ url('assets/liga/'.$liga->gambar) }}" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{--PRODUCT --}}
    <section class="pilih-product mt-5 mb-5">
        <h3><strong>Products</strong></h3>
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card mt-4">
                    <div class="card-body text-center">
                        <img class="img-fluid" src="{{ url('assets/jersey/'.$product->gambar) }}" alt="">
                        <div class="row">
                            <div class="col-md-12">
                                <h5><strong>{{ $product->name }}</strong></h5>
                                <h5><strong>Rp. </strong>{{ number_format($product->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <a href="#" class="btn btn-dark btn-small">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
