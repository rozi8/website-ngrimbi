@extends('layouts.app')

@section('title', 'Layanan Pendidikan')

@section('content')
<x-service.hero current="Pendidikan" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-8 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900">
        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1300&q=80" alt="Layanan pendidikan" class="h-[420px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-6 left-6 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Pendidikan</span>
            <h2 class="mt-3 text-3xl font-black">Layanan & Fasilitas Pendidikan</h2>
            <p class="mt-2 text-sm text-slate-100">Dukungan akses belajar bagi anak-anak Desa Ngrimbi.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Desa Ngrimbi mendukung akses pendidikan warga mulai dari jenjang PAUD hingga pendidikan dasar, termasuk fasilitasi surat keterangan tidak mampu untuk keperluan bantuan/beasiswa pendidikan.
    </p>

    <div class="mx-auto mt-8 grid max-w-5xl gap-8 md:grid-cols-2">
        <div>
            <h3 class="mb-4 text-xl font-black text-[#1a2586]">Jenis Layanan</h3>
            <div class="space-y-4">
                @foreach (['Surat keterangan tidak mampu (bantuan pendidikan)', 'Informasi PAUD & TK di lingkungan desa', 'Informasi pendaftaran sekolah dasar', 'Fasilitasi program bantuan pendidikan pemerintah'] as $item)
                    <div class="rounded-[18px] bg-white px-6 py-4 text-sm font-bold text-amber-700">{{ $item }}</div>
                @endforeach
            </div>
        </div>
        <div>
            <h3 class="mb-4 text-xl font-black text-[#1a2586]">Satuan Pendidikan</h3>
            <div class="space-y-4">
                @foreach (['PAUD/TK', 'SD/MI', 'TPQ/Madrasah Diniyah', 'Kelompok belajar desa - sesuai jadwal'] as $item)
                    <div class="rounded-[18px] bg-white px-6 py-4 text-sm font-semibold text-slate-500">{{ $loop->iteration }}. {{ $item }}</div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mx-auto mt-20 max-w-5xl rounded-[18px] bg-white p-8">
        <h3 class="font-black text-amber-700">Syarat Surat Keterangan Tidak Mampu</h3>
        <p class="mt-2 text-sm font-semibold text-slate-500">Fotokopi KTP, KK, surat pengantar RT/RW.</p>
        <h3 class="mt-5 font-black text-amber-700">Kontak</h3>
        <p class="mt-2 text-sm font-semibold text-slate-500">Balai Desa Ngrimbi - 0822xxxxxxx.</p>
    </div>
</section>
@endsection
