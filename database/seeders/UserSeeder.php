<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $sellerRole = Role::create(['name' => 'seller']);
        $userRole = Role::create(['name' => 'user']);

        $adminRole->getAllPermissions();

        // Admins >>>>>>>>
        $user = User::create([
            'name' => 'Victor Admin',
            'email' => 'admin.desicon@victor.com.br',
            'password' => bcrypt('padmin123'),
        ]);
        $user->assignRole($adminRole);

        $user = User::create([
            'name' => 'Thiago Admin',
            'email' => 'admin.desicon@thiago.com.br',
            'password' => bcrypt('padmin123'),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Robson Admin',
            'email' => 'admin.desicon@robson.com.br',
            'password' => bcrypt('padmin123'),
        ]);
        $user->assignRole('admin');

        // Sellers >>>>>>>>
        $user = User::create([
            'name' => 'Vendas Eduarda',
            'email' => 'seller.desicon@eduarda.com.br',
            'password' => bcrypt('pseller123'),
        ]);
        $user->assignRole($sellerRole);

        $user = User::create([
            'name' => 'Vendas Elenice',
            'email' => 'seller.desicon@elenice.com.br',
            'password' => bcrypt('pseller123'),
        ]);
        $user->assignRole($sellerRole);

        $user = User::create([
            'name' => 'Teste Seller',
            'email' => 'test@seller.com',
            'password' => bcrypt('test123'),
        ]);
        $user->assignRole($sellerRole);

        $user = User::create([
            'name' => 'Teste User',
            'email' => 'test@user.com',
            'password' => bcrypt('test123'),
        ]);
        $user->assignRole($userRole);

        // Users >>>>>>>>
        if (App::environment('local')) {
            User::factory(10)
                ->has(Client::factory()->count(1), 'client')
                ->create();
        }
    }
}
