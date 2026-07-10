@extends('layouts.app')

@section('title', 'UMKM Desa')

@section('content')
<x-tourism.hero current="UMKM Desa" title="UMKM Desa Ngrimbi" subtitle="Direktori usaha mikro warga, mendukung produk lokal untuk berkembang lebih luas." />

<section class="mx-auto max-w-7xl px-4 pb-40 pt-10 sm:px-6">
    <p class="max-w-5xl text-base font-semibold leading-7 text-slate-600">
        UMKM Desa Ngrimbi didominasi oleh olahan pangan hasil bumi seperti singkong, rempeyek, palawija, serta kerajinan tangan hasil pemberdayaan masyarakat.
    </p>

    <div class="mt-8 flex flex-wrap gap-4" data-umkm-filters>
        @foreach ([
            ['label' => 'Semua', 'value' => 'semua'],
            ['label' => 'Kuliner', 'value' => 'kuliner'],
            ['label' => 'Agribisnis', 'value' => 'agribisnis'],
            ['label' => 'Kerajinan', 'value' => 'kerajinan'],
        ] as $filter)
            <button
                type="button"
                class="rounded-full px-6 py-2 text-xs font-black transition {{ $loop->first ? 'bg-[#1a2586] text-white' : 'bg-slate-200 text-slate-500 hover:bg-slate-300' }}"
                data-umkm-filter="{{ $filter['value'] }}"
                aria-pressed="{{ $loop->first ? 'true' : 'false' }}"
            >
                {{ $filter['label'] }}
            </button>
        @endforeach
    </div>

    <h2 class="mt-10 text-2xl font-black text-[#1a2586]">Direktori Usaha</h2>
    <div class="mt-6 space-y-6" data-umkm-list>
        @forelse($umkms as $business)
            <article class="flex gap-6 rounded-[24px] bg-slate-200/80 p-8" data-umkm-item data-category="{{ strtolower($business->category ?: 'umkm') }}">
                <span class="grid h-16 w-16 shrink-0 place-items-center rounded-2xl bg-[#0050b8] text-sm font-black text-white">{{ strtoupper(substr($business->name, 0, 2)) }}</span>
                <div>
                    <h3 class="text-lg font-black text-slate-700">{{ $business->name }}</h3>
                    <p class="mt-1 text-xs font-black text-amber-600">{{ $business->category ?? 'UMKM Desa' }}</p>
                    <p class="mt-3 text-sm font-semibold leading-6 text-slate-500">{{ $business->description }}</p>
                    @if($business->contact)
                        <p class="mt-3 text-sm text-slate-500">Kontak: {{ $business->contact }}</p>
                    @endif
                </div>
            </article>
        @empty
            <div class="rounded-[24px] bg-white p-8 text-center text-sm font-bold text-slate-500" data-umkm-empty>
                Belum ada usaha terdaftar.
            </div>
        @endforelse
    </div>

    <p class="mt-10 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Kontak per pelaku usaha didaftarkan mandiri melalui form usaha. Info lebih lanjut hubungi Layanan Desa: 0822-2549-4095.
    </p>
</section>
@endsection
