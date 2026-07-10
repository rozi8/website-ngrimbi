<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Aspiration;
use App\Models\AgendaEvent;
use App\Models\Listing;
use App\Models\News;
use App\Models\PpidDocument;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    public function news()
    {
        $news = News::orderByDesc('published_at')->orderByDesc('created_at')->get();

        return view('pages.information.berita-terbaru', compact('news'));
    }

    public function agenda()
    {
        $agendaEvents = AgendaEvent::orderBy('event_date')->orderBy('time')->get();

        return view('pages.information.agenda', compact('agendaEvents'));
    }

    public function announcements()
    {
        $announcements = Announcement::orderByDesc('published_at')->orderByDesc('created_at')->get();

        return view('pages.information.pengumuman', compact('announcements'));
    }

    public function ppid()
    {
        $order = ['berkala', 'serta-merta', 'setiap-saat', 'dikecualikan'];
        $documents = PpidDocument::all()->sortBy(fn ($item) => array_search($item->category, $order, true));

        return view('pages.ppid.daftar-informasi-publik', compact('documents'));
    }

    public function umkm()
    {
        $umkms = Listing::where('type', 'umkm')->orderBy('name')->get();

        return view('pages.tourism.umkm-desa', compact('umkms'));
    }

    public function tourismDestination()
    {
        $spots = Listing::where('type', 'tourism')->orderBy('name')->get();

        return view('pages.tourism.destinasi-wisata', compact('spots'));
    }

    public function contact()
    {
        return view('pages.kontak.index');
    }

    public function submitContact(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
            'category' => ['nullable', 'string', 'max:100'],
        ]);

        Aspiration::create(array_merge($data, ['status' => 'new']));

        return back()->with('success', 'Terima kasih. Aspirasi Anda telah kami terima dan akan ditindaklanjuti.');
    }
}
