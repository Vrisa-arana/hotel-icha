@extends('layout')

@section('judul', 'Hotel')

@section('konten')
<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Hotel</p>
        <p class="subtitle">Informasi Hotel</p>
    </div>
</section>

<section class="section has-background-primary-soft has-text-primary-soft-invert">
    @foreach ($data as $item)
    <div class="card">
        <div class="card-content">
            <div class="content">
                {{ $item->nama_hotel }}
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
