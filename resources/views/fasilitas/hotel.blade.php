@extends('layout')

@section('judul', 'Hotel ' . $kota->nama_hotel)

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Hotel</p>
        <p class="subtitle"> Fasilitas: {{ $kota->nama_fasilitas }}</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_hotel }}">
            </figure>
        </div>
        <div class="card-content">
            <div class="content">
                <h2>{{ $item->nama_hotel }}</h2>
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
