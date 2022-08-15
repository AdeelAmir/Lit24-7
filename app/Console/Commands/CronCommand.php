<?php

namespace App\Console\Commands;

use App\Http\Controllers\FirebaseUsersController;
use App\Http\Controllers\FirebaseVipUsersController;
use App\Models\FirebaseUsers;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CronCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'firebase:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Firebase users sync cron job';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $FirebaseUserController = new FirebaseUsersController();
        $FirebaseVipUserController = new FirebaseVipUsersController();
        $Check1 = $FirebaseUserController->UpdateUserData();
        $Check2 = $FirebaseVipUserController->UpdateVipUserData();
        return ($Check1 && $Check2);
    }
}