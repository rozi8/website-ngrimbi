<?php

namespace App\Http\Controllers;

use App\Models\AgendaEvent;
use App\Models\Announcement;
use App\Models\Aspiration;
use App\Models\EmergencyVehicle;
use App\Models\Listing;
use App\Models\News;
use App\Models\PpidDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (
            $data['email'] !== env('ADMIN_EMAIL', 'admin@ngrimbi.local') ||
            $data['password'] !== env('ADMIN_PASSWORD', 'secret')
        ) {
            return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
        }

        $request->session()->regenerate();
        $request->session()->put('is_admin', true);

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard', [
            'news' => News::orderByDesc('published_at')->orderByDesc('created_at')->get(),
            'announcements' => Announcement::orderByDesc('published_at')->orderByDesc('created_at')->get(),
            'agendaEvents' => AgendaEvent::orderBy('event_date')->orderBy('time')->get(),
            'documents' => PpidDocument::orderBy('category')->orderBy('title')->get(),
            'listings' => Listing::orderBy('type')->orderBy('name')->get(),
            'aspirations' => Aspiration::orderByDesc('created_at')->get(),
            'emergencyVehicles' => EmergencyVehicle::orderByDesc('updated_at')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $resourceType = $request->validate([
            'resource_type' => ['required', 'in:news,announcement,agenda,ppid,listing,emergency'],
        ])['resource_type'];

        if ($resourceType === 'news') {
            $data = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'category' => ['nullable', 'string', 'max:100'],
                'excerpt' => ['nullable', 'string'],
                'body' => ['nullable', 'string'],
                'image_url' => ['nullable', 'url'],
                'published_at' => ['nullable', 'date'],
            ]);

            News::create(array_merge($data, ['slug' => Str::slug($data['title'])]));
        } elseif ($resourceType === 'announcement') {
            $data = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'excerpt' => ['nullable', 'string'],
                'body' => ['nullable', 'string'],
                'image_url' => ['nullable', 'url'],
                'published_at' => ['nullable', 'date'],
            ]);

            Announcement::create($data);
        } elseif ($resourceType === 'agenda') {
            $data = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'location' => ['nullable', 'string', 'max:255'],
                'event_date' => ['required', 'date'],
                'time' => ['nullable', 'string', 'max:255'],
                'description' => ['nullable', 'string'],
            ]);

            AgendaEvent::create($data);
        } elseif ($resourceType === 'ppid') {
            $data = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'category' => ['required', 'string', 'max:100'],
                'description' => ['nullable', 'string'],
                'status' => ['nullable', 'string', 'max:50'],
                'file_url' => ['nullable', 'url'],
            ]);

            PpidDocument::create(array_merge($data, ['status' => $data['status'] ?? 'Tersedia']));
        } elseif ($resourceType === 'listing') {
            $data = $request->validate([
                'type' => ['required', 'in:umkm,tourism'],
                'name' => ['required', 'string', 'max:255'],
                'category' => ['nullable', 'string', 'max:100'],
                'description' => ['nullable', 'string'],
                'image_url' => ['nullable', 'url'],
                'contact' => ['nullable', 'string', 'max:255'],
                'location' => ['nullable', 'string', 'max:255'],
            ]);

            Listing::create($data);
        } else {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['nullable', 'string', 'max:50'],
                'status' => ['required', 'string', 'max:100'],
                'notes' => ['nullable', 'string'],
                'availability' => ['nullable', 'boolean'],
            ]);

            EmergencyVehicle::create(array_merge($data, ['availability' => $request->boolean('availability')]));
        }

        return redirect()->route('admin.dashboard')->with('success', 'Konten berhasil disimpan.');
    }

    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'resource_type' => ['required', 'in:news,announcement,agenda,ppid,listing,aspiration,emergency'],
            'resource_id' => ['required', 'integer'],
        ]);

        $resource = null;

        if ($validated['resource_type'] === 'news') {
            $resource = News::find($validated['resource_id']);
        } elseif ($validated['resource_type'] === 'announcement') {
            $resource = Announcement::find($validated['resource_id']);
        } elseif ($validated['resource_type'] === 'agenda') {
            $resource = AgendaEvent::find($validated['resource_id']);
        } elseif ($validated['resource_type'] === 'ppid') {
            $resource = PpidDocument::find($validated['resource_id']);
        } elseif ($validated['resource_type'] === 'listing') {
            $resource = Listing::find($validated['resource_id']);
        } elseif ($validated['resource_type'] === 'aspiration') {
            $resource = Aspiration::find($validated['resource_id']);
        } elseif ($validated['resource_type'] === 'emergency') {
            $resource = EmergencyVehicle::find($validated['resource_id']);
        }

        if ($resource) {
            $resource->delete();
        }

        return redirect()->route('admin.dashboard')->with('success', 'Konten berhasil dihapus.');
    }
}
