<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Product;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Widgets\Widget;

class ProductsTable extends Widget implements HasTable
{
    use InteractsWithTable;
    protected static string $view = 'filament.resources.product-resource.widgets.products-table';

    protected int | string | array $columnSpan = 2;

    public function getTableQuery()
    {
        return Product::query();
    }

    public function getTableColumns()
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('title'),
            TextColumn::make('sku'),
        ];
    }
}
