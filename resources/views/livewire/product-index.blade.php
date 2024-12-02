<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container">
        <div class="row mb-2">
            <div class="col">
                <nav aria-label="breadcrumb mb-3">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">List Jersey</li>
                    </ol>
                  </nav>
            </div>
        </div>
        <h2>List<strong>Jersey</strong></h2>
        <section class="pilih-product mt-5 mb-5">
            <h3><strong>Products</strong></h3>
            <div class="row mt-4">
                @foreach ($products as $product)
                <div class="col-md-3 mb-3">
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
</div>
