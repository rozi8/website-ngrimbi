@php
    $businesses = [
        ['title' => 'Jagung Pipil Ngrimbi', 'category' => 'Kerajinan', 'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?auto=format&fit=crop&w=500&q=80', 'desc' => 'Jagung pipil berkualitas tinggi hasil panen organik petani lokal Desa Ngrimbi.'],
        ['title' => 'Tempe Kedelai Lokal', 'category' => 'Kuliner', 'image' => 'https://images.unsplash.com/photo-1611077543775-927375b76c9b?auto=format&fit=crop&w=500&q=80', 'desc' => 'Tempe tradisional dari kedelai lokal pilihan, dibuat dengan proses fermentasi alami.'],
        ['title' => 'Jamu Herbal Ngrimbi', 'category' => 'Kesehatan', 'image' => 'https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=500&q=80', 'desc' => 'Ramuan jamu tradisional turun-temurun dari tanaman obat kebun warga Ngrimbi.'],
        ['title' => 'Kerajinan Bambu Bareng', 'category' => 'Minuman', 'image' => 'https://images.unsplash.com/photo-1595841696677-6489ff3f8cd1?auto=format&fit=crop&w=500&q=80', 'desc' => 'Kerajinan anyaman bambu khas Kecamatan Bareng buatan pengrajin Desa Ngrimbi.'],
    ];
@endphp

<section class="bg-[#eef1f7] py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="mb-9">
            <h2 class="text-3xl font-black text-[#101c78] sm:text-4xl">Ngrimbi Business Directory</h2>
            <p class="mt-3 text-sm text-slate-500">Mendukung pertumbuhan UMKM dan industri kreatif lokal.</p>
        </div>

        <div class="scrollbar-none flex gap-6 overflow-x-auto pb-4">
            @foreach ($businesses as $business)
                <article class="w-[280px] shrink-0 rounded-md bg-white p-5 shadow-sm">
                    <img src="{{ $business['image'] }}" alt="{{ $business['title'] }}" class="h-40 w-full rounded-md object-cover grayscale">
                    <div class="mt-5">
                        <h3 class="text-lg font-black text-[#101c78]">{{ $business['title'] }}</h3>
                        <p class="mt-2 min-h-12 text-sm leading-6 text-slate-500">{{ $business['desc'] }}</p>
                        <div class="mt-5 flex items-center justify-between">
                            <span class="text-[10px] font-black uppercase tracking-wide text-amber-600">{{ $business['category'] }}</span>
                            <a href="#" class="text-lg font-black text-[#101c78]">-></a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
