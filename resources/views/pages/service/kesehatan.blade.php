@extends('layouts.app')

@section('title', 'Layanan Kesehatan')

@section('content')
<x-service.hero current="Kesehatan" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-8 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900">
        <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&w=1300&q=80" alt="Layanan kesehatan warga" class="h-[420px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-6 left-6 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Kesehatan</span>
            <h2 class="mt-3 text-3xl font-black">Layanan Kesehatan Warga</h2>
            <p class="mt-2 text-sm text-slate-100">Posyandu, pendampingan, dan edukasi kesehatan desa.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Layanan kesehatan di Desa Ngrimbi mencakup kegiatan rutin posyandu balita dan lansia, layanan kesehatan dasar di poskesdes, serta pendampingan kepesertaan BPJS Kesehatan bagi warga.
    </p>

    <div class="mx-auto mt-8 grid max-w-5xl gap-8 md:grid-cols-2">
        <div>
            <h3 class="mb-4 text-xl font-black text-[#1a2586]">Jenis Layanan</h3>
            <div class="space-y-4">
                @foreach (['Posyandu balita & imunisasi', 'Posyandu lansia', 'Pemeriksaan kesehatan dasar di poskesdes', 'Pendampingan pendaftaran BPJS Kesehatan', 'Penyuluhan kesehatan & gizi'] as $item)
                    <div class="rounded-[18px] bg-white px-6 py-4 text-sm font-bold text-amber-700">{{ $item }}</div>
                @endforeach
            </div>
        </div>
        <div>
            <h3 class="mb-4 text-xl font-black text-[#1a2586]">Jadwal Kegiatan</h3>
            <div class="space-y-4">
                @foreach (['Posyandu balita - setiap hari kerja', 'Posyandu lansia - setiap hari kerja', 'Layanan poskesdes - setiap hari kerja', 'Kunjungan kader desa - sesuai jadwal'] as $item)
                    <div class="rounded-[18px] bg-white px-6 py-4 text-sm font-semibold text-slate-500">{{ $loop->iteration }}. {{ $item }}</div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mx-auto mt-20 max-w-5xl rounded-[18px] bg-white p-8">
        <h3 class="font-black text-amber-700">Lokasi</h3>
        <p class="mt-2 text-sm font-semibold text-slate-500">Poskesdes / Balai Dusun setempat.</p>
        <h3 class="mt-5 font-black text-amber-700">Kontak Bidan/Kader</h3>
        <p class="mt-2 text-sm font-semibold text-slate-500">Hubungi perangkat wilayah atau kader posyandu setempat.</p>
    </div>
</section>
@endsection
