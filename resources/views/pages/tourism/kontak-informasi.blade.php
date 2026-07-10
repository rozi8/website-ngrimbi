@extends('layouts.app')

@section('title', 'Kontak dan Informasi')

@section('content')
<x-tourism.hero current="Kontak & Informasi" title="Kontak & Informasi" subtitle="Hubungi Kantor Pemerintah Desa Ngrimbi untuk informasi kunjungan, layanan, dan kerja sama." />

<section class="mx-auto max-w-7xl px-4 pb-32 pt-8 sm:px-6">
    <div class="mb-8 flex items-center rounded-full bg-slate-100">
        <span class="mr-3 h-12 w-3 rounded-full bg-amber-400"></span>
        <h2 class="text-2xl font-black text-[#1a2586]">Kontak & Informasi</h2>
    </div>

    <div class="grid overflow-hidden rounded-md bg-white shadow-xl shadow-slate-200/80 lg:grid-cols-[0.95fr_1.05fr]">
        <div class="p-8 sm:p-12">
            <h2 class="text-2xl font-black text-[#1a2586]">Kunjungi Kantor Kami</h2>
            <div class="mt-8 space-y-6">
                <div>
                    <p class="font-black text-[#1a2586]">Kantor Desa Ngrimbi</p>
                    <p class="mt-1 text-sm leading-6 text-slate-500">Jl. Raya Ngrimbi No. 1, Ngrimbi, Kec. Bareng, Kab. Jombang, Jawa Timur 61474</p>
                </div>
                <div>
                    <p class="font-black text-[#1a2586]">Telepon / WhatsApp</p>
                    <p class="mt-1 text-sm text-slate-500">(0321) 888001 / 0812-3456-7890</p>
                </div>
                <div>
                    <p class="font-black text-[#1a2586]">Email Resmi</p>
                    <p class="mt-1 text-sm text-slate-500">desangrimbi@jombangkab.go.id</p>
                </div>
            </div>
            <div class="mt-10 flex gap-3 border-t border-slate-100 pt-8">
                <span class="grid h-10 w-10 place-items-center rounded-full bg-slate-100 text-sm font-black text-[#1a2586]">W</span>
                <span class="grid h-10 w-10 place-items-center rounded-full bg-slate-100 text-sm font-black text-[#1a2586]">S</span>
            </div>
        </div>

        <div class="relative min-h-[390px] overflow-hidden bg-slate-200">
            <iframe
                src="https://www.google.com/maps?q=Balai%20Desa%20Ngrimbi%2C%20Ngrimbi%2C%20Mutersari%2C%20Jombang%2C%20Kec.%20Bareng%2C%20Kabupaten%20Jombang%2C%20Jawa%20Timur%2061474&output=embed"
                title="Peta Balai Desa Ngrimbi"
                class="absolute inset-0 h-full w-full border-0"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen
            ></iframe>
        </div>
    </div>

    <h2 class="mt-10 text-2xl font-black text-[#1a2586]">Info Kunjungan</h2>
    <div class="mt-6 grid gap-6 md:grid-cols-2">
        <div class="rounded-[18px] bg-white p-7">
            <h3 class="font-black text-amber-700">Kualitas Udara</h3>
            <p class="mt-2 text-lg font-black text-slate-700">Baik / Sedang</p>
        </div>
        <div class="rounded-[18px] bg-white p-7">
            <h3 class="font-black text-amber-700">Cuaca Hari Ini</h3>
            <p class="mt-2 text-lg font-black text-slate-700">Cerah-Berawan, 26-31°C</p>
        </div>
    </div>
</section>
@endsection


