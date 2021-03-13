<?php
namespace Lara\MyPack\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class UserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mypacket:userdata {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show user data in json format';

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
        $id = $this->argument("id");
        $user = User::find($id);
        return $user->toJson();
    }
}
