@extends('layouts.app')

@section('title', 'Destinasi Wisata')

@section('content')
<x-tourism.hero current="Destinasi Wisata" title="Destinasi Wisata Desa Ngrimbi" subtitle="Jelajahi pesona alam, sejarah, dan spot wisata unggulan yang tersebar di seluruh penjuru desa." />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900 shadow-sm">
        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1300&q=80" alt="Candi Rimbi" class="h-[460px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/10 to-transparent"></div>
        <div class="absolute bottom-7 left-7 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Destinasi Unggulan</span>
            <h2 class="mt-3 text-3xl font-black">Pesona Wisata Desa Ngrimbi</h2>
            <p class="mt-2 text-sm text-slate-100">Temukan pilihan destinasi wisata yang nyaman dan kaya budaya di desa kami.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Pilih destinasi wisata Desa Ngrimbi untuk pengalaman alam, sejarah, dan budaya lokal yang ramah keluarga.
    </p>

    <h2 class="mx-auto mt-10 max-w-5xl text-2xl font-black text-[#1a2586]">Semua Destinasi</h2>
    <div class="mx-auto mt-6 grid max-w-5xl gap-8 sm:grid-cols-2">
        @forelse($spots as $destination)
            <article class="overflow-hidden rounded-md bg-white shadow-xl shadow-slate-200/80">
                <img src="{{ $destination->image_url ?: 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=600&q=80' }}" alt="{{ $destination->name }}" class="h-44 w-full object-cover">
                <div class="p-6">
                    <p class="text-[10px] font-black uppercase tracking-[0.16em] text-amber-500">{{ $destination->category ?: 'Destinasi' }}</p>
                    <h3 class="mt-2 text-xl font-black text-[#1a2586]">{{ $destination->name }}</h3>
                    <p class="mt-2 text-sm font-semibold text-slate-500">{{ $destination->description }}</p>
                    @if($destination->location)
                        <p class="mt-3 text-xs font-semibold text-slate-500">Lokasi: {{ $destination->location }}</p>
                    @endif
                </div>
            </article>
        @empty
            <div class="rounded-3xl bg-slate-100 p-10 text-center text-sm font-semibold text-slate-600">Belum ada destinasi wisata terdaftar.</div>
        @endforelse
    </div>
</section>
@endsection
