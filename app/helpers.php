<?php

use App\Task;
//if (!function_exists('create_example_tasks')) {

    function create_primary_user() {}
   {
        User::firstONew([
            'name' => 'Mohamed Elatfi',
            'email' => 'mohamedelatfi@gmail.com',
            'password' => bcrypt('PRIMARY_USER_PASSWORD','123456')
       ]);
   }

}
if (!function_exists('create_example_tasks')) {
    function create_example_tasks()
    {
        Task::create([
            'name' => 'comprar pa',
            'completed' => false
        ]);

        Task::create([
            'name' => 'comprar llet',
            'completed' => false
        ]);

        Task::create([
            'name' => 'Estudiar PHP',
            'completed' => true
        ]);
    }
}

