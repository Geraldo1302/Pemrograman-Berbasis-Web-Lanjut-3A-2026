@extends('layouts.app')

@section('title', 'Detail Buku - Perpustakaan Digital')

@section('content')

<section class="detail-section">

    <div class="container">

        @if ($detailBuku)

            <a
                href="{{ route('buku.index') }}"
                class="back-button"
            >
                ← Kembali ke Daftar Buku
            </a>


            <div class="detail-card">

                <div class="detail-cover">

                    <div class="detail-cover-inner">

                        <span>BOOK</span>

                        <h2>
                            {{ $detailBuku['judul'] }}
                        </h2>

                        <p>
                            {{ $detailBuku['kategori'] }}
                        </p>

                    </div>

                </div>


                <div class="detail-content">

                    <span class="detail-category">
                        {{ $detailBuku['kategori'] }}
                    </span>

                    <h1>
                        {{ $detailBuku['judul'] }}
                    </h1>

                    <div class="detail-info">

                        <div class="info-item">
                            <span>Penulis</span>
                            <strong>
                                {{ $detailBuku['penulis'] }}
                            </strong>
                        </div>

                        <div class="info-item">
                            <span>Tahun Terbit</span>
                            <strong>
                                {{ $detailBuku['tahun'] }}
                            </strong>
                        </div>

                        <div class="info-item">
                            <span>ID Buku</span>
                            <strong>
                                #{{ $detailBuku['id'] }}
                            </strong>
                        </div>

                    </div>


                    <div class="detail-description">

                        <h3>Deskripsi Buku</h3>

                        <p>
                            {{ $detailBuku['deskripsi'] }}
                        </p>

                    </div>


                    <a
                        href="{{ route('buku.index') }}"
                        class="btn btn-primary"
                    >
                        Lihat Buku Lainnya
                    </a>

                </div>

            </div>

        @else

            <div class="not-found">

                <div class="not-found-icon">
                    ?
                </div>

                <h2>Buku Tidak Ditemukan</h2>

                <p>
                    Maaf, buku yang kamu cari tidak tersedia
                    dalam koleksi perpustakaan.
                </p>

                <a
                    href="{{ route('buku.index') }}"
                    class="btn btn-primary"
                >
                    Kembali ke Daftar Buku
                </a>

            </div>

        @endif

    </div>

</section>

@endsection