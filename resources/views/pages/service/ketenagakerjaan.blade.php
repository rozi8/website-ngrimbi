@extends('layouts.app')

@section('title', 'Layanan Ketenagakerjaan')

@section('content')
<x-service.hero current="Ketenagakerjaan" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-8 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900">
        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1300&q=80" alt="Layanan ketenagakerjaan" class="h-[420px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
        <div class="absolute bottom-6 left-6 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Ketenagakerjaan</span>
            <h2 class="mt-3 text-3xl font-black">Layanan Ketenagakerjaan Warga</h2>
            <p class="mt-2 text-sm text-slate-100">Informasi kerja, pelatihan, dan surat pendukung warga.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Layanan ketenagakerjaan Desa Ngrimbi membantu warga memperoleh informasi peluang kerja, pelatihan keterampilan, serta dokumen pendukung untuk kebutuhan administrasi pekerjaan.
    </p>

    <div class="mx-auto mt-8 grid max-w-5xl gap-8 md:grid-cols-2">
        <div>
            <h3 class="mb-4 text-xl font-black text-[#1a2586]">Jenis Layanan</h3>
            <div class="space-y-4">
                @foreach (['Surat keterangan belum bekerja', 'Surat pengantar pencari kerja', 'Informasi pelatihan keterampilan', 'Pendataan tenaga kerja lokal'] as $item)
                    <div class="rounded-[18px] bg-white px-6 py-4 text-sm font-bold text-amber-700">{{ $item }}</div>
                @endforeach
            </div>
        </div>
        <div>
            <h3 class="mb-4 text-xl font-black text-[#1a2586]">Prosedur</h3>
            <div class="space-y-4">
                @foreach (['Datang ke kantor desa membawa KTP dan KK', 'Petugas mencatat kebutuhan layanan', 'Surat atau rekomendasi diproses oleh perangkat desa', 'Warga menerima dokumen atau informasi lanjutan'] as $item)
                    <div class="rounded-[18px] bg-white px-6 py-4 text-sm font-semibold text-slate-500">{{ $loop->iteration }}. {{ $item }}</div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mx-auto mt-20 max-w-5xl rounded-[18px] bg-white p-8">
        <h3 class="font-black text-amber-700">Syarat Umum</h3>
        <p class="mt-2 text-sm font-semibold text-slate-500">Fotokopi KTP, KK, dan dokumen pendukung sesuai kebutuhan layanan.</p>
        <h3 class="mt-5 font-black text-amber-700">Jam & Kontak</h3>
        <p class="mt-2 text-sm font-semibold text-slate-500">Senin-Jumat, 08.00-14.00 WIB - Balai Desa Ngrimbi.</p>
    </div>
</section>
@endsection
