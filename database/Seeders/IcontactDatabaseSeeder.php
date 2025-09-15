<?php

namespace Modules\Icontact\Database\Seeders;

use Illuminate\Database\Seeder;

class IcontactDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $this->call([InitialContactSeeder::class]);
    }
}
