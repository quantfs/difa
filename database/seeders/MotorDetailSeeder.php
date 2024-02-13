<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MotorDetail;

class MotorDetailSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*/
	public function run(): void
	{
		$data = [
			[
				'id' => '1',
				'code' => 'maslo',
				'name' => 'Масло',
			],
			[
				'id' => '2',
				'code' => 'stator-asinxronnogo-dvigatelia',
				'name' => 'Статор асинхронного двигателя',
			],
			[
				'id' => '3',
				'code' => 'rotor-dvigatelia',
				'name' => 'Ротор двигателя',
			],
			[
				'id' => '4',
				'code' => 'val-dvigatelia-i-soedinitelnye-elementy',
				'name' => 'Вал двигателя и соединительные элементы',
			],
			[
				'id' => '5',
				'code' => 'korpus',
				'name' => 'Корпус',
			],
			[
				'id' => '6',
				'code' => 'uzel-tokovvoda',
				'name' => 'Узел токоввода',
			],
			[
				'id' => '7',
				'code' => 'iznos-opornogo-podsipnika',
				'name' => 'Износ опорного подшипника',
			],
		];

		foreach ($data as $item) {
			MotorDetail::create($item);
		}
	}
}
