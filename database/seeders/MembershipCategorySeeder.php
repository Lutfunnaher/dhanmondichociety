<?php

namespace Database\Seeders;

use App\Models\MembershipCategory;
use Illuminate\Database\Seeder;

class MembershipCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =1; $i<=5; $i++){
            if($i == 1) {
                MembershipCategory::create([
                    'name' => 'General',
                    'fees' => 5000,
                ]);
            } elseif($i == 2) {
                MembershipCategory::create([
                    'name' => 'Life',
                    'fees' => 500000,
                ]);
            } elseif($i == 3) {
                MembershipCategory::create([
                    'name' => 'Donor',
                    'fees' => 500000,
                ]);
            } elseif($i == 4) {
                MembershipCategory::create([
                    'name' => 'Honorable',
                    'fees' => 0,
                ]);
            } elseif($i == 5) {
                MembershipCategory::create([
                    'name' => 'Corporate',
                    'fees' => 2500000,
                ]);
            }
        }
    }
}
