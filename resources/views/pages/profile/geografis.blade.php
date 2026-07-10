@extends('layouts.app')

@section('title', 'Geografis')

@section('content')
<x-profile.hero current="Geografis" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-8 sm:px-6">
    <div class="mb-8 flex items-center rounded-full bg-slate-100">
        <span class="mr-3 h-12 w-3 rounded-full bg-amber-400"></span>
        <h2 class="text-2xl font-black text-[#1a2586]">Geografis</h2>
    </div>

    <div class="grid gap-6 md:grid-cols-2">
        <div class="rounded-[18px] bg-white p-7">
            <h3 class="font-black text-amber-700">Luas Wilayah</h3>
            <p class="mt-2 text-sm font-semibold text-slate-500">Kurang lebih 434,94 ha.</p>
        </div>
        <div class="rounded-[18px] bg-white p-7">
            <h3 class="font-black text-amber-700">Jumlah Dusun</h3>
            <p class="mt-2 text-sm font-semibold text-slate-500">5 Dusun.</p>
        </div>
        <div class="rounded-[18px] bg-white p-7 md:col-span-2">
            <h3 class="font-black text-amber-700">Ketinggian</h3>
            <p class="mt-2 text-sm font-semibold text-slate-500">+500 meter di atas permukaan laut.</p>
        </div>
    </div>

    <h2 class="mt-14 text-2xl font-black text-[#1a2586]">Alamat Detail</h2>
    <div class="mt-6 grid gap-6 md:grid-cols-2">
        @foreach ([
            ['Alamat Kantor Desa', 'Jl. Ds. Sumber, Bareng, Kec. Bareng, Kabupaten Jombang, Jawa Timur 61474'],
            ['Batas Utara', 'Desa Mojowangi Kecamatan Mojowarno'],
            ['Batas Selatan', 'Desa Mojotengah Kecamatan Bareng'],
            ['Batas Timur', 'Desa Pulosari Kecamatan Bareng'],
            ['Batas Barat', 'Desa Penggaron Kecamatan Mojowarno'],
            ['Dusun', "1. Dusun Ngrimbi\n2. Dusun Dandangan\n3. Dusun Kopen\n4. Dusun Wonorejo"],
        ] as $detail)
            <div class="rounded-[18px] bg-white p-7">
                <h3 class="font-black text-amber-700">{{ $detail[0] }}</h3>
                <p class="mt-2 whitespace-pre-line text-sm font-semibold leading-6 text-slate-500">{{ $detail[1] }}</p>
            </div>
        @endforeach
    </div>

    <h2 class="mt-14 text-2xl font-black text-[#1a2586]">Detail Topografi</h2>
    <div class="mt-6 grid gap-6 md:grid-cols-2">
        @foreach ([
            ['Kondisi Geografis & Kontur', 'Desa Ngrimbi terletak di kawasan kaki Gunung Anjasmoro bagian utara. Kondisi topografinya didominasi oleh dataran bergelombang hingga perbukitan rendah.'],
            ['Mayoritas Penggunaan Lahan', 'Sebagian besar wilayah dimanfaatkan untuk pertanian hortikultura dan lahan tanaman pangan, dengan beberapa area kebun dan pekarangan warga.'],
            ['Jenis Tanah & Kesuburan', 'Memiliki karakteristik tanah vulkanik yang subur, sangat mendukung sektor agraris dan perkebunan hortikultura.'],
            ['Pengairan', 'Didukung oleh aliran sungai kecil yang berasal dari mata air perbukitan sekitar, yang digunakan warga untuk mengairi area persawahan secara musiman.'],
        ] as $detail)
            <div class="rounded-[18px] bg-white p-7">
                <h3 class="font-black text-amber-700">{{ $detail[0] }}</h3>
                <p class="mt-2 text-sm font-semibold leading-6 text-slate-500">{{ $detail[1] }}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection
