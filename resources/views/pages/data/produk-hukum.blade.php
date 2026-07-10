@extends('layouts.app')

@section('title', 'Produk Hukum')

@section('content')
<x-data.hero current="Produk Hukum" eyebrow="Informasi Publik" />

<section class="mx-auto max-w-7xl px-4 pb-40 pt-16 sm:px-6">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-center">
        <label class="relative flex-1">
            <span class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">Q</span>
            <input type="search" data-law-search placeholder="Cari Produk Hukum..." class="w-full rounded-full bg-slate-200/80 py-4 pl-12 pr-5 text-sm font-bold text-slate-600 outline-none placeholder:text-slate-400">
        </label>
        <div class="flex flex-wrap gap-3" data-law-filters>
            @foreach ([['Semua', 'semua'], ['Perdes', 'perdes'], ['Perkades', 'perkades'], ['SK Kepala Desa', 'sk']] as $filter)
                <button type="button" data-law-filter="{{ $filter[1] }}" class="rounded-full px-7 py-3 text-xs font-black transition {{ $loop->first ? 'bg-amber-400 text-white' : 'bg-slate-200 text-[#1a2586] hover:bg-slate-300' }}" aria-pressed="{{ $loop->first ? 'true' : 'false' }}">{{ $filter[0] }}</button>
            @endforeach
        </div>
    </div>

    <div class="mt-6 overflow-hidden rounded-md bg-white shadow-sm">
        <table class="w-full min-w-[840px] text-left text-sm font-bold text-slate-800">
            <thead class="bg-slate-200/80">
                <tr>
                    <th class="px-8 py-7">Jenis</th>
                    <th class="px-8 py-7">Judul & Nomor</th>
                    <th class="px-8 py-7">Tahun</th>
                    <th class="px-8 py-7 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100" data-law-list>
                @foreach ([
                    ['Perdes', 'perdes', 'Peraturan Desa tentang APBDes', '01/PERDES/2023', '2023', 'bg-blue-200 text-[#1a2586]'],
                    ['Perdes', 'perdes', 'Peraturan Desa tentang RPJMDes', '05/PERDES/2021', '2021', 'bg-blue-200 text-[#1a2586]'],
                    ['Perkades', 'perkades', 'Peraturan Kepala Desa tentang Pelaksanaan APBDes', '02/PERKADES/2023', '2023', 'bg-amber-200 text-amber-600'],
                    ['SK Kades', 'sk', 'Keputusan Kepala Desa tentang Struktur Perangkat Desa', '12/SK KADES/2022', '2022', 'bg-emerald-200 text-emerald-700'],
                    ['SK Kades', 'sk', 'Keputusan Kepala Desa tentang Penetapan Perangkat Desa', '15/SK KADES/2022', '2022', 'bg-emerald-200 text-emerald-700'],
                ] as $law)
                    <tr data-law-item data-category="{{ $law[1] }}" data-title="{{ strtolower($law[2] . ' ' . $law[3] . ' ' . $law[4]) }}">
                        <td class="px-8 py-7"><span class="rounded-full {{ $law[5] }} px-5 py-3 text-sm font-black">{{ $law[0] }}</span></td>
                        <td class="px-8 py-7"><h3 class="font-black">{{ $law[2] }}</h3><p class="mt-1 text-xs font-black text-[#1a2586]">NO. {{ $law[3] }}</p></td>
                        <td class="px-8 py-7">{{ $law[4] }}</td>
                        <td class="px-8 py-7 text-center"><button class="rounded-full bg-blue-200 px-8 py-3 text-xs font-black uppercase text-white">Unduh</button></td>
                    </tr>
                @endforeach
                <tr class="hidden" data-law-empty><td colspan="4" class="px-8 py-10 text-center text-slate-500">Produk hukum tidak ditemukan.</td></tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
