<footer id="ppid" class="bg-[#13215b] text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 py-14 sm:px-6 md:grid-cols-4">
        <div>
            <div class="mb-5 flex items-center gap-3">
                <img src="{{ asset('images/logo-jombang.svg') }}" alt="Logo Kabupaten Jombang" class="h-12 w-10 object-contain">
                <div>
                    <p class="text-[10px] font-semibold uppercase tracking-[0.18em] text-blue-200">Pemerintah Desa</p>
                    <p class="text-lg font-black">NGRIMBI</p>
                </div>
            </div>
            <p class="max-w-xs text-sm leading-6 text-blue-100">
                Pemerintah Desa Ngrimbi berkomitmen memberikan pelayanan publik yang transparan, akuntabel, dan inovatif demi kesejahteraan seluruh warga masyarakat.
            </p>
        </div>

        <div>
            <h3 class="mb-4 font-bold text-amber-300">Layanan Populer</h3>
            <ul class="space-y-3 text-sm text-blue-100">
                <li>Surat Keterangan</li>
                <li>Dana Desa</li>
                <li>BUMDes Ngrimbi</li>
                <li>PPID Desa</li>
            </ul>
        </div>

        <div>
            <h3 class="mb-4 font-bold text-amber-300">Tautan Penting</h3>
            <ul class="space-y-3 text-sm text-blue-100">
                <li>Kebijakan Privasi</li>
                <li>Syarat & Ketentuan</li>
                <li>Peta Situs</li>
                <li>Kontak Kami</li>
            </ul>
        </div>

        <div>
            <h3 class="mb-4 font-bold text-amber-300">Ikuti Kami</h3>
            <div class="mb-6 flex gap-3">
                @foreach (['FB', 'TW', 'IG', 'YT'] as $social)
                    <span class="grid h-8 w-8 place-items-center rounded-full bg-white/10 text-xs font-bold">{{ $social }}</span>
                @endforeach
            </div>
            <div class="rounded-md bg-white/10 p-4">
                <p class="mb-2 text-xs text-blue-100">Unduh Aplikasi Mobile</p>
                <div class="h-9 rounded border border-white/10 bg-white/10"></div>
            </div>
        </div>
    </div>

    <div class="border-t border-white/10 py-5 text-center text-xs text-blue-100">
        &copy; {{ date('Y') }} Pemerintah Desa Ngrimbi, Kecamatan Bareng, Kabupaten Jombang. All Rights Reserved.
    </div>
</footer>


