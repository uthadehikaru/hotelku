<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\Schedule;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if ($data['status'] === 'confirmed') {
            $availableRoom = \App\Models\Room::where('room_type', $data['room_type'])
                ->where('room_status', 'available')
                ->whereDoesntHave('schedules', function ($query) use ($data) {
                    $query->where(function ($q) use ($data) {
                        $q->whereBetween('check_in', [$data['check_in'], $data['check_out']])
                            ->orWhereBetween('check_out', [$data['check_in'], $data['check_out']])
                            ->orWhere(function ($q) use ($data) {
                                $q->where('check_in', '<=', $data['check_in'])
                                    ->where('check_out', '>=', $data['check_out']);
                            });
                    });
                })
                ->first();

            if (! $availableRoom) {
                throw new \Exception('Room not available for the selected dates');
            }

            Schedule::create([
                'room_id' => $availableRoom->id,
                'order_id' => $record->id, // @phpstan-ignore-line
                'check_in' => $data['check_in'],
                'check_out' => $data['check_out'],
            ]);
        } elseif ($data['status'] === 'cancelled') {
            $record->schedules()->delete(); // @phpstan-ignore-line
        }

        $record->update($data);

        return $record;
    }
}
