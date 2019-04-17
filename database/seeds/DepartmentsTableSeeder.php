<?php

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
        $departments = factory(Department::class)->times(50)->make()->each(function ($department, $index) {
            if ($index == 0) {
                // $department->field = 'value';
            }
        });

        Department::insert($departments->toArray());
    }

}

