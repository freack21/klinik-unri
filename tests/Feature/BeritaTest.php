<?php

namespace Tests\Feature;

use App\Livewire\Admin\Berita\Create;
use App\Livewire\Admin\Berita\Edit;
use App\Livewire\Admin\Berita\Index;
use App\Models\Berita;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class BeritaTest extends TestCase
{
    use RefreshDatabase;

    public function test_berita_index_page_requires_authentication()
    {
        $this->get(route('admin.berita.index'))
            ->assertRedirect(route('login'));
    }

    public function test_berita_index_page_renders()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('admin.berita.index'))
            ->assertSuccessful()
            ->assertSeeLivewire(Index::class);
    }

    public function test_can_create_berita()
    {
        $user = User::factory()->create();
        Storage::fake('public');
        $file = UploadedFile::fake()->image('berita.jpg');

        Livewire::actingAs($user)
            ->test(Create::class)
            ->set('judul', 'Test Berita')
            ->set('deskripsi', 'Deskripsi berita test')
            ->set('konten', 'Konten berita test')
            ->set('tanggal', '2025-12-15')
            ->set('gambar', $file)
            ->set('sumber', 'Sumber Test')
            ->call('save')
            ->assertRedirect(route('admin.berita.index'));

        $this->assertDatabaseHas('berita', [
            'judul' => 'Test Berita',
            'deskripsi' => 'Deskripsi berita test',
        ]);
        
        // Verify file upload
        $berita = Berita::where('judul', 'Test Berita')->first();
        Storage::disk('public')->assertExists($berita->gambar);
    }

    public function test_can_update_berita()
    {
        $user = User::factory()->create();
        $berita = Berita::create([
            'judul' => 'Old Title',
            'deskripsi' => 'Old Desc',
            'konten' => 'Old Content',
            'tanggal' => '2025-12-15',
            'sumber' => 'Old Source',
        ]);

        Livewire::actingAs($user)
            ->test(Edit::class, ['id' => $berita->id])
            ->set('judul', 'New Title')
            ->call('update')
            ->assertRedirect(route('admin.berita.index'));

        $this->assertDatabaseHas('berita', [
            'id' => $berita->id,
            'judul' => 'New Title',
        ]);
    }

    public function test_can_delete_berita()
    {
        $user = User::factory()->create();
        $berita = Berita::create([
            'judul' => 'To Delete',
            'deskripsi' => 'Desc',
            'konten' => 'Content',
            'tanggal' => '2025-12-15',
        ]);

        Livewire::actingAs($user)
            ->test(Index::class)
            ->call('delete', $berita->id);

        $this->assertDatabaseMissing('berita', [
            'id' => $berita->id,
        ]);
    }
}
