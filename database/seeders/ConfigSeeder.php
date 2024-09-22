<?php

namespace Database\Seeders;

use App\Models\Config as ModelsConfig;
use Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c=new ModelsConfig();
        $c->parametar_name='pocetna_title1';
        $c->parametar_value='Шта све има на ћирилици?';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='pocetna_text1';
        $c->parametar_value='<p>Ако вам недостају ресурси, савети или идеје како да креирате дигитална решења и дигиталне производе
                        користећи ћириличко писмо овај сајт вам може помоћи – да пронађете ресурсе и размените знања
                        потребна да разноврстан свет ћириличког писма представите у дигиталном свету.</p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='pocetna_title2';
        $c->parametar_value='За веб-дивелопере и програмере';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='pocetna_text2';
        $c->parametar_value='<p>Како правити линкове на ћирилици, како програмирати на ћирилици, како пресловљавати? Која готова решења
                    постоје за лакшу израду веб-сајтова на ћирилици?</p>
                <p>Пронађите алате и упутства у секцији <span class="underline">Развој.</span></p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='pocetna_title3';
        $c->parametar_value='За дизајнере и веб-дизајнере';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='pocetna_text1';
        $c->parametar_value='<p>Пронађите савршене фонтове за ваш уметнички и комерцијални пројекат. Тестирајте приказе и пронађите
                    додатне ресурсе за оригиналне дизајнерске подухвате. </p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='pocetna_title_istaknuti';
        $c->parametar_value='Истакнути чланци';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='footer_text';
        $c->parametar_value='<p class="m-0">Иницијална верзија сајта иманаћирилици.срб
                                настала је на истоименом хакатону. Млади програмери који су креирали решење наставили су
                                разраду уз подршку РНИДС-а и испоручили сајт који нуди алате, ресурсе и креира простор
                                за размену знања за употребу ћирилице у дигиталном окружењу. </p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='footer_copyright';
        $c->parametar_value='Copyrights &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>.';
        $c->save();
        
        $c=new ModelsConfig();
        $c->parametar_name='razvoj_title';
        $c->parametar_value='Развој';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='razvoj_subtitle1';
        $c->parametar_value='Алати';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='razvoj_text1';
        $c->parametar_value='<p>
            Фонтови играју кључну улогу у дизајну пружајући визуелни идентитет, тон и побољшавајући читљивост. За дизајнере који стварају садржај на српском, доступност различитих ћириличних фонтова је од суштинског значаја, омогућавајући им усаглашавање са културним нијансама и постизање хармоничне комбинације естетског привлачења и језичке аутентичности у њиховим дизајнима.
        </p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='razvoj_subtitle2';
        $c->parametar_value='Упутства';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='razvoj_text2';
        $c->parametar_value='<p>        
            Фонтови играју кључну улогу у дизајну пружајући визуелни идентитет, тон и побољшавајући читљивост. За дизајнере који стварају садржај на српском, доступност различитих ћириличних фонтова је од суштинског значаја, омогућавајући им усаглашавање са културним нијансама и постизање хармоничне комбинације естетског привлачења и језичке аутентичности у њиховим дизајнима.
        </p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='alati_title';
        $c->parametar_value='Алати';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='alati_text';
        $c->parametar_value='<p>Овде можете пронаћи разноврсне алате који вам могу бити од користи приликом рада са ћириличним писмом. Без обзира да ли вам је потребно конвертовање текста, алати за друге програме или неки други користан алат, наша колекција вам може помоћи да олакшате свој рад са овим писмом</p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='uputstva_title';
        $c->parametar_value='Упутства';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='uputstva_text';
        $c->parametar_value='<p>Овде можете пронаћи разнолике чланке о ресурсима, алатима и занимљивостима везаним за ћирилично писмо. Чланци ће вам пружити најновије информације, корисне препоруке за алате и занимљиве чињенице о ћирилици. Пратите нас како бисте остали у току са свим што ћирилица има да понуди!</p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='blogovi_title';
        $c->parametar_value='Блогови';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='blogovi_text';
        $c->parametar_value='<p>Овде можете пронаћи разнолике чланке о ресурсима, алатима и занимљивостима везаним за ћирилично писмо. Чланци ће вам пружити најновије информације, корисне препоруке за алате и занимљиве чињенице о ћирилици. Пратите нас како бисте остали у току са свим што ћирилица има да понуди!</p>';
        $c->save();


        $c=new ModelsConfig();
        $c->parametar_name='resursi_title';
        $c->parametar_value='Ресурси';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='baza_fontova_title';
        $c->parametar_value='База фонтова';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='baza_fontova_text';
        $c->parametar_value='<p class="resource-description">
                Фонтови играју кључну улогу у дизајну пружајући визуелни идентитет, тон и побољшавајући читљивост.
            </p>
            <p class="resource-description">
                За дизајнере који стварају садржај на српском, доступност различитих ћириличних фонтова је од суштинског значаја, омогућавајући им усаглашавање са културним нијансама и постизање хармоничне комбинације естетског привлачења и језичке аутентичности у њиховим дизајнима.                </p>';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='video_tutorijali_title';
        $c->parametar_value='Видео туторијали';
        $c->save();

        $c=new ModelsConfig();
        $c->parametar_name='video_tutorijali_text';
        $c->parametar_value='<p class="tutorial-description">
                Видео туториjали представљају неизоставан извор образовања за широк спектар интересовања, укључујући
                области као што су SEO оптимизација и употреба ћирилице.
            </p>
            <p class="tutorial-description">
                Ови туториали обезбеђују визуелно и лако разумљиво учење, што је посебно битно за брзо усвајање и
                примену комплексних концепата. Независно од области примене, видео туториали су кључни за унапређење
                разумевања и успешну примену различитих вештина и техника.
            </p>';
        $c->save();
    }
}
