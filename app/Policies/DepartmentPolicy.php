<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Department;

class DepartmentPolicy extends Policy
{
    public function update(User $user, Department $department)
    {
        // return $department->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Department $department)
    {
        return true;
    }
}
