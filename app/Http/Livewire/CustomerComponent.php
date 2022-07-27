<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CustomerComponent extends LivewireDatatable
{
    public $model = Customer::class;
    public $customer;
    // public $beforeTableSlot = "components.create-user-component";

    public function builder()
    {
        $customer = Customer::query();
        return $customer;

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
            NumberColumn::name('no_phone')
            ->label('No HP')
            ->alignCenter(),
            NumberColumn::name('image')
            ->label('Image')
            ->alignCenter(),
            NumberColumn::name('location')
            ->label('Location')
            ->alignCenter(),
            
        ];
    }
}
