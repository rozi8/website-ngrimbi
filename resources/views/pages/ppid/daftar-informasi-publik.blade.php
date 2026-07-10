@extends('layouts.app')

@section('title', 'Daftar Informasi Publik')

@section('content')
<x-ppid.hero current="Daftar Informasi Publik" title="Daftar Informasi Publik" subtitle="Katalog informasi yang wajib disediakan dan diumumkan oleh Pemerintah Desa Ngrimbi." />

<section class="mx-auto max-w-7xl px-4 pb-36 pt-16 sm:px-6">
    <label class="relative block max-w-3xl">
        <span class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">Q</span>
        <input type="search" data-ppid-search placeholder="Cari dokumen atau informasi..." class="w-full rounded-full bg-slate-200/80 py-4 pl-12 pr-5 text-sm font-bold text-slate-600 outline-none placeholder:text-slate-400">
    </label>

    <div class="mt-16 flex flex-wrap gap-8" data-ppid-filters>
        @foreach ([['Berkala', 'berkala'], ['Serta Merta', 'serta-merta'], ['Setiap Saat', 'setiap-saat'], ['Dikecualikan', 'dikecualikan']] as $filter)
            <button type="button" data-ppid-filter="{{ $filter[1] }}" class="rounded-full px-8 py-3 text-sm font-black transition {{ $loop->first ? 'bg-[#1a2586] text-white' : 'bg-slate-200 text-[#1a2586] hover:bg-slate-300' }}" aria-pressed="{{ $loop->first ? 'true' : 'false' }}">{{ $filter[0] }}</button>
        @endforeach
    </div>

    <h2 class="mt-20 text-3xl font-black text-[#0050b8]" data-ppid-title>Informasi Berkala</h2>
    <div class="mt-10 space-y-10" data-ppid-list>
        @forelse($documents as $info)
            <article class="flex flex-col gap-6 rounded-[32px] bg-slate-200/80 p-10 sm:flex-row sm:items-center sm:justify-between" data-ppid-item data-category="{{ $info->category }}" data-title="{{ strtolower($info->title . ' ' . $info->description) }}">
                <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:gap-10">
                    <span class="grid h-20 w-20 shrink-0 place-items-center rounded-3xl bg-[#0050b8] text-xl font-black text-white">{{ strtoupper(substr($info->title, 0, 1)) }}</span>
                    <div>
                        <h3 class="text-xl font-black text-slate-900">{{ $info->title }}</h3>
                        <p class="mt-2 text-base font-semibold text-slate-500">{{ $info->description }}</p>
                    </div>
                </div>
                <span class="w-fit rounded-full {{ $info->status === 'Tersedia' ? 'bg-emerald-200 text-emerald-700' : ($info->status === 'Terbatas' ? 'bg-red-100 text-red-600' : 'bg-amber-100 text-amber-500') }} px-6 py-3 text-sm font-black">{{ $info->status }}</span>
            </article>
        @empty
            <div class="rounded-[32px] bg-white p-10 text-center text-base font-bold text-slate-500" data-ppid-empty>
                Informasi tidak ditemukan.
            </div>
        @endforelse
    </div>

    <div class="mt-16 rounded-[32px] bg-amber-100 p-12 text-base font-semibold leading-7 text-slate-500">
        Halaman PPID resmi Desa Ngrimbi (ngrimbi.id/ppid) saat ini masih dalam proses pengisian konten. Daftar di atas disusun mengikuti kategori wajib UU No. 14/2008 tentang Keterbukaan Informasi Publik, menyesuaikan dokumen yang sudah tersedia di kanal desa (Produk Hukum & Transparansi Anggaran).
    </div>
</section>
@endsection
