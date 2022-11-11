<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = collect([
            [
                'id_user' => 1,
                'no_telp' => '08988928260'
            ],
            [
                'id_user' => 3,
                'no_telp' => '08977706757'
            ],
            [
                'id_user' => 2,
                'no_telp' => '08988923476'
            ],
        ]);

        $phones->each(fn ($phone) => Phone::create($phone));
    }
}
