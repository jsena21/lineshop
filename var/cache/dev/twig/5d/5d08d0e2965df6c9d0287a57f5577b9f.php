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

/* article/index.html.twig */
class __TwigTemplate_8224fa8e715bc2253b33fa61b88f5573 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        yield "LineShop
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
        yield "\t<h1>Article index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Prix</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 22
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
        yield "\">Create new</a>
\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<a class=\"navbar-brand\" href=\"#\">LineShoP</a>
\t\t<div class=\"collapse navbar-collapse\">
\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">All Categories</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Consoles</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Jeux</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<span class=\"navbar-text\">
\t\t\t\tWelcome aaa@a.fr |
\t\t\t\t<a href=\"#\">Logout</a>
\t\t\t</span>
\t\t\t<div class=\"ml-3\">
\t\t\t\t<span>Items: 1</span>
\t\t\t\t|
\t\t\t\t<span>Total: 309 €</span>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console PS4\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console PS4</h5>
\t\t\t\t\t\t<p class=\"card-text\">299 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console Wii U\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console Wii U</h5>
\t\t\t\t\t\t<p class=\"card-text\">489 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console Xbox 360\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console Xbox 360</h5>
\t\t\t\t\t\t<p class=\"card-text\">309 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Assassin's Creed PS4\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Assassin's Creed PS4</h5>
\t\t\t\t\t\t<p class=\"card-text\">66 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Dragon Ball Fighter\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Dragon Ball Fighter</h5>
\t\t\t\t\t\t<p class=\"card-text\">55 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Zombi U Wii U\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Zombi U Wii U</h5>
\t\t\t\t\t\t<p class=\"card-text\">19 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "article/index.html.twig";
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
        return array (  163 => 41,  158 => 38,  149 => 34,  140 => 30,  136 => 29,  131 => 27,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  112 => 22,  107 => 21,  91 => 7,  81 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LineShop
{% endblock %}

{% block body %}
\t<h1>Article index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Prix</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for article in articles %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ article.id }}</td>
\t\t\t\t\t<td>{{ article.nom }}</td>
\t\t\t\t\t<td>{{ article.image }}</td>
\t\t\t\t\t<td>{{ article.prix }}</td>
\t\t\t\t\t<td>{{ article.description }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_article_show', {'id': article.id}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('app_article_edit', {'id': article.id}) }}\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_article_new') }}\">Create new</a>
\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t<a class=\"navbar-brand\" href=\"#\">LineShoP</a>
\t\t<div class=\"collapse navbar-collapse\">
\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">All Categories</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Consoles</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Jeux</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<span class=\"navbar-text\">
\t\t\t\tWelcome aaa@a.fr |
\t\t\t\t<a href=\"#\">Logout</a>
\t\t\t</span>
\t\t\t<div class=\"ml-3\">
\t\t\t\t<span>Items: 1</span>
\t\t\t\t|
\t\t\t\t<span>Total: 309 €</span>
\t\t\t</div>
\t\t</div>
\t</nav>

\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console PS4\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console PS4</h5>
\t\t\t\t\t\t<p class=\"card-text\">299 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console Wii U\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console Wii U</h5>
\t\t\t\t\t\t<p class=\"card-text\">489 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console Xbox 360\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console Xbox 360</h5>
\t\t\t\t\t\t<p class=\"card-text\">309 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Assassin's Creed PS4\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Assassin's Creed PS4</h5>
\t\t\t\t\t\t<p class=\"card-text\">66 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Dragon Ball Fighter\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Dragon Ball Fighter</h5>
\t\t\t\t\t\t<p class=\"card-text\">55 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Zombi U Wii U\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Zombi U Wii U</h5>
\t\t\t\t\t\t<p class=\"card-text\">19 €</p>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Add to cart</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</body>{% endblock %}
", "article/index.html.twig", "/Users/jordan/Library/Mobile Documents/com~apple~CloudDocs/Formation/AFPA Dev Web/Back/Symfony/lineshop/templates/article/index.html.twig");
    }
}
