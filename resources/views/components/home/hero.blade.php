@php
    $services = [
        ['icon' => 'document', 'title' => 'Administrasi', 'color' => 'text-[#101c78]', 'href' => route('service.kependudukan')],
        ['icon' => 'heart', 'title' => 'Kesehatan', 'color' => 'text-amber-600', 'href' => route('service.kesehatan')],
        ['icon' => 'graduation', 'title' => 'Pendidikan', 'color' => 'text-emerald-600', 'href' => route('service.pendidikan')],
        ['icon' => 'wallet', 'title' => 'Pajak Daerah', 'color' => 'text-violet-600', 'href' => route('service.pajak-retribusi')],
        ['icon' => 'briefcase', 'title' => 'Ketenagakerjaan', 'color' => 'text-rose-600', 'href' => route('service.ketenagakerjaan')],
        ['icon' => 'clipboard', 'title' => 'Perizinan', 'color' => 'text-orange-600', 'href' => route('service.perizinan')],
    ];
@endphp

<section id="profil" class="relative">
    <div class="relative min-h-[660px] overflow-hidden bg-slate-950">
        <img
            src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=1800&q=80"
            alt="Pemandangan alam Desa Ngrimbi"
            class="absolute inset-0 h-full w-full object-cover"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-slate-900/35 to-slate-950/20"></div>
        <div class="absolute inset-x-0 bottom-0 h-48 bg-gradient-to-t from-[#f4f6fb] via-[#f4f6fb]/55 to-transparent"></div>

        <div class="relative mx-auto grid max-w-7xl gap-10 px-4 pb-28 pt-24 sm:px-6 lg:grid-cols-[1.15fr_0.85fr] lg:pt-36">
            <div class="max-w-3xl text-white">
                <span class="mb-5 inline-flex rounded-full bg-amber-400 px-4 py-2 text-xs font-black uppercase tracking-wide text-[#101c78]">
                    Pemerintah Desa Ngrimbi
                </span>
                <h1 class="text-5xl font-black leading-[0.98] sm:text-6xl lg:text-7xl">
                    Sovereign Legacy.<br>
                    <span class="text-amber-400">Digital Future.</span>
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-7 text-slate-100 sm:text-lg">
                    Mewujudkan Ngrimbi yang Gemilang, Berkeadaban, dan Berdaya Saing melalui integrasi teknologi dan kearifan lokal.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#layanan" class="inline-flex items-center justify-center rounded-md bg-amber-400 px-6 py-4 text-sm font-black text-[#101c78] shadow-xl shadow-amber-950/20 transition hover:bg-amber-300">
                        Jelajahi Layanan
                    </a>
                    <a href="#informasi" class="inline-flex items-center justify-center rounded-md bg-white/15 px-6 py-4 text-sm font-bold text-white ring-1 ring-white/25 backdrop-blur transition hover:bg-white/20">
                        Dokumen Publik
                    </a>
                </div>
            </div>

            <div class="flex items-center lg:justify-end">
                <div class="w-full max-w-sm rounded-md bg-slate-900/55 p-7 text-white shadow-2xl ring-1 ring-white/15 backdrop-blur-md">
                    <h2 class="text-lg font-bold">Informasi Cuaca & Hari Ini</h2>
                    <div class="mt-6 space-y-5">
                        <div class="flex items-center justify-between border-b border-white/10 pb-4 text-sm">
                            <span class="text-slate-300">Suhu Udara</span>
                            <span class="font-black">29°C</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-white/10 pb-4 text-sm">
                            <span class="text-slate-300">Kualitas Udara</span>
                            <span class="font-black text-amber-300">Baik (15 AQI)</span>
                        </div>
                    </div>
                    <p class="mt-7 text-xs leading-6 text-slate-300">
                        "Membangun dengan hati, melayani dengan bakti."
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="layanan" class="relative z-10 mx-auto -mt-16 grid max-w-7xl gap-4 px-4 sm:grid-cols-2 sm:px-6 md:grid-cols-3 lg:grid-cols-6">
        @foreach ($services as $service)
            <a href="{{ $service['href'] }}" class="group rounded-md bg-white p-6 text-center shadow-xl shadow-slate-200/80 transition hover:-translate-y-1 hover:shadow-2xl">
                <span class="{{ $service['color'] }} mx-auto grid h-12 w-12 place-items-center rounded-md bg-slate-50 ring-1 ring-slate-100">
                    @switch($service['icon'])
                        @case('document')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M7 3h7l4 4v14H7z" />
                                <path d="M14 3v5h5" />
                                <path d="M10 12h6" />
                                <path d="M10 16h4" />
                            </svg>
                            @break

                        @case('heart')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20.8 5.8a5.2 5.2 0 0 0-7.4 0L12 7.2l-1.4-1.4a5.2 5.2 0 0 0-7.4 7.4L12 22l8.8-8.8a5.2 5.2 0 0 0 0-7.4z" />
                                <path d="M12 10v5" />
                                <path d="M9.5 12.5h5" />
                            </svg>
                            @break

                        @case('graduation')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m3 9 9-5 9 5-9 5z" />
                                <path d="M7 11v5c3 2 7 2 10 0v-5" />
                                <path d="M21 9v6" />
                            </svg>
                            @break

                        @case('wallet')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 7h16v12H4z" />
                                <path d="M4 9 16 4v3" />
                                <path d="M16 13h4" />
                                <path d="M16 13.01v.01" />
                            </svg>
                            @break

                        @case('briefcase')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M9 6V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v1" />
                                <path d="M4 7h16v12H4z" />
                                <path d="M4 12h16" />
                                <path d="M10 12v2h4v-2" />
                            </svg>
                            @break

                        @case('clipboard')
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M8 5h8" />
                                <path d="M9 3h6v4H9z" />
                                <path d="M6 5H5v16h14V5h-1" />
                                <path d="m9 14 2 2 4-5" />
                            </svg>
                            @break
                    @endswitch
                </span>
                <span class="mt-4 block text-sm font-black text-[#101c78]">{{ $service['title'] }}</span>
            </a>
        @endforeach
    </div>
</section>

