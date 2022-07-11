<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        DB::table('positions')->insert($this->positions());
        DB::table('users')->insert($this->users());
        DB::table('vehicles')->insert($this->vehicles());
    }

    private function users()
    {
        return [
            [
                'position_id' => 1,
                'login' => 'user1',
                'email' => 'user1@gmail.com',
                'name' => 'Elliot Colin',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 2,
                'login' => 'user2',
                'email' => 'user2@gmail.com',
                'name' => 'Sofia Poulsen',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 3,
                'login' => 'user3',
                'email' => 'user3@gmail.com',
                'name' => 'Kent Cole',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 3,
                'login' => 'user4',
                'email' => 'user4@gmail.com',
                'name' => 'Logan Austin',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 3,
                'login' => 'user5',
                'email' => 'user5@gmail.com',
                'name' => 'Romy Dupuis',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 4,
                'login' => 'user6',
                'email' => 'user6@gmail.com',
                'name' => 'Sara Halla',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 4,
                'login' => 'user7',
                'email' => 'user7@gmail.com',
                'name' => 'Aubrey Gauthier',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 4,
                'login' => 'user8',
                'email' => 'user8@gmail.com',
                'name' => 'Callum Gilbert',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 4,
                'login' => 'user9',
                'email' => 'user9@gmail.com',
                'name' => 'Veli Fijneman',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 4,
                'login' => 'user10',
                'email' => 'user10@gmail.com',
                'name' => 'Erinn Veldhuizen',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user11',
                'email' => 'user11@gmail.com',
                'name' => 'Kent Campbell',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user12',
                'email' => 'user12@gmail.com',
                'name' => 'Sigurd Dvergsdal',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user13',
                'email' => 'user13@gmail.com',
                'name' => 'Valentine Leroux',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user14',
                'email' => 'user14@gmail.com',
                'name' => 'Jenny Rhodes',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user15',
                'email' => 'user15@gmail.com',
                'name' => 'Lois George',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user16',
                'email' => 'user16@gmail.com',
                'name' => 'Valentin Lopez',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user17',
                'email' => 'user17@gmail.com',
                'name' => 'Sean Boyd',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user18',
                'email' => 'user18@gmail.com',
                'name' => 'Josette Fontai',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user19',
                'email' => 'user19@gmail.com',
                'name' => 'Charles Harrison',
                'password' => bcrypt(123),
                'created_at' => now()
            ],
            [
                'position_id' => 5,
                'login' => 'user20',
                'email' => 'user20@gmail.com',
                'name' => 'James Thomas',
                'password' => bcrypt(123),
                'created_at' => now()
            ]
        ];
    }

    private function positions()
    {
        return [
            ['name' => 'Директор', 'available_vehicles' => '1,2,3,4,5', 'created_at' => now()],
            ['name' => 'Заместитель директора', 'available_vehicles' => '2,3,4,5', 'created_at' => now()],
            ['name' => 'Бухгалтер', 'available_vehicles' => '3,4,5', 'created_at' => now()],
            ['name' => 'Менеджер', 'available_vehicles' => '4,5', 'created_at' => now()],
            ['name' => 'Водитель', 'available_vehicles' => '5', 'created_at' => now()]
        ];
    }

    private function vehicles()
    {
        return [
            ['driver_id' => 11, 'model' => 'Polaris SPORTSMAN 500', 'category' => 1, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 12, 'model' => 'Audi S3', 'category' => 1, 'busy_by' => 1, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 13, 'model' => 'Ford E-150', 'category' => 1, 'busy_by' => 1, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 14, 'model' => 'Suzuki C50 BOULEVARD', 'category' => 1, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 15, 'model' => 'Yamaha RX10PS APEX SE', 'category' => 1, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 16, 'model' => 'Yamaha FX10RTRS FX NYTRO RTX SE', 'category' => 2, 'busy_by' => 2, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 17, 'model' => 'Kawasaki EX650 NINJA 650', 'category' => 2, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 18, 'model' => 'Triumph SPEED FOUR', 'category' => 2, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 19, 'model' => 'Suzuki GSX-R600', 'category' => 2, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 20, 'model' => 'International 4400LP', 'category' => 2, 'busy_by' => 2, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 11, 'model' => 'Ski-Doo MX Z 1200 X', 'category' => 3, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 12, 'model' => 'Hyundai ELANTRA', 'category' => 3, 'busy_by' => 3, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 13, 'model' => 'Honda CRF150R EXPERT', 'category' => 3, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 14, 'model' => 'Arctic Cat F8 EFI', 'category' => 3, 'busy_by' => 4, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 15, 'model' => 'Ski-Doo MX Z 500 ADRENALINE', 'category' => 3, 'busy_by' => 5, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 16, 'model' => 'Nissan MAXIMA', 'category' => 4, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 17, 'model' => 'Bombardier OUTLANDER 650 HO EFI 4X4', 'category' => 4, 'busy_by' => 6, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 18, 'model' => 'Lexus LX570', 'category' => 4, 'busy_by' => 7, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 19, 'model' => 'Yamaha FX10M FX NYTRO MTX 162', 'category' => 4, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 20, 'model' => 'Suzuki SV650', 'category' => 4, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 11, 'model' => 'Bmw 228I', 'category' => 5, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 12, 'model' => 'International 5900I SBA', 'category' => 5, 'busy_by' => 12, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 13, 'model' => 'Volkswagen POINTER', 'category' => 5, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 14, 'model' => 'Ford EXCURSION', 'category' => 5, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 15, 'model' => 'Pontiac GRAND AM', 'category' => 5, 'busy_by' => 15, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 16, 'model' => 'Mercedes-Benz E63 AMG', 'category' => 5, 'busy_by' => 17, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 17, 'model' => 'Arctic Cat BEARCAT WIDETRACK TURBO', 'category' => 5, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 18, 'model' => 'Polaris ATP 330', 'category' => 5, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()],
            ['driver_id' => 19, 'model' => 'Can-Am OUTLANDER 400 HO', 'category' => 5, 'busy_by' => 20, 'busy_at' => now(), 'busy_until' => now()->addWeek(), 'created_at' => now()],
            ['driver_id' => 20, 'model' => 'Harley Davidson FXSTI SOFTAIL STANDARD', 'category' => 5, 'busy_by' => null, 'busy_at' => null, 'busy_until' => null, 'created_at' => now()]
        ];
    }
}
