@extends('layouts.app')

@section('title', 'Layanan Perizinan')

@section('content')
<x-service.hero current="Perizinan" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-8 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=1300&q=80" alt="Layanan perizinan usaha dan bangunan" class="h-[420px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-6 left-6 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Perizinan</span>
            <h2 class="mt-3 text-3xl font-black">Layanan Perizinan Usaha & Bangunan</h2>
            <p class="mt-2 text-sm text-slate-100">Pendampingan pengantar izin untuk warga dan pelaku usaha.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Layanan perizinan Desa Ngrimbi melayani pengurusan dokumen pengantar usaha, bangunan, dan pemanfaatan lahan sebagai kelengkapan awal untuk pengajuan dokumen resmi ke dinas terkait.
    </p>

    <div class="mx-auto mt-8 grid max-w-5xl gap-8 md:grid-cols-2">
        <div>
            <h3 class="mb-4 text-xl font-black text-[#1a2586]">Jenis Layanan</h3>
            <div class="space-y-4">
                @foreach (['Surat pengantar SKU (Surat Keterangan Usaha)', 'Surat pengantar izin mendirikan bangunan (PBG)', 'Surat keterangan tidak sengketa lahan', 'Rekomendasi izin keramaian/hajatan'] as $item)
                    <div class="rounded-[18px] bg-white px-6 py-4 text-sm font-bold text-amber-700">{{ $item }}</div>
                @endforeach
            </div>
        </div>
        <div>
            <h3 class="mb-4 text-xl font-black text-[#1a2586]">Prosedur</h3>
            <div class="space-y-4">
                @foreach (['Ajukan permohonan tertulis ke kantor desa', 'Petugas melakukan pengecekan lapangan bila diperlukan', 'Surat pengantar diterbitkan & ditandatangani kades', 'Lanjutkan proses ke kecamatan/dinas terkait'] as $item)
                    <div class="rounded-[18px] bg-white px-6 py-4 text-sm font-semibold text-slate-500">{{ $loop->iteration }}. {{ $item }}</div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mx-auto mt-20 max-w-5xl rounded-[18px] bg-white p-8">
        <h3 class="font-black text-amber-700">Syarat Umum</h3>
        <p class="mt-2 text-sm font-semibold text-slate-500">Fotokopi KTP pemohon, denah lokasi/usaha, surat pernyataan, dan dokumen pendukung lain.</p>
        <h3 class="mt-5 font-black text-amber-700">Jam & Kontak</h3>
        <p class="mt-2 text-sm font-semibold text-slate-500">Senin-Jumat, 08.00-14.00 WIB - Balai Desa Ngrimbi.</p>
    </div>
</section>
@endsection
