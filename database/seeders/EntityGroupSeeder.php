<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Group;
use App\Models\Entity;



class EntityGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = Group::all();

        Entity::all()->each(function ($entity) use ($groups) {
            $entity->groups()->attach(
                $groups->random(1)->pluck('id')
            );
        });
    }
}
