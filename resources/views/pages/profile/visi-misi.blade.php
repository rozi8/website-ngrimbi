@extends('layouts.app')

@section('title', 'Visi Misi')

@section('content')
<x-profile.hero current="Visi Misi" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-8 sm:px-6">
    <div class="mb-6 flex items-center rounded-full bg-slate-100">
        <span class="mr-3 h-12 w-3 rounded-full bg-amber-400"></span>
        <h2 class="text-2xl font-black text-[#1a2586]">VISI MISI</h2>
    </div>

    <div class="rounded-[24px] bg-slate-200/80 p-8 sm:p-12">
        <p class="text-xl font-black leading-8 text-slate-600">
            "Terwujudnya Desa Ngrimbi yang mandiri, transparan, dan berdaya saing melalui tata kelola pemerintahan berbasis digital serta penguatan ekonomi warga berbasis potensi pertanian dan UMKM lokal."
        </p>
    </div>

    <div class="mt-10 space-y-6">
        @foreach ([
            'Mewujudkan tata kelola pemerintahan desa yang transparan dan akuntabel melalui digitalisasi layanan publik dan keterbukaan informasi anggaran.',
            'Meningkatkan kualitas infrastruktur dan pelayanan dasar bagi seluruh warga di setiap dusun.',
            'Mendorong pertumbuhan ekonomi desa melalui penguatan sektor pertanian, produk unggulan, dan pelaku UMKM setempat.',
            'Memperkuat partisipasi masyarakat dalam perencanaan dan pengawasan pembangunan desa.',
            'Melestarikan nilai budaya, gotong royong, dan kerukunan antarwarga sebagai identitas Desa Ngrimbi.',
        ] as $mission)
            <div class="flex gap-5 rounded-[24px] bg-slate-200/80 p-8">
                <span class="mt-1 h-8 w-8 shrink-0 rounded-full bg-white"></span>
                <p class="text-base font-semibold leading-7 text-slate-600">{{ $mission }}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection
