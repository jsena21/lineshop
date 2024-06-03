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
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "user", [], "any", true, true, false, 7)) {
            // line 8
            yield "\t\t<p class=\"text\">
\t\t\tWelcome aaa@a.fr you can
\t\t\t<a class=\"logout\" href=\"";
            // line 10
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
\t\t</p>
\t";
        } else {
            // line 13
            yield "\t\t<p class=\"text\">
\t\t\tWelcome, you can
\t\t\t<a class=\"logout\" href=\"";
            // line 15
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
\t\t</p>
\t";
        }
        // line 18
        yield "\t<ul>
\t\t<li>
\t\t\t<a href=\"#\">All Categories</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">Consoles</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">Jeux</a>
\t\t</li>
\t</ul>
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console PS4\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console PS4</h5>
\t\t\t\t\t\t<p class=\"card-text\">299 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console Wii U\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console Wii U</h5>
\t\t\t\t\t\t<p class=\"card-text\">489 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console Xbox 360\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console Xbox 360</h5>
\t\t\t\t\t\t<p class=\"card-text\">309 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Assassin's Creed PS4\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Assassin's Creed PS4</h5>
\t\t\t\t\t\t<p class=\"card-text\">66 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Dragon Ball Fighter\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Dragon Ball Fighter</h5>
\t\t\t\t\t\t<p class=\"card-text\">55 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Zombi U Wii U\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Zombi U Wii U</h5>
\t\t\t\t\t\t<p class=\"card-text\">19 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
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
        return array (  114 => 18,  108 => 15,  104 => 13,  98 => 10,  94 => 8,  91 => 7,  81 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LineShop
{% endblock %}

{% block body %}
\t{% if session.user is defined %}
\t\t<p class=\"text\">
\t\t\tWelcome aaa@a.fr you can
\t\t\t<a class=\"logout\" href=\"{{path('app_logout')}}\">Logout</a>
\t\t</p>
\t{% else %}
\t\t<p class=\"text\">
\t\t\tWelcome, you can
\t\t\t<a class=\"logout\" href=\"{{path('app_login')}}\">Login</a>
\t\t</p>
\t{% endif %}
\t<ul>
\t\t<li>
\t\t\t<a href=\"#\">All Categories</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">Consoles</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">Jeux</a>
\t\t</li>
\t</ul>
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console PS4\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console PS4</h5>
\t\t\t\t\t\t<p class=\"card-text\">299 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console Wii U\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console Wii U</h5>
\t\t\t\t\t\t<p class=\"card-text\">489 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Console Xbox 360\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Console Xbox 360</h5>
\t\t\t\t\t\t<p class=\"card-text\">309 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Assassin's Creed PS4\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Assassin's Creed PS4</h5>
\t\t\t\t\t\t<p class=\"card-text\">66 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Dragon Ball Fighter\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Dragon Ball Fighter</h5>
\t\t\t\t\t\t<p class=\"card-text\">55 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t<img src=\"https://via.placeholder.com/150\" class=\"card-img-top\" alt=\"Zombi U Wii U\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Zombi U Wii U</h5>
\t\t\t\t\t\t<p class=\"card-text\">19 €</p>
\t\t\t\t\t\t<i class=\"bi bi-gift\"></i>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">+</a>
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
