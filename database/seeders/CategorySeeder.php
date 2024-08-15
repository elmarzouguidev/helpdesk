<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        Category::factory()->createMany([
            ['id' => 1, 'name' => 'New Customer', 'department_id' => 1],
            ['id' => 2, 'name' => 'Existing Customer', 'department_id' => 1],
            ['id' => 3, 'name' => 'Event', 'department_id' => 2],
            ['id' => 4, 'name' => 'Meeting', 'department_id' => 2],
            ['id' => 5, 'name' => 'Domain Issue', 'department_id' => 3],
            ['id' => 6, 'name' => 'Hosting Issue', 'department_id' => 3],
            ['id' => 7, 'name' => 'Domain', 'department_id' => 4],
            ['id' => 8, 'name' => 'Hosting', 'department_id' => 4],

            ['id' => 9, 'name' => 'Domain Price', 'parent_id' => 7],
            ['id' => 10, 'name' => 'Domain Purchase', 'parent_id' => 7],

            ['id' => 11, 'name' => 'Purchasing a new hosting', 'parent_id' => 8],
            ['id' => 12, 'name' => 'Pricing about hosting', 'parent_id' => 8],

            ['id' => 13, 'name' => 'New Event', 'parent_id' => 3],
            ['id' => 14, 'name' => 'Upcoming Event', 'parent_id' => 3],
        ]);
    }
}
