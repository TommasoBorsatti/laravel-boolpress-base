<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Seleziono solo i posts pubblicati
        $posts = Post::where('published', 1)->get();
        //Ciclo sui posts
        foreach ($posts as $post){

            for ($i=0; $i < rand(0,3) ; $i++) { 

                $newComment = new Comment();
                $newComment->post_id = $post->id;
                $newComment->name = $faker->name();
                $newComment->content= $faker->text();
                $newComment->save();

            }
        }

    }
}
