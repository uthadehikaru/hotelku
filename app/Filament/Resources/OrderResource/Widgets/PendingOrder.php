<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class PendingOrder extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Order::where('status', 'pending')
            )
            ->columns([
                Tables\Columns\TextColumn::make('booking_code')
                    ->color('primary')
                    ->url(fn (Order $record) => route('filament.admin.resources.orders.edit', $record))
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('check_in')
                    ->date()
                    ->sortable(),
            ]);
    }
}
