<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Repositories\TaskRepository;

class TestJob extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $task;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(TaskRepository $task)
    {
        //
        $this->task = $task;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        echo("\r\nNew job\r\n");
        dump($this->task);
        echo("\r\n");
    }
}
