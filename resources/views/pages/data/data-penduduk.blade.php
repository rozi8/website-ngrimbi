@extends('layouts.app')

@section('title', 'Data Penduduk')

@section('content')
<x-data.hero current="Data Penduduk" />

<section class="mx-auto max-w-7xl px-4 pb-32 pt-28 sm:px-6">
    <div class="grid gap-6 md:grid-cols-4">
        @foreach ([
            ['4.789 jiwa', 'Total Penduduk'],
            ['1.450 KK', 'Kepala Keluarga'],
            ['2.420', 'Laki-Laki'],
            ['2.369', 'Perempuan'],
        ] as $stat)
            <article class="rounded-[28px] bg-slate-200/80 p-8 text-center">
                <div class="mx-auto mb-4 grid h-10 w-10 place-items-center rounded-full bg-slate-400 text-white">o</div>
                <h2 class="text-3xl font-black text-slate-900">{{ $stat[0] }}</h2>
                <p class="mt-3 text-sm font-semibold text-slate-500">{{ $stat[1] }}</p>
            </article>
        @endforeach
    </div>

    <div class="mt-28 grid gap-8 lg:grid-cols-2">
        <article class="rounded-[28px] bg-slate-200/80 p-8">
            <h2 class="text-xl font-black uppercase text-[#1a2586]">Komposisi Jenis Kelamin</h2>
            <div class="mt-6 flex flex-wrap items-center gap-8">
                <div class="h-36 w-36 rounded-full" style="background: conic-gradient(#82f312 0 40%, #159f91 40% 100%)">
                    <div class="m-auto mt-7 h-20 w-20 rounded-full bg-slate-200/95"></div>
                </div>
                <div class="space-y-4 text-sm font-black text-slate-700">
                    <p><span class="mr-3 inline-block h-5 w-5 bg-[#82f312]"></span>Laki-laki - 40 %</p>
                    <p><span class="mr-3 inline-block h-5 w-5 bg-[#159f91]"></span>Perempuan - 60 %</p>
                </div>
            </div>
        </article>

        <article class="rounded-[28px] bg-slate-200/80 p-8">
            <h2 class="text-xl font-black uppercase text-[#1a2586]">Kelompok Usia</h2>
            <div class="mt-6 space-y-4">
                @foreach ([['0-14 tahun (Anak)', '20%'], ['15-64 tahun (Produktif)', '70%'], ['65+ tahun (Lansia)', '10%']] as $row)
                    <div>
                        <div class="mb-1 flex justify-between text-sm font-black text-slate-700"><span>{{ $row[0] }}</span><span>{{ $row[1] }}</span></div>
                        <div class="h-3 rounded-full bg-slate-300"><div class="h-3 rounded-full bg-[#82f312]" style="width: {{ $row[1] }}"></div></div>
                    </div>
                @endforeach
            </div>
        </article>

        <article class="rounded-[28px] bg-slate-200/80 p-8">
            <h2 class="text-xl font-black uppercase text-[#1a2586]">Tingkat Pendidikan</h2>
            <div class="mt-6 space-y-4">
                @foreach ([['Tidak/Belum Sekolah', '20%'], ['SD / Sederajat', '60%'], ['SMP / Sederajat', '40%'], ['SMA / Sederajat', '35%'], ['Diploma / Sarjana', '10%']] as $row)
                    <div>
                        <div class="mb-1 flex justify-between text-sm font-black text-slate-700"><span>{{ $row[0] }}</span><span>{{ $row[1] }}</span></div>
                        <div class="h-3 rounded-full bg-slate-300"><div class="h-3 rounded-full bg-violet-500" style="width: {{ $row[1] }}"></div></div>
                    </div>
                @endforeach
            </div>
        </article>

        <article class="rounded-[28px] bg-slate-200/80 p-8">
            <h2 class="text-xl font-black uppercase text-[#1a2586]">Mata Pencaharian Utama</h2>
            <div class="mt-6 space-y-4">
                @foreach ([['Petani / Buruh Tani', '60%'], ['Wiraswasta / UMKM', '35%'], ['Buruh / Karyawan', '20%'], ['PNS / TNI / Polri', '10%'], ['Lainnya', '15%']] as $row)
                    <div>
                        <div class="mb-1 flex justify-between text-sm font-black text-slate-700"><span>{{ $row[0] }}</span><span>{{ $row[1] }}</span></div>
                        <div class="h-3 rounded-full bg-slate-300"><div class="h-3 rounded-full bg-emerald-600" style="width: {{ $row[1] }}"></div></div>
                    </div>
                @endforeach
            </div>
        </article>
    </div>

    <div class="mt-28 overflow-hidden rounded-md bg-white shadow-sm">
        <table class="w-full min-w-[720px] text-left text-sm font-bold text-slate-700">
            <thead class="bg-slate-200/80 text-slate-800">
                <tr>
                    <th class="px-10 py-8">DUSUN</th>
                    <th class="px-10 py-8">JUMLAH KK</th>
                    <th class="px-10 py-8">JUMLAH JIWA</th>
                    <th class="px-10 py-8">LAKI-LAKI</th>
                    <th class="px-10 py-8">PEREMPUAN</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 bg-slate-50">
                @foreach ([['DUSUN MUTERSARI', '120', '450', '220', '230'], ['DUSUN MUTERSARI', '180', '680', '330', '350'], ['DUSUN MUTERSARI', '140', '520', '255', '265']] as $row)
                    <tr>
                        @foreach ($row as $cell)
                            <td class="px-10 py-8">{{ $cell }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p class="mt-12 max-w-6xl text-xl font-black leading-8 text-slate-500">
        Sumber: data diambil dari Sistem Informasi Desa / Dispendukcapil Kabupaten Jombang. Angka pada halaman ini merupakan data resmi terbaru dari kantor desa
    </p>
</section>
@endsection
