<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 100; $i <= 110; $i++) {
            Room::factory()->create([
                'room_number' => $i,
                'room_status' => 'available',
            ]);
        }
    }
}
