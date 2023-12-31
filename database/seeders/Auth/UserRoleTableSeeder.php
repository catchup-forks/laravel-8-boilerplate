<?php

namespace Database\Seeders\Auth;

use App\Models\Auth\User;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

/**
 * Class UserRoleTableSeeder.
 */
class UserRoleTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run(): void
    {
        $this->disableForeignKeys();

        User::find(1)->assignRole(config('access.users.admin_role'));
        User::find(2)->assignRole('executive');
        User::find(3)->assignRole(config('access.users.default_role'));

        $this->enableForeignKeys();
    }
}
