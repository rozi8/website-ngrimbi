@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
    <section class="mx-auto max-w-xl px-4 py-24 sm:px-6">
        <div class="rounded-3xl border border-slate-200 bg-white p-10 shadow-xl">
            <h1 class="text-3xl font-black text-[#101c78]">Admin CMS Desa Ngrimbi</h1>
            <p class="mt-3 text-sm text-slate-500">Masuk menggunakan akun admin untuk mengelola berita, agenda, PPID, UMKM, dan mobil siaga desa.</p>

            @if ($errors->any())
                <div class="mt-6 rounded-2xl bg-red-100 p-4 text-sm text-red-700">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="post" class="mt-10 space-y-6">
                @csrf
                <label class="block">
                    <span class="text-sm font-semibold text-slate-700">Email Admin</span>
                    <input type="email" name="email" value="{{ old('email') }}" class="mt-3 w-full rounded-3xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm outline-none focus:border-[#101c78] focus:ring-2 focus:ring-[#101c78]/10" required>
                </label>

                <label class="block">
                    <span class="text-sm font-semibold text-slate-700">Kata Sandi</span>
                    <input type="password" name="password" class="mt-3 w-full rounded-3xl border border-slate-200 bg-slate-50 px-5 py-4 text-sm outline-none focus:border-[#101c78] focus:ring-2 focus:ring-[#101c78]/10" required>
                </label>

                <button type="submit" class="w-full rounded-3xl bg-amber-400 px-6 py-4 text-sm font-black text-[#101c78] hover:bg-amber-300">Masuk</button>

                <p class="text-xs text-slate-500">Gunakan kredensial yang disimpan di file .env untuk lingkungan produksi.</p>
            </form>
        </div>
    </section>
@endsection
