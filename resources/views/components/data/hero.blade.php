@props(['current', 'eyebrow' => 'Data Desa'])

<section class="mx-auto max-w-7xl px-4 pt-5 sm:px-6">
    <p class="mb-5 text-xs font-semibold text-slate-500">
        Home <span class="mx-1">&gt;</span> Data <span class="mx-1">&gt;</span> {{ $current }}
    </p>

    <div class="rounded-[26px] bg-[#1a2586] px-7 py-16 text-white shadow-sm sm:px-12">
        <p class="text-sm font-black uppercase tracking-[0.18em] text-amber-400">{{ $eyebrow }}</p>
        <h1 class="mt-3 text-4xl font-black leading-tight sm:text-5xl">Data Desa Ngrimbi</h1>
        <p class="mt-5 text-sm text-blue-100">Kecamatan Bareng, Kabupaten Jombang - data kependudukan & produk hukum desa</p>
    </div>
</section>
