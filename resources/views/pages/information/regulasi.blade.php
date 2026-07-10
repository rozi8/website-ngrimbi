@extends('layouts.app')

@section('title', 'Regulasi')

@section('content')
<x-information.hero current="Regulasi" />

<section class="mx-auto max-w-7xl px-4 pb-40 pt-10 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900 shadow-sm">
        <img src="https://images.unsplash.com/photo-1560264280-88b68371db39?auto=format&fit=crop&w=1300&q=80" alt="Rapat regulasi desa" class="h-[460px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/10 to-transparent"></div>
        <div class="absolute bottom-7 left-7 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Regulasi</span>
            <h2 class="mt-3 text-3xl font-black">Peraturan & Regulasi Desa</h2>
            <p class="mt-2 text-sm text-slate-100">Produk hukum resmi penyelenggaraan pemerintahan desa.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Kumpulan produk hukum Desa Ngrimbi - Peraturan Desa (Perdes), Peraturan Kepala Desa, dan Keputusan Kepala Desa - sebagai dasar hukum penyelenggaraan pemerintahan dan pembangunan desa.
    </p>

    <h2 class="mx-auto mt-10 max-w-5xl text-2xl font-black text-[#1a2586]">Daftar Regulasi</h2>
    <div class="mx-auto mt-6 max-w-5xl space-y-4">
        @foreach ([
            ['Peraturan Desa tentang APBDes', 'NOMOR 01 TAHUN 2026'],
            ['Peraturan Desa tentang RPJMDes', 'NOMOR 02 TAHUN 2026'],
            ['Keputusan Kepala Desa tentang Struktur Perangkat Desa', 'SK NOMOR 03/2026'],
        ] as $rule)
            <article class="flex items-center justify-between rounded-[12px] bg-slate-100 p-5">
                <div class="flex items-center gap-4"><span class="grid h-10 w-10 place-items-center rounded bg-[#1a2586] text-xs font-black text-white">R</span><div><h3 class="font-black text-slate-800">{{ $rule[0] }}</h3><p class="text-xs font-semibold text-slate-400">{{ $rule[1] }}</p></div></div>
                <button class="rounded-full bg-blue-200 px-6 py-2 text-xs font-black text-white">Unduh</button>
            </article>
        @endforeach
    </div>
</section>
@endsection
