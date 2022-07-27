<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
class TestimoniComponent extends LivewireDatatable
{
    public $model = Testimoni::class;
    public $testimoni;
    // public $beforeTableSlot = "components.create-testimoni";

    public function builder()
    {
        $testimoni = testimoni::query();
        return $testimoni;

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
            Column::callback(['image'], function ($image) {
                $img = asset('storage/testimoni-image/'.$image);
                return "<img class=\"w-16 text-center mx-auto md:w-32 lg:w-56\" src=\"$img\">";
            })->label('Image')
            ->alignCenter()
            ->unsortable(),
        ];
    }
}
