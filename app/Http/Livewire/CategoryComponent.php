<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

use App\Models\Category;

class CategoryComponent extends LivewireDatatable
{
    public $model = Category::class;

    public function columns()
    {
        return [
            Column::name('id')->label('Id')->defaultSort('asc'),
            column::name('name')->label('Name'),
            Column::name('description')->label('Description'),
            Column::callback(['id'], function ($id) {
                return view('components.table-action', ['link' => '/admin/category/' . $id]);
            })->label('Action')->alignCenter()->unsortable()
        ];
    }
}

