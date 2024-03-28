@extends('layouts.app')

@section('title', 'PT')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>PT</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">PSI</h2>
                <p class="section-lead">
                    This page is just an example for you to create your own page.
                </p>
                @foreach ($pt as $item)
                    <div class="card">
                        <div class="card-body">
                            <h5>{{ $item->id_pt }}</h5>
                            <p>{{ $item->Nama_pt }}</p>
                            <p>{{ $item->wilayah }}</p>
                            <p>{{ $item->statuta }}</p>
                            <p>{{ $item->pedoman_akademik }}</p>
                            <p>{{ $item->nama_Rektor }}</p>
                            <p>{{ $item->nama_warek_1 }}</p>
                            <p>{{ $item->nama_warek_2 }}</p>
                            <p>{{ $item->nama_warek_3 }}</p>
                            <p>{{ $item->tgl_berdiri_pt }}</p>
                            <p>{{ $item->tgl_penetapan_akre }}</p>
                            <p>{{ $item->id_prodi }}</p>
                            <p>{{ $item->nama_prodi }}</p>
                            <p>{{ $item->image_pt }}</p>
                            <p>{{ $item->fasilitas_image }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
