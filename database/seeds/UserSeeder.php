<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create()
        ->each(function ($user){

            factory(App\Library::class, rand(1,5))->create(
                [
                   'user_id' => $user->id
                ]
            )
            ->each(function ($library){
               $tag_ids = range(1,8);
               shuffle($tag_ids);
               $links = array_slice($tag_ids, 0, rand(0,8));
               foreach ($links as $value){
                   DB::table('library_tag')
                       ->insert([
                           'library_id' => $library->id,
                           'tag_id' => $value,
                           'created_at' => now(),
                           'updated_at' => now()

                           ]);
               }
            });

        });
    }
}
