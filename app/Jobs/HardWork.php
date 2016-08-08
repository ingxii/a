<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Helpers\TaskList;

class HardWork extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $list;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(TaskList $list)
    {
        //
        $this->list = $list;
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
        dump($this->list);
        echo("\r\n");
    }
}
