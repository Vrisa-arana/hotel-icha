@extends('layout')

@section('judul', 'Fasilitas')

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Fasilitas</p>
        <p class="subtitle">Informasi Fasilitas Hotel</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_fasilitas }}">
                </figure>
            </div>
            <div class="card-content">
                <div class="content">
                    <h2>{{ $item->nama_fasilitas }}</h2>
                    <p><i>Hotel: {{ $item->hotel->nama_hotel }}</i></p>
                </div>
            </div>
            <footer class="card-footer">
                <a href="/fasilitas/{{ $item->id }}" class="card-footer-item">
                    Selengkapnya
                </a>
            </footer>
        </div>
    @endforeach

</section>
@endsection
