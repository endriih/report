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
            <div class=\"report_links\">
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
                <p>...</p>
            </section>
            <section class=\"kmom04\" id=\"kmom04\">
                <h2>Kmom04</h2>
                <p>...</p>
            </section>
            <section class=\"kmom05\" id=\"kmom05\">
                <h2>Kmom05</h2>
                <p>...</p>
            </section>
            <section class=\"kmom06\" id=\"kmom06\">
                <h2>Kmom06</h2>
                <p>...</p>
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
            <div class=\"report_links\">
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
                <p>...</p>
            </section>
            <section class=\"kmom04\" id=\"kmom04\">
                <h2>Kmom04</h2>
                <p>...</p>
            </section>
            <section class=\"kmom05\" id=\"kmom05\">
                <h2>Kmom05</h2>
                <p>...</p>
            </section>
            <section class=\"kmom06\" id=\"kmom06\">
                <h2>Kmom06</h2>
                <p>...</p>
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
