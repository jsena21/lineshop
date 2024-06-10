<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* panier/index.html.twig */
class __TwigTemplate_99f9aea8e49926290d4eae1cbae7696f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Panier
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t\ttable {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t\tmargin-top: 20px;
\t\t}
\t\tth,
\t\ttd {
\t\t\tpadding: 10px;
\t\t\tborder: 1px solid #ddd;
\t\t\ttext-align: center;
\t\t}
\t\tth {
\t\t\tbackground-color: #f5f5f5;
\t\t}
\t\tbutton {
\t\t\tmargin: 5px;
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.actions {
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<h1>Panier</h1>

\t\t";
        // line 44
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 44, $this->source); })())) > 0)) {
            // line 45
            yield "\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t<th>Prix Unitaire</th>
\t\t\t\t\t\t<th>Prix Total</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["article"]) {
                // line 58
                yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<img src=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 60))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 60), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 62), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "quantite", [], "any", false, false, false, 63), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t<td>";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 64), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t<td>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 66) * CoreExtension::getAttribute($this->env, $this->source, $context["article"], "quantite", [], "any", false, false, false, 66)), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<form action=\"";
                // line 69
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add");
                yield "\" method=\"post\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 70), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"nom\" value=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 71), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"prix\" value=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 72), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 73), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\">Ajouter</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<form action=\"";
                // line 76
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_delete_one");
                yield "\" method=\"post\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 77), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"nom\" value=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 78), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"prix\" value=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 79), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\">Supprimer une unité</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<form action=\"";
                // line 82
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_delete");
                yield "\" method=\"post\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 83), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"nom\" value=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 84), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"prix\" value=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 85), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\">Supprimer</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<form action=\"";
            // line 93
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_clear");
            yield "\" method=\"post\">
\t\t\t\t<button type=\"submit\">Vider le panier</button>
\t\t\t</form>
\t\t";
        } else {
            // line 97
            yield "\t\t\t<p>Votre panier est vide.</p>
\t\t";
        }
        // line 99
        yield "
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  259 => 99,  255 => 97,  248 => 93,  244 => 91,  232 => 85,  228 => 84,  224 => 83,  220 => 82,  214 => 79,  210 => 78,  206 => 77,  202 => 76,  196 => 73,  192 => 72,  188 => 71,  184 => 70,  180 => 69,  174 => 66,  169 => 64,  165 => 63,  161 => 62,  154 => 60,  150 => 58,  146 => 57,  132 => 45,  130 => 44,  91 => 7,  81 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier
{% endblock %}

{% block body %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t\ttable {
\t\t\twidth: 100%;
\t\t\tborder-collapse: collapse;
\t\t\tmargin-top: 20px;
\t\t}
\t\tth,
\t\ttd {
\t\t\tpadding: 10px;
\t\t\tborder: 1px solid #ddd;
\t\t\ttext-align: center;
\t\t}
\t\tth {
\t\t\tbackground-color: #f5f5f5;
\t\t}
\t\tbutton {
\t\t\tmargin: 5px;
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.actions {
\t\t\tdisplay: flex;
\t\t\tjustify-content: center;
\t\t}
\t</style>

\t<div class=\"example-wrapper\">
\t\t<h1>Panier</h1>

\t\t{% if panier|length > 0 %}
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t\t<th>Prix Unitaire</th>
\t\t\t\t\t\t<th>Prix Total</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for id, article in panier %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/' ~ article.image) }}\" alt=\"{{ article.nom }}\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ article.nom }}</td>
\t\t\t\t\t\t\t<td>{{ article.quantite }}</td>
\t\t\t\t\t\t\t<td>{{ article.prix }}
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t<td>{{ article.prix * article.quantite }}
\t\t\t\t\t\t\t\t€</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<form action=\"{{ path('app_panier_add') }}\" method=\"post\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{ article.id }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"nom\" value=\"{{ article.nom }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"prix\" value=\"{{ article.prix }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"{{ article.image }}\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\">Ajouter</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<form action=\"{{ path('app_panier_delete_one') }}\" method=\"post\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{ article.id }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"nom\" value=\"{{ article.nom }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"prix\" value=\"{{ article.prix }}\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\">Supprimer une unité</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<form action=\"{{ path('app_panier_delete') }}\" method=\"post\" style=\"display:inline;\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{ article.id }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"nom\" value=\"{{ article.nom }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"prix\" value=\"{{ article.prix }}\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\">Supprimer</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<form action=\"{{ path('app_panier_clear') }}\" method=\"post\">
\t\t\t\t<button type=\"submit\">Vider le panier</button>
\t\t\t</form>
\t\t{% else %}
\t\t\t<p>Votre panier est vide.</p>
\t\t{% endif %}

\t</div>
{% endblock %}
", "panier/index.html.twig", "/Users/jordan/Library/Mobile Documents/com~apple~CloudDocs/Formation/AFPA Dev Web/Back/Symfony/lineshop/templates/panier/index.html.twig");
    }
}
