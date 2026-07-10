@extends('layouts.app')

@section('title', 'Event dan Festival')

@section('content')
<x-tourism.hero current="Event & Festival" title="Event & Festival Desa Ngrimbi" subtitle="Tradisi bersih desa, kesenian rakyat, dan perayaan budaya khas Desa Ngrimbi dan Kecamatan Bareng." />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
    <article class="relative mx-auto max-w-5xl overflow-hidden rounded-sm bg-slate-900 shadow-sm">
        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?auto=format&fit=crop&w=1300&q=80" alt="Sedekah bumi desa" class="h-[460px] w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/10 to-transparent"></div>
        <div class="absolute bottom-7 left-7 text-white">
            <span class="rounded-sm bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#1a2586]">Agenda Tahunan</span>
            <h2 class="mt-3 text-3xl font-black">Sedekah Bumi Desa Ngrimbi (Ruwat Desa)</h2>
            <p class="mt-2 text-sm text-slate-100">Puncak tradisi warga untuk memuliakan bumi dan leluhur desa.</p>
        </div>
    </article>

    <p class="mx-auto mt-8 max-w-5xl text-base font-semibold leading-7 text-slate-600">
        Tradisi tahunan wujud syukur warga atas hasil bumi dan pertanian, diisi arak-arakan tumpeng hasil bumi, kenduri massal, serta pertunjukan kesenian tradisional seperti wayang kulit atau ludruk semalam suntuk.
    </p>

    <h2 class="mx-auto mt-10 max-w-5xl text-2xl font-black text-[#1a2586]">Agenda Mendatang</h2>
    <div class="mx-auto mt-6 max-w-5xl space-y-6">
        @foreach ([
            ['18', 'Jun', 'Grebeg Gunung Anjasmoro / Kirab Budaya Bareng', 'Arak-arakan budaya menampilkan seni lokal, pakaian adat, dan gunungan hasil bumi khas lereng Anjasmoro.'],
            ['29', 'Jun', 'Bantengan & Jaranan Dor', 'Lapangan Desa / Halaman Candi Rimbi, kesenian tradisional hiburan keluarga sekaligus ruang silaturahmi warga.'],
            ['30', 'Jun', 'Gelar Seni Budaya Candi Rimbi', 'Pementasan tari, ludruk, dan pameran kerajinan lokal untuk menarik wisatawan luar daerah.'],
        ] as $event)
            <article class="flex gap-6 rounded-[24px] bg-slate-200/80 p-7">
                <div class="grid h-20 w-20 shrink-0 place-items-center rounded-full bg-[#0050b8] text-center text-white">
                    <span class="block text-2xl font-black leading-none">{{ $event[0] }}</span>
                    <span class="block text-xs font-black uppercase">{{ $event[1] }}</span>
                </div>
                <div>
                    <h3 class="text-lg font-black text-slate-700">{{ $event[2] }}</h3>
                    <p class="mt-3 text-sm font-semibold leading-6 text-slate-500">{{ $event[3] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection
