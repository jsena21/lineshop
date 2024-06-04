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
            yield "\">login</a>
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
\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 32
            yield "\t\t\t\t<div class=\"col-md-3 mb-4\">
\t\t\t\t\t<div class=\"card border border-success shadow-lg\">
\t\t\t\t\t\t<img src=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 34))), "html", null, true);
            yield "\" width=\"auto\" height=\"200px\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 34), "html", null, true);
            yield "\">
\t\t\t\t\t\t<div class=\"card-body bg-success-subtle border-top border-success\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-8 border-right border-success\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-6 text card-title\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-4 text card-title text-success\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 41), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t€</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-2 border-top border-success pt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-gift gift-icon fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3 text-right\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "\t\t</div>
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
        return array (  190 => 73,  152 => 41,  146 => 38,  137 => 34,  133 => 32,  129 => 31,  114 => 18,  108 => 15,  104 => 13,  98 => 10,  94 => 8,  91 => 7,  81 => 6,  60 => 3,  37 => 1,);
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
\t\t\t<a class=\"logout\" href=\"{{path('app_login')}}\">login</a>
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
\t\t\t{% for article in articles %}
\t\t\t\t<div class=\"col-md-3 mb-4\">
\t\t\t\t\t<div class=\"card border border-success shadow-lg\">
\t\t\t\t\t\t<img src=\"{{ asset('images/' ~ article.image) }}\" width=\"auto\" height=\"200px\" alt=\"{{ article.description }}\">
\t\t\t\t\t\t<div class=\"card-body bg-success-subtle border-top border-success\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-8 border-right border-success\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-6 text card-title\">{{ article.nom }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-4 text card-title text-success\">{{ article.prix }}
\t\t\t\t\t\t\t\t\t\t€</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mt-2 border-top border-success pt-2\">
\t\t\t\t\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-gift gift-icon fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3 text-right\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>

\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</body>{% endblock %}
", "article/index.html.twig", "/Users/jordan/Library/Mobile Documents/com~apple~CloudDocs/Formation/AFPA Dev Web/Back/Symfony/lineshop/templates/article/index.html.twig");
    }
}
