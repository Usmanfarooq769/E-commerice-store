<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // ─── Define all permissions ───────────────────────────────────────────
        $permissions = [
            // Posts
            'view posts',
            'create posts',
            'edit posts',
            'delete posts',

            // Users
            'view users',
            'create users',
            'edit users',
            'delete users',

            // Roles
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',

            // Permissions
            'view permissions',
            'create permissions',
            'edit permissions',
            'delete permissions',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // ─── Create Roles & assign permissions ───────────────────────────────

        // Admin — all permissions
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->syncPermissions(Permission::all());

        // Editor — posts only (no delete)
        $editor = Role::firstOrCreate(['name' => 'editor']);
        $editor->syncPermissions([
            'view posts',
            'create posts',
            'edit posts',
            'view users',
        ]);

        // Viewer — read only
        $viewer = Role::firstOrCreate(['name' => 'viewer']);
        $viewer->syncPermissions([
            'view posts',
        ]);

        // ─── Create a default admin user ─────────────────────────────────────
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name'     => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );
        $adminUser->assignRole('admin');

        // Create an editor user
        $editorUser = User::firstOrCreate(
            ['email' => 'editor@example.com'],
            [
                'name'     => 'Editor User',
                'password' => Hash::make('password'),
            ]
        );
        $editorUser->assignRole('editor');

        // Create a viewer user
        $viewerUser = User::firstOrCreate(
            ['email' => 'viewer@example.com'],
            [
                'name'     => 'Viewer User',
                'password' => Hash::make('password'),
            ]
        );
        $viewerUser->assignRole('viewer');

        $this->command->info('Roles, permissions and default users seeded!');
        $this->command->table(
            ['Email', 'Password', 'Role'],
            [
                ['admin@example.com',  'password', 'admin'],
                ['editor@example.com', 'password', 'editor'],
                ['viewer@example.com', 'password', 'viewer'],
            ]
        );
    }
}