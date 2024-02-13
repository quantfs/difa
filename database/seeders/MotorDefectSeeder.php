<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MotorDefect;

class MotorDefectSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*/
	public function run(): void
	{
		$data = [
			[
				'detail_id' => '1',
				'code' => 'cernoe-potemevsee-maslo',
				'defect' => 'Черное, потемевшее масло',
				'description' => 'Черное, потерявшее вязкость масло с различными примесями',
				'picture' => 'images/1.Черное, потемевшее масло.png',
				'note' => 'Примечание для 1.Черное, потемевшее масло',
				'reason' => 'Температурная деградация масла, Попадание примесей, Попадание скважной жидкости',
			],
			[
				'detail_id' => '2',
				'code' => 'potemnenie-statornyx-obmotok-peregrev',
				'defect' => 'Потемнение статорных обмоток (перегрев)',
				'description' => 'Черный цвет статорных обмоток, наличие характерного запаха горелой изоляции',
				'picture' => 'images/1.Потемнение статорных обмоток (перегрев).png',
				'note' => 'Примечание для 1.Потемнение статорных обмоток (перегрев)',
				'reason' => 'Перегрузка двигателя, Повышенное или пониженное напряжение, Низкая теплопередача',
			],
			[
				'detail_id' => '2',
				'code' => 'progar-izoliacii-lobovoi-obmotki-statora',
				'defect' => 'Прогар изоляции лобовой обмотки статора',
				'description' => 'Разрыв цепи статорной обмотки, оголение медных жил и прогар изоляции в лобовой части',
				'picture' => 'images/2.Прогар изоляции лобовой обмотки статора.png',
				'note' => 'Примечание для 2.Прогар изоляции лобовой обмотки статора',
				'reason' => 'Низкая теплопередача, Повышенное напряжение',
			],
			[
				'detail_id' => '2',
				'code' => 'progar-izoliacii-obmotki-v-pazu',
				'defect' => 'Прогар изоляции обмотки в пазу',
				'description' => 'Прогар изоляции обмотки изнутри, что в дальнейшем приводит к значительному разрушению изоляции',
				'picture' => 'images/3.Прогар изоляции обмотки в пазу.png',
				'note' => 'Примечание для 3.Прогар изоляции обмотки в пазу',
				'reason' => 'Низкая теплопередача, Повышенное напряжение',
			],
			[
				'detail_id' => '2',
				'code' => 'vytekanie-razmiagshhenie-kompaunda-kpn-240',
				'defect' => 'Вытекание (размягщение) компаунда КПН-240',
				'description' => 'Вытекание компаунда КПН-240 из меж жильного пространства',
				'picture' => 'images/4.Вытекание (размягщение) компаунда КПН-240.png',
				'note' => 'Примечание для 4.Вытекание (размягщение) компаунда КПН-240',
				'reason' => 'Наличие посторонних веществ в составе компаунда, Попадание влаги до отверждения компаунда КПН-240, Попадание скважной жидкости в процессе эксплуатации',
			],
			[
				'detail_id' => '2',
				'code' => 'sledy-kontakta-rotora-i-statora',
				'defect' => 'Следы контакта ротора и статора',
				'description' => 'Поперечные царапины на внутренней полости статора',
				'picture' => 'images/5.Следы контакта ротора и статора.png',
				'note' => 'Примечание для 5.Следы контакта ротора и статора',
				'reason' => 'Расширение ротора, которое ведет к контакту со слоем статора',
			],
			[
				'detail_id' => '2',
				'code' => 'dlia-kompaundirovannyx-ped-vozdusnye-polosti-v-kompaunde-plavlenie-kompaunda',
				'defect' => 'Для компаундированных ПЭД – воздушные полости в компаунде (плавление компаунда)',
				'description' => 'Некоторые фрагменты проводов не склеены с остальными, неравномерный цвет компаунда',
				'picture' => 'images/6.Для компаундированных ПЭД – воздушные полости в компаунде (плавление компаунда).png',
				'note' => 'Примечание для 6.Для компаундированных ПЭД – воздушные полости в компаунде (плавление компаунда)',
				'reason' => 'Попадание воды при эксплуатации',
			],
			[
				'detail_id' => '2',
				'code' => 'korpus-statora',
				'defect' => 'Корпус статора',
				'description' => 'Коррозия корпуса статора',
				'picture' => 'images/7.Корпус статора.png',
				'note' => 'Примечание для 7.Корпус статора',
				'reason' => 'Действие пластовой воды при эксплуатации',
			],
			[
				'detail_id' => '3',
				'code' => 'sledy-treniia-rotora-o-stator',
				'defect' => 'Следы трения ротора о статор',
				'description' => 'Поперечные царапины на роторе',
				'picture' => 'images/1.Следы трения ротора о статор.png',
				'note' => 'Примечание для 1.Следы трения ротора о статор',
				'reason' => 'Смещение двигателя в стволе скважины, Односторонний износ
',
			],
			[
				'detail_id' => '3',
				'code' => 'postoronnie-primesi-v-pakete-rotora',
				'defect' => 'Посторонние примеси в пакете ротора',
				'description' => 'Наличие посторонних примесей между пакетами ротора',
				'picture' => 'images/2.Посторонние примеси в пакете ротора.png',
				'note' => 'Примечание для 2.Посторонние примеси в пакете ротора',
				'reason' => 'Загрязнение компаундом в результате термодеструкции материала, Загрязнение в результате разрушения фторопластовой изоляции или текстолитовых шайб  при эксплуатации',
			],
			[
				'detail_id' => '4',
				'code' => 'skrucivanie-vala-v-slicevoi-casti',
				'defect' => 'Скручивание вала в шлицевой части',
				'description' => 'Пластическая деформация в виде проворота шлицев',
				'picture' => 'images/1.Скручивание вала в шлицевой части.png',
				'note' => 'Примечание для 1.Скручивание вала в шлицевой части',
				'reason' => 'Клин ротора',
			],
			[
				'detail_id' => '4',
				'code' => 'treshhina-na-vtulke',
				'defect' => 'Трещина на втулке',
				'description' => 'Образование сквозной трещины в районе шпоночного паза',
				'picture' => 'images/10.Трещина на втулке.png',
				'note' => 'Примечание для 10.Трещина на втулке',
				'reason' => 'Хрупкое состояние за счет большой величины цементированного слоя',
			],
			[
				'detail_id' => '4',
				'code' => 'iznos-vtulki',
				'defect' => 'Износ втулки',
				'description' => 'На наружной поверхности видны кольцевые борозды, канавки натяги, вырывы металла',
				'picture' => 'images/11.Износ втулки.png',
				'note' => 'Примечание для 11.Износ втулки',
				'reason' => 'Изнашивание при заедании и тяжелые условия работы',
			],
			[
				'detail_id' => '4',
				'code' => 'odnostoronnii-iznos-vala',
				'defect' => 'Односторонний износ вала',
				'description' => 'Потеря металла на валу, риски, расположенные локально с одной стороны вала',
				'picture' => 'images/2.Односторонний износ вала.png',
				'note' => 'Примечание для 2.Односторонний износ вала',
				'reason' => 'Неверная конструкция промежуточных подшипников, Отказ промежуточных подшипников, Работа в сильно искривленном положении, Агрессивное воздействие в горизонтальной скважине',
			],
			[
				'detail_id' => '4',
				'code' => 'slom-vala-v-slicevoi-casti-s-vozmoznym-provorotom-slicov-ustalostnyi-iznos',
				'defect' => 'Слом вала в шлицевой части с возможным проворотом шлицов (усталостный износ)',
				'description' => 'Слом под углом 45о, форма сечения - «звездочка»',
				'picture' => 'images/3.Слом вала в шлицевой части с возможным проворотом шлицов (усталостный износ).png',
				'note' => 'Примечание для 3.Слом вала в шлицевой части с возможным проворотом шлицов (усталостный износ)',
				'reason' => 'Воздействие переменных напряжений, Рассинхронизация СУ вследствие подклинивания ротора или неверной настройки',
			],
			[
				'detail_id' => '4',
				'code' => 'iznos-slicevoi-casti-vala',
				'defect' => 'Износ шлицевой части вала',
				'description' => 'Истирание шлицов',
				'picture' => 'images/4.Износ шлицевой части вала.png',
				'note' => 'Примечание для 4.Износ шлицевой части вала',
				'reason' => 'Брак при сборке, Перегрузка, Наличие в соединении твердых частиц (песка)',
			],
			[
				'detail_id' => '4',
				'code' => 'slom-sponki-vala',
				'defect' => 'Слом шпонки вала',
				'description' => 'Деформация шпонки, может сопровождаться полным или частичным ее отсутствием',
				'picture' => 'images/5.Слом шпонки вала.png',
				'note' => 'Примечание для 5.Слом шпонки вала',
				'reason' => 'Абразивный износ, Фреттинг коррозия, Перегрузка',
			],
			[
				'detail_id' => '4',
				'code' => 'skrucivanie-sponocnogo-paza',
				'defect' => 'Скручивание шпоночного паза',
				'description' => 'Скручивание или деформация формы шпоночного паза, может сопровождаться его частичным отсутствием',
				'picture' => 'images/6.Скручивание шпоночного паза.png',
				'note' => 'Примечание для 6.Скручивание шпоночного паза',
				'reason' => 'Осевой износ ступеней, Несоосность, клин вала',
			],
			[
				'detail_id' => '4',
				'code' => 'skrucivanie-sponocnogo-paza-s-vozmoznym-slomom-vtulki',
				'defect' => 'Скручивание шпоночного паза с возможным сломом втулки',
				'description' => 'Скручивание или деформация формы шпоночного паза, может сопровождаться сломом втулок',
				'picture' => 'images/7.Скручивание шпоночного паза с возможным сломом втулки.png',
				'note' => 'Примечание для 7.Скручивание шпоночного паза с возможным сломом втулки',
				'reason' => 'Подклинивание ротора',
			],
			[
				'detail_id' => '4',
				'code' => 'tverdyi-nalet-na-perexodnyx-muftax',
				'defect' => 'Твердый налет на переходных муфтах',
				'description' => 'Слой налипшей соли на поверхности муфты',
				'picture' => 'images/8.Твердый налет на переходных муфтах.png',
				'note' => 'Примечание для 8.Твердый налет на переходных муфтах',
				'reason' => 'Солеотложения',
			],
			[
				'detail_id' => '4',
				'code' => 'korroziia-mufty',
				'defect' => 'Коррозия муфты',
				'description' => 'Образование коррозии на корпусе муфты',
				'picture' => 'images/9.Коррозия муфты.png',
				'note' => 'Примечание для 9.Коррозия муфты',
				'reason' => 'Коррозия',
			],
			[
				'detail_id' => '5',
				'code' => 'ozog-golovki-dvigatelia',
				'defect' => 'Ожог головки двигателя',
				'description' => 'Образование темного нагара на вогнутой части головки двигателя',
				'picture' => 'images/1.Ожог головки двигателя.png',
				'note' => 'Примечание для 1.Ожог головки двигателя',
				'reason' => 'Короткое замыкание кабельной линии',
			],
			[
				'detail_id' => '5',
				'code' => 'tverdyi-nalet-na-naruznoi-poverxnosti-golovki-ili-osnovaniia',
				'defect' => 'Твердый налет на наружной поверхности головки или основания',
				'description' => 'Наличие твердого налета на концевых деталях',
				'picture' => 'images/10.Твердый налет на наружной поверхности головки или основания.png',
				'note' => 'Примечание для 10.Твердый налет на наружной поверхности головки или основания',
				'reason' => 'Солеотложения',
			],
			[
				'detail_id' => '5',
				'code' => 'korpus-golovki-dvigatelia',
				'defect' => 'Корпус головки двигателя',
				'description' => 'Сквозная трещина',
				'picture' => 'images/2.Корпус головки двигателя.png',
				'note' => 'Примечание для 2.Корпус головки двигателя',
				'reason' => 'На основании исследований ЦЗЛ можно сказать, что трещина образовалась в результате термической обработки (закалки)  ',
			],
			[
				'detail_id' => '5',
				'code' => 'otlozeniia-na-golovke',
				'defect' => 'Отложения на головке',
				'description' => 'Отложения на внутренней поверхности',
				'picture' => 'images/3.Отложения на головке.png',
				'note' => 'Примечание для 3.Отложения на головке',
				'reason' => 'Образование отложений в результате термодеструкции масла и образование нерастворимых смолистых продуктов поликонденсации окисленного масла и солей органических кислот железа  ',
			],
			[
				'detail_id' => '5',
				'code' => 'tverdyi-nalet-na-korpuse',
				'defect' => 'Твердый налет на корпусе',
				'description' => 'Высокое содержание солей',
				'picture' => 'images/4.Твердый налет на корпусе.png',
				'note' => 'Примечание для 4.Твердый налет на корпусе',
				'reason' => 'Солеотложения',
			],
			[
				'detail_id' => '5',
				'code' => 'iznos-korpusa',
				'defect' => 'Износ корпуса',
				'description' => 'Глубокие царапины, механические повреждения и/или коррозия',
				'picture' => 'images/5.Износ корпуса.png',
				'note' => 'Примечание для 5.Износ корпуса',
				'reason' => 'Электрохимическая коррозия от кабеля, Последствия монтажа и спуска',
			],
			[
				'detail_id' => '5',
				'code' => 'korroziia-i-razrusenie-rezbovyx-soedinenii-v-korpuse',
				'defect' => 'Коррозия и разрушение резьбовых соединений в корпусе',
				'description' => 'Следы коррозии в области резьбовой части корпуса, сопровождающиеся разрушением витков резьбы',
				'picture' => 'images/6.Коррозия и разрушение резьбовых соединений в корпусе.png',
				'note' => 'Примечание для 6.Коррозия и разрушение резьбовых соединений в корпусе',
				'reason' => 'Коррозия',
			],
			[
				'detail_id' => '5',
				'code' => 'povrezdenie-rezby-osnovaniia',
				'defect' => 'Повреждение резьбы основания',
				'description' => 'Повреждение витков резьбы в основании насоса',
				'picture' => 'images/7.Повреждение резьбы основания.png',
				'note' => 'Примечание для 7.Повреждение резьбы основания',
				'reason' => 'Брак при сборке/разборке, Большие нагрузки при СПО',
			],
			[
				'detail_id' => '5',
				'code' => 'korroziia-osnovaniia',
				'defect' => 'Коррозия основания',
				'description' => 'Неровности и следы коррозии на поверхности основания насоса',
				'picture' => 'images/8.Коррозия основания.png',
				'note' => 'Примечание для 8.Коррозия основания',
				'reason' => 'Коррозия',
			],
			[
				'detail_id' => '5',
				'code' => 'korroziia-i-eroziia-golovy',
				'defect' => 'Коррозия и эрозия головы',
				'description' => 'Наличие следов коррозии, неровности поверхности, сопровождающиеся потерей металла',
				'picture' => 'images/9.Коррозия и эрозия головы.png',
				'note' => 'Примечание для 9.Коррозия и эрозия головы',
				'reason' => 'Гидроабразивный износ и коррозия',
			],
			[
				'detail_id' => '6',
				'code' => 'kolodka-tokovvoda',
				'defect' => 'Колодка токоввода',
				'description' => 'Оплавление КТВ со стороны кабельного удлинителя, разрушение КТВ',
				'picture' => 'images/1.Колодка токоввода.png',
				'note' => 'Примечание для 1.Колодка токоввода',
				'reason' => 'Снижение диэлектрических свойств масла, Деградация диэлектрических свойств материала колодки, Проникновение пластовой жидкости со стороны муфты кабельного удлинителя',
			],
			[
				'detail_id' => '6',
				'code' => 'provoda-kolodki-tokovvoda',
				'defect' => 'Провода колодки токоввода',
				'description' => 'Оплавление проводов КТВ ',
				'picture' => 'images/2.Провода колодки токоввода.png',
				'note' => 'Примечание для 2.Провода колодки токоввода',
				'reason' => 'Пробой изоляции проводов КТВ, в следствии  недостаточной изоляции',
			],
			[
				'detail_id' => '7',
				'code' => 'iznos-opornogo-podsipnika',
				'defect' => 'Износ опорного подшипника',
				'description' => 'Кольцевые борозды и вырыв материала. Трещины на износостойкой поверхности, отсутствие  износостойкого покрытия на трущейся поверхности ',
				'picture' => 'images/1.Износ опорного подшипника .png',
				'note' => 'Примечание для 1.Износ опорного подшипника ',
				'reason' => 'Изнашивание при заедании и задире, что обусловлено режимом сухого трения и тяжело нагруженными условиями эксплуатации, Высокие температуры, недопустимые нагрузки при заедании элементов осевой опоры',
			],
		];

		foreach ($data as $item) {
			MotorDefect::create($item);
		}
	}
}
