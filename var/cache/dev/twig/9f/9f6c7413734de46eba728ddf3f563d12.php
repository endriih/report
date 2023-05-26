<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* report.html.twig */
class __TwigTemplate_650b070136375238094c0adee138600b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"reports\">
            <div class=\"report_links\" style=\"margin-top:50px;\">
                <ul>
                    <h1>Innehållsförteckning</h1>
                    <li><a href=\"#kmom01\" class=\"kmom01_link\">Kmom01</a></li>
                    <li><a href=\"#kmom02\" class=\"kmom02_link\">Kmom02</a></li>
                    <li><a href=\"#kmom03\" class=\"kmom03_link\">Kmom03</a></li>
                    <li><a href=\"#kmom04\" class=\"kmom04_link\">Kmom04</a></li>
                    <li><a href=\"#kmom05\" class=\"kmom05_link\">Kmom05</a></li>
                    <li><a href=\"#kmom06\" class=\"kmom06_link\">Kmom06</a></li>
                    <li><a href=\"#kmom07\" class=\"kmom07_link\">Kmom07</a></li>
                </ul>
            </div>

        <div class=\"report-texts\">
            <section class=\"kmom01\" id=\"kmom01\">
                <h2>Kmom01</h2>
                <p>Tidigare erfarenhet av objektorienterad programmering har varit oopython kursen där vi jobbade med objektorienterad python programmering.</p>
                <br>
                <p>Likt oopython så jobbar man med objekt som är instanser av klasser. Dessa klasser kan ha metoder, egenskaper etc. Klasserna är vad som definierar objekten och dess egenskaper vilket kan variera beroende på hur klassen är uppbyggd.</p>
                <br>
                <p>Jag är fortfarande lite förvirrad över hur det hela funkar men tror nog jag fått ett grepp över det mest omfattande med symfony, dock består ramverket också av en massa småsaker som jag ännu inte greppat men hoppas på att göra med tiden.</p>
                <br>
                <p>Har inte direkt grävt mig så djupt in i dokumentet men som det verkar är det en jättebra resurs för PHP programmering som troligtvis kommer komma till godo. Tycker konceptet med att använda sig av templates verkar vara ett väldigt bra sätt att organisera koden, att hålla isär de funktionella operationerna som att fetcha fram data osv från det mer “enkla”, att skapa en twig fil för att redovisa en html sida av vad som hämtats fram från en av funktionerna.</p>
                <br>
                <p>Mitt TIL är nog hur routingen fungerar med symfony.</p>
            </section>
            <section class=\"kmom02\" id=\"kmom02\">
                <h2>Kmom02</h2>
                <p>Arv är då en klass ärver egenskaper och metoder från en annan klass. Här förekommer benämningarna subklass eller underklass och syftar på att den nya klassen som skapas och ärver från basklassen kallas subklass. Bra att använda ifall man vill modifiera eller utöka den ursprungliga funktionaliteten hos klassen.</p>
                <br>
                <p>Komposition handlar om att en klass innehåller en annan klass som en del av sin egen funktionalitet. Exempelvis kan vi se det i Card och DeckOfCards där Cards inte kan existera utanför DeckOfCards. Klassen som alltså innehåller den andra klassen ansvarar för att skapa och hantera instanser av den andra klassen.</p>
                <br>
                <p>Ett interface är en samling abstrakta metoder som definierar vilka metoder en klass som implementerar interfacet i sitt konstruerande måste ha. Man skulle kunna se det som ett kontrakt som säger att alla klasser som väljer att implementera interfacet MÅSTE ha med dessa metoder.</p>
                <br>
                <p>Trait är en mekanism som används i objektorienterad programmering för att återanvända kod i flera klasser. Traits är en PHP-kodfil som innehåller metoder som kan användas i klasser som använder trait:et.</p>
                <br>
                <p>Jag löste uppgiften med att skapa en Card klass och en CardGraphic klass. Inser nu i efterhand att jag troligtvis kunde använt mig utav arv för CardGraphic, men jag valde att göra dem till två separata klasser där CardGraphic tar emot ett kort objekt i sin construct. Resten av implementationen är jag nöjd med, jag var lite osäker på instruktionen om JSON API:et för deck där man skulle returnera en sorterad lista. Det objektiva mönstret för korten kändes tvetydig många sa olika beroende på vad det var för kortspel. Så jag valde att implementera ett sorteringssystem med hjälp av PHPs usort funktion. Det var väldigt klurigt och mycket av min tid hamnade just där men det kändes bra att ifall min ordning inte stämmer kan jag bara ändra på suitorder arrayen.</p>
                <br>
                <p>När jag modellerade kortspelet skissade jag mig inte fram eller skapade något diagram för hur systemet skulle se ut, utan det gjorde jag när jag blev klar. Eftersom det inte var en sån bred uppgift med flera olika delar så kändes det okej med att skippa modelleringsfasen och hoppa rätt in i kodandet.</p>
                <br>
                <p>Mitt TIL för detta kursmoment är hur man jobbar med usort, dessutom traits även om jag inte använde mig av traits i min kod. Mer av en note till nästa kursmoment är att commita mer, hade glömt att göra det under kodandet.</p>
            </section>
            <section class=\"kmom03\" id=\"kmom03\">
                <h2>Kmom03</h2>
                <p>Det kändes helt okej att modellera kortspelet med flowcharts och pseudokoden, och kände att pseudokoden var till stor hjälp speciellt för att visualisera hur själva uppsättningen av de olika if statements ska agera etc. flödesschema är jag inte jättesäker på ifall jag gjorde rätt men tycker ändå att den visualiserar flödet av programmet hur programmet går tillväga.</p>
                <br>
                <p>Med uppgiften är jag ändå lite nöjd med att jag lyckades klara uppgiften med bara de klasser jag skapat sen tidigare. I senare kursmoment vet jag dock inte om det här var ett bra val eller inte, det återstår att se. Men annars tycker jag det gick ganska bra att enbart använda de klasser jag redan hade tillgängligt sen innan och bygga på de (lägga till metoder). Det finns ju flertal förbättringar som kan göras med programmet men jag valde att hålla det väldigt simpelt.</p>
                <br>
                <p>Att koda med symfony har varit ganska smidigt, tycker om hela route/controller och twig systemet, känns väldigt organiserat.</p>
                <br>
                <p>Mitt TIL för detta kursmoment har jag mestadels lärt mig om flowcharts och pseudokod vilket jag tycker är en stor fördel att ha med sig när man jobbar med en uppgift.</p>
            </section>
            <section class=\"kmom04\" id=\"kmom04\">
                <h2>Kmom04</h2>
                <p>Jag tyckte faktiskt att det var ganska kul att skriva enhetstestning för de olika klasserna. Dock var det lite pilligt med att komma på logiken för att testa de olika klasserna med assertions. Jag tycker att phpunit rent allmänt var väldigt enkelt att komma igång med och fungerar rätt bra. Dock är jag lite osäker på vissa testfall där ett testfall kan täcka olika delar av koden som testfallet inte var specifikt gjord för.</p>
                <br>
                <p>Jag lyckades ganska väl med kodtäckningen, lyckades nå 100%. Dock så gjorde jag inte testfall för kontrollerklassen osäker på ifall det var ett krav men som jag såg det skulle enbart Game klassen testas. Dock var jag lite osäker där med förstod inte instruktionerna helt så jag valde att testa de övriga klasserna också.</p>
                <br>
                <p>Jag skulle säga att min kod i helhet klassas som testbar kod, jag har försökt ha med testfall för varje metod för att generera ett noggrant och ackurat testresultat.</p>
                <br>
                <p>Jag valde inte direkt att skriva om delar av min kod, jag valde att lägga till några ytterligare metoder för att hjälpa testningen. Exempelvis med initialcards att jag skulle testa ifall reset funktionen fungerade som den skulle där kortleken byts ut mot de ursprungliga korten etc.</p>
                <br>
                <p>Jag skulle nog väl inte anse att bara eftersom koden är testbar gör den inte koden snyggare eller renare. Ren kod för mig är att antingen byta ut delar av kod till mindre snuttar och bara allmänt snygga upp koden. Dock med testningen får den ju programmeraren att kollationera sin kod och se om saker och ting går att ändras för att kunna testa delar av koden så kanske.</p>
            </section>
            <section class=\"kmom05\" id=\"kmom05\">
                <h2>Kmom05</h2>
                <p>Jag tyckte att det gick ganksa bra, fastnade lite vid början men det var ett problem som någon annan hade stött på och fått hjälp med sen innan, så det var det enda hindret med övningen. Att jobba igenom övningen gick bra tyckte det var väldigt smidigt med hur det hela funkade att klasser och controller autogenererades.</p>
                <br>
                <p>När jag byggde upp mitt bibilotek så valde jag att gå för en väldigt simpel design där jag återanvänder tidigare css från andra delar av report sidan. Jag höll det väldigt enkelt med enkla knappar och enkla containers, dessutom en enkel form design. Utgick inte någonstans i uppgiften att man skulle spendera en hel del tid på gränssnittet så la inte ner alltför mycket kraft på det.</p>
                <br>
                <p>Jag tyckte orm var en väldigt häftig pryl, speciellt hur den så enkelt lyckades kommunicera med databasen genom funktioner såsom findAll() etc. Tyckte att det funkade väldigt bra och underlättade en massa för programmeraren speciellt när man bara ville utföra enkla queries som att ta fram en bok av ett specifikt ID-nummer eller ISBN-nummer.</p>
                <br>
                <p>Min uppfattning av orm är ett verktyg som gör det enklare för programmeraren att jobba mot databaser även om man sen tidigare inte riktigt har full kunskap gällande databashantering. Tycker att orm gör det väldigt enkelt för programmerare utan databas kunskap att kunna kreera ett system som använder sig av CRUD, speciellt för objektorienterade programmerare där fokuset med själva programmet ligger hos att jobba med objekter och relationer medans ramverket sköter databasen. Andra sätt som man kan jobba med databaser är ju PDO men där brukar man oftast skriva in hela queries etc för att jobba sig till databasen, här har orm förenklat det och redan skapat funktioner som utför databas queries åt dig. Dock vet jag inte hur långt man kan gå med orm om man kan skapa mer avancerade queries har ännu inte kommit dit än, men antar att det är något som ingår, hanteringar av mer avancerade queries.</p>
            </section>
            <section class=\"kmom06\" id=\"kmom06\">
                <h2>Kmom06</h2>
                <p>I helhet tyckte jag om phpmetrics även om den till en början var lite svår att navigera sig genom. Tyckte statistiken över kvaliteten av kod såsom komplexitet och etc var redovisat på ett bra och enkelt sätt, var enkelt att förstå men så var det för scrutinizer också. Fann inget speciellt värdefullt med phpmetrics, tyckte att visualiseringen av koden med hjälp av bilder var en cool tillsats.</p>
                <br>
                <p>Att integrera med scrutinizer var lite tuffare men det var nog för att jag inte hade följt en del av de tidigare övningarna från kursmoment där kravet var att en clover fil skulle ingå i programmet. Annars tyckte jag faktiskt lite mer om scrutinizer, tyckte att scrutinizer var enkel att navigera sig genom, dessutom uppskattar jag hur programmet redovisar för de nya commitsen som kommer in och redogör för antingen försämringar eller förbättringar. Badges la jag inte mycket tanke över, försökte bara få så bra resultat som möjligt vilket kanske inte är det bästa tillvägagångssättet, att riskera förstöra sin kod för att nå ett specifikt kvalitetsindex. Vid första kod granskningen fick jag 9.95 och efter ändringarna nådde jag 10.</p>
                <br>
                <p>Bedömningen av kodkvalitet ser jag mer som en subjektiv sak även om det finns vissa konventioner att följa för exempelvis bättre läsbarhet etc. Jag skulle väl ändå påstå att badges till viss mån kan fungera som bra indikatorer över ens kodbas. Det är ju tydligt att personer med dålig kod kvalite får låga resultat på sina badges. Men jag skulle generellt inte påstå att badges är det man enbart borde utgå ifrån, kodkvalite är ett nyanserat ämne och känns omöjlig att kunna representeras av en badge. Jag tycker att badges fungerar som en bra inblick över ens kodkvalite, och att sträva för höga procentuella värden kan vara bra, men det är viktigt att ha i insikt att även ifall du vet att din kod är bra men inte möter den lilla procenten som fattas spelar det inte någon så stor roll.</p>
                <br>
                <p>Mitt TIL för kursmomentet är att använda mig av de nya verktygen och navigera igenom de olika programmen för att undersöka min egna kod.</p>
            </section>
            <section class=\"kmom07\" id=\"kmom07\">
                <h2>Kmom07</h2>
                <p>...</p>
            </section>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"reports\">
            <div class=\"report_links\" style=\"margin-top:50px;\">
                <ul>
                    <h1>Innehållsförteckning</h1>
                    <li><a href=\"#kmom01\" class=\"kmom01_link\">Kmom01</a></li>
                    <li><a href=\"#kmom02\" class=\"kmom02_link\">Kmom02</a></li>
                    <li><a href=\"#kmom03\" class=\"kmom03_link\">Kmom03</a></li>
                    <li><a href=\"#kmom04\" class=\"kmom04_link\">Kmom04</a></li>
                    <li><a href=\"#kmom05\" class=\"kmom05_link\">Kmom05</a></li>
                    <li><a href=\"#kmom06\" class=\"kmom06_link\">Kmom06</a></li>
                    <li><a href=\"#kmom07\" class=\"kmom07_link\">Kmom07</a></li>
                </ul>
            </div>

        <div class=\"report-texts\">
            <section class=\"kmom01\" id=\"kmom01\">
                <h2>Kmom01</h2>
                <p>Tidigare erfarenhet av objektorienterad programmering har varit oopython kursen där vi jobbade med objektorienterad python programmering.</p>
                <br>
                <p>Likt oopython så jobbar man med objekt som är instanser av klasser. Dessa klasser kan ha metoder, egenskaper etc. Klasserna är vad som definierar objekten och dess egenskaper vilket kan variera beroende på hur klassen är uppbyggd.</p>
                <br>
                <p>Jag är fortfarande lite förvirrad över hur det hela funkar men tror nog jag fått ett grepp över det mest omfattande med symfony, dock består ramverket också av en massa småsaker som jag ännu inte greppat men hoppas på att göra med tiden.</p>
                <br>
                <p>Har inte direkt grävt mig så djupt in i dokumentet men som det verkar är det en jättebra resurs för PHP programmering som troligtvis kommer komma till godo. Tycker konceptet med att använda sig av templates verkar vara ett väldigt bra sätt att organisera koden, att hålla isär de funktionella operationerna som att fetcha fram data osv från det mer “enkla”, att skapa en twig fil för att redovisa en html sida av vad som hämtats fram från en av funktionerna.</p>
                <br>
                <p>Mitt TIL är nog hur routingen fungerar med symfony.</p>
            </section>
            <section class=\"kmom02\" id=\"kmom02\">
                <h2>Kmom02</h2>
                <p>Arv är då en klass ärver egenskaper och metoder från en annan klass. Här förekommer benämningarna subklass eller underklass och syftar på att den nya klassen som skapas och ärver från basklassen kallas subklass. Bra att använda ifall man vill modifiera eller utöka den ursprungliga funktionaliteten hos klassen.</p>
                <br>
                <p>Komposition handlar om att en klass innehåller en annan klass som en del av sin egen funktionalitet. Exempelvis kan vi se det i Card och DeckOfCards där Cards inte kan existera utanför DeckOfCards. Klassen som alltså innehåller den andra klassen ansvarar för att skapa och hantera instanser av den andra klassen.</p>
                <br>
                <p>Ett interface är en samling abstrakta metoder som definierar vilka metoder en klass som implementerar interfacet i sitt konstruerande måste ha. Man skulle kunna se det som ett kontrakt som säger att alla klasser som väljer att implementera interfacet MÅSTE ha med dessa metoder.</p>
                <br>
                <p>Trait är en mekanism som används i objektorienterad programmering för att återanvända kod i flera klasser. Traits är en PHP-kodfil som innehåller metoder som kan användas i klasser som använder trait:et.</p>
                <br>
                <p>Jag löste uppgiften med att skapa en Card klass och en CardGraphic klass. Inser nu i efterhand att jag troligtvis kunde använt mig utav arv för CardGraphic, men jag valde att göra dem till två separata klasser där CardGraphic tar emot ett kort objekt i sin construct. Resten av implementationen är jag nöjd med, jag var lite osäker på instruktionen om JSON API:et för deck där man skulle returnera en sorterad lista. Det objektiva mönstret för korten kändes tvetydig många sa olika beroende på vad det var för kortspel. Så jag valde att implementera ett sorteringssystem med hjälp av PHPs usort funktion. Det var väldigt klurigt och mycket av min tid hamnade just där men det kändes bra att ifall min ordning inte stämmer kan jag bara ändra på suitorder arrayen.</p>
                <br>
                <p>När jag modellerade kortspelet skissade jag mig inte fram eller skapade något diagram för hur systemet skulle se ut, utan det gjorde jag när jag blev klar. Eftersom det inte var en sån bred uppgift med flera olika delar så kändes det okej med att skippa modelleringsfasen och hoppa rätt in i kodandet.</p>
                <br>
                <p>Mitt TIL för detta kursmoment är hur man jobbar med usort, dessutom traits även om jag inte använde mig av traits i min kod. Mer av en note till nästa kursmoment är att commita mer, hade glömt att göra det under kodandet.</p>
            </section>
            <section class=\"kmom03\" id=\"kmom03\">
                <h2>Kmom03</h2>
                <p>Det kändes helt okej att modellera kortspelet med flowcharts och pseudokoden, och kände att pseudokoden var till stor hjälp speciellt för att visualisera hur själva uppsättningen av de olika if statements ska agera etc. flödesschema är jag inte jättesäker på ifall jag gjorde rätt men tycker ändå att den visualiserar flödet av programmet hur programmet går tillväga.</p>
                <br>
                <p>Med uppgiften är jag ändå lite nöjd med att jag lyckades klara uppgiften med bara de klasser jag skapat sen tidigare. I senare kursmoment vet jag dock inte om det här var ett bra val eller inte, det återstår att se. Men annars tycker jag det gick ganska bra att enbart använda de klasser jag redan hade tillgängligt sen innan och bygga på de (lägga till metoder). Det finns ju flertal förbättringar som kan göras med programmet men jag valde att hålla det väldigt simpelt.</p>
                <br>
                <p>Att koda med symfony har varit ganska smidigt, tycker om hela route/controller och twig systemet, känns väldigt organiserat.</p>
                <br>
                <p>Mitt TIL för detta kursmoment har jag mestadels lärt mig om flowcharts och pseudokod vilket jag tycker är en stor fördel att ha med sig när man jobbar med en uppgift.</p>
            </section>
            <section class=\"kmom04\" id=\"kmom04\">
                <h2>Kmom04</h2>
                <p>Jag tyckte faktiskt att det var ganska kul att skriva enhetstestning för de olika klasserna. Dock var det lite pilligt med att komma på logiken för att testa de olika klasserna med assertions. Jag tycker att phpunit rent allmänt var väldigt enkelt att komma igång med och fungerar rätt bra. Dock är jag lite osäker på vissa testfall där ett testfall kan täcka olika delar av koden som testfallet inte var specifikt gjord för.</p>
                <br>
                <p>Jag lyckades ganska väl med kodtäckningen, lyckades nå 100%. Dock så gjorde jag inte testfall för kontrollerklassen osäker på ifall det var ett krav men som jag såg det skulle enbart Game klassen testas. Dock var jag lite osäker där med förstod inte instruktionerna helt så jag valde att testa de övriga klasserna också.</p>
                <br>
                <p>Jag skulle säga att min kod i helhet klassas som testbar kod, jag har försökt ha med testfall för varje metod för att generera ett noggrant och ackurat testresultat.</p>
                <br>
                <p>Jag valde inte direkt att skriva om delar av min kod, jag valde att lägga till några ytterligare metoder för att hjälpa testningen. Exempelvis med initialcards att jag skulle testa ifall reset funktionen fungerade som den skulle där kortleken byts ut mot de ursprungliga korten etc.</p>
                <br>
                <p>Jag skulle nog väl inte anse att bara eftersom koden är testbar gör den inte koden snyggare eller renare. Ren kod för mig är att antingen byta ut delar av kod till mindre snuttar och bara allmänt snygga upp koden. Dock med testningen får den ju programmeraren att kollationera sin kod och se om saker och ting går att ändras för att kunna testa delar av koden så kanske.</p>
            </section>
            <section class=\"kmom05\" id=\"kmom05\">
                <h2>Kmom05</h2>
                <p>Jag tyckte att det gick ganksa bra, fastnade lite vid början men det var ett problem som någon annan hade stött på och fått hjälp med sen innan, så det var det enda hindret med övningen. Att jobba igenom övningen gick bra tyckte det var väldigt smidigt med hur det hela funkade att klasser och controller autogenererades.</p>
                <br>
                <p>När jag byggde upp mitt bibilotek så valde jag att gå för en väldigt simpel design där jag återanvänder tidigare css från andra delar av report sidan. Jag höll det väldigt enkelt med enkla knappar och enkla containers, dessutom en enkel form design. Utgick inte någonstans i uppgiften att man skulle spendera en hel del tid på gränssnittet så la inte ner alltför mycket kraft på det.</p>
                <br>
                <p>Jag tyckte orm var en väldigt häftig pryl, speciellt hur den så enkelt lyckades kommunicera med databasen genom funktioner såsom findAll() etc. Tyckte att det funkade väldigt bra och underlättade en massa för programmeraren speciellt när man bara ville utföra enkla queries som att ta fram en bok av ett specifikt ID-nummer eller ISBN-nummer.</p>
                <br>
                <p>Min uppfattning av orm är ett verktyg som gör det enklare för programmeraren att jobba mot databaser även om man sen tidigare inte riktigt har full kunskap gällande databashantering. Tycker att orm gör det väldigt enkelt för programmerare utan databas kunskap att kunna kreera ett system som använder sig av CRUD, speciellt för objektorienterade programmerare där fokuset med själva programmet ligger hos att jobba med objekter och relationer medans ramverket sköter databasen. Andra sätt som man kan jobba med databaser är ju PDO men där brukar man oftast skriva in hela queries etc för att jobba sig till databasen, här har orm förenklat det och redan skapat funktioner som utför databas queries åt dig. Dock vet jag inte hur långt man kan gå med orm om man kan skapa mer avancerade queries har ännu inte kommit dit än, men antar att det är något som ingår, hanteringar av mer avancerade queries.</p>
            </section>
            <section class=\"kmom06\" id=\"kmom06\">
                <h2>Kmom06</h2>
                <p>I helhet tyckte jag om phpmetrics även om den till en början var lite svår att navigera sig genom. Tyckte statistiken över kvaliteten av kod såsom komplexitet och etc var redovisat på ett bra och enkelt sätt, var enkelt att förstå men så var det för scrutinizer också. Fann inget speciellt värdefullt med phpmetrics, tyckte att visualiseringen av koden med hjälp av bilder var en cool tillsats.</p>
                <br>
                <p>Att integrera med scrutinizer var lite tuffare men det var nog för att jag inte hade följt en del av de tidigare övningarna från kursmoment där kravet var att en clover fil skulle ingå i programmet. Annars tyckte jag faktiskt lite mer om scrutinizer, tyckte att scrutinizer var enkel att navigera sig genom, dessutom uppskattar jag hur programmet redovisar för de nya commitsen som kommer in och redogör för antingen försämringar eller förbättringar. Badges la jag inte mycket tanke över, försökte bara få så bra resultat som möjligt vilket kanske inte är det bästa tillvägagångssättet, att riskera förstöra sin kod för att nå ett specifikt kvalitetsindex. Vid första kod granskningen fick jag 9.95 och efter ändringarna nådde jag 10.</p>
                <br>
                <p>Bedömningen av kodkvalitet ser jag mer som en subjektiv sak även om det finns vissa konventioner att följa för exempelvis bättre läsbarhet etc. Jag skulle väl ändå påstå att badges till viss mån kan fungera som bra indikatorer över ens kodbas. Det är ju tydligt att personer med dålig kod kvalite får låga resultat på sina badges. Men jag skulle generellt inte påstå att badges är det man enbart borde utgå ifrån, kodkvalite är ett nyanserat ämne och känns omöjlig att kunna representeras av en badge. Jag tycker att badges fungerar som en bra inblick över ens kodkvalite, och att sträva för höga procentuella värden kan vara bra, men det är viktigt att ha i insikt att även ifall du vet att din kod är bra men inte möter den lilla procenten som fattas spelar det inte någon så stor roll.</p>
                <br>
                <p>Mitt TIL för kursmomentet är att använda mig av de nya verktygen och navigera igenom de olika programmen för att undersöka min egna kod.</p>
            </section>
            <section class=\"kmom07\" id=\"kmom07\">
                <h2>Kmom07</h2>
                <p>...</p>
            </section>
        </div>
    </div>
{% endblock %}
", "report.html.twig", "/home/endri/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
