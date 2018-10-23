<?php


use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */

    public function user_can_have_tasks()
    {

          $user = factory(User::class)->create();
          $task1 = factory(Task::class)->create();
          $task2 = factory(Task::class)->create();
          $task3= factory(Task::class)->create();
          $user ->addTask()





    }
    public function us()
    {

        $user = factory(User::class)->create();





    }





}





