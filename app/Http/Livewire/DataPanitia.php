<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use WireUi\Traits\Actions;


class DataPanitia extends Component
{
    use Actions;
    use WithPagination;

    public $name;
    public $username;
    public $role;
    public $user;

    public $search = '';

    public $roles = [];

    // protected $rules =
    // [
    //     'name' => 'required',
    //     'username' => 'required|unique:users'
    // ];

    public function render()
    {
        return view(
            'livewire.data-panitia',
            [
                'listUser' => User::whereKodeDaftar(null)
                    ->with('roles')
                    ->where('name', 'like', '%' . $this->search . '%')
                    ->orderBy('name')
                    ->paginate(5)
            ]
        );
    }

    public function mount()
    {
        $this->roles = Role::orderBy('name')->get();
    }
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function simpan()
    {
        // $this->validate();

        $this->user = User::updateOrCreate(
            [
                'username' => $this->username,
            ],
            [
                'name' => $this->name,
                'password' => bcrypt('smpalfapsb')
            ]
        );

        $this->user->syncRoles($this->role);

        $this->notification()->success(
            $title = 'Berhasil !',
            $description = 'Berhasil Menambah Panitia'
        );
        $this->resetExcept('roles');
    }
    public function confirm($id): void
    {
        $this->dialog()->confirm([

            'title'       => 'Menghapus Data',
            'description' => 'Anda Yakin ?',
            'acceptLabel' => 'Hapus',
            'method'      => 'delete',
            'params'      => $id,

        ]);
    }

    public function delete($id)
    {
        User::find($id)->delete();
        $this->notification()->error(
            $title = 'Hapus Calon Siswa',
            $description = 'Berhasil Hapus Data Calon Siswa'
        );
    }

    public function edit($id)
    {
        $this->user = User::find($id);

        $this->name = $this->user->name;
        $this->username = $this->user->username;
    }
}
