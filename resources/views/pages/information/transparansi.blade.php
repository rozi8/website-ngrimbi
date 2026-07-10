@extends('layouts.app')

@section('title', 'Transparansi')

@section('content')
<x-information.hero current="Transparansi" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900 shadow-sm">
        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1300&q=80" alt="Transparansi anggaran desa" class="h-[460px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/10 to-transparent"></div>
        <div class="absolute bottom-7 left-7 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Transparansi</span>
            <h2 class="mt-3 text-3xl font-black">Transparansi Anggaran & Dokumen Desa</h2>
            <p class="mt-2 text-sm text-slate-100">Keterbukaan pengelolaan APBDes dan dokumen publik.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Sebagai wujud komitmen keterbukaan informasi publik, Desa Ngrimbi menyajikan ringkasan pengelolaan anggaran (APBDes) serta dokumen pertanggungjawaban yang dapat diakses warga.
    </p>

    <h2 class="mx-auto mt-10 max-w-5xl text-2xl font-black text-[#1a2586]">Ringkasan APBDes</h2>
    <div class="mx-auto mt-6 grid max-w-5xl gap-6 md:grid-cols-3">
        @foreach ([
            ['RP 1.450.000.000,00', 'Total Pendapatan'],
            ['RP 1.390.000.000,00', 'Total Belanja'],
            ['RP 60.000.000,00', 'Sisa Anggaran'],
        ] as $budget)
            <div class="rounded-[18px] bg-white p-7 text-center shadow-sm">
                <h3 class="text-xl font-black text-slate-800">{{ $budget[0] }}</h3>
                <div class="mx-auto mt-4 h-1 w-24 rounded bg-amber-400"></div>
                <p class="mt-4 text-sm font-semibold text-slate-500">{{ $budget[1] }}</p>
            </div>
        @endforeach
    </div>

    <div class="mx-auto mt-8 max-w-5xl space-y-4">
        @foreach ([
            ['Bidang Penyelenggaraan Pemerintahan', '40%'],
            ['Bidang Pembangunan Desa', '55%'],
            ['Bidang Pembinaan Kemasyarakatan', '30%'],
            ['Bidang Pemberdayaan Masyarakat', '20%'],
        ] as $row)
            <div>
                <div class="mb-2 flex justify-between text-sm font-black text-slate-600"><span>{{ $row[0] }}</span><span>{{ $row[1] }}</span></div>
                <div class="h-2 rounded-full bg-slate-200"><div class="h-2 rounded-full bg-amber-400" style="width: {{ $row[1] }}"></div></div>
            </div>
        @endforeach
    </div>

    <h2 class="mx-auto mt-10 max-w-5xl text-2xl font-black text-[#1a2586]">Dokumen Publik</h2>
    <div class="mx-auto mt-6 max-w-5xl space-y-4">
        @foreach (['APBDes Tahun Berjalan', 'Laporan Realisasi Anggaran', 'LKPJ Kepala Desa'] as $doc)
            <article class="flex items-center justify-between rounded-[12px] bg-slate-100 p-5">
                <div class="flex items-center gap-4"><span class="grid h-10 w-10 place-items-center rounded bg-[#1a2586] text-xs font-black text-white">D</span><div><h3 class="font-black text-slate-800">{{ $doc }}</h3><p class="text-xs font-semibold text-slate-400">Dokumen resmi desa</p></div></div>
                <button class="rounded-full bg-blue-200 px-6 py-2 text-xs font-black text-white">Unduh</button>
            </article>
        @endforeach
    </div>
</section>
@endsection
