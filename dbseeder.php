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
          $quizzes=new\App\quiz();
          $quizzes->cname='sports';
        $quizzes->tques='10';
        $quizzes->tmarks='20';
        $quizzes->save();
        
          $quizzes=new\App\quiz();
          $quizzes->cname='Music';
        $quizzes->tques='10';
        $quizzes->tmarks='20';
        $quizzes->save();
        
        $questions=new\App\question();
        $questions->category_id='1';
        $questions->question='Who is the Youngest centurian in international cricket?';
        $questions->ans1='Mohammad Asraful';
        $questions->ans2='MS Dhoni';
        $questions->ans3='Criss Gayle';
        $questions->ans4='Habibul Basar';
        $questions->ans='1';
        $questions->save();
        
    }
}
