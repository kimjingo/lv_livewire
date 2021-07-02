<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class ContactsTable extends Component
{
    use WithPagination;
    public $perPage=10;
    public $search='';
    public $sortField='name';
    public $sortAsc=true;

    public function sortBy($field)
    {
        if($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function render()
    {
        return view('livewire.contacts-table', [
            // 'contacts' => \App\Models\User::search($this->search)->get(),
            // 'contacts' => \App\Models\User::search($this->search)->get(),
            // 'contacts' => \App\Models\User::query()
            'contacts' => \App\Models\User::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc? 'asc' : 'desc')
                ->paginate($this->perPage),
        ]);
    }
    public function clear()
    {
        $this->search = '';
    }
}
