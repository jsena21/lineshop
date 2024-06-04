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
            'stylesheets' => [$this, 'block_stylesheets'],
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

        yield "LineshoP Welcome !
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "\t";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/home.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "\t<div class=\"container mt-4\">
\t\t<div class=\"row\">
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            yield "\t\t\t\t<div class=\"col-md-3 mb-4\">
\t\t\t\t\t<div class=\"card border border-success shadow-lg\">
\t\t\t\t\t\t<img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 17))), "html", null, true);
            yield "\" width=\"auto\" height=\"200px\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 17), "html", null, true);
            yield "\">
\t\t\t\t\t\t<div class=\"card-body bg-success-subtle border-top border-success\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-8 border-right border-success\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-6 text card-title\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 text-right\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-4 text card-title text-success\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 24), "html", null, true);
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
        // line 56
        yield "\t\t</div>
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
        return array (  185 => 56,  147 => 24,  141 => 21,  132 => 17,  128 => 15,  124 => 14,  120 => 12,  110 => 11,  97 => 8,  92 => 7,  82 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LineshoP Welcome !
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('styles/home.css') }}\">
{% endblock %}

{% block body %}
\t<div class=\"container mt-4\">
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
{% endblock %}
", "article/index.html.twig", "/Users/jordan/Library/Mobile Documents/com~apple~CloudDocs/Formation/AFPA Dev Web/Back/Symfony/lineshop/templates/article/index.html.twig");
    }
}
