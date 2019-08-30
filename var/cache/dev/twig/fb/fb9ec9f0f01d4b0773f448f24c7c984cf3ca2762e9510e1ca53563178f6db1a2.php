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

/* front/post_blog.html.twig */
class __TwigTemplate_d24b7b4545b272de2910f2a4e8ec61712a9a1dac582085d82b056a5d2c2466b1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/post_blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/post_blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Blog®";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"example-wrapper\">
        <h1>Hej! Witaj na prostym blogu^^</h1>
        <h2><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registry");
        echo "\">Zarejestruj się</a></h2>
        <h2><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Logowanie</a></h2>
        <h2><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("write_blog");
        echo "\">Napisz se bloga</a></h2>
    </div> <br/> <br/>
    <div class=\"example-wrapper\">
        <h2>Blog - Ciężka nauka</h2>
        Nauka jest jednym z rodzajów wiedzy ludzkiej. Pod względem poznawczym wydaje się być wiedzą najlepszą,
        najbardziej adekwatnie opisującą rzeczywistość. Ten wysoki status poznawczy zawdzięcza nauka metodom,
        jakie stosuje, oraz językowi, jakim się posługuje. „Ważnymi elementami «naukowości» są język i metoda.
        Zdaniem wielu, zarówno naukowców jak i filozofów, to właśnie te dwa elementy decydują o tym, czy coś jest
        naukowe,
        czy nie”[1]. Prawa i teorie naukowe, stanowiące najważniejsze wyniki badań naukowych, wymagają uzasadnienia,
        polegającego
        na konfrontacji przewidywań na nich opartych z rezultatami doświadczenia, czyli z wynikami obserwacji,
        pomiarów i eksperymentów.
        „Nauka rodzi się z dążenia do uzyskania wyjaśnień systematycznych, a równocześnie podlegających kontroli w
        oparciu o dane (...)”[2].
        Nauka jako rzeczywistość społeczna jest tworem złożonym i wieloaspektowym.
    </div>
    <div class=\"example-wrapper\">
        <h2>Blog - Ciężkie życie</h2>
        Życie(gr. βίος, bios) w biologii ma dwie, związane ze sobą definicje:
        zespół procesów życiowych – swoistych, wysoko zorganizowanych funkcjonalnie (w cykle i sieci), przemian
        fizycznych
        i reakcji chemicznych, zachodzących w otwartych termodynamicznie, wyodrębnionych z otoczenia układach fizycznych
        (zawierających zawsze kwasy nukleinowe i białka, według stanu współczesnej wiedzy), zbudowanych morfologicznie
        (o hierarchicznej strukturze), składających się z jednej lub wielu komórek (organizmach, osobnikach) oraz
        swoistych zjawisk biologicznych,
        zachodzących z udziałem tych organizmów – istniejący na Ziemi, a być może też na innych planetach[1][2]
        właściwość pewnych układów fizycznych (→ organizmów), w których zachodzą procesy życiowe[3][4][5].

    </div>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/post_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  95 => 23,  91 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog®{% endblock %}

{% block body %}
    <style>
        .example-wrapper {
            margin: 1em auto;
            max-width: 800px;
            width: 95%;
            font: 18px/1.5 sans-serif;
        }

        .example-wrapper code {
            background: #F5F5F5;
            padding: 2px 6px;
        }
    </style>

    <div class=\"example-wrapper\">
        <h1>Hej! Witaj na prostym blogu^^</h1>
        <h2><a href=\"{{ path('registry') }}\">Zarejestruj się</a></h2>
        <h2><a href=\"{{ path('login') }}\">Logowanie</a></h2>
        <h2><a href=\"{{ path('write_blog') }}\">Napisz se bloga</a></h2>
    </div> <br/> <br/>
    <div class=\"example-wrapper\">
        <h2>Blog - Ciężka nauka</h2>
        Nauka jest jednym z rodzajów wiedzy ludzkiej. Pod względem poznawczym wydaje się być wiedzą najlepszą,
        najbardziej adekwatnie opisującą rzeczywistość. Ten wysoki status poznawczy zawdzięcza nauka metodom,
        jakie stosuje, oraz językowi, jakim się posługuje. „Ważnymi elementami «naukowości» są język i metoda.
        Zdaniem wielu, zarówno naukowców jak i filozofów, to właśnie te dwa elementy decydują o tym, czy coś jest
        naukowe,
        czy nie”[1]. Prawa i teorie naukowe, stanowiące najważniejsze wyniki badań naukowych, wymagają uzasadnienia,
        polegającego
        na konfrontacji przewidywań na nich opartych z rezultatami doświadczenia, czyli z wynikami obserwacji,
        pomiarów i eksperymentów.
        „Nauka rodzi się z dążenia do uzyskania wyjaśnień systematycznych, a równocześnie podlegających kontroli w
        oparciu o dane (...)”[2].
        Nauka jako rzeczywistość społeczna jest tworem złożonym i wieloaspektowym.
    </div>
    <div class=\"example-wrapper\">
        <h2>Blog - Ciężkie życie</h2>
        Życie(gr. βίος, bios) w biologii ma dwie, związane ze sobą definicje:
        zespół procesów życiowych – swoistych, wysoko zorganizowanych funkcjonalnie (w cykle i sieci), przemian
        fizycznych
        i reakcji chemicznych, zachodzących w otwartych termodynamicznie, wyodrębnionych z otoczenia układach fizycznych
        (zawierających zawsze kwasy nukleinowe i białka, według stanu współczesnej wiedzy), zbudowanych morfologicznie
        (o hierarchicznej strukturze), składających się z jednej lub wielu komórek (organizmach, osobnikach) oraz
        swoistych zjawisk biologicznych,
        zachodzących z udziałem tych organizmów – istniejący na Ziemi, a być może też na innych planetach[1][2]
        właściwość pewnych układów fizycznych (→ organizmów), w których zachodzą procesy życiowe[3][4][5].

    </div>
{% endblock %}
    {#        <ul>#}
    {#            <li>Your controller at <code><a#}
    {#                            href=\"{{ 'C:/Users/User/PhpstormProjects/blog/src/Controller/FrontController.php'|file_link(0) }}\">src/Controller/FrontController.php</a></code>#}
    {#            </li>#}
    {#            <li>Your template at <code><a#}
    {#                            href=\"{{ 'C:/Users/User/PhpstormProjects/blog/templates/front/post_blog.html.twig'|file_link(0) }}\">templates/front/post_blog.html.twig</a></code>#}
    {#            </li>#}
    {#        </ul>#}
", "front/post_blog.html.twig", "C:\\Users\\User\\PhpstormProjects\\blog\\templates\\front\\post_blog.html.twig");
    }
}
