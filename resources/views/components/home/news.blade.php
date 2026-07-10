@php
    $news = [
        ['category' => 'Pertanian', 'title' => 'Program Pertanian Organik Mulai Diterapkan di Ngrimbi', 'date' => '22 Okt 2024', 'image' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=400&q=80'],
        ['category' => 'Infrastruktur', 'title' => 'Pembangunan Jalan Dusun Krajan Memasuki Tahap Akhir', 'date' => '21 Okt 2024', 'image' => 'https://images.unsplash.com/photo-1473773508845-188df298d2d1?auto=format&fit=crop&w=400&q=80'],
        ['category' => 'Budaya', 'title' => 'Festival Seni Bareng 2025 Tampilkan Kesenian Ludruk Ngrimbi', 'date' => '20 Okt 2024', 'image' => 'https://images.unsplash.com/photo-1504609813442-a8924e83f76e?auto=format&fit=crop&w=400&q=80'],
        ['category' => 'Kesehatan', 'title' => 'Posyandu Ngrimbi Raih Predikat Posyandu Aktif Terbaik Jombang', 'date' => '19 Okt 2024', 'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=400&q=80'],
    ];
@endphp

<section id="informasi" class="mx-auto max-w-7xl px-4 py-20 sm:px-6">
    <div class="mb-9 flex flex-wrap items-end justify-between gap-4">
        <div>
            <h2 class="text-3xl font-black text-[#101c78] sm:text-4xl">Desa Ngrimbi</h2>
            <p class="mt-2 text-sm text-slate-500">Informasi terkini seputar pembangunan dan kegiatan daerah.</p>
        </div>
        <a href="{{ route('information.berita-terbaru') }}" class="text-sm font-black text-[#101c78]" aria-label="Lihat semua berita Desa Ngrimbi">Lihat Semua Berita -></a>
    </div>

    <div class="grid gap-8 lg:grid-cols-[1.35fr_0.9fr]">
        <article class="group relative min-h-[420px] overflow-hidden rounded-md bg-slate-900 shadow-xl">
            <img
                src="https://images.unsplash.com/photo-1592982537447-7440770cbfc9?auto=format&fit=crop&w=1100&q=80"
                alt="Panen raya jagung"
                class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/25 to-transparent"></div>
            <div class="absolute bottom-0 max-w-2xl p-7 text-white">
                <span class="mb-4 inline-flex rounded bg-amber-400 px-3 py-1 text-[10px] font-black uppercase text-[#101c78]">Sorotan Utama</span>
                <h3 class="text-3xl font-black leading-tight sm:text-4xl">Panen Raya Jagung Desa Ngrimbi Capai Rekor Produksi Terbaru</h3>
                <p class="mt-4 text-sm leading-6 text-slate-100">
                    Kelompok tani desa merayakan peningkatan hasil panen melalui pendampingan, bibit unggul, dan pengelolaan lahan terpadu.
                </p>
            </div>
        </article>

        <div class="space-y-5">
            @foreach ($news as $item)
                <article class="grid grid-cols-[120px_1fr] gap-4">
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="h-24 w-full rounded-md object-cover">
                    <div>
                        <p class="text-[10px] font-black uppercase tracking-wide text-amber-600">{{ $item['category'] }}</p>
                        <h3 class="mt-1 text-base font-black leading-snug text-[#101c78]">{{ $item['title'] }}</h3>
                        <p class="mt-2 text-xs text-slate-400">{{ $item['date'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
