@extends('layouts.app')

@section('title', 'Kontak Desa Ngrimbi')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-28 pt-10 sm:px-6">
        <div class="rounded-3xl border border-slate-200 bg-white p-10 shadow-sm">
            <div class="grid gap-10 lg:grid-cols-[1.2fr_0.8fr]">
                <div>
                    <h1 class="text-3xl font-black text-[#101c78]">Kontak dan Aspirasi</h1>
                    <p class="mt-4 max-w-2xl text-sm text-slate-600">Sampaikan aspirasi, pertanyaan, atau laporan kepada Pemerintah Desa Ngrimbi. Setiap pesan akan masuk ke database dan dapat ditindaklanjuti oleh tim desa.</p>

                    <div class="mt-8 space-y-4 rounded-3xl bg-slate-50 p-6 text-sm text-slate-700">
                        <p><span class="font-black">Alamat:</span> Balai Desa Ngrimbi, Kecamatan Tembelang, Kabupaten Jombang.</p>
                        <p><span class="font-black">Telepon:</span> (0321) 123-456</p>
                        <p><span class="font-black">Email:</span> info@ngrimbi.id</p>
                    </div>
                </div>

                <div class="rounded-3xl bg-[#101c78] p-8 text-white shadow-xl">
                    <h2 class="text-2xl font-black">Form Aspirasi</h2>
                    <p class="mt-2 text-sm leading-7 text-slate-200">Tuliskan masukan atau keluhan Anda agar desa dapat memberikan pelayanan lebih baik.</p>

                    @if(session('success'))
                        <div class="mt-6 rounded-3xl bg-emerald-100 px-4 py-4 text-sm font-semibold text-emerald-900 text-slate-800">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="post" class="mt-6 space-y-4">
                        @csrf
                        <label class="block">
                            <span class="text-sm font-semibold text-slate-100">Nama</span>
                            <input type="text" name="name" value="{{ old('name') }}" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none" required>
                        </label>
                        <label class="block">
                            <span class="text-sm font-semibold text-slate-100">Email</span>
                            <input type="email" name="email" value="{{ old('email') }}" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none" required>
                        </label>
                        <label class="block">
                            <span class="text-sm font-semibold text-slate-100">Kategori</span>
                            <select name="category" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none">
                                <option value="">Umum</option>
                                <option value="Aspirasi">Aspirasi</option>
                                <option value="Layanan">Layanan</option>
                                <option value="PPID">PPID</option>
                            </select>
                        </label>
                        <label class="block">
                            <span class="text-sm font-semibold text-slate-100">Pesan</span>
                            <textarea name="message" rows="5" class="mt-2 w-full rounded-[30px] border border-slate-200 bg-white px-4 py-4 text-sm text-slate-900 outline-none" required>{{ old('message') }}</textarea>
                        </label>

                        <button type="submit" class="w-full rounded-3xl bg-amber-400 px-6 py-4 text-sm font-black text-[#101c78] hover:bg-amber-300">Kirim Aspirasi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
