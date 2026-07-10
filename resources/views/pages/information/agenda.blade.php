@extends('layouts.app')

@section('title', 'Agenda')

@section('content')
<x-information.hero current="Agenda" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900 shadow-sm">
        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1300&q=80" alt="Rapat agenda desa" class="h-[460px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/10 to-transparent"></div>
        <div class="absolute bottom-7 left-7 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Agenda Harian</span>
            <h2 class="mt-3 text-3xl font-black">Kalender Kegiatan Desa Ngrimbi</h2>
            <p class="mt-2 text-sm text-slate-100">Informasi jadwal kegiatan pemerintahan dan kemasyarakatan.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Jadwal kegiatan resmi dan agenda kemasyarakatan Desa Ngrimbi ditampilkan di sini agar warga dapat berpartisipasi aktif dalam setiap kegiatan desa.
    </p>

    <h2 class="mx-auto mt-10 max-w-5xl text-2xl font-black text-[#1a2586]">Agenda Mendatang</h2>
    <div class="mx-auto mt-6 max-w-5xl space-y-6">
        @forelse($agendaEvents as $event)
            <article class="flex flex-col gap-6 rounded-[24px] bg-slate-200/80 p-7 sm:flex-row sm:items-center">
                <div class="grid h-20 w-20 shrink-0 place-items-center rounded-full bg-[#0050b8] text-center text-white">
                    <span class="block text-2xl font-black leading-none">{{ $event->event_date->format('d') }}</span>
                    <span class="block text-xs font-black uppercase">{{ $event->event_date->format('M') }}</span>
                </div>
                <div class="pt-2">
                    <h3 class="text-lg font-black text-slate-800">{{ $event->title }}</h3>
                    <p class="mt-3 text-sm font-semibold text-slate-500">{{ $event->time }} · {{ $event->location }}</p>
                    <p class="mt-3 text-sm text-slate-600">{{ $event->description }}</p>
                </div>
            </article>
        @empty
            <div class="rounded-3xl bg-slate-100 p-10 text-center text-sm font-semibold text-slate-600">Belum ada agenda tersedia.</div>
        @endforelse
    </div>
</section>
@endsection
