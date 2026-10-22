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
                    Menampilkan {{ count($buku) }} buku
                </p>
            </div>

        </div>


        <div class="book-grid">

            @foreach ($buku as $item)

                <x-book-card
                    :id="$item['id']"
                    :judul="$item['judul']"
                    :penulis="$item['penulis']"
                    :tahun="$item['tahun']"
                    :kategori="$item['kategori']"
                >

                    <x-slot:description>
                        {{ $item['deskripsi'] }}
                    </x-slot:description>

                </x-book-card>

            @endforeach

        </div>

    </div>

</section>

@endsection 