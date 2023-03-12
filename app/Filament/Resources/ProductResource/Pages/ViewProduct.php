<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\Product;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;

class ViewProduct extends ViewRecord implements HasTable
{
    use InteractsWithTable;

    protected static string $resource = ProductResource::class;

    protected static string $view = 'filament-view-product';

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    public function getTableQuery()
    {
        return Product::query();
    }

    public function getTableColumns()
    {
        return [
            TextColumn::make('title'),
            TextColumn::make('sku'),
        ];
    }
}
