@extends('layouts.app')

@section('title', 'Daftar Buku - Perpustakaan Digital')

@section('content')

<section class="page-header">

    <div class="container">

        <span>KOLEKSI PERPUSTAKAAN</span>

        <h2>Daftar Buku</h2>

        <p>
            Jelajahi seluruh koleksi buku yang tersedia
            di perpustakaan digital.
        </p>

    </div>

</section>


<section class="book-section">

    <div class="container">

        <div class="book-section-header">

            <div>
                <h2>Semua Koleksi</h2>

                <p>
                    Menampilkan {{ $buku->count() }} buku
                </p>
            </div>

        </div>


        <div class="book-grid">

            @forelse ($buku as $item)

                <x-book-card
                    :id="$item->id"
                    :judul="$item->judul"
                    :penulis="$item->penulis"
                    :tahun="$item->tahun_terbit"
                    :kategori="$item->kategori->nama"
                />

            @empty

                <p>Belum ada buku yang tersedia.</p>

            @endforelse

        </div>

    </div>

</section>

@endsection