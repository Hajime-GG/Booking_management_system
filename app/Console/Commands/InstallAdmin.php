<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\support\Facades\Hash;
use Illuminate\Console\Command;

class InstallAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install System Admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = new User([
            'name' => 'BMS Admin',
            'email' => 'bms@yopmail.com',
            'phone_no' => '9898439543',
            'password' =>Hash::make('pass@01'),
            'user_type'=> 1
        ]);
        if($user->save()){
            $this->info("Account Inserted Successfully");
        }
        else{
            $this->info("Account Insertion UnSuccessfull");
        }
    }
}
