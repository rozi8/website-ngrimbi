@extends('layouts.app')

@section('title', 'Pengumuman')

@section('content')
<x-information.hero current="Pengumuman" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900 shadow-sm">
        <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?auto=format&fit=crop&w=1300&q=80" alt="Papan pengumuman desa" class="h-[460px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/10 to-transparent"></div>
        <div class="absolute bottom-7 left-7 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Pengumuman</span>
            <h2 class="mt-3 text-3xl font-black">Papan Pengumuman Resmi Desa</h2>
            <p class="mt-2 text-sm text-slate-100">Informasi pelayanan, bantuan sosial, dan pemberitahuan penting.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Pengumuman resmi dari Pemerintah Desa Ngrimbi terkait jadwal pelayanan, bantuan sosial, hingga pemberitahuan penting lain bagi warga.
    </p>

    <h2 class="mx-auto mt-10 max-w-5xl text-2xl font-black text-[#1a2586]">Pengumuman Terbaru</h2>
    <div class="mx-auto mt-6 max-w-5xl space-y-6">
        @forelse($announcements as $notice)
            <article class="grid gap-5 rounded-[24px] bg-slate-200/80 p-7 sm:grid-cols-[110px_1fr] sm:items-center">
                <span class="rounded-full bg-blue-200 px-5 py-2 text-center text-xs font-black uppercase text-white">{{ $notice->excerpt ? 'Info' : 'Pengumuman' }}</span>
                <div>
                    <h3 class="text-lg font-black text-slate-800">{{ $notice->title }}</h3>
                    <p class="mt-2 text-sm font-semibold text-slate-500">{{ $notice->published_at?->format('d M Y') ?? $notice->created_at->format('d M Y') }}</p>
                    <p class="mt-3 text-sm text-slate-600">{{ $notice->excerpt ?: $notice->body }}</p>
                </div>
            </article>
        @empty
            <div class="rounded-3xl bg-slate-100 p-10 text-center text-sm font-semibold text-slate-600">Belum ada pengumuman terbaru.</div>
        @endforelse
    </div>
</section>
@endsection
