<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class UpdateUserInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $users = User::where('password', null)->orWhere('password', '')->get();
//        foreach ($users as $user) {
//            $sing_user = User::where('id', $user->id)->first();
//            $sing_user->password = Hash::make('12345678');
//            $sing_user->ver_link = null;
//            $sing_user->save();
//        }
    }
}
