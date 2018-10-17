<?php

namespace Test\Feature;

use App\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompletedTaskControllerTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @test
     */
    public function can_complete_a_task()
    {
        $this->withoutExceptionHandling();
        // TEST OK!!
        // 1
        $task = Task::create([
            'name' => 'comprar pa',
            'completed' => false
        ]);
        // 2
        $response = $this->post('/completed_task/' . $task->id);
        // 3
        $task = $task->fresh();
        $response->assertRedirect('/tasks');
        $response->assertStatus(302);
        $this->assertEquals($task->completed, true);
    }

    /**
     * @test
     */
    public function cannot_complete_an_unexisting_task()
    {
        // TEST OK!!
        $this->delete('/completed_task/1');
        $this->assertStatus(404);
    }

    /**
     * @test
     */
    public function can_uncomplete_a_task()
    {
        // TEST OK!!
        // 1
        $task = Task::create([
            'name' => 'comprar pa',
            'completed' => true
        ]);
        // 2
        $response = $this->delete('/completed_task/' . $task->id);
        // 3
        $task = $task->fresh();
        $this->assertEquals($task->completed, false);
        $response->assertRedirect('/tasks');
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function cannot_uncomplete_an_unexisting_task()
    {
        // TEST OK!!
        $this->delete('/completed_task/1');
        $this->assertStatus(404);
    }


}