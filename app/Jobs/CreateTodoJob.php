<?php

namespace App\Jobs;

use App\Events\TodoCreateEvent;
use App\Models\Todo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateTodoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Todo $todo;

    /**
     * Create a new job instance.
     */
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        event(new TodoCreateEvent($this->todo));
    }
}
