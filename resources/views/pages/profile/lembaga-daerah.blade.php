@extends('layouts.app')

@section('title', 'Lembaga Daerah')

@section('content')
<x-profile.hero current="Lembaga Daerah" />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-8 sm:px-6">
    <div class="mb-8 flex items-center rounded-full bg-slate-100">
        <span class="mr-3 h-12 w-3 rounded-full bg-amber-400"></span>
        <h2 class="text-2xl font-black text-[#1a2586]">Lambang Daerah</h2>
    </div>

    <div class="grid gap-10 lg:grid-cols-[1fr_360px] lg:items-start">
        <div class="order-2 lg:order-1">
            <h2 class="text-2xl font-black text-[#1a2586]">Berikut adalah rincian filosofi dari komponen lambang tersebut</h2>

            <div class="mt-8 space-y-6">
                <article class="flex gap-5 rounded-[24px] bg-slate-200/80 p-8">
                    <span class="mt-1 h-8 w-8 shrink-0 rounded-full bg-white"></span>
                    <div>
                        <h3 class="font-black text-slate-500">Elemen Utama di Bagian Tengah</h3>
                        <ol class="mt-5 space-y-4 text-base font-semibold leading-7 text-slate-600">
                            <li>1. Menara Masjid Agung Jombang (Putih): Melambangkan masyarakat Jombang yang religius, tata beragama, memiliki moralitas yang tinggi, serta identitas Jombang yang dikenal luas sebagai Kota Santri.</li>
                            <li>2. Gapura Bentar (Candi Rimbi Conto/Candi Majapahit): Melambangkan latar belakang sejarah Jombang yang kuat, keterdekatan masyarakat dalam menerima kemajuan, serta pintu gerbang menuju gerak pembangunan yang dinamis.</li>
                            <li>3. Pendopo Kabupaten (Atap Hijau): Melambangkan tempat bernaung, pusat pemerintahan yang mengayomi, demokratis, dan senantiasa melayani seluruh lapisan masyarakat dengan adil.</li>
                        </ol>
                    </div>
                </article>

                <article class="flex gap-5 rounded-[24px] bg-slate-200/80 p-8">
                    <span class="mt-1 h-8 w-8 shrink-0 rounded-full bg-white"></span>
                    <div>
                        <h3 class="font-black text-slate-500">Elemen Keberagaman dan Ketahanan</h3>
                        <ol class="mt-5 space-y-4 text-base font-semibold leading-7 text-slate-600">
                            <li>1. Bintang Segi Lima Emas: Terletak di bagian paling atas, melambangkan Ketuhanan Yang Maha Esa serta cita-cita yang tinggi berdasarkan Pancasila.</li>
                            <li>2. Padi dan Kapas: Melambangkan kemakmuran dan kesejahteraan sandang dan pangan yang merata bagi seluruh warga Kabupaten Jombang.</li>
                            <li>3. Pita Putih Bertuliskan "Kabupaten Jombang": Menunjukkan identitas kesatuan wilayah hukum dan kedaulatan daerah yang resmi di bawah Negara Kesatuan Republik Indonesia.</li>
                        </ol>
                    </div>
                </article>

                <article class="flex gap-5 rounded-[24px] bg-slate-200/80 p-8">
                    <span class="mt-1 h-8 w-8 shrink-0 rounded-full bg-white"></span>
                    <div>
                        <h3 class="font-black text-slate-500">Filosofi Warna Latar Belakang (Perisai)</h3>
                        <ol class="mt-5 space-y-4 text-base font-semibold leading-7 text-slate-600">
                            <li>1. Warna Hijau: Melambangkan kesuburan tanah Jombang yang kaya akan potensi pertanian dan perkebunan, serta kedamaian hidup masyarakatnya.</li>
                            <li>2. Warna Merah: Melambangkan keberanian, ketegasan, kegigihan, dan semangat kepahlawanan dalam membela kebenaran serta memajukan daerah.</li>
                            <li>3. Warna Biru Langit: Melambangkan keluasan wawasan, kesetiaan, ketenangan, serta harapan masa depan yang cerah dan tata kelola pemerintahan yang bersih.</li>
                        </ol>
                    </div>
                </article>
            </div>
        </div>

        <div class="order-1 flex justify-center lg:order-2">
            <img src="{{ asset('images/logo-jombang.svg') }}" alt="Logo Kabupaten Jombang" class="h-80 w-auto object-contain drop-shadow-xl sm:h-96">
        </div>
    </div>
</section>
@endsection

