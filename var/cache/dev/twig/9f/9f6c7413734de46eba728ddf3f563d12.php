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
                <p>...</p>
            </section>
            <section class=\"kmom02\" id=\"kmom02\">
                <h2>Kmom02</h2>
                <p>...</p>
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
                <p>...</p>
            </section>
            <section class=\"kmom02\" id=\"kmom02\">
                <h2>Kmom02</h2>
                <p>...</p>
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
