@extends('layouts.app')

@section('title', 'Berita Terbaru')

@section('content')
<section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
    @php $featured = $news->first(); @endphp

    @if ($featured)
        <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900 shadow-sm">
            <img src="{{ $featured->image_url ?: 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?auto=format&fit=crop&w=1300&q=80' }}" alt="{{ $featured->title }}" class="h-[460px] w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/10 to-transparent"></div>
            <div class="absolute bottom-7 left-7 text-white">
                <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Berita Utama</span>
                <h2 class="mt-3 text-3xl font-black">{{ $featured->title }}</h2>
                <p class="mt-2 text-sm text-slate-100">{{ $featured->excerpt ?: 'Informasi terbaru dari desa Ngrimbi.' }}</p>
            </div>
        </article>
    @endif

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Kumpulan berita dan kegiatan terbaru seputar pembangunan, sosial, dan budaya di Desa Ngrimbi. Setiap berita dilengkapi dokumentasi agar warga dapat mengikuti perkembangan desa secara transparan.
    </p>

    <h2 class="mx-auto mt-10 max-w-5xl text-2xl font-black text-[#1a2586]">Berita Lainnya</h2>
    <div class="mx-auto mt-6 max-w-5xl space-y-6">
        @forelse($news->skip(1) as $article)
            <article class="grid gap-5 rounded-[24px] bg-slate-200/80 p-5 sm:grid-cols-[120px_1fr] sm:items-center">
                <img src="{{ $article->image_url ?: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=260&q=80' }}" alt="{{ $article->title }}" class="h-24 w-full rounded-md object-cover sm:w-32">
                <div>
                    <p class="text-xs font-black text-amber-500">{{ $article->category ?: 'Info Desa' }}</p>
                    <h3 class="mt-1 text-base font-black text-slate-800">{{ $article->title }}</h3>
                    <p class="mt-2 text-xs font-semibold text-slate-500">{{ $article->published_at?->format('d M Y') ?? $article->created_at->format('d M Y') }}</p>
                    <p class="mt-2 text-sm text-slate-600">{{ $article->excerpt ?: \Illuminate\Support\Str::limit($article->body, 120) }}</p>
                </div>
            </article>
        @empty
            <div class="rounded-3xl bg-slate-100 p-10 text-center text-sm font-semibold text-slate-600">Belum ada berita terbaru.</div>
        @endforelse
    </div>
</section>
@endsection
