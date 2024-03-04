<?php

namespace Database\Seeders;

use App\Models\Font;
use Illuminate\Database\Seeder;

class FontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $f = new Font();
        $f->id = 1;
        $f->naziv = 'EtarRNIDS-Regular';
        $f->opis = 'Етар РНИДС је сансерифно писмо сведене конструкције и неутралног израза. Припада групи гротескних писама која се данас често користе, како у штампи тако и на вебу.

        Фонтови су: Etar RNIDS-Regular, Etar RNIDS-Italic, Etar RNIDS-Bold и Etar RNIDS-BoldItalic.';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 2;
        $f->naziv = 'LingvaRNIDS-Regular';
        $f->opis = 'Лингва РНИДС је серифно типографско писмо прелазног типа, изведено у усправном и курзивном облику. Већа и мања тежина овог писма су погодне за наслове и за крупнији приказ, док је нормална тежина читљива и у ситнијим текстовима.

        Фонтови су: Lingva RNIDS-Thin, Lingva RNIDS-Regular, Lingva RNIDS-Bold и Lingva RNIDS-Italic';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/Lingva/img/01.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 3;
        $f->naziv = 'OrtoRNIDS-Regular';
        $f->opis = 'Орто РНИДС је сансерифно типографско писмо хуманистичког типа изведено у усправном и курзивном облику, у две тежине. Креирано је са идејом да се облици слова добро прилагоде приказу на екрану, а подједнако добро понаша се и при употреби у штампи.

        Фонтови су: Orto RNIDS-Regular, Orto RNIDS-Italic, Orto RNIDS-Bold и Orto RNIDS-BoldItalic.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/Orto/img/01.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 4;
        $f->naziv = 'ArealRNIDS-Regular';
        $f->opis = 'Ареал РНИДС је слабсерифно типографско писмо изведено у усправном и курзивном облику, у две тежине. Његове пропорције, једноставни облици и линеарни карактер чине га добро читљивим у малим величинама. Посебна пажња посвећена је оптимизацији за екрански приказ.

        Фонтови су: Areal RNIDS-Regular, Areal RNIDS-Italic, Areal RNIDS-Bold и Areal RNIDS-BoldItalic.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/Areal/img/01.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 5;
        $f->naziv = 'Optina-Regular';
        $f->opis = 'Типометар и Министарство културе и информисања Републике Србије вам поклањају 3 фамилије са по 4 фонта типографског писма Оптина аутора Оливере Стојадиновић, у форматима који се користе на интернету и у штампи, као и у облику варијабилног фонта у веб-формату који у себи садржи све облике овог писма настале променом тежине и оптичке величине.

        Писмо Оптина састоји се из три усправне санс-серифне фамилије: Микро, Нормал и Дисплеј. Свака од ових фамилија садржи по 4 фонта (Thin, Regular, Bold, Black) у тежинама од најмање до највеће, укупно 12 фонтова. Ови фонтови садрже слова ћирилице, латинице, бројеве, интерпункцију и све друге потребне знакове.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/Optina/img/01.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 6;
        $f->naziv = 'Dijakritika-Regular';
        $f->opis = 'Реализацију овог пројекта подржало је Министарство културе и информисања Републике Србије.

        Усправном фонту Дијакритика који је реализован у 2017. години и курзивном из 2018. године, сада се придружује и усправни фонт у већој тежини – болд. Фамилија Дијакритика сада се састоји из три фонта: Dijakritika-Regular, Dijakritika-Italic и Dijakritika-Bold у .otf и .woff2 формату.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/Dijakritika/img/01.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 7;
        $f->naziv = 'NocturnoBG';
        $f->opis = 'Ноктурно БГ је књижно писмо складних пропорција чији су облици засновани на елегантним облим формама и израженом контрасту између танких и дебелих потеза. Основни нагласак је на благо издуженим словима и финим серифима који дају мекоћу тексту.

        Ноктурно БГсе добро понаша при слагању текстова мањим и већим величинама. Иако је намењен првенствено књижном слогу, своју примену налази и у графичком дизајну.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/NocturnoBG/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 8;
        $f->naziv = 'ResavskaBG';
        $f->opis = 'Ресавска БГ је серифно, књижно писмо, погодно за различите намене и широки круг корисника. Фонтови садрже слова српске ћирилице, основне латинице, знаке интерпункције и специјалне знаке потребне за слагање текста.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/ResavskaBG/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 9;
        $f->naziv = 'ResavskaBGSans';
        $f->opis = 'Ресавска БГ Санс је сансерифно писмо, погодно за различите намене и широки круг корисника. Фонтови садрже слова српске ћирилице, основне латинице, знаке интерпункције и специјалне знаке потребне за слагање текста.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/ResavskaBGSans/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 10;
        $f->naziv = 'Adamant_BG';
        $f->opis = 'Адамант БГ је серифно писмо савремених пропорција, пројектовано тако да буде веома читљиво у малим величинама и лошим условима штампе, па је погодно за коришћење у новинама и часописима, али и у свим областима графичког дизајна.
        Фонтови садрже сва слова и знаке из основног латиничног кодног распореда, као и слова српске ћирилице и латинице.
        Фонтови су у OpenType формату, с обзиром да сви савремени оперативни системи и рачунарски програми могу да препознају и користе тај формат.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/AdamantBG/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 11;
        $f->naziv = 'Адамант Санс БГ';
        $f->opis = 'Адамант Санс БГ је сансерифно писмо у две екстремне тежине које одлично допуњује колекцију наших бесплатних ћирилица. Њима ће се, пре свега, обрадовати графички дизајнери, али и остали корисници, који ће помоћу њих проширити своју типографску палету. Ови фонтови погодни су за слагање у крупнијем слогу, за наслове, иницијале, истицање, а успешно се могу користити за различите садржаје, као што то показују приказани примери. Како ови фонтови нису предвиђени за слагање текста, у примерима је у ту сврху коришћена серифна верзија, Адамант БГ, писмо које је одраније доступно на Типометру.

        Фонтови садрже сва слова и знаке из основног латиничног кодног распореда, као и слова српске ћирилице и латинице. Доступни су у OpenType формату, пошто сви савремени оперативни системи и рачунарски програми могу да препознају и користе тај формат.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/AdamantSansBG/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 12;
        $f->naziv = 'NeoplantaBG';
        $f->opis = 'Неопланта БГ је деликатно књижно писмо израженог контраста међу потезима. Најбоље се понаша у величинама у којима се уобичајено слажу књиге, при штампи на квалитетнијем папиру. У увећањима долазе до изражаја његове елегантне класичне пропорције и фини издужени серифи.

        Неопланта је настала као резултат испитивања типографских писама у књигама деветнаестог века, штампаних после озваничења Вукове реформе. Као основ за реконструкцију изабран је пример писма из књиге »Словенски музеум« Валтазара Богишића, штампане у Платоновој књигопечатњи у Новом Саду, 1867. године. Даљим радом изведен је курзив, као и одговарајућа слова латинице.
        
        Фонтови садрже сва слова и знаке из основног латиничног кодног распореда, као и слова српске ћирилице и латинице.
        
        Фонтови су у OpenType формату, с обзиром да сви савремени оперативни системи и рачунарски програми могу да препознају и користе тај формат.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/NeoplantaBG/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 13;
        $f->naziv = 'PlatanBG';
        $f->opis = 'Платан БГ је фамилија семисерифних типографских писама погодна за различите намене. Издужене пропорције дају им елеганцију, а двострука природа чини их погодним и за графички дизајн и за слагање текста. Ова необична комбинација особина у којој сансерифна основа добија понеки сериф следи трендове модерне типографије и проширује велике типографске фамилије новим варијететом.

        Фонтови садрже сва слова и знаке из основног латиничног кодног распореда, као и слова српске ћирилице и латинице. Доступни су у OpenType формату, пошто сви савремени оперативни системи и рачунарски програми могу да препознају и користе тај формат.
        Наставља се акција у сарадњи са Секретаријатом за културу Скупштине града. Пројекат обухвата организовање израде комплета фонтова, ћирилица заједно са одговарајућом латиницом и дистрибуција корисницима путем сајта Типометар. Ове године помоћ у финансирању је пружило Министарство вера и дијаспоре Републике Србије, на чему се захваљујемо.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/PlatanBG/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 14;
        $f->naziv = 'NiokiBG';
        $f->opis = 'Ниоки БГ је фамилија линеарних сансерифних типографских писама намењена употреби у крупнијем слогу. Карактеристике ових писама су благо извијени потези и истурени словни завршетци. Сведени облици слова одговарају захтевима савременог графичког дизајна, па ће одлично изгледати на плакатима или амбалажи, док их њихов разигран карактер чини погодним за крупнији слог у издањима као што су дечије књиге.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/NiokiBG/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 15;
        $f->naziv = 'LovelySofiaBG';
        $f->opis = 'Lovely BG је фамилија рукописних типографских писама од којих је сваки посвећен по једној изузетној дами – Одри Хепберн, Грејс Кели и Софији Кополи. Фонтови су предвиђени за наглашавање и употребу у крупном слогу, а њихова разноликост учиниће их корисним у различитим приликама. Дизајнери ће их ценити због посебних додатних знакова, лигатура, које рукописни фонт чине убедљивијим. Имена сложена овим писмима на повељама, дипломама и позивницама допринеће њиховом свечаном изгледу. Друга, н еформална страна ових рукописних писама, учиниће Lovely BG драгим додатком у палети фонтова сваког корисника који је трагао за лепом писаном ћирилицом.

        Фонтови садрже сва слова и знаке из основног латиничног кодног распореда, као и слова српске ћирилице и латинице. Доступни су у OpenType формату, с обзиром да сви савремени оперативни системи и рачунарски програми могу да препознају и користе тај формат.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/LovelyBG/Index.html#';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 16;
        $f->naziv = 'InfluBG';
        $f->opis = 'Инфлу БГ је сансерифно писмо широке примене. Састоји се од четири тежине довољне да квалитетно одговоре великом броју савремених потреба. Писмо садржи комплет ћириличних и латиничних слова, мале и велике бројеве, као и лигатуре које одређена слова на суптилан начин издвајају из блока текста.

        Иако сведено, свако слово у себи садржи одређени детаљ који писму даје хуманистички карактер. Он је довољно уочљив да у малим величинама фонт учини јединственим, и довољно ненаметљив да остане одмерен у великим димензијама слова. То га чини правим избором за најразличитије дизајнерске задатке, од опреме књиге, дизајна различитих штампаних и дигиталних издања, до дизајна плаката.';
        $f->link_detaljno = 'https://www.tipometar.org/aktuelno/akcija!/InfluBG/Index.html#';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();

        $f = new Font();
        $f->id = 17;
        $f->naziv = 'Tesla';
        $f->opis = 'Када фонт Тесла постане део оперативног система, сваки пут када се отвори мени са фонтовима појавиће се Теслино име. (У неким програмима видеће се и неколико његових слова.) Није то писмо које може да се користи у званичној преписци, нити се њиме могу слагати књиге. Оно је резервисано за оне тренутке када бисте, пишући нешто посебно, пожелели да у Теслин рукопис обучете своје речи и проверите да ли тако другачије звуче.';
        $f->link_detaljno = 'https://www.tipometar.org/kolumne/TeslaFont/Index.html';
        $f->resurs_id = 1;
        $f->objavljen = true;
        $f->save();
        
        $f=new Font();
        $f->id=18;
        $f->naziv="Banana";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=19;
        $f->naziv="Bipolar";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=20;
        $f->naziv="Cevka";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=21;
        $f->naziv="Kapak";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=22;
        $f->naziv="KarmaKasha";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=23;
        $f->naziv="KenzoTange";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=24;
        $f->naziv="BukyVede";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=25;
        $f->naziv="Konstelacia";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=26;
        $f->naziv="Mountain";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=27;
        $f->naziv="Prestilka";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=28;
        $f->naziv="Skorid";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=29;
        $f->naziv="Topola";
        $f->opis='';
        $f->link_detaljno='https://www.behance.net/gallery/14508699/TYPOKITCHEN-typography-workshop-(free-fonts)';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();

        $f=new Font();
        $f->id=30;
        $f->naziv="Constantine";
        $f->opis='';
        $f->link_detaljno='https://www.dafont.com/constantine.font';
        $f->resurs_id=1;
        $f->objavljen=true;
        $f->save();
        
    }
}
