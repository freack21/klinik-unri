<?php

namespace Tests\Feature;

use App\Livewire\Admin\Pengumuman\Create;
use App\Livewire\Admin\Pengumuman\Edit;
use App\Livewire\Admin\Pengumuman\Index;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PengumumanTest extends TestCase
{
    use RefreshDatabase;

    public function test_pengumuman_index_page_requires_authentication()
    {
        $this->get(route('admin.pengumuman.index'))
            ->assertRedirect(route('login'));
    }

    public function test_pengumuman_index_page_renders()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('admin.pengumuman.index'))
            ->assertSuccessful()
            ->assertSeeLivewire(Index::class);
    }

    public function test_can_create_pengumuman()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(Create::class)
            ->set('judul', 'Test Pengumuman')
            ->set('isi', 'Isi pengumuman test')
            ->set('tanggal', '2025-12-15')
            ->set('waktu', '09:00-12:00')
            ->call('save')
            ->assertRedirect(route('admin.pengumuman.index'));

        $this->assertDatabaseHas('pengumuman', [
            'judul' => 'Test Pengumuman',
            'isi' => 'Isi pengumuman test',
        ]);
    }

    public function test_can_update_pengumuman()
    {
        $user = User::factory()->create();
        $pengumuman = Pengumuman::create([
            'judul' => 'Old Title',
            'isi' => 'Old Body',
            'tanggal' => '2025-12-15',
            'waktu' => '09:00-12:00',
        ]);

        Livewire::actingAs($user)
            ->test(Edit::class, ['id' => $pengumuman->id])
            ->set('judul', 'New Title')
            ->call('update')
            ->assertRedirect(route('admin.pengumuman.index'));

        $this->assertDatabaseHas('pengumuman', [
            'id' => $pengumuman->id,
            'judul' => 'New Title',
        ]);
    }

    public function test_can_delete_pengumuman()
    {
        $user = User::factory()->create();
        $pengumuman = Pengumuman::create([
            'judul' => 'To Delete',
            'isi' => 'Body',
            'tanggal' => '2025-12-15',
            'waktu' => '09:00-12:00',
        ]);

        Livewire::actingAs($user)
            ->test(Index::class)
            ->call('delete', $pengumuman->id);

        $this->assertDatabaseMissing('pengumuman', [
            'id' => $pengumuman->id,
        ]);
    }
}
