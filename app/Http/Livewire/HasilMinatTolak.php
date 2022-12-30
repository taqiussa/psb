<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HasilMinatTolak extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.hasil-minat-tolak', [
            'listUser' =>  User::with([
                'minatBakat',
                'minatBakat.user',
                'minatBakat.ekstra'
            ])
                ->whereHas('minatBakat', fn ($q) => $q->whereNilai(0))
                ->when($this->search, fn ($q) => $q->where('name', 'like', '%' . $this->search . '%'))
                ->paginate(10)
        ]);
    }
}
