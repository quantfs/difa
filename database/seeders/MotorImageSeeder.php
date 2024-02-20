<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MotorImage;

class MotorImageSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*/
	public function run(): void
	{
		$data = [
			[
				'defect_id' => '1',
				'origin' => 'Motor/1. Масло/1.1.Черное, потемневшее масло.png',
				'path' => 'img//image_1707903806595_c2cac364cb521bb533367baa6fe2f1d0.png',
			],
			[
				'defect_id' => '1',
				'origin' => 'Motor/1. Масло/1.2.Черное, потемневшее масло.png',
				'path' => 'img//image_1707903806641_e3b91f8c8c63f1ef043aea63ee8062b7.png',
			],
			[
				'defect_id' => '1',
				'origin' => 'Motor/1. Масло/1.3.Черное, потемневшее масло.png',
				'path' => 'img//image_1707903806847_224446aa094d1f5bd5809c8c8feb3fa6.png',
			],
			[
				'defect_id' => '2',
				'origin' => 'Motor/2. Статор асинхронного двигателя/1.Потемнение статорных обмоток (перегрев).png',
				'path' => 'img//image_1707903806901_bca6a73fe0fb2e22bad3cf7bc8e82588.png',
			],
			[
				'defect_id' => '3',
				'origin' => 'Motor/2. Статор асинхронного двигателя/2.Прогар изоляции лобовой обмотки статора.png',
				'path' => 'img//image_1707903806946_19f89dd24d85f90c43b59b2530d28f3f.png',
			],
			[
				'defect_id' => '4',
				'origin' => 'Motor/2. Статор асинхронного двигателя/3.1.Прогар изоляции обмотки в пазу.png',
				'path' => 'img//image_1707903806992_cd9b9a65acf616e220a4906c2d4eff80.png',
			],
			[
				'defect_id' => '4',
				'origin' => 'Motor/2. Статор асинхронного двигателя/3.2.Прогар изоляции обмотки в пазу.png',
				'path' => 'img//image_1707903807018_8dc29ad2dc62cc30a08f7a79941189c6.png',
			],
			[
				'defect_id' => '4',
				'origin' => 'Motor/2. Статор асинхронного двигателя/3.3.Прогар изоляции обмотки в пазу.png',
				'path' => 'img//image_1707903807052_6a8daf59d2c15bea6fd5f9cfd2bdb241.png',
			],
			[
				'defect_id' => '5',
				'origin' => 'Motor/2. Статор асинхронного двигателя/4.1.Вытекание (размягщение) компаунда КПН-240.png',
				'path' => 'img//image_1707903807078_181156f18ebe763d8550fd786d7a755d.png',
			],
			[
				'defect_id' => '5',
				'origin' => 'Motor/2. Статор асинхронного двигателя/4.2.Вытекание (размягщение) компаунда КПН-240.png',
				'path' => 'img//image_1707903807107_8881dea08397422d764c436b1225acee.png',
			],
			[
				'defect_id' => '6',
				'origin' => 'Motor/2. Статор асинхронного двигателя/5.1.Следы контакта ротора и статора.png',
				'path' => 'img//image_1707903807645_2c9d6a07af1b995019b8488b440b8d45.png',
			],
			[
				'defect_id' => '6',
				'origin' => 'Motor/2. Статор асинхронного двигателя/5.2.Следы контакта ротора и статора.png',
				'path' => 'img//image_1707903807750_e41e9afb8500d78c46478b064a32ec55.png',
			],
			[
				'defect_id' => '7',
				'origin' => 'Motor/2. Статор асинхронного двигателя/6.Для компаундированных ПЭД – воздушные полости в компаунде (плавление компаунда).png',
				'path' => 'img//image_1707903807795_9aeaeff9a5b9006190118b0ddbada409.png',
			],
			[
				'defect_id' => '8',
				'origin' => 'Motor/2. Статор асинхронного двигателя/7.Корпус статора.png',
				'path' => 'img//image_1707903807843_d8d850014e2f7cdce2709879503bf025.png',
			],
			[
				'defect_id' => '9',
				'origin' => 'Motor/3. Ротор двигателя/1.Следы трения ротора о статор.png',
				'path' => 'img//image_1707903807906_230746a0f80ef8ebff73ea1401b31718.png',
			],
			[
				'defect_id' => '10',
				'origin' => 'Motor/3. Ротор двигателя/2.Посторонние примеси в пакете ротора.png',
				'path' => 'img//image_1707903807953_b78ebdf632767226e4815c5e164d4dc0.png',
			],
			[
				'defect_id' => '11',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/1.Скручивание вала в шлицевой части.png',
				'path' => 'img//image_1707903808026_3b13f1453ecd2e4b2c0975d4502ba0d7.png',
			],
			[
				'defect_id' => '12',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/10.Трещина на втулке.png',
				'path' => 'img//image_1707903808097_94f6d20bed71558154c258deef784fc5.png',
			],
			[
				'defect_id' => '13',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/11.Износ втулки.png',
				'path' => 'img//image_1707903808148_87ee0a740f54c61c01d234e1ee0b64f2.png',
			],
			[
				'defect_id' => '14',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/2.1.Односторонний износ вала.png',
				'path' => 'img//image_1707903808217_3d7cc3799679d4eb2d5ff6633f121a03.png',
			],
			[
				'defect_id' => '14',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/2.2.Односторонний износ вала.png',
				'path' => 'img//image_1707903808282_d9f6ddc1534fb6300316bc4fca67839c.png',
			],
			[
				'defect_id' => '15',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/3.1.Слом вала в шлицевой части с возможным проворотом шлицов (усталостный износ).png',
				'path' => 'img//image_1707903808319_c0f4dc5caba02045f5040198f3b5c705.png',
			],
			[
				'defect_id' => '15',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/3.2.Слом вала в шлицевой части с возможным проворотом шлицов (усталостный износ).png',
				'path' => 'img//image_1707903808462_729466b4e8fb6bee45e82193735e4da6.png',
			],
			[
				'defect_id' => '15',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/3.3.Слом вала в шлицевой части с возможным проворотом шлицов (усталостный износ).png',
				'path' => 'img//image_1707903808501_911889c70a710eb16be3e88ce222d3bc.png',
			],
			[
				'defect_id' => '16',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/4.1.Износ шлицевой части вала.png',
				'path' => 'img//image_1707903808562_4988e115a53cf20ff0561c752d6784d5.png',
			],
			[
				'defect_id' => '16',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/4.2.Износ шлицевой части вала.png',
				'path' => 'img//image_1707903808600_3a6bc729f5e4b46c06ef86580a7e63e2.png',
			],
			[
				'defect_id' => '17',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/5.1.Слом шпонки вала.png',
				'path' => 'img//image_1707903808640_fe747790185f7aeb6e91c4bad7bdfef5.png',
			],
			[
				'defect_id' => '17',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/5.2.Слом шпонки вала.png',
				'path' => 'img//image_1707903808679_a612cc66613caa8fb15d5df0ee1b8721.png',
			],
			[
				'defect_id' => '18',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/6.1.Скручивание шпоночного паза.png',
				'path' => 'img//image_1707903809279_c2ca1154e81cf54de65673d7c3c32f32.png',
			],
			[
				'defect_id' => '18',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/6.2.Скручивание шпоночного паза.png',
				'path' => 'img//image_1707903809302_3384471e2d8a77594932c621156be449.png',
			],
			[
				'defect_id' => '18',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/7.Скручивание шпоночного паза с возможным сломом втулки.png',
				'path' => 'img//image_1707903809341_39471be62458e6383a4d5b93bd8b9faf.png',
			],
			[
				'defect_id' => '19',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/7.Скручивание шпоночного паза с возможным сломом втулки.png',
				'path' => 'img//image_1707903809384_732942ee37d02b4ec7f75e6519b75c13.png',
			],
			[
				'defect_id' => '20',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/8.Твердый налет на переходных муфтах.png',
				'path' => 'img//image_1707903809429_2a73c113bad99ce0a2e6db51257b4605.png',
			],
			[
				'defect_id' => '21',
				'origin' => 'Motor/4. Вал двигателя и соединительные элементы/9.Коррозия муфты.png',
				'path' => 'img//image_1707903809487_9f6813e32d9c3cbc6eb83fbfdc5e4bc2.png',
			],
			[
				'defect_id' => '22',
				'origin' => 'Motor/5. Корпус/1.Ожог головки двигателя.png',
				'path' => 'img//image_1707903809541_d0bb67d458bc13b6ed1f7ea7f820b9d5.png',
			],
			[
				'defect_id' => '23',
				'origin' => 'Motor/5. Корпус/10.Твердый налет на наружной поверхности головки или основания.png',
				'path' => 'img//image_1707903809596_c73613bf10dddb8c8cde9e73e9d61cce.png',
			],
			[
				'defect_id' => '24',
				'origin' => 'Motor/5. Корпус/2.1.Корпус головки двигателя.png',
				'path' => 'img//image_1707903809644_0272b26a4cd08f2bc4c63c72e8b95e81.png',
			],
			[
				'defect_id' => '24',
				'origin' => 'Motor/5. Корпус/2.2.Корпус головки двигателя.png',
				'path' => 'img//image_1707903809668_5f93833e6216b97bcedf9b820ec47d4f.png',
			],
			[
				'defect_id' => '24',
				'origin' => 'Motor/5. Корпус/2.3.Корпус головки двигателя.png',
				'path' => 'img//image_1707903809689_99dd72e15fe3229f61198fcbf008db9e.png',
			],
			[
				'defect_id' => '25',
				'origin' => 'Motor/5. Корпус/3.Отложения на головке.png',
				'path' => 'img//image_1707903809717_8f7ab01ac8183f969cb4b9b65e7b6aa5.png',
			],
			[
				'defect_id' => '26',
				'origin' => 'Motor/5. Корпус/4.Твердый налет на корпусе.png',
				'path' => 'img//image_1707903809796_7872f16dd0c9d3411f39cb3ef691883e.png',
			],
			[
				'defect_id' => '27',
				'origin' => 'Motor/5. Корпус/5.1.Износ корпуса.png',
				'path' => 'img//image_1707903809865_a89c6385a93e17c7ec1b661409c352f2.png',
			],
			[
				'defect_id' => '27',
				'origin' => 'Motor/5. Корпус/5.2.Износ корпуса.png',
				'path' => 'img//image_1707903809883_d4251e5dafa7d02b8023f02d73de2a4c.png',
			],
			[
				'defect_id' => '27',
				'origin' => 'Motor/5. Корпус/5.3.Износ корпуса.png',
				'path' => 'img//image_1707903809903_7c6e48fba4d9ca919e3018b57b4f9323.png',
			],
			[
				'defect_id' => '28',
				'origin' => 'Motor/5. Корпус/6.1.Коррозия и разрушение резьбовых соединений в корпусе.png',
				'path' => 'img//image_1707903809946_0037fb825e3a304ee6202d4469d26073.png',
			],
			[
				'defect_id' => '28',
				'origin' => 'Motor/5. Корпус/6.2.Коррозия и разрушение резьбовых соединений в корпусе.png',
				'path' => 'img//image_1707903809972_62ceed9cbbe25e608be6af0dc6dd8d43.png',
			],
			[
				'defect_id' => '28',
				'origin' => 'Motor/5. Корпус/6.3.Коррозия и разрушение резьбовых соединений в корпусе.png',
				'path' => 'img//image_1707903809998_c1c45e5f913fedb774c80da203197d25.png',
			],
			[
				'defect_id' => '29',
				'origin' => 'Motor/5. Корпус/7.Повреждение резьбы основания.png',
				'path' => 'img//image_1707903810069_40a1a655bb34170090671b03fb461c3d.png',
			],
			[
				'defect_id' => '30',
				'origin' => 'Motor/5. Корпус/8.Коррозия основания.png',
				'path' => 'img//image_1707903810101_bf0188ae54c07bce69b7924ca6664d95.png',
			],
			[
				'defect_id' => '31',
				'origin' => 'Motor/5. Корпус/9.Коррозия и эрозия головы.png',
				'path' => 'img//image_1707903810296_999ab7c61ca64fcfc8c8459f4d097572.png',
			],
			[
				'defect_id' => '32',
				'origin' => 'Motor/6. Узел токоввода/1.1.Колодка токоввода.png',
				'path' => 'img//image_1707903810788_25d708ab47eb2dfa5f7b9f79a63bc2f0.png',
			],
			[
				'defect_id' => '32',
				'origin' => 'Motor/6. Узел токоввода/1.2.Колодка токоввода.png',
				'path' => 'img//image_1707903810823_6fe637e6675326998930e6cf48e797f9.png',
			],
			[
				'defect_id' => '33',
				'origin' => 'Motor/6. Узел токоввода/2.Провода колодки токоввода.png',
				'path' => 'img//image_1707903810874_3b66f5cf708b89baef0c3bc8a82b0897.png',
			],
			[
				'defect_id' => '34',
				'origin' => 'Motor/7. Износ опорного подшипника/1.1.Износ опорного подшипника.png',
				'path' => 'img//image_1707903810929_17e96f5c1145671b0334a54243097630.png',
			],
			[
				'defect_id' => '34',
				'origin' => 'Motor/7. Износ опорного подшипника/1.2.Износ опорного подшипника.png',
				'path' => 'img//image_1707903810967_2fcefa5999368f501cde92a5fe9a4e17.png',
			],
		];

		foreach ($data as $item) {
			MotorImage::create($item);
		}
	}
}
