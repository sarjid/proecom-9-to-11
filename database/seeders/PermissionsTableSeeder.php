<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            'role_id' => Role::first()->id,
            'permission' => '{"slider":true,"brand":true,"category":true,"homeCategory":true,"attribute":true,"color":true,"product":true,"flashDeal":true,"order":true,"pos":true,"filemanager":true,"landing":true,"role":true,"permission":true,"user":true,"system":true}',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
