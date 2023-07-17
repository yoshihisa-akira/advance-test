<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = [
            'fullName' => '山田太郎',
            'gender' => 1,
            'email' => 'test1@example.com',
            'postcode' => '123-5670',
            'address' => '東京都渋谷区千駄ヶ谷1-2-0',
            'building_name' => '千駄ヶ谷マンション101',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $contact = [
            'fullName' => '山田花子',
            'gender' => 2,
            'email' => 'test2@example.com',
            'postcode' => '123-5671',
            'address' => '東京都渋谷区千駄ヶ谷1-2-1',
            'building_name' => '千駄ヶ谷マンション102',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $contact = [
            'fullName' => '佐藤太郎',
            'gender' => 1,
            'email' => 'test3@example.com',
            'postcode' => '123-5672',
            'address' => '東京都渋谷区千駄ヶ谷1-2-2',
            'building_name' => '千駄ヶ谷マンション103',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $contact = [
            'fullName' => '佐藤花子',
            'gender' => 2,
            'email' => 'test4@example.com',
            'postcode' => '123-5673',
            'address' => '東京都渋谷区千駄ヶ谷1-2-3',
            'building_name' => '千駄ヶ谷マンション104',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $contact = [
            'fullName' => '田中太郎',
            'gender' => 1,
            'email' => 'test5@example.com',
            'postcode' => '123-5674',
            'address' => '東京都渋谷区千駄ヶ谷1-2-4',
            'building_name' => '千駄ヶ谷マンション105',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $contact = [
            'fullName' => '田中花子',
            'gender' => 2,
            'email' => 'test6@example.com',
            'postcode' => '123-5675',
            'address' => '東京都渋谷区千駄ヶ谷1-2-5',
            'building_name' => '千駄ヶ谷マンション106',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $contact = [
            'fullName' => '鈴木太郎',
            'gender' => 1,
            'email' => 'test7@example.com',
            'postcode' => '123-5676',
            'address' => '東京都渋谷区千駄ヶ谷1-2-6',
            'building_name' => '千駄ヶ谷マンション107',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $contact = [
            'fullName' => '鈴木花子',
            'gender' => 2,
            'email' => 'test8@example.com',
            'postcode' => '123-5677',
            'address' => '東京都渋谷区千駄ヶ谷1-2-7',
            'building_name' => '千駄ヶ谷マンション108',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $contact = [
            'fullName' => '高橋太郎',
            'gender' => 1,
            'email' => 'test9@example.com',
            'postcode' => '123-5678',
            'address' => '東京都渋谷区千駄ヶ谷1-2-8',
            'building_name' => '千駄ヶ谷マンション109',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($contact);
        $param = [
            'fullName' => '高橋花子',
            'gender' => 2,
            'email' => 'test10@example.com',
            'postcode' => '123-5679',
            'address' => '東京都渋谷区千駄ヶ谷1-2-9',
            'building_name' => '千駄ヶ谷マンション111',
            'opinion' => 'いつもお世話になっております。先日、貴社製品を購入させていただきました。この度、不具合が生じ、説明書に沿って操作を進めていましたが上手く行きませんでした。どのように直せば良いかご教授いただきたいです。'
        ];
        DB::table('contacts')->insert($param);
        $this->call([ContactsTableSeeder::class]);
    }
}
