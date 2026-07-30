<?php

namespace Tests\Feature;

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PDO;
use Tests\TestCase;

class AdminCmsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        if (! in_array('sqlite', PDO::getAvailableDrivers(), true)) {
            $this->markTestSkipped('SQLite PDO driver is not available in this PHP runtime.');
        }

        parent::setUp();
    }

    public function test_admin_can_create_update_and_delete_news(): void
    {
        $this
            ->withSession(['is_admin' => true])
            ->post(route('admin.store'), [
                'resource_type' => 'news',
                'title' => 'Berita Produksi',
                'category' => 'Kegiatan',
                'excerpt' => 'Ringkasan berita.',
                'body' => 'Isi berita yang tampil di website.',
                'published_at' => '2026-07-30',
            ])
            ->assertRedirect(route('admin.dashboard'));

        $news = News::firstOrFail();

        $this->assertSame('berita-produksi', $news->slug);

        $this
            ->withSession(['is_admin' => true])
            ->post(route('admin.update'), [
                'resource_type' => 'news',
                'resource_id' => $news->id,
                'title' => 'Berita Produksi Diperbarui',
                'category' => 'Informasi',
                'excerpt' => 'Ringkasan baru.',
                'body' => 'Isi berita yang sudah diperbarui.',
                'published_at' => '2026-08-01',
            ])
            ->assertRedirect(route('admin.dashboard'));

        $this->assertDatabaseHas('news', [
            'id' => $news->id,
            'title' => 'Berita Produksi Diperbarui',
            'slug' => 'berita-produksi-diperbarui',
            'category' => 'Informasi',
        ]);

        $this
            ->withSession(['is_admin' => true])
            ->post(route('admin.destroy'), [
                'resource_type' => 'news',
                'resource_id' => $news->id,
            ])
            ->assertRedirect(route('admin.dashboard'));

        $this->assertDatabaseMissing('news', [
            'id' => $news->id,
        ]);
    }
}
