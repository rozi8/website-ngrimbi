@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <section class="mx-auto max-w-7xl px-4 pb-24 pt-10 sm:px-6">
        <div class="flex flex-col gap-6 rounded-3xl border border-slate-200 bg-white p-8 shadow-xl">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="text-3xl font-black text-[#101c78]">Admin CMS Desa Ngrimbi</h1>
                    <p class="mt-2 text-sm text-slate-500">Kelola konten publik, daftar PPID, UMKM/Pariwisata, aspirasi warga, dan status mobil siaga desa dari satu panel.</p>
                </div>
                <form action="{{ route('admin.logout') }}" method="post" class="sm:ml-auto">
                    @csrf
                    <button type="submit" class="rounded-full bg-slate-900 px-6 py-3 text-sm font-bold text-white hover:bg-slate-700">Logout</button>
                </form>
            </div>

            @if (session('success'))
                <div class="rounded-2xl bg-emerald-100 p-4 text-sm font-semibold text-emerald-800">{{ session('success') }}</div>
            @endif

            <div class="grid gap-6 xl:grid-cols-[1.5fr_1fr]">
                <div class="space-y-6">
                    <section class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <h2 class="text-xl font-black text-[#101c78]">Berita</h2>
                        <p class="mt-2 text-sm text-slate-600">Tambahkan berita desa yang akan tampil pada halaman Berita Terbaru.</p>

                        <form action="{{ route('admin.store') }}" method="post" class="mt-6 space-y-4">
                            @csrf
                            <input type="hidden" name="resource_type" value="news">

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Judul</span>
                                <input type="text" name="title" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Kategori</span>
                                <input type="text" name="category" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Contoh: Kegiatan Desa">
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Ringkasan</span>
                                <textarea name="excerpt" rows="3" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Ringkasan singkat berita..."></textarea>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Isi Berita</span>
                                <textarea name="body" rows="4" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Detail berita..."></textarea>
                            </label>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Gambar (URL)</span>
                                    <input type="url" name="image_url" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="https://...">
                                </label>
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Tanggal Terbit</span>
                                    <input type="date" name="published_at" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none">
                                </label>
                            </div>

                            <button type="submit" class="rounded-3xl bg-[#101c78] px-6 py-3 text-sm font-black text-white hover:bg-slate-900">Simpan Berita</button>
                        </form>
                    </section>

                    <section class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <h2 class="text-xl font-black text-[#101c78]">Agenda</h2>
                        <p class="mt-2 text-sm text-slate-600">Kelola jadwal kegiatan desa yang tampil di halaman Agenda.</p>

                        <form action="{{ route('admin.store') }}" method="post" class="mt-6 space-y-4">
                            @csrf
                            <input type="hidden" name="resource_type" value="agenda">

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Judul Kegiatan</span>
                                <input type="text" name="title" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                            </label>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Tanggal</span>
                                    <input type="date" name="event_date" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                </label>
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Waktu</span>
                                    <input type="text" name="time" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Contoh: 09.00 - 12.00">
                                </label>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Lokasi</span>
                                    <input type="text" name="location" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Balai Desa / Lapangan...">
                                </label>
                            </div>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Deskripsi</span>
                                <textarea name="description" rows="3" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Detail agenda..."></textarea>
                            </label>

                            <button type="submit" class="rounded-3xl bg-[#101c78] px-6 py-3 text-sm font-black text-white hover:bg-slate-900">Simpan Agenda</button>
                        </form>
                    </section>

                    <section class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <h2 class="text-xl font-black text-[#101c78]">Pengumuman / Transparansi</h2>
                        <p class="mt-2 text-sm text-slate-600">Tambahkan pengumuman yang ditampilkan di halaman Pengumuman.</p>

                        <form action="{{ route('admin.store') }}" method="post" class="mt-6 space-y-4">
                            @csrf
                            <input type="hidden" name="resource_type" value="announcement">

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Judul</span>
                                <input type="text" name="title" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Ringkasan</span>
                                <textarea name="excerpt" rows="3" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Ringkasan pengumuman..."></textarea>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Isi</span>
                                <textarea name="body" rows="3" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Detail pengumuman..."></textarea>
                            </label>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Tanggal Terbit</span>
                                    <input type="date" name="published_at" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none">
                                </label>
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Gambar (URL)</span>
                                    <input type="url" name="image_url" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="https://...">
                                </label>
                            </div>

                            <button type="submit" class="rounded-3xl bg-[#101c78] px-6 py-3 text-sm font-black text-white hover:bg-slate-900">Simpan Pengumuman</button>
                        </form>
                    </section>
                </div>

                <div class="space-y-6">
                    <section class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <h2 class="text-xl font-black text-[#101c78]">Daftar Informasi Publik</h2>
                        <p class="mt-2 text-sm text-slate-600">Kelola dokumen PPID yang ditampilkan pada halaman Daftar Informasi Publik.</p>

                        <form action="{{ route('admin.store') }}" method="post" class="mt-6 space-y-4">
                            @csrf
                            <input type="hidden" name="resource_type" value="ppid">

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Judul Dokumen</span>
                                <input type="text" name="title" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                            </label>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Kategori</span>
                                    <select name="category" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                        <option value="berkala">Berkala</option>
                                        <option value="serta-merta">Serta Merta</option>
                                        <option value="setiap-saat">Setiap Saat</option>
                                        <option value="dikecualikan">Dikecualikan</option>
                                    </select>
                                </label>
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Status</span>
                                    <input type="text" name="status" value="Tersedia" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none">
                                </label>
                            </div>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Deskripsi</span>
                                <textarea name="description" rows="3" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Deskripsi singkat..."></textarea>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Link File</span>
                                <input type="url" name="file_url" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="https://...">
                            </label>

                            <button type="submit" class="rounded-3xl bg-[#101c78] px-6 py-3 text-sm font-black text-white hover:bg-slate-900">Simpan Dokumen</button>
                        </form>
                    </section>

                    <section class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <h2 class="text-xl font-black text-[#101c78]">UMKM dan Pariwisata</h2>
                        <p class="mt-2 text-sm text-slate-600">Tambahkan daftar UMKM atau destinasi wisata yang akan ditampilkan ke publik.</p>

                        <form action="{{ route('admin.store') }}" method="post" class="mt-6 space-y-4">
                            @csrf
                            <input type="hidden" name="resource_type" value="listing">

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Tipe</span>
                                <select name="type" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                    <option value="umkm">UMKM</option>
                                    <option value="tourism">Destinasi Wisata</option>
                                </select>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Nama</span>
                                <input type="text" name="name" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Kategori</span>
                                <input type="text" name="category" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Contoh: Kuliner / Kerajinan">
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Deskripsi</span>
                                <textarea name="description" rows="3" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Deskripsi usaha atau objek wisata..."></textarea>
                            </label>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Gambar (URL)</span>
                                    <input type="url" name="image_url" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="https://...">
                                </label>
                                <label class="block">
                                    <span class="text-sm font-semibold text-slate-700">Kontak / Lokasi</span>
                                    <input type="text" name="contact" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="WhatsApp / Telepon / Alamat">
                                </label>
                            </div>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Lokasi</span>
                                <input type="text" name="location" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Desa Ngrimbi / Jombang">
                            </label>

                            <button type="submit" class="rounded-3xl bg-[#101c78] px-6 py-3 text-sm font-black text-white hover:bg-slate-900">Simpan Daftar</button>
                        </form>
                    </section>

                    <section class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                        <h2 class="text-xl font-black text-[#101c78]">Mobil Siaga Desa</h2>
                        <p class="mt-2 text-sm text-slate-600">Perbarui informasi mobil siaga untuk layanan darurat dan penugasan desa.</p>

                        <form action="{{ route('admin.store') }}" method="post" class="mt-6 space-y-4">
                            @csrf
                            <input type="hidden" name="resource_type" value="emergency">

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Nama Unit</span>
                                <input type="text" name="name" value="Mobil Siaga Desa" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Status</span>
                                <input type="text" name="status" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Siap Dinas / Dalam Perjalanan" required>
                            </label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Telepon</span>
                                <input type="text" name="phone" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Nomor kontak darurat..."></label>

                            <label class="block">
                                <span class="text-sm font-semibold text-slate-700">Keterangan</span>
                                <textarea name="notes" rows="3" class="mt-2 w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Catatan penugasan atau lokasi saat ini..."></textarea>
                            </label>

                            <label class="inline-flex items-center gap-3 text-sm font-semibold text-slate-700">
                                <input type="checkbox" name="availability" class="h-5 w-5 rounded border-slate-300 text-[#101c78] focus:ring-[#101c78]" value="1" checked>
                                Tersedia saat ini
                            </label>

                            <button type="submit" class="rounded-3xl bg-[#101c78] px-6 py-3 text-sm font-black text-white hover:bg-slate-900">Simpan Mobil Siaga</button>
                        </form>
                    </section>
                </div>
            </div>

            <section class="rounded-3xl border border-slate-200 bg-white p-6">
                <h2 class="text-xl font-black text-[#101c78]">Edit Cepat Konten</h2>
                <p class="mt-2 text-sm text-slate-600">Buka salah satu item untuk memperbarui data yang sudah tersimpan.</p>

                <div class="mt-6 grid gap-5 xl:grid-cols-2">
                    @foreach($news as $item)
                        <details class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                            <summary class="cursor-pointer text-sm font-black text-slate-900">Berita: {{ $item->title }}</summary>
                            <form action="{{ route('admin.update') }}" method="post" class="mt-5 space-y-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="news">
                                <input type="hidden" name="resource_id" value="{{ $item->id }}">
                                <input type="text" name="title" value="{{ $item->title }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                <input type="text" name="category" value="{{ $item->category }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Kategori">
                                <textarea name="excerpt" rows="2" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Ringkasan">{{ $item->excerpt }}</textarea>
                                <textarea name="body" rows="4" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Isi berita">{{ $item->body }}</textarea>
                                <input type="url" name="image_url" value="{{ $item->image_url }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="URL gambar">
                                <input type="date" name="published_at" value="{{ $item->published_at?->format('Y-m-d') }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none">
                                <button type="submit" class="rounded-full bg-[#101c78] px-5 py-2 text-xs font-black text-white">Update</button>
                            </form>
                        </details>
                    @endforeach

                    @foreach($agendaEvents as $event)
                        <details class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                            <summary class="cursor-pointer text-sm font-black text-slate-900">Agenda: {{ $event->title }}</summary>
                            <form action="{{ route('admin.update') }}" method="post" class="mt-5 space-y-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="agenda">
                                <input type="hidden" name="resource_id" value="{{ $event->id }}">
                                <input type="text" name="title" value="{{ $event->title }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                <input type="date" name="event_date" value="{{ $event->event_date?->format('Y-m-d') }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                <input type="text" name="time" value="{{ $event->time }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Waktu">
                                <input type="text" name="location" value="{{ $event->location }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Lokasi">
                                <textarea name="description" rows="3" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Deskripsi">{{ $event->description }}</textarea>
                                <button type="submit" class="rounded-full bg-[#101c78] px-5 py-2 text-xs font-black text-white">Update</button>
                            </form>
                            <form action="{{ route('admin.destroy') }}" method="post" class="mt-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="agenda">
                                <input type="hidden" name="resource_id" value="{{ $event->id }}">
                                <button type="submit" class="rounded-full bg-red-100 px-5 py-2 text-xs font-semibold text-red-700">Hapus</button>
                            </form>
                        </details>
                    @endforeach

                    @foreach($announcements as $item)
                        <details class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                            <summary class="cursor-pointer text-sm font-black text-slate-900">Pengumuman: {{ $item->title }}</summary>
                            <form action="{{ route('admin.update') }}" method="post" class="mt-5 space-y-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="announcement">
                                <input type="hidden" name="resource_id" value="{{ $item->id }}">
                                <input type="text" name="title" value="{{ $item->title }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                <textarea name="excerpt" rows="2" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Ringkasan">{{ $item->excerpt }}</textarea>
                                <textarea name="body" rows="3" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Isi">{{ $item->body }}</textarea>
                                <input type="url" name="image_url" value="{{ $item->image_url }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="URL gambar">
                                <input type="date" name="published_at" value="{{ $item->published_at?->format('Y-m-d') }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none">
                                <button type="submit" class="rounded-full bg-[#101c78] px-5 py-2 text-xs font-black text-white">Update</button>
                            </form>
                            <form action="{{ route('admin.destroy') }}" method="post" class="mt-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="announcement">
                                <input type="hidden" name="resource_id" value="{{ $item->id }}">
                                <button type="submit" class="rounded-full bg-red-100 px-5 py-2 text-xs font-semibold text-red-700">Hapus</button>
                            </form>
                        </details>
                    @endforeach

                    @foreach($documents as $doc)
                        <details class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                            <summary class="cursor-pointer text-sm font-black text-slate-900">PPID: {{ $doc->title }}</summary>
                            <form action="{{ route('admin.update') }}" method="post" class="mt-5 space-y-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="ppid">
                                <input type="hidden" name="resource_id" value="{{ $doc->id }}">
                                <input type="text" name="title" value="{{ $doc->title }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                <select name="category" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                    <option value="berkala" @selected($doc->category === 'berkala')>Berkala</option>
                                    <option value="serta-merta" @selected($doc->category === 'serta-merta')>Serta Merta</option>
                                    <option value="setiap-saat" @selected($doc->category === 'setiap-saat')>Setiap Saat</option>
                                    <option value="dikecualikan" @selected($doc->category === 'dikecualikan')>Dikecualikan</option>
                                </select>
                                <input type="text" name="status" value="{{ $doc->status }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Status">
                                <textarea name="description" rows="3" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Deskripsi">{{ $doc->description }}</textarea>
                                <input type="url" name="file_url" value="{{ $doc->file_url }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="URL file">
                                <button type="submit" class="rounded-full bg-[#101c78] px-5 py-2 text-xs font-black text-white">Update</button>
                            </form>
                        </details>
                    @endforeach

                    @foreach($listings as $listing)
                        <details class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                            <summary class="cursor-pointer text-sm font-black text-slate-900">Daftar: {{ $listing->name }}</summary>
                            <form action="{{ route('admin.update') }}" method="post" class="mt-5 space-y-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="listing">
                                <input type="hidden" name="resource_id" value="{{ $listing->id }}">
                                <select name="type" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                    <option value="umkm" @selected($listing->type === 'umkm')>UMKM</option>
                                    <option value="tourism" @selected($listing->type === 'tourism')>Destinasi Wisata</option>
                                </select>
                                <input type="text" name="name" value="{{ $listing->name }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                <input type="text" name="category" value="{{ $listing->category }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Kategori">
                                <textarea name="description" rows="3" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Deskripsi">{{ $listing->description }}</textarea>
                                <input type="url" name="image_url" value="{{ $listing->image_url }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="URL gambar">
                                <input type="text" name="contact" value="{{ $listing->contact }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Kontak">
                                <input type="text" name="location" value="{{ $listing->location }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Lokasi">
                                <button type="submit" class="rounded-full bg-[#101c78] px-5 py-2 text-xs font-black text-white">Update</button>
                            </form>
                        </details>
                    @endforeach

                    @foreach($emergencyVehicles as $vehicle)
                        <details class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                            <summary class="cursor-pointer text-sm font-black text-slate-900">Mobil Siaga: {{ $vehicle->name }}</summary>
                            <form action="{{ route('admin.update') }}" method="post" class="mt-5 space-y-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="emergency">
                                <input type="hidden" name="resource_id" value="{{ $vehicle->id }}">
                                <input type="text" name="name" value="{{ $vehicle->name }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                <input type="text" name="status" value="{{ $vehicle->status }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" required>
                                <input type="text" name="phone" value="{{ $vehicle->phone }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Telepon">
                                <textarea name="notes" rows="3" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm outline-none" placeholder="Keterangan">{{ $vehicle->notes }}</textarea>
                                <label class="inline-flex items-center gap-3 text-sm font-semibold text-slate-700">
                                    <input type="checkbox" name="availability" value="1" class="h-5 w-5 rounded border-slate-300 text-[#101c78] focus:ring-[#101c78]" @checked($vehicle->availability)>
                                    Tersedia saat ini
                                </label>
                                <div>
                                    <button type="submit" class="rounded-full bg-[#101c78] px-5 py-2 text-xs font-black text-white">Update</button>
                                </div>
                            </form>
                            <form action="{{ route('admin.destroy') }}" method="post" class="mt-3">
                                @csrf
                                <input type="hidden" name="resource_type" value="emergency">
                                <input type="hidden" name="resource_id" value="{{ $vehicle->id }}">
                                <button type="submit" class="rounded-full bg-red-100 px-5 py-2 text-xs font-semibold text-red-700">Hapus</button>
                            </form>
                        </details>
                    @endforeach
                </div>
            </section>

            <div class="space-y-6">
                <section class="rounded-3xl border border-slate-200 bg-white p-6">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <h2 class="text-xl font-black text-[#101c78]">Aspirasi Warga</h2>
                            <p class="mt-2 text-sm text-slate-600">Lihat aspirasi warga yang masuk melalui halaman kontak.</p>
                        </div>
                    </div>

                    @if($aspirations->isEmpty())
                        <p class="mt-6 rounded-3xl bg-slate-50 p-6 text-sm text-slate-600">Belum ada aspirasi masuk.</p>
                    @else
                        <div class="mt-6 space-y-4">
                            @foreach($aspirations as $aspiration)
                                <article class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                                        <div>
                                            <h3 class="text-base font-black text-slate-900">{{ $aspiration->name }}</h3>
                                            <p class="mt-1 text-sm text-slate-500">{{ $aspiration->email }} · {{ $aspiration->category ?? 'Umum' }}</p>
                                        </div>
                                        <form action="{{ route('admin.destroy') }}" method="post" class="inline-flex items-center justify-end gap-3">
                                            @csrf
                                            <input type="hidden" name="resource_type" value="aspiration">
                                            <input type="hidden" name="resource_id" value="{{ $aspiration->id }}">
                                            <button type="submit" class="rounded-full bg-red-100 px-4 py-2 text-sm font-semibold text-red-700 hover:bg-red-200">Hapus</button>
                                        </form>
                                    </div>
                                    <p class="mt-4 text-sm text-slate-700">{{ $aspiration->message }}</p>
                                    <div class="mt-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                        <p class="text-xs font-semibold text-slate-500">Dikirim pada {{ $aspiration->created_at->format('d M Y H:i') }} &middot; Status: {{ $aspiration->status }}</p>
                                        <form action="{{ route('admin.update') }}" method="post" class="flex flex-wrap items-center gap-2">
                                            @csrf
                                            <input type="hidden" name="resource_type" value="aspiration">
                                            <input type="hidden" name="resource_id" value="{{ $aspiration->id }}">
                                            <select name="status" class="rounded-full border border-slate-200 bg-white px-4 py-2 text-xs font-semibold text-slate-700">
                                                <option value="new" @selected($aspiration->status === 'new')>Baru</option>
                                                <option value="diproses" @selected($aspiration->status === 'diproses')>Diproses</option>
                                                <option value="selesai" @selected($aspiration->status === 'selesai')>Selesai</option>
                                            </select>
                                            <button type="submit" class="rounded-full bg-[#101c78] px-4 py-2 text-xs font-black text-white">Update Status</button>
                                        </form>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    @endif
                </section>
            </div>

            <div class="grid gap-6 xl:grid-cols-2">
                <section class="rounded-3xl border border-slate-200 bg-white p-6">
                    <h2 class="text-xl font-black text-[#101c78]">Konten Berita</h2>
                    <div class="mt-6 space-y-4">
                        @foreach($news as $item)
                            <article class="rounded-3xl border border-slate-200 bg-slate-50 p-4">
                                <div class="flex flex-wrap items-center justify-between gap-3">
                                    <div>
                                        <h3 class="text-sm font-black text-slate-900">{{ $item->title }}</h3>
                                        <p class="mt-1 text-xs text-slate-500">{{ $item->category ?? 'Lainnya' }} · {{ $item->published_at?->format('d M Y') ?? $item->created_at->format('d M Y') }}</p>
                                    </div>
                                    <form action="{{ route('admin.destroy') }}" method="post" class="inline-flex">
                                        @csrf
                                        <input type="hidden" name="resource_type" value="news">
                                        <input type="hidden" name="resource_id" value="{{ $item->id }}">
                                        <button type="submit" class="rounded-full bg-red-100 px-4 py-2 text-xs font-semibold text-red-700">Hapus</button>
                                    </form>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section class="rounded-3xl border border-slate-200 bg-white p-6">
                    <h2 class="text-xl font-black text-[#101c78]">Daftar Informasi PPID & Listing</h2>
                    <div class="mt-6 space-y-4">
                        @foreach($documents as $doc)
                            <article class="rounded-3xl border border-slate-200 bg-slate-50 p-4">
                                <div class="flex items-center justify-between gap-3">
                                    <div>
                                        <h3 class="text-sm font-black text-slate-900">{{ $doc->title }}</h3>
                                        <p class="mt-1 text-xs text-slate-500">{{ ucfirst($doc->category) }} · {{ $doc->status }}</p>
                                    </div>
                                    <form action="{{ route('admin.destroy') }}" method="post" class="inline-flex">
                                        @csrf
                                        <input type="hidden" name="resource_type" value="ppid">
                                        <input type="hidden" name="resource_id" value="{{ $doc->id }}">
                                        <button type="submit" class="rounded-full bg-red-100 px-4 py-2 text-xs font-semibold text-red-700">Hapus</button>
                                    </form>
                                </div>
                            </article>
                        @endforeach

                        @foreach($listings as $listing)
                            <article class="rounded-3xl border border-slate-200 bg-slate-50 p-4">
                                <div class="flex flex-wrap items-center justify-between gap-3">
                                    <div>
                                        <h3 class="text-sm font-black text-slate-900">{{ $listing->name }}</h3>
                                        <p class="mt-1 text-xs text-slate-500">{{ ucfirst($listing->type) }} · {{ $listing->category ?? 'Umum' }}</p>
                                    </div>
                                    <form action="{{ route('admin.destroy') }}" method="post" class="inline-flex">
                                        @csrf
                                        <input type="hidden" name="resource_type" value="listing">
                                        <input type="hidden" name="resource_id" value="{{ $listing->id }}">
                                        <button type="submit" class="rounded-full bg-red-100 px-4 py-2 text-xs font-semibold text-red-700">Hapus</button>
                                    </form>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
