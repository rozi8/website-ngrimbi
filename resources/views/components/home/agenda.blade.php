@php
    $events = [
        ['month' => 'Okt', 'date' => '28', 'title' => 'Gotong Royong Bersih Desa', 'place' => 'Balai Desa Ngrimbi', 'time' => '08.00 WIB - Selesai', 'accent' => 'border-amber-400'],
        ['month' => 'Nov', 'date' => '02', 'title' => 'Musrenbangdes Semester II', 'place' => 'Gedung Pertemuan Desa', 'time' => '09.30 WIB - Selesai', 'accent' => 'border-[#101c78]'],
        ['month' => 'Nov', 'date' => '05', 'title' => 'Peringatan HUT RI Ke-80', 'place' => 'Lapangan Desa Ngrimbi', 'time' => '10.00 WIB - Selesai', 'accent' => 'border-emerald-500'],
        ['month' => 'Nov', 'date' => '10', 'title' => 'Pasar Tani & UMKM Desa', 'place' => 'Jl. Raya Ngrimbi-Bareng', 'time' => '06.00 WIB - 10.00', 'accent' => 'border-orange-400'],
    ];
@endphp

<section id="data" class="bg-[#eef1f7] py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-[1fr_360px]">
        <div>
            <div class="mb-8 flex items-center gap-3">
                <span class="text-2xl text-amber-600">□</span>
                <h2 class="text-3xl font-black text-[#101c78]">Agenda Daerah</h2>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($events as $event)
                    <article class="{{ $event['accent'] }} rounded-md border-l-4 bg-white p-6 shadow-sm">
                        <div class="flex gap-4">
                            <div class="grid h-16 w-14 shrink-0 place-items-center rounded-md bg-slate-100 text-center">
                                <span class="block text-[10px] font-black uppercase text-slate-500">{{ $event['month'] }}</span>
                                <span class="block text-xl font-black text-[#101c78]">{{ $event['date'] }}</span>
                            </div>
                            <div>
                                <h3 class="text-sm font-black text-[#101c78]">{{ $event['title'] }}</h3>
                                <p class="mt-4 text-xs text-slate-500">{{ $event['place'] }}</p>
                                <p class="mt-3 text-xs font-black text-amber-600">{{ $event['time'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <aside class="rounded-md bg-[#152096] p-7 text-white shadow-2xl shadow-blue-900/20">
            <h2 class="text-2xl font-black">Suara Warga</h2>
            <p class="mt-2 text-xs leading-5 text-blue-100">Sampaikan aspirasi Anda untuk Ngrimbi yang lebih maju.</p>

            <form class="mt-8">
                <p class="mb-5 text-sm font-bold leading-6">Menurut Anda, apa prioritas pembangunan utama tahun depan?</p>
                <div class="space-y-3">
                    @foreach (['Infrastruktur Jalan', 'Kesehatan & Pendidikan', 'Ekonomi & Pariwisata'] as $option)
                        <label class="flex cursor-pointer items-center gap-3 rounded-md bg-white/10 px-4 py-3 text-xs font-semibold text-blue-50 ring-1 ring-white/10">
                            <input type="radio" name="polling" class="h-3.5 w-3.5 accent-amber-400">
                            {{ $option }}
                        </label>
                    @endforeach
                </div>
                <button type="button" class="mt-6 w-full rounded-md bg-amber-400 px-5 py-4 text-sm font-black text-[#101c78] hover:bg-amber-300">
                    Kirim Suara
                </button>
            </form>
        </aside>
    </div>
</section>
