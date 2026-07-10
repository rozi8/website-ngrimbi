@extends('layouts.app')

@section('title', 'Mobil Siaga Desa Ngrimbi')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
        <article class="rounded-3xl border border-slate-200 bg-white p-10 shadow-sm">
            <div class="grid gap-10 lg:grid-cols-[1fr_360px]">
                <div>
                    <h1 class="text-3xl font-black text-[#101c78]">Mobil Siaga Desa Ngrimbi</h1>
                    <p class="mt-4 max-w-3xl text-base leading-7 text-slate-600">Mobil siaga desa melayani keadaan darurat dan membantu pelayanan publik desa. Di halaman ini, warga dapat melihat status unit dan menghubungi nomor yang tersedia.</p>

                    <div class="mt-8 space-y-6">
                        <div class="rounded-3xl bg-slate-50 p-6">
                            <h2 class="text-xl font-black text-[#101c78]">Status Unit</h2>
                            <p class="mt-3 text-sm text-slate-600">Informasi dasar tentang kesiapan mobil siaga dan kontak darurat.</p>
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="rounded-3xl border border-slate-200 bg-[#f8fafc] p-6">
                                <p class="text-sm font-semibold text-slate-500">Nama Unit</p>
                                <p class="mt-3 text-xl font-black text-slate-900">Mobil Siaga Desa</p>
                            </div>
                            <div class="rounded-3xl border border-slate-200 bg-[#f8fafc] p-6">
                                <p class="text-sm font-semibold text-slate-500">Status</p>
                                <p class="mt-3 text-xl font-black text-emerald-600">Siap Dinas</p>
                            </div>
                        </div>

                        <div class="rounded-3xl border border-slate-200 bg-[#f8fafc] p-6">
                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm font-semibold text-slate-500">Kontak Darurat</p>
                                    <p class="mt-2 text-lg font-black text-slate-900">(0321) 123-456</p>
                                </div>
                                <a href="tel:+62321123456" class="rounded-full bg-[#101c78] px-6 py-3 text-sm font-black text-white hover:bg-slate-900">Hubungi Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="rounded-3xl bg-[#101c78] p-8 text-white shadow-xl">
                    <h2 class="text-2xl font-black">Layanan Mobil Siaga</h2>
                    <ul class="mt-6 space-y-4 text-sm leading-7">
                        <li class="rounded-3xl bg-[#0d1d4a] p-4">Penanganan darurat warga desa.</li>
                        <li class="rounded-3xl bg-[#0d1d4a] p-4">Dukungan medis dan evakuasi ringan.</li>
                        <li class="rounded-3xl bg-[#0d1d4a] p-4">Pengantaran dokumen penting ke kantor desa.</li>
                        <li class="rounded-3xl bg-[#0d1d4a] p-4">Mobilitas tim relawan dalam kegiatan desa.</li>
                    </ul>
                </aside>
            </div>
        </article>
    </section>
@endsection
