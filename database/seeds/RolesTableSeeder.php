<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAssistant = new Role;
        $roleAssistant->name = 'Асистент';
        $roleAssistant->slug = 'assistant';
        $roleAssistant->description = 'Асистент';
        $roleAssistant->save();

        $roleAssistant = new Role;
        $roleAssistant->name = 'Човек под карантина';
        $roleAssistant->slug = 'quarantined';
        $roleAssistant->description = 'Човек под карантина';
        $roleAssistant->save();

        $roleAdmin = new Role;
        $roleAdmin->name = 'Администратор';
        $roleAdmin->slug = 'admin';
        $roleAdmin->description = 'Има достъп до всичко.';
        $roleAdmin->save();
    }
}
