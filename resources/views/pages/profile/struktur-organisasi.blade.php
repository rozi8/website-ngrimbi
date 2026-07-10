@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')
<x-profile.hero current="Struktur Organisasi" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-8 sm:px-6">
    <div class="mb-8 flex items-center rounded-full bg-slate-100">
        <span class="mr-3 h-12 w-3 rounded-full bg-amber-400"></span>
        <h2 class="text-2xl font-black text-[#1a2586]">Struktur Organisasi</h2>
    </div>

    <div class="rounded-md border-[7px] border-[#17256f] bg-white p-6 shadow-sm">
        <h2 class="text-center text-3xl font-black uppercase text-amber-500">Susunan Pemerintah Desa Ngrimbi - Jombang</h2>

        <div class="mx-auto mt-8 max-w-5xl">
            <div class="mx-auto w-full max-w-xs rounded-md bg-[#17256f] p-4 text-center text-white shadow-lg">
                <p class="text-xs font-black uppercase text-amber-300">Kepala Desa</p>
                <p class="mt-1 text-sm font-black">Samsul Hadi, S.Pd.I</p>
            </div>

            <div class="mx-auto h-8 w-1 bg-[#079b9b]"></div>

            <div class="mx-auto w-full max-w-xs rounded-md bg-[#17256f] p-4 text-center text-white shadow-lg">
                <p class="text-xs font-black uppercase text-amber-300">Sekretaris Desa</p>
                <p class="mt-1 text-sm font-black">Sucipto</p>
            </div>

            <div class="mt-6 grid gap-5 md:grid-cols-4">
                @foreach ([
                    ['Kaur Keuangan', 'Nova Ayu Puspita Sari'],
                    ['Kaur Umum & TU', 'Siti Mutikomah Masyfah'],
                    ['Kaur Perencanaan', 'Untung'],
                    ['Ketua BPD', '-'],
                ] as $person)
                    <div class="rounded-md bg-[#17256f] p-4 text-center text-white shadow-md">
                        <p class="text-[11px] font-black uppercase text-amber-300">{{ $person[0] }}</p>
                        <p class="mt-1 text-xs font-black">{{ $person[1] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 grid gap-5 md:grid-cols-3">
                @foreach ([
                    ['Kasi Pemerintahan', 'Soamin'],
                    ['Kasi Kesejahteraan', 'Achmad Suhadi'],
                    ['Kasi Pelayanan', 'Ahmad Kurniawan'],
                ] as $person)
                    <div class="rounded-md bg-[#17256f] p-4 text-center text-white shadow-md">
                        <p class="text-[11px] font-black uppercase text-amber-300">{{ $person[0] }}</p>
                        <p class="mt-1 text-xs font-black">{{ $person[1] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-6 grid gap-5 md:grid-cols-3">
                @foreach ([
                    ['Kadus Mutersari', 'Arif Novanto'],
                    ['Kadus Ngrimbi', 'Matkholi'],
                    ['Kadus Daderjo', 'Ahmad Zainal Maarif'],
                ] as $person)
                    <div class="rounded-md bg-[#17256f] p-4 text-center text-white shadow-md">
                        <p class="text-[11px] font-black uppercase text-amber-300">{{ $person[0] }}</p>
                        <p class="mt-1 text-xs font-black">{{ $person[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <p class="mt-6 text-right text-xs font-black uppercase text-[#17256f]">Pemerintah Desa Ngrimbi</p>
    </div>

    <h2 class="mt-10 text-2xl font-black text-[#1a2586]">Prinsip Tata Kelola Pemerintah Desa</h2>
    <div class="mt-6 rounded-[24px] bg-slate-200/80 p-8 sm:p-10">
        <p class="text-base font-semibold leading-7 text-slate-600">
            Di tengah dinamika perkembangan zaman dan tuntutan pelayanan publik yang kian dinamis, Pemerintah Desa dituntut untuk senantiasa bergerak secara efektif, transparan, dan lincah dalam beradaptasi. Organisasi pelayanan yang optimal merupakan hasil perpaduan antara pemanfaatan seluruh sumber daya aparatur desa dengan efisiensi waktu, serta ketepatan proses dalam mencapai sasaran pembangunan yang dituju.
        </p>
        <p class="mt-6 text-base font-semibold leading-7 text-slate-600">
            Pemerintah Desa Ngrimbi berkomitmen penuh untuk terus mengoptimalkan seluruh potensi perangkat dan elemen organisasi yang dimiliki demi mewujudkan tata kelola pemerintahan yang prima.
        </p>
    </div>
</section>
@endsection
