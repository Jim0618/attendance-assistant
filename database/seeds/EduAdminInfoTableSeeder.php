<?php

use Illuminate\Database\Seeder;

class EduAdminInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('edu_admin_infos')->insert([
                ['name' => '名字'.$i,
                    'class' => '班级'.$i,
                    'secondary_college' => '二级学院'.$i,
                    'teacher' => '辅导员'.$i,
                    'teacher_tel' => '辅导员电话'.$i]
            ]);
        }
    }
}
