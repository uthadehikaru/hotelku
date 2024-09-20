<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Orders', Order::count())
                ->color('primary'),
            Stat::make('Pending Orders', Order::where('status', 'pending')->count())
                ->color('warning'),
            Stat::make('Confirmed Orders', Order::where('status', 'confirmed')->count())
                ->color('success'),
            Stat::make('Cancelled Orders', Order::where('status', 'cancelled')->count())
                ->color('danger'),
        ];
    }
}
