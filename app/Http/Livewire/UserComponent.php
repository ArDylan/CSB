<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UserComponent extends LivewireDatatable
{
    public $model = User::class;
    public$user;
    // public $beforeTableSlot = "components.create-customer";

    public function builder()
    {
       $user = User::query();
        return$user;

    }

    public function columns()
    {
        return [
            NumberColumn::name('name')
            ->label('Nama')
            ->defaultSort('asc')
            ->sortBy('id')
            ->alignCenter(),
            NumberColumn::name('email')
            ->label('Email')
            ->alignCenter(),
            NumberColumn::name('level')
            ->label('Role')
            ->alignCenter(),
            Column::callback(['id'], function ($id) {
                return view('components.table-action', ['link' => '/admin/user-management/' . $id]);
            })->label('Action')->alignCenter()->unsortable()
        ];
    }
}
