<?php

namespace App\Console\Commands;

use App\Http\Controllers\Auth\RegisterController;
use App\Models\InputData;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class develop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dd(Str::slug('Мопед'));

        return;
        $urlEncodedText="%D0%9F%D0%B5%D1%80%D0%BC%D1%8C";
        $urlEncodedText="%D0%9F%D0%B5%D1%80%D0%BC%D1%8C%20%D1%83%D0%BB%20%D0%9F%D0%B5%D1%82%
        D1%80%D0%BE%D0%BF%D0%B0%D0%B2%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F";

        $urlEncodedText="%D0%9F%D0%B5%D1%80%D0%BC%D1%8C%20%D1%83%D0%BB%20%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%BF%D0%B0%D0%B2%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F";
        $urlEncodedText="%D0%9F%D0%B5%D1%80%D0%BC%D1%8C+%D1%83%D0%BB+%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%BF%D0%B0%D0%B2%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F";
        $decodedText = urldecode($urlEncodedText);
        dump($decodedText);

        $address = 'Пермь ул Петропавловская';
        $result = urlencode('Пермь ул Петропавловская');
        $result = str_replace('+','%20',$result);

        $address = 'Пермь Ленина д 10';
        $result = urlencode($address);
        $result = str_replace('+','%20',$result);
        dd($result);

        //$this->createUser();
        return;


        $record = InputData::find(6);
        //dd($record->documents);

        $data = [
            'ddd' => 'adsfdsfdasf',
            'Опросный лист' => [
                'fff1' => 'ddddddddd',
                'fff2' => 'lllllllll'
            ]
        ];

        $record->update([
            'operating_time' => '112',
            'documents' => $data
        ]);


        dd($record->documents);
    }

    private function createUser(): void {
        $data = [
            'name' => 'Ivan Zolotarev',
            'email' => 'ivan.zolotarev@novometgroup.com',
            'password' => '12345678',
        ];

        $registerController = new RegisterController();
        $registerController->create($data);
    }
}
