<?php

namespace App\Filament\Resources\RoomResource\Widgets;

use App\Models\Room;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RoomStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Rooms', Room::count()),
            Stat::make('Available Rooms', Room::where('room_status', 'available')->whereDoesntHave('schedules', function ($query) {
                $query->whereDate('check_in', '<=', now()->toDateString())
                    ->whereDate('check_out', '>', now()->toDateString());
            })->count())->color('success'),
            Stat::make('Occupied Rooms Today', Room::whereHas('schedules', function ($query) {
                $query->whereDate('check_in', '<=', now()->toDateString())
                    ->whereDate('check_out', '>', now()->toDateString());
            })->count())->color('info'),
            Stat::make('Maintenance Rooms', Room::where('room_status', 'maintenance')->count())->color('warning'),
        ];
    }
}
