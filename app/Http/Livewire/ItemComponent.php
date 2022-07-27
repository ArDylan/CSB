<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use App\Models\Item;

class ItemComponent extends LivewireDatatable
{
    // public $model = Item::class;

    public function builder()
    {
        return Item::query()->leftJoin('categories', 'categories.id', 'category_id');
    }

    public function columns()
    {
        return [
            Column::name('id')->label('Id')->defaultSort('asc'),
            column::name('name')->label('Name'),
            column::name('categories.name')->label('Category'),
            column::name('stock')->label('Stock'),
            column::name('discount')->label('Discount'),
            column::name('warranty')->label('Warranty'),
            Column::name('description')->label('Description')->truncate(10),
            column::name('price')->label('Price'),
            Column::callback(['id'], function ($id) {
                return view('components.table-action', ['link' => '/admin/item/' . $id]);
            })->label('Action')->alignCenter()->unsortable()
        ];
    }
}

