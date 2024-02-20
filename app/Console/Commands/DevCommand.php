<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class DevCommand extends Command
{
       /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DB creation';

    private array $arrDetails = [];

    private function units($path, $is_dir) : array
    {
        if ($path[mb_strlen($path) - 1] != '/') {
            $path .= '/';
        }

        $files = array();
        $dh = opendir($path);
        while (false !== ($file = readdir($dh))) {
            if ($is_dir) {
                if ($file != '.' && $file != '..' && is_dir($path.$file) && $file[0] != '.') {
                    $files[] = $file;
                }
            } else {
                if ($file != '.' && $file != '..' && !is_dir($path.$file) && $file[0] != '.') {
                    $files[] = $file;
                }
            }

        }

        closedir($dh);

        return $files;
    }

    private function startSeeder($unit, $type) : array
    {
        $name = ucfirst(strtolower($unit));

        $fileName = 'database/seeders/'.$name.$type.'Seeder.php'; //$_SERVER['DOCUMENT_ROOT'].

        $fd = fopen($fileName, 'w') or die("не удалось создать файл");

        // Написание верхнего кода сидера
        $str = "<?php\n\n";
        fputs($fd, $str);
        $str = "namespace Database\Seeders;\n\n";
        fputs($fd, $str);
        $str = "use Illuminate\Database\Seeder;\n";
        fputs($fd, $str);
        $str = "use App\Models\\".$name.$type.";\n\n";
        fputs($fd, $str);
        $str = "class ".$name.$type."Seeder extends Seeder\n";
        fputs($fd, $str);
        $str = "{\n";
        fputs($fd, $str);
        $str = "\t/**\n\t* Run the database seeds.\n\t*/\n";
        fputs($fd, $str);
        $str = "\tpublic function run(): void\n";
        fputs($fd, $str);
        $str = "\t{\n";
        fputs($fd, $str);
        $str = "\t\t\$data = [\n";
        fputs($fd, $str);

        return [$fd, $name];
    }

    private function endSeeder($fd, $name, $type) : void
    {
        $str = "\t\t];\n\n";
        fputs($fd, $str);
        $str =  "\t\t".'foreach ($data as $item) {'."\n";
        fputs($fd, $str);
        $str = "\t\t\t".$name.$type.'::create($item);'."\n";
        fputs($fd, $str);
        $str = "\t\t}\n\t}\n}\n";
        fputs($fd, $str);

        fclose($fd);
    }

    private function makeDefects($unit, $detail, $path, $fd, $countDefect, $dataArrImg) : int
    {
        // Составление массива одного дефекта
        $dir = $path.'/'.$unit.'/'.$detail;


        foreach ($this->units($dir, false) as $file) {
            //dd($pathInfo["filename"]);
            if (str_ends_with($file, '.txt')) {
                $countDefect++;

                $str = "\t\t\t[\n";
                // id
                fputs($fd, $str);
                $str = "\t\t\t\t'id' => '$countDefect',\n";
                dump($countDefect);
                fputs($fd, $str);
                // Деталь
                $detailParse = trim(explode('.', $detail)[1]);
                $key = array_search($detailParse, $this->arrDetails);
                $str = "\t\t\t\t'detail_id' => '$key',\n";
                fputs($fd, $str);
                // Дефект
                $defectParse = trim(explode('.', basename($file, '.txt'))[1]);
                $defectCode = Str::slug($defectParse);
                $str = "\t\t\t\t'code' => '$defectCode',\n";
                fputs($fd, $str);
                $str = "\t\t\t\t'defect' => '$defectParse',\n";
                fputs($fd, $str);
                // Описание дефекта
                $text = file_get_contents($dir.'/'.$file);
                $text = mb_convert_encoding($text, 'utf-8', 'utf-8');
                $str = "\t\t\t\t'description' => '".$text."',\n";
                fputs($fd, $str);
                // Фотография
                $pathInfo = pathinfo(basename($file));
                $str = $this->addPicture($path.'/'.$unit.'/'.$detail, $unit, $detail, $path, $pathInfo["filename"], $countDefect, $dataArrImg[0]);
                $str = "\t\t\t\t'picture' => 'images/".basename($file, '.txt').".png',\n";
                fputs($fd, $str);
                // Примечание
                $str = "\t\t\t\t'note' => 'Примечание для ".basename($file, '.txt')."',\n";
                fputs($fd, $str);
                // Причина
                $pathInfo = pathinfo(basename($file));
                $text = file_get_contents($dir.'/'.$pathInfo["filename"].'.txtp');
                $text = mb_convert_encoding($text, 'utf-8', 'utf-8');
                $str = "\t\t\t\t'reason' => '".$text."',\n";
                fputs($fd, $str);
                $str = "\t\t\t],\n";
                fputs($fd, $str);
            }
        }

        return $countDefect;
    }

    private function addPicture($dir, $unit, $detail, $path, $fileName, $countDefect, $fd) : string
    {


//        $dir = $path . '/' . $unit . '/' . $detail;
        $fileName = trim(explode('.', $fileName)[1]);
        foreach ($this->units($dir, false) as $file) {
            if (str_ends_with($file, '.png') && str_contains($file, $fileName)) {
                $date = Carbon::now();
                $date->setTimezone('Europe/Moscow');
                $timeInMilliseconds = $date->valueOf();
                //$timeInDays = ceil($timeInMilliseconds / 1000 / 60 / 60 / 24);
                $newFileName = 'image_'.$timeInMilliseconds.'_'.md5(uniqid()).'.png';
                $path = Storage::disk('public')->putFileAs('/img/', $dir.'/'.$file, $newFileName);
                dump($path);

                $str = "\t\t\t[\n";
                fputs($fd, $str);
                $str = "\t\t\t\t'defect_id' => '$countDefect',\n";
                fputs($fd, $str);
                $str = "\t\t\t\t'origin' => '$unit/$detail/$file',\n";
                fputs($fd, $str);
                $str = "\t\t\t\t'path' => '$path',\n";
                fputs($fd, $str);
                $str = "\t\t\t],\n";
                fputs($fd, $str);
            }
        }

        return $path;
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $path = __DIR__.'/../../../database/ESP';
        //$this->makeSeeder('test');

        $maxUnits = 1;
        $maxDetails = 10;

        // Создание сидера для деталей узлов
        $countUnit = 0;
        $countDetail = 0;
        $countDefect = 0;
        foreach($this->units($path, true) as $unit) {
            //dd($unit);
            if ($countUnit === $maxUnits) break;
            $dataArr = $this->startSeeder($unit, 'Detail');
            //dump($unit);
            foreach($this->units($path.'/'.$unit, true) as $detail) {
                if ($countDetail === $maxDetails) break;
                $countDetail++;

                $detailParse = trim(explode('.', $detail)[1]);
                $this->arrDetails += [ $countDetail => $detailParse ];

                $str = "\t\t\t[\n";
                fputs($dataArr[0], $str);
                $str = "\t\t\t\t'id' => '$countDetail',\n";
                fputs($dataArr[0], $str);
                $detailCode = Str::slug($detailParse);
                $str = "\t\t\t\t'code' => '$detailCode',\n";
                fputs($dataArr[0], $str);
                $str = "\t\t\t\t'name' => '$detailParse',\n";
                fputs($dataArr[0], $str);
                $str = "\t\t\t],\n";
                fputs($dataArr[0], $str);
            }
            $this->endSeeder($dataArr[0], $dataArr[1],'Detail');
            $countUnit++;
        }

        //dd($this->arrDetails);

        // Создание сидера для дефектов деталей
        $countUnit = 0;
        $countDetail = 0;
        foreach($this->units($path, true) as $unit) {
            if ($countUnit === $maxUnits) break;
            //dd($unit);
            $dataArr = $this->startSeeder($unit, 'Defect');
            $dataArrImg = $this->startSeeder($unit, 'Image');
            foreach($this->units($path.'/'.$unit, true) as $detail) {
                if ($countDetail === $maxDetails) break;
                dump($detail);
                $countDefect = $this->makeDefects($unit, $detail, $path, $dataArr[0], $countDefect, $dataArrImg);
                $countDetail++;
            }
            $this->endSeeder($dataArr[0], $dataArr[1], 'Defect');
            $this->endSeeder($dataArrImg[0], $dataArrImg[1],'Image');
            $countUnit++;
        }
    }
}
