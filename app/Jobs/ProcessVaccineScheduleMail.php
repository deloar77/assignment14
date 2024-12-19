<?php

namespace App\Jobs;

use App\Mail\VaccineScheduleMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class ProcessVaccineScheduleMail implements ShouldQueue
{
    use Queueable;
     public $user;
    /**
     * Create a new job instance.
     */
    public function __construct($user)
    {
        $this->user=$user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->user->email)->send(new VaccineScheduleMail($this->user));
    }
}