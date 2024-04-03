@extends('layouts.public')
@section('content')

{{-- <section class="section posts-entry">
    <div class="container px-5" style="position: relative; top: 10px;">
        <div class="row mb-4" style="padding-left: 20px">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Од А до Ш</h2>
            </div>
        </div>
        <div class="row g-3 px-5" style="text-align: justify;">
            <p style="font-size: 22px">Добродошли на наш онлајн портал, посвећен промовисању употребе ћирилице на
                интернету. У основи наше мисије је уверење да богат и разноврстан свет ћириличног писма заслужује већу
                препознатљивост у дигиталном свету. Стојимо као светионик, подстицајући појединце и заједнице да
                прихвате и појачају свој језички и културни идентитет путем употребе ћирилице</p>
        </div>
        <section class="section mt-4 posts-entry p-0" style="height: 20px; background-color: #243a53;">
        </section>
    </div>
</section>

<section class="section posts-entry bg-light">
    <div class="container px-5" style="position: relative; top: 10px;">
        <div class="row mb-4" style="padding-left: 20px">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Историја ћириличног писма</h2>
            </div>
        </div>
        <div class="row g-3 px-5" style="text-align: justify; font-size: 18px">
            <div class="col-9">
                <p>Историја српске ћириличне азбуке, познате као "ћирилица", дубоко је сплетена са културним и језичким
                    развојем земље. Настанак овог писма може се пратити у 9. веку и повезује се са византијским браћом
                    Ћирилом и Методијем, који су створили глаголичко писмо као средство за превођење словенских језика
                    за религиозне текстове. Током времена, ово писмо еволуирало у ћирилични алфабет.</p>

                <p>У 14. веку, за време владавине Стефана Душана, српска ћирилица је званично прихваћена, што представља
                    пресудан тренутак у њеној историји. Постала је симбол културног идентитета и националног поноса.
                    Успреко изазовима и адаптацијама, писмо је опстало, одражавајући отпор српске културе.</p>
            </div>
            <div class="col-3">
                <img src="{{ asset('img/azbuka.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-12 px-5" style="text-align: justify; font-size: 18px">
            <p>Током Српског националног Васкрснућа у 19. веку, предузети су напори да се оживи и промовише ћирилица као
                средство за чување посебног језичког и културног идентитета народа. Ова обнова утврдила је статус
                ћирилице као основног елемента српске баштине. Вук Караџић, истакнути српски филолог, имао је кључну
                улогу у стандардизацији ћирилице. Његови напори су једноставили њену структуру и допринели широкој
                употреби, утврђујући њено место током Српског националног Васкрснућа.</p>

            <p>У савременом добу, ћирилица коегзистира са латиничним писмом, оба имајући званичан статус у Србији.
                Остаје витални део образовања, медија и официјалне комуникације, играјући кључну улогу у одржавању и
                слављењу богате историјске и културне тканине Србије.</p>
        </div>
        <section class="section mt-4 posts-entry p-0" style="height: 20px; background-color: #243a53;">
        </section>
    </div>
</section>

<section class="section posts-entry">
    <div class="container px-5" style="position: relative; top: 10px;">
        <div class="row mb-4" style="padding-left: 20px">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Историја ћирилице на интернету</h2>
            </div>
        </div>
        <div class="row g-3 px-5" style="text-align: justify; font-size: 18px">
            <div class="col-6">
                <p>Српска ћирилица је више него слабо заступљена на Интернету. Број српских сајтова урађених нашим
                    традиционалним писмом споро расте иако су квантитативно српски сајтови у рапидном порасту. Многи
                    ћирилични сајтови су се угасили, а неки, напросто, прешли на латиницу. </p>

                <p>У мају 1994. часопис Књижевна реч је у YUSCII стандарду своја ћирилична издања дистрибуирао путем
                    BBS-a, мејлинг листа и електронске поште. Прве Интернет презентације на српском језику постојале су
                    још 1995. године. </p>

                <p>Руси били међу првима који су добили свој ћирилични .rf домен још 2010. године, отприлике шест месеци
                    након што је ова опција постала доступна на глобалном нивоу. Србија је, као друга држава у свету,
                    усвојила .srb домен 2011. године, а регистрација назива започела је 27. јануара 2012. године.</p>
            </div>
            <div class="col-6">
                <img src="{{ asset('img/domen.jpeg') }}" alt="" class="img-fluid">
            </div>
        </div>
        <br>
        <div class="row g-3 px-5" style="text-align: justify; font-size: 18px">
            <div class="col-12">
                <p>Иза већине сајтова урађених српском ћирилицом стоје традиционалисти емотивно везани за српски језик,
                    српско православље, српску ћирилицу и народно сећање. Остатак нашег народа који није нарочито, или
                    није уопште, везан за традицију не доживљава питање опстанка српске ћирилице као битно. </p>
            </div>
        </div>
        <div class="row g-3 px-5" style="text-align: justify; font-size: 18px">
            <div class="col-6">
                <img src="{{ asset('img/sfera.jpeg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-6">
                <p>Количина сајтова на .срб домену заиста није велика, а разлози за то су разноврсни. Важно је имати на
                    уму да је за комуникацију, било да је пословна или не, често клучна препрека језик, а не писмо.
                    Ћирилицу у свету разуме много више људи него српски језик, па је важно нагласити да један Француз
                    или Немац неће нулзно боље разумети сајт на српском језику само зато што је написан латиницом. </p>

                <p>Ипак, ако је циљ сајта српско тржиште, нема оправдања за некоришћење ћирилице, с обзиром да чак и
                    "Гугл" одлично разуме ћириличке појмове, а претрага на ћирилици му не представља никакав проблем,
                    како објашњава наш саговорник. </p>
            </div>
        </div>
    </div>
    <section class="section mt-4 posts-entry p-0" style="height: 20px; background-color: #243a53;">
    </section>
</section> --}}

<section>
    <div class="hero">
        <svg width="100%" viewBox="0 0 1920 747" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-svg">
            <path d="M1920 583.133C1920 583.133 1437.17 747 949.36 747C411.06 747 0 583.133 0 583.133V0H1920V583.133Z" fill="#EFEBDC"/>
        </svg>
        <div class="hero-content container d-flex justify-center align-items-start" style="padding-top: 100px;">
            <div class="hero-left col-7 black" style="padding-right: 70px">
                <p style="font-size: 80px; color: #000E75; line-height: 1.3;">Шта све има на ћирилици?</p>
                <p style="font-size: 22px">Садржаји сајтова, дизајнерска решења, линкови, домени...</p>
                <p style="font-size: 22px">Ако вам недостају ресурси, савети или идеје како да креирате дигитална решења и дигиталне производе користећи ћириличко писмо овај сајт вам може помоћи – да пронађете ресурсе и размените знања потребна да разноврстан свет ћириличког писма представите у дигиталном свету.</p>
            </div>
            <div class="hero-right col-5">
                <img src="{{ asset('img/dzivdzan.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gif-section container d-flex justify-content-between align-items-center">
        <div class=" col-6 black" style="padding-right: 90px">
            <p style="font-size: 42px; color: #000E75;">За веб-дивелопере и програме</p>
            <p style="font-size: 22px">Како правити линкове на ћирилици, како програмирати на ћирилици, како пресловљавати? Која готова решења постоје за лакшу израду веб-сајтова на ћирилици?</p>
            <p style="font-size: 22px">Пронађите алате и упутства у секцији <span class="underline">Развој.</span></p>
        </div>
        <div class=" col-5 justift-content-left">
            <img src="{{ asset('img/gugl-razume-cirilicu-gif.gif') }}" alt="" style="width: 80%">
        </div>
    </div>
</section>

<section>
    <div class="azbuka-section container d-flex justify-content-between align-items-center">
        <div class="col-6"">
            <img src="{{ asset('img/azbuka.png') }}" alt="" style="width: 100%">
        </div>
        <div class=" col-5 justift-content-left ">
            <p style="font-size: 42px; color: #000E75;">За дизајнере и веб-дизајнере</p>
            <p style="font-size: 22px">Пронађите савршене фонтове за ваш уметнички и комерцијални пројекат. Тестирајте приказе и пронађите додатне ресурсе за оригиналне дизајнерске подухвате. </p>
        </div>
    </div>
</section>

<section>
    <div class="blog-section container d-flex flex-column justify-content-evenly retro-layout-alt mb-5 p-0">
        <div>
            <p class="" style="font-size: 42px; color: #000E75; line-height: 1.3;">Истакнути чланци</p>
        </div>
        <div class="blog-row d-flex flex-row justify-content-between">
            <a href="{{ route('blog.blog', $istaknuti_blogovi[2]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 66%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[2]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[2]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[2]->naslov}}</h2>
                </div>
            </a>
            <a href="{{ route('blog.blog', $istaknuti_blogovi[1]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[1]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[1]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[1]->naslov}}</h2>
                </div>
            </a>
        </div>

        <div class="blog-row d-flex flex-row justify-content-between">
            <a href="{{ route('blog.blog', $istaknuti_blogovi[0]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[0]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[0]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[0]->naslov}}</h2>
                </div>
            </a>
            <a href="{{ route('blog.blog', $istaknuti_blogovi[3]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[3]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[3]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[3]->naslov}}</h2>
                </div>
            </a>
            <a href="{{ route('blog.blog', $istaknuti_blogovi[4]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[4]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[4]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[4]->naslov}}</h2>
                </div>
            </a>
        </div>

        <div class="blog-row d-flex flex-row justify-content-between">
            <a href="{{ route('blog.blog', $istaknuti_blogovi[5]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 32%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[5]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[5]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[5]->naslov}}</h2>
                </div>
            </a>
            <a href="{{ route('blog.blog', $istaknuti_blogovi[6]->id) }}" class="hentry img-2 v-height my-3 gradient" style="width: 66%;">
                <div class="featured-img" style="background-image: url({{asset('img/' . $istaknuti_blogovi[6]->slika)}});"></div>
                <div class="text">
                    <span>{{$istaknuti_blogovi[6]->kategorija->naziv}}</span>
                    <h2>{{$istaknuti_blogovi[6]->naslov}}</h2>
                </div>
            </a>
        </div>
    </div>
</section>

<section>
    <div class="forum-section container d-flex justify-content-center align-items-center mb-3">
        <div class="col-8 mb-5 d-flex justify-content-between" style="background-color: #EFEBDC; padding: 60px">
            <div class="col-7">
                <h3 class="mb-4" style="font-size: 42px">Форум</h3>
                <p class="mb-5" style="font-size: 22px">Укључите се у разговор – размените предлоге, идеје, трикове, ресурсе, предложите садржаје, пријавите грешке. Региструјте се и разговарајте са другим корисницима на форуму.</p>
                <p style="font-size: 22px; "><a href="#">Региструјте се</a></p>
            </div>
            <div class="col-4">
                <img src="{{ asset('img/forum.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </div>
</section>

{{-- 
<div class="section bg-light">
    <div class="container px-5">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Истакнути чланци</h2>
            </div>
            <div class="col-sm-6 text-sm-end"><a href="{{route('blog.blogovi')}}" class="read-more">Погледај све</a>
            </div>
        </div>

        <div class="row align-items-stretch retro-layout-alt mb-5 px-5">
            <div class="col-md-5 order-md-2">
                <a href="{{ route('blog.blog', $istaknuti_blogovi[0]->id) }}" class="hentry img-1 h-100 gradient">
                    <div class="featured-img"
                        style="background-image: url({{asset('img/' . $istaknuti_blogovi[0]->slika)}});"></div>
                    <div class="text">
                        <span>{{ substr($istaknuti_blogovi[0]->created_at, 0, 10) }}</span>
                        <h2>{{$istaknuti_blogovi[0]->naslov}}</h2>
                    </div>
                </a>
            </div>

            <div class="col-md-7">

                <a href="{{ route('blog.blog', $istaknuti_blogovi[1]->id) }}"
                    class="hentry img-2 v-height mb30 gradient">
                    <div class="featured-img"
                        style="background-image: url({{asset('img/' . $istaknuti_blogovi[1]->slika)}});"></div>
                    <div class="text text-sm">
                        <span>{{ substr($istaknuti_blogovi[1]->created_at, 0, 10) }}</span>
                        <h2>{{$istaknuti_blogovi[1]->naslov}}</h2>
                    </div>
                </a>

                <div class="two-col d-block d-md-flex justify-content-between">
                    <a href="{{ route('blog.blog', $istaknuti_blogovi[2]->id) }}"
                        class="hentry v-height img-2 gradient">
                        <div class="featured-img"
                            style="background-image: url({{asset('img/' . $istaknuti_blogovi[2]->slika)}});"></div>
                        <div class="text text-sm">
                            <span>{{ substr($istaknuti_blogovi[2]->created_at, 0, 10) }}</span>
                            <h2>{{$istaknuti_blogovi[2]->naslov}}</h2>
                        </div>
                    </a>
                    <a href="{{ route('blog.blog', $istaknuti_blogovi[3]->id) }}"
                        class="hentry v-height img-2 ms-auto float-end gradient">
                        <div class="featured-img"
                            style="background-image: url({{asset('img/' . $istaknuti_blogovi[3]->slika)}});"></div>
                        <div class="text text-sm">
                            <span>{{ substr($istaknuti_blogovi[3]->created_at, 0, 10) }}</span>
                            <h2>{{$istaknuti_blogovi[3]->naslov}}</h2>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div> --}}

<style>
    .hero-svg {
    position: absolute;
    z-index: 1;
    width: 100%;
}

.hero-content {
    height: 767px;
    position: relative;
    z-index: 2;
    display: flex;
}

.gif-section{
    height: 500px;

}

.blog-section{
    height: 1460px;
    margin-top: 80px;
}

.blog-row{
    height: 33.333%;
}

*{
    color: #000933;
}

.site-footer{
    color: #ffffff;
}
</style>
@endsection