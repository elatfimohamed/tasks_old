<?php
/**
 * Created by PhpStorm.
 * User: elatfi
 * Date: 19/10/18
 * Time: 16:17
 */

namespace Tests\Unit;
use App\File;
use App\Task;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function ca_assign_user_to_task()
    {
        $task= Task::create([
            'name' => 'Compra pa'

        ]);

        $userOriginal = factory(User::class)->create();

        $task->assignUser($userOriginal);

        user = $task->user;

        $this->assertTrue($user->is($userOriginal));

    }

    public function can_assign_tag_to_taks()
    {
    }




    public function a_task_can_have_tags() {
        // 1 Prepare
        $task = Task::create([
            'name' => 'Comprar pa'
        ]);
        $tag1 = Tag::create([
            'name' => 'home'
        ]);
        $tag2 = Tag::create([
            'name' => 'work'
        ]);
        $tag3 = Tag::create([
            'name' => 'studies'
        ]);
        $tags = [$tag1, $tag2, $tag3];
        // execució
        $task->assignTags($tags);
        // Assertion
        $tags = $task->tags;
        $this->assertTrue($tags[0]->is($tag1));
        $this->assertTrue($tags[1]->is($tag2));
        $this->assertTrue($tags[2]->is($tag3));
    }
    /**
     * @test
     */
    public function a_task_can_have_one_file()
    {
        // 1 Prepare
        $task = Task::create([
            'name' => 'Comprar pa'
        ]);
        $fileOriginal = File::create([
            'path' => 'fitxer1.pdf'
        ]);
//        add_file_to_task($file, $task);
        $task->assignFile($fileOriginal);
        // 2 Executo -> Wishful programming
        // IMPORTANT 2 maneres
        // 1 Aixó torna tota la relació, treball extra
//        $file = $task->files()->where('path','');
        // 2 Això retorna el object:
        $file = $task->file;
        // 3 Comprovo
        // $file
        $this->assertTrue($file->is($fileOriginal));
    }
    /**
     * @test
     */
    public function a_task_file_returns_null_when_no_file_is_assigned()
    {
        // 1 Prepare
        $task = Task::create([
            'name' => 'Comprar pa'
        ]);
        // 2 Executo -> Wishful programming
        $file = $task->file();
        // 3 Comprovo
        // $file
        $this->assertNull($file);
    }
}