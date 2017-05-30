<?php

use Illuminate\Database\Seeder;

class dbseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $users=new\App\user();
        $users->name='admin';
        $users->email='admin@gmail.com';
        $users->password='admin123';
        $users->save();
        
         $players=new\App\player();
        $players->name='Ninja';
        $players->email='ninja@gmail.com';
        
        $players->save();
    }
}
