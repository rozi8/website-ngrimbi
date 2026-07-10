@extends('layouts.app')

@section('title', 'Sejarah Desa')

@section('content')
<x-profile.hero current="Sejarah Desa" />

<section class="mx-auto max-w-7xl px-4 pb-40 pt-8 sm:px-6">
    <div class="mb-8 flex items-center rounded-full bg-slate-100">
        <span class="mr-3 h-12 w-3 rounded-full bg-amber-400"></span>
        <h2 class="text-2xl font-black text-[#1a2586]">Sejarah Desa</h2>
    </div>

    <div class="space-y-6">
        @foreach ([
            ['title' => 'Asal Nama', 'body' => 'Nama Ngrimbi diyakini berkaitan erat dengan keberadaan Candi Arimbi yang dikenal sebagai Candi Ngrimbi. Candi bercorak Hindu peninggalan era Majapahit yang berada di wilayah Kecamatan Bareng. Keberadaan candi ini menjadi salah satu jejak sejarah tertua yang melekat pada identitas desa.'],
            ['title' => 'Masa Awal', 'body' => 'Sebagaimana desa-desa lain di lereng dan dataran Kecamatan Bareng, Ngrimbi tumbuh sebagai kawasan agraris dengan mata pencaharian utama warga di sektor pertanian dan perkebunan.'],
            ['title' => 'Perkembangan', 'body' => 'Desa Ngrimbi berkembang menjadi salah satu dari 12 desa di Kecamatan Bareng, dengan pembagian wilayah dusun antara lain Dusun Mutersari dan dusun-dusun lain di sekitarnya.'],
            ['title' => 'Masa Kini', 'body' => 'Memasuki era digital, Desa Ngrimbi mulai menerapkan sistem informasi desa dan transparansi anggaran sebagai bagian dari komitmen keterbukaan pelayanan publik kepada warga.'],
        ] as $item)
            <article class="flex gap-5 rounded-[24px] bg-slate-200/80 p-8">
                <span class="mt-1 h-8 w-8 shrink-0 rounded-full bg-white"></span>
                <div>
                    <h3 class="font-black text-slate-500">{{ $item['title'] }}</h3>
                    <p class="mt-4 text-base font-semibold leading-7 text-slate-600">{{ $item['body'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection
