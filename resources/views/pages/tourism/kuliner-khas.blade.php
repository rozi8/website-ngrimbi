@extends('layouts.app')

@section('title', 'Kuliner Khas')

@section('content')
<x-tourism.hero current="Kuliner Khas" title="Kuliner Khas Desa Ngrimbi" subtitle="Cita rasa autentik warisan turun-temurun dari dapur warga Desa Ngrimbi." />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
    <h2 class="text-xl font-black text-[#1a2586]">Semua Destinasi</h2>
    <div class="mt-6 grid gap-6 md:grid-cols-3">
        @foreach ([
            ['Nasi Sadang', 'Rp 7 RB - 10 RB', 'https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=500&q=80'],
            ['Kopi Excelsa', 'Rp 5 RB - 8 RB', 'https://images.unsplash.com/photo-1522992319-0365e5f11656?auto=format&fit=crop&w=500&q=80'],
            ['Keripik Salak', 'Rp 12.000 - 15.000', 'https://images.unsplash.com/photo-1600359756098-8bc52195bbf2?auto=format&fit=crop&w=500&q=80'],
        ] as $food)
            <article class="overflow-hidden rounded-md bg-white shadow-xl shadow-slate-200/80">
                <img src="{{ $food[2] }}" alt="{{ $food[0] }}" class="h-36 w-full object-cover">
                <div class="p-5">
                    <h3 class="text-lg font-black text-[#1a2586]">{{ $food[0] }}</h3>
                    <p class="mt-2 text-sm font-black text-amber-600">{{ $food[1] }}</p>
                </div>
            </article>
        @endforeach
    </div>

    <h2 class="mt-14 text-xl font-black text-[#1a2586]">Semua Kuliner</h2>
    <div class="mt-6 space-y-6">
        @foreach ([
            ['Nasi Sadang Khas Bareng', 'Nasi bungkus daun khas dengan lauk sederhana, mie kering, dan sambal pecel khas Jombang selatan.', 'Rp 7.000 - Rp 10.000 / porsi', 'Khas Daerah', 'https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=260&q=80'],
            ['Kopi Excelsa Anjasmoro', 'Seduhan kopi varietas Excelsa asli lereng gunung dengan cita rasa asam-manis yang unik dan aroma mantap.', 'Rp 8.000 - Rp 8.000 / gelas', 'Produk Desa', 'https://images.unsplash.com/photo-1522992319-0365e5f11656?auto=format&fit=crop&w=260&q=80'],
            ['Keripik Salak Hasil Bumi', 'Camilan ringan berbahan salak lokal hasil kebun warga sekitar perkebunan Ngrimbi.', 'Rp 12.000 - Rp 15.000 / bungkus', 'Oleh-oleh UMKM', 'https://images.unsplash.com/photo-1600359756098-8bc52195bbf2?auto=format&fit=crop&w=260&q=80'],
        ] as $food)
            <article class="grid gap-5 rounded-[24px] bg-slate-200/80 p-6 sm:grid-cols-[120px_1fr_auto] sm:items-center">
                <img src="{{ $food[4] }}" alt="{{ $food[0] }}" class="h-24 w-full rounded-md object-cover sm:w-32">
                <div>
                    <h3 class="text-lg font-black text-slate-700">{{ $food[0] }}</h3>
                    <p class="mt-2 text-sm font-semibold leading-6 text-slate-500">{{ $food[1] }}</p>
                    <p class="mt-2 text-sm font-black text-slate-700">{{ $food[2] }}</p>
                </div>
                <span class="rounded-full bg-amber-100 px-4 py-2 text-xs font-black text-amber-600">{{ $food[3] }}</span>
            </article>
        @endforeach
    </div>
</section>
@endsection
