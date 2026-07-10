<nav class="sticky top-0 z-50 bg-white/95 shadow-sm backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6">
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('images/logo-jombang.svg') }}" alt="Logo Kabupaten Jombang" class="h-12 w-10 object-contain">
            <span class="leading-tight">
                <span class="block text-[10px] font-semibold uppercase tracking-[0.18em] text-slate-500">Pemerintah Desa</span>
                <span class="block text-lg font-black text-[#101c78]">NGRIMBI</span>
            </span>
        </a>

        <div class="hidden items-center gap-7 text-sm font-semibold text-slate-500 md:flex">
            <a href="/" class="{{ request()->is('/') ? 'text-amber-500' : 'hover:text-[#101c78]' }}">Home</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-amber-500' : 'hover:text-[#101c78]' }}">Kontak</a>

            <div class="group relative py-2">
                <button class="{{ request()->routeIs('profile.*') ? 'text-amber-500' : 'hover:text-[#101c78]' }} flex items-center gap-1 font-semibold">
                    Profil
                    <span class="text-[10px]">v</span>
                </button>
                <div class="invisible absolute left-0 top-full w-56 translate-y-2 rounded-md bg-white p-2 opacity-0 shadow-xl ring-1 ring-slate-100 transition group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                    <a href="{{ route('profile.visi-misi') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Visi Misi</a>
                    <a href="{{ route('profile.sejarah') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Sejarah</a>
                    <a href="{{ route('profile.geografis') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Geografis</a>
                    <a href="{{ route('profile.struktur-organisasi') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Struktur Organisasi</a>
                    <a href="{{ route('profile.lembaga-daerah') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Lembaga Daerah</a>
                </div>
            </div>

            <div class="group relative py-2">
                <button class="{{ request()->routeIs('service.*') ? 'text-amber-500' : 'hover:text-[#101c78]' }} flex items-center gap-1 font-semibold">
                    Layanan
                    <span class="text-[10px]">v</span>
                </button>
                <div class="invisible absolute left-0 top-full w-60 translate-y-2 rounded-md bg-white p-2 opacity-0 shadow-xl ring-1 ring-slate-100 transition group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                    <a href="{{ route('service.kependudukan') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Kependudukan</a>
                    <a href="{{ route('service.perizinan') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Perizinan</a>
                    <a href="{{ route('service.kesehatan') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Kesehatan</a>
                    <a href="{{ route('service.pendidikan') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Pendidikan</a>
                    <a href="{{ route('service.pajak-retribusi') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Pajak & Retribusi</a>
                    <a href="{{ route('service.ketenagakerjaan') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Ketenagakerjaan</a>
                   <a href="{{ route('service.mobil-siaga') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Mobil Siaga</a>
                </div>
            </div>
            <div class="group relative py-2">
                <button class="{{ request()->routeIs('information.*') ? 'text-amber-500' : 'hover:text-[#101c78]' }} flex items-center gap-1 font-semibold">
                    Informasi
                    <span class="text-[10px]">v</span>
                </button>
                <div class="invisible absolute left-0 top-full w-60 translate-y-2 rounded-md bg-white p-2 opacity-0 shadow-xl ring-1 ring-slate-100 transition group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                    <a href="{{ route('information.berita-terbaru') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Berita Terbaru</a>
                    <a href="{{ route('information.agenda') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Agenda</a>
                    <a href="{{ route('information.pengumuman') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Pengumuman</a>
                    <a href="{{ route('information.transparansi') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Transparansi</a>
                    <a href="{{ route('information.regulasi') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Regulasi</a>
                </div>
            </div>
            <div class="group relative py-2">
                <button class="{{ request()->routeIs('data.*') ? 'text-amber-500' : 'hover:text-[#101c78]' }} flex items-center gap-1 font-semibold">
                    Data
                    <span class="text-[10px]">v</span>
                </button>
                <div class="invisible absolute left-0 top-full w-56 translate-y-2 rounded-md bg-white p-2 opacity-0 shadow-xl ring-1 ring-slate-100 transition group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                    <a href="{{ route('data.data-penduduk') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Data Penduduk</a>
                    <a href="{{ route('data.produk-hukum') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Produk Hukum</a>
                </div>
            </div>
            <div class="group relative py-2">
                <button class="{{ request()->routeIs('tourism.*') ? 'text-amber-500' : 'hover:text-[#101c78]' }} flex items-center gap-1 font-semibold">
                    Pariwisata
                    <span class="text-[10px]">v</span>
                </button>
                <div class="invisible absolute left-0 top-full w-60 translate-y-2 rounded-md bg-white p-2 opacity-0 shadow-xl ring-1 ring-slate-100 transition group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                    <a href="{{ route('tourism.destinasi-wisata') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Destinasi Wisata</a>
                    <a href="{{ route('tourism.event-festival') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Event & Festival</a>
                    <a href="{{ route('tourism.kuliner-khas') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Kuliner Khas</a>
                    <a href="{{ route('tourism.umkm-desa') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">UMKM Desa</a>
                    <a href="{{ route('tourism.kontak-informasi') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Kontak & Informasi</a>
                </div>
            </div>
            <div class="group relative py-2">
                <button class="{{ request()->routeIs('ppid.*') ? 'text-amber-500' : 'hover:text-[#101c78]' }} flex items-center gap-1 font-semibold">
                    PPID
                    <span class="text-[10px]">v</span>
                </button>
                <div class="invisible absolute right-0 top-full w-60 translate-y-2 rounded-md bg-white p-2 opacity-0 shadow-xl ring-1 ring-slate-100 transition group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                    <a href="{{ route('ppid.profil-ppid') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Profil PPID</a>
                    <a href="{{ route('ppid.daftar-informasi-publik') }}" class="block rounded px-4 py-3 text-sm hover:bg-slate-50 hover:text-[#101c78]">Daftar Informasi Publik</a>
                </div>
            </div>
        </div>

        <button
            id="mobile-menu-button"
            class="flex h-10 w-10 flex-col items-center justify-center gap-1.5 rounded-md border border-slate-200 text-[#101c78] md:hidden"
            type="button"
            aria-label="Buka menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <span class="block h-0.5 w-5 bg-current"></span>
            <span class="block h-0.5 w-5 bg-current"></span>
            <span class="block h-0.5 w-5 bg-current"></span>
        </button>
    </div>

    <div id="mobile-menu" class="hidden border-t border-slate-100 bg-white px-4 py-4 shadow-lg md:hidden">
        <div class="space-y-1 text-sm font-semibold text-slate-600">
            <a href="/" class="{{ request()->is('/') ? 'bg-amber-50 text-amber-600' : 'text-slate-600' }} block rounded-md px-4 py-3">
                Home
            </a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'bg-amber-50 text-amber-600' : 'text-slate-600' }} block rounded-md px-4 py-3">
                Kontak
            </a>

            <div>
                <button
                    id="mobile-profile-button"
                    class="{{ request()->routeIs('profile.*') ? 'bg-amber-50 text-amber-600' : 'text-slate-600' }} flex w-full items-center justify-between rounded-md px-4 py-3 text-left font-semibold"
                    type="button"
                    aria-expanded="{{ request()->routeIs('profile.*') ? 'true' : 'false' }}"
                    aria-controls="mobile-profile-menu"
                >
                    <span>Profil</span>
                    <span class="text-xs">v</span>
                </button>
                <div id="mobile-profile-menu" class="{{ request()->routeIs('profile.*') ? '' : 'hidden' }} mt-1 space-y-1 rounded-md bg-slate-50 p-2">
                    <a href="{{ route('profile.visi-misi') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Visi Misi</a>
                    <a href="{{ route('profile.sejarah') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Sejarah</a>
                    <a href="{{ route('profile.geografis') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Geografis</a>
                    <a href="{{ route('profile.struktur-organisasi') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Struktur Organisasi</a>
                    <a href="{{ route('profile.lembaga-daerah') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Lembaga Daerah</a>
                </div>
            </div>

            <div>
                <button
                    id="mobile-service-button"
                    class="{{ request()->routeIs('service.*') ? 'bg-amber-50 text-amber-600' : 'text-slate-600' }} flex w-full items-center justify-between rounded-md px-4 py-3 text-left font-semibold"
                    type="button"
                    aria-expanded="{{ request()->routeIs('service.*') ? 'true' : 'false' }}"
                    aria-controls="mobile-service-menu"
                >
                    <span>Layanan</span>
                    <span class="text-xs">v</span>
                </button>
                <div id="mobile-service-menu" class="{{ request()->routeIs('service.*') ? '' : 'hidden' }} mt-1 space-y-1 rounded-md bg-slate-50 p-2">
                    <a href="{{ route('service.kependudukan') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Kependudukan</a>
                    <a href="{{ route('service.perizinan') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Perizinan</a>
                    <a href="{{ route('service.kesehatan') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Kesehatan</a>
                    <a href="{{ route('service.pendidikan') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Pendidikan</a>
                    <a href="{{ route('service.pajak-retribusi') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Pajak & Retribusi</a>
                    <a href="{{ route('service.ketenagakerjaan') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Ketenagakerjaan</a>
                    <a href="{{ route('service.mobil-siaga') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Mobil Siaga</a>
                </div>
            </div>
            <div>
                <button
                    id="mobile-information-button"
                    class="{{ request()->routeIs('information.*') ? 'bg-amber-50 text-amber-600' : 'text-slate-600' }} flex w-full items-center justify-between rounded-md px-4 py-3 text-left font-semibold"
                    type="button"
                    aria-expanded="{{ request()->routeIs('information.*') ? 'true' : 'false' }}"
                    aria-controls="mobile-information-menu"
                >
                    <span>Informasi</span>
                    <span class="text-xs">v</span>
                </button>
                <div id="mobile-information-menu" class="{{ request()->routeIs('information.*') ? '' : 'hidden' }} mt-1 space-y-1 rounded-md bg-slate-50 p-2">
                    <a href="{{ route('information.berita-terbaru') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Berita Terbaru</a>
                    <a href="{{ route('information.agenda') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Agenda</a>
                    <a href="{{ route('information.pengumuman') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Pengumuman</a>
                    <a href="{{ route('information.transparansi') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Transparansi</a>
                    <a href="{{ route('information.regulasi') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Regulasi</a>
                </div>
            </div>
            <div>
                <button
                    id="mobile-data-button"
                    class="{{ request()->routeIs('data.*') ? 'bg-amber-50 text-amber-600' : 'text-slate-600' }} flex w-full items-center justify-between rounded-md px-4 py-3 text-left font-semibold"
                    type="button"
                    aria-expanded="{{ request()->routeIs('data.*') ? 'true' : 'false' }}"
                    aria-controls="mobile-data-menu"
                >
                    <span>Data</span>
                    <span class="text-xs">v</span>
                </button>
                <div id="mobile-data-menu" class="{{ request()->routeIs('data.*') ? '' : 'hidden' }} mt-1 space-y-1 rounded-md bg-slate-50 p-2">
                    <a href="{{ route('data.data-penduduk') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Data Penduduk</a>
                    <a href="{{ route('data.produk-hukum') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Produk Hukum</a>
                </div>
            </div>
            <div>
                <button
                    id="mobile-tourism-button"
                    class="{{ request()->routeIs('tourism.*') ? 'bg-amber-50 text-amber-600' : 'text-slate-600' }} flex w-full items-center justify-between rounded-md px-4 py-3 text-left font-semibold"
                    type="button"
                    aria-expanded="{{ request()->routeIs('tourism.*') ? 'true' : 'false' }}"
                    aria-controls="mobile-tourism-menu"
                >
                    <span>Pariwisata</span>
                    <span class="text-xs">v</span>
                </button>
                <div id="mobile-tourism-menu" class="{{ request()->routeIs('tourism.*') ? '' : 'hidden' }} mt-1 space-y-1 rounded-md bg-slate-50 p-2">
                    <a href="{{ route('tourism.destinasi-wisata') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Destinasi Wisata</a>
                    <a href="{{ route('tourism.event-festival') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Event & Festival</a>
                    <a href="{{ route('tourism.kuliner-khas') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Kuliner Khas</a>
                    <a href="{{ route('tourism.umkm-desa') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">UMKM Desa</a>
                    <a href="{{ route('tourism.kontak-informasi') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Kontak & Informasi</a>
                </div>
            </div>
            <div>
                <button
                    id="mobile-ppid-button"
                    class="{{ request()->routeIs('ppid.*') ? 'bg-amber-50 text-amber-600' : 'text-slate-600' }} flex w-full items-center justify-between rounded-md px-4 py-3 text-left font-semibold"
                    type="button"
                    aria-expanded="{{ request()->routeIs('ppid.*') ? 'true' : 'false' }}"
                    aria-controls="mobile-ppid-menu"
                >
                    <span>PPID</span>
                    <span class="text-xs">v</span>
                </button>
                <div id="mobile-ppid-menu" class="{{ request()->routeIs('ppid.*') ? '' : 'hidden' }} mt-1 space-y-1 rounded-md bg-slate-50 p-2">
                    <a href="{{ route('ppid.profil-ppid') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Profil PPID</a>
                    <a href="{{ route('ppid.daftar-informasi-publik') }}" class="block rounded px-4 py-3 hover:bg-white hover:text-[#101c78]">Daftar Informasi Publik</a>
                </div>
            </div>
        </div>
    </div>
</nav>







