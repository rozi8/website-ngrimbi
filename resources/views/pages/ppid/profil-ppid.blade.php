@extends('layouts.app')

@section('title', 'Profil PPID')

@section('content')
<x-ppid.hero current="Profil PPID" title="Profil PPID Desa Ngrimbi" subtitle="Pejabat Pengelola Informasi dan Dokumentasi sebagai wujud transparansi tata kelola Pemerintah Desa Ngrimbi." />

<section class="mx-auto max-w-7xl px-4 pb-28 pt-20 sm:px-6">
    <h2 class="text-3xl font-black text-[#0050b8]">Dasar Hukum</h2>
    <div class="mt-12 flex flex-wrap justify-center gap-10">
        @foreach (['UU No. 14 Tahun 2008 (KIP)', 'PP No. 61 Tahun 2010', 'Permendesa PPID Desa'] as $law)
            <span class="rounded-full bg-slate-200 px-12 py-4 text-sm font-black text-[#1a2586]">{{ $law }}</span>
        @endforeach
    </div>

    <h2 class="mt-20 text-3xl font-black text-[#0050b8]">Struktur PPID</h2>
    <div class="mt-10 space-y-10">
        @foreach ([
            ['SH', 'Samsul Hadi, S.Pd.I', 'Atasan PPID - Kepala Desa', 'Penanggung jawab akhir layanan informasi publik desa'],
            ['SC', 'Sucipto', 'PPID Pelaksana - Sekretaris Desa', 'Mengelola, menyimpan, dan melayani permohonan informasi'],
        ] as $person)
            <article class="flex flex-col gap-6 rounded-[32px] bg-slate-200/80 p-10 sm:flex-row sm:items-center sm:gap-10">
                <span class="grid h-20 w-20 shrink-0 place-items-center rounded-3xl bg-[#0050b8] text-xl font-black text-white">{{ $person[0] }}</span>
                <div>
                    <h3 class="text-2xl font-black text-slate-900">{{ $person[1] }}</h3>
                    <p class="mt-2 text-sm font-black text-amber-500">{{ $person[2] }}</p>
                    <p class="mt-3 text-base font-semibold text-slate-500">{{ $person[3] }}</p>
                </div>
            </article>
        @endforeach
    </div>

    <h2 class="mt-12 text-3xl font-black text-[#0050b8]">Tugas & Fungsi PPID</h2>
    <div class="mt-8 space-y-6">
        @foreach ([
            'Menyimpan, mendokumentasikan, dan menyediakan informasi publik desa.',
            'Melayani permohonan informasi dari masyarakat secara cepat dan tepat waktu.',
            'Menetapkan status informasi: terbuka, dikecualikan, atau perlu izin akses.',
            'Memutakhirkan Daftar Informasi Publik secara berkala minimal 1x per bulan.',
        ] as $task)
            <p class="flex gap-4 text-xl font-black text-slate-500"><span class="text-slate-600">*</span>{{ $task }}</p>
        @endforeach
    </div>

    <article class="mt-16 rounded-[32px] bg-slate-200/80 p-10">
        <h2 class="text-xl font-black uppercase text-slate-900">Maklumat Pelayanan Informasi</h2>
        <p class="mt-7 text-base font-semibold leading-7 text-slate-500">
            "Kami, Pemerintah Desa Ngrimbi, berkomitmen memberikan pelayanan informasi publik secara terbuka, cepat, tepat, dan sederhana sesuai peraturan perundang-undangan."
        </p>
    </article>

    <article class="mt-10 rounded-[32px] bg-slate-200/80 p-10">
        <h2 class="text-3xl font-black text-[#0050b8]">Kunjungi Kantor Kami</h2>
        <div class="mt-8 space-y-8">
            <div>
                <h3 class="font-black text-[#1a2586]">Kantor Desa Ngrimbi</h3>
                <p class="mt-2 text-sm font-semibold leading-6 text-slate-500">Jl. Raya Ngrimbi No. 1, Ds. Ngrimbi, Kec. Bareng, Kab. Jombang, Jawa Timur 61471</p>
            </div>
            <div>
                <h3 class="font-black text-[#1a2586]">Telepon / WhatsApp</h3>
                <p class="mt-2 text-sm font-semibold text-slate-500">(0321) 888001 / 0812-3456-7890</p>
            </div>
            <div>
                <h3 class="font-black text-[#1a2586]">Email Resmi</h3>
                <p class="mt-2 text-sm font-semibold text-slate-500">desangrimbi@jombangkab.go.id</p>
            </div>
        </div>
    </article>
</section>
@endsection
