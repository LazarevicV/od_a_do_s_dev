<?php

namespace Database\Seeders;

use App\Models\VideoTutorijal;
use Illuminate\Database\Seeder;

class VideoTutorijalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vt = new VideoTutorijal();
        $vt->naziv = 'Како Гугл третира ћирилицу?';
        $vt->opis = 'Ненад Пантелић, СЕО стручњак, каже да Гугл има развијен механизам препознавања садржаја текстова, али и да може да се „збуни“ ако се на сајту не користе потребни кодови, због чега ће, ако наиђе на исти текст написан и на латиници и на ћирилици, одлучити да објави само један. Други неће бити индексиран и, стога, неће бити ни приказан. Погледајте видео где он објашњава како се овај проблем решава. ';
        $vt->embed_video = '<iframe width="784" height="441" src="https://www.youtube.com/embed/-FvyyE4Dgiw?si=-JJFjj_XwKWz6ocI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        $vt->objavljen = true;
        $vt->resurs_id = 2;
        $vt->save();

        $vt = new VideoTutorijal();
        $vt->naziv = 'BордПрес на ћирилици';
        $vt->opis = 'Државне институције у Србији обавезне су да на својим сајтовима користе ћирилицу, а и све већи број компанија тежи томе да за српско тржиште има сајт са званичним националним писмом. Најчешће се тежи томе да се садржај који је на сајт унет на ћирилици, аутоматски, у реалном времену, појављује и на латиници, јер веома је непрактично да се исти текстуални садржај, а на два писма, уноси два пута ручно.';
        $vt->embed_video = '<iframe width="784" height="441" src="https://www.youtube.com/embed/H1Yp5_Xe_Kc?si=B7r0aAfUbaMRXQuS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        $vt->objavljen = true;
        $vt->resurs_id = 2;
        $vt->save();

        $vt = new VideoTutorijal();
        $vt->naziv = 'Пресловљавање латинице у ћирилицу';
        $vt->opis = 'Друпал је бесплатан систем за управљање садржајем отвореног кода, који је поред ЊордПресс-а веома заступљен у Србији. Аутоматска промена писма је изводљива у Друпал-у и о томе говори Владимир Марић, директор компаније "Мрежни системи". ';
        $vt->embed_video = '<iframe width="784" height="441" src="https://www.youtube.com/embed/SixkfaO8DZA?si=s1c8yMFCmMdHxbOu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        $vt->objavljen = true;
        $vt->resurs_id = 2;
        $vt->save();

        $vt = new VideoTutorijal();
        $vt->naziv = 'Употреба ћирилице и .СРБ домен';
        $vt->opis = 'Када смо почињали да користимо компјутере нисмо ни слутили у којој мери ће они променити наше животне навике. Напредак технологије је утицао и на коришћење нашег писма. Сада се, међутим, отварају нови начини за ширење употребе ћирилице на Интернету, којој технологија овај пут може бити савезник. Воислав Родић, председник УО РНИДС-а, говори о овом напретку и настанку .СРБ домена - другог ћириличког домена на свету који је постао доступан одмах после руског .РФ домена.';
        $vt->embed_video = '<iframe width="784" height="441" src="https://www.youtube.com/embed/hH6_Y6ABfEs?si=ZXgbkWWxmqpP0KKC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        $vt->objavljen = true;
        $vt->resurs_id = 2;
        $vt->save();
    }
}
