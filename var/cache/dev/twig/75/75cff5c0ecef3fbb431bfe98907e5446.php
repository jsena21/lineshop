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

/* base.html.twig */
class __TwigTemplate_46bed69a2c7480f83d67aacb70859e81 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 8
        yield "\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
\t\t";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "\t</head>
\t<body>
\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-dark\">
\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t<a class=\"navbar-brand text-white\" href=\"/\">
\t\t\t\t\t\tLineshoP
\t\t\t\t\t\t<small>the best online shop, for real</small>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"align-items-center text-success ms-auto\">
\t\t\t\t\t\t<div class=\"cart-info me-3\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping fa-2x\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div>Items</div>
\t\t\t\t\t\t\t\t<div id=\"item-count\">0</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div>Total</div>
\t\t\t\t\t\t\t\t<div id=\"total-amount\">0.00 €</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t<div class=\"container-fluid py-3 mt-0 bg-secondary text-center \">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">


\t\t\t\t\t\t\t\t";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            yield "\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\tWelcome
\t\t\t\t\t\t\t\t\t\t";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "email", [], "any", false, false, false, 45), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t! You can
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 50
            yield "\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\tUser not connected ! You can
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 55
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container-fluid py-3 mt-0 ms-1 bg-white\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-success text-white text-decoration-none me-3\" href=\"/\" role=\"button\">All Categories</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-success text-white text-decoration-none me-3\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_consoles");
        yield "\" role=\"button\">Consoles</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-success text-white text-decoration-none\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_jeux");
        yield "\" role=\"button\">Games</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t<main>
\t\t\t\t\t";
        // line 71
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 72
        yield "\t\t\t\t</main>

\t\t\t\t<footer
\t\t\t\t\tclass=\"bg-dark text-center text-white py-3 fw-bold mt-auto\">
\t\t\t\t\t<!-- Copyright -->

\t\t\t\t\t© 2024 Copyright :
\t\t\t\t\t<a class=\"text-white\" href=\"https://github.com/sikourix\" target=\"_blank\">
\t\t\t\t\t\tFarid -
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white\" href=\"https://github.com/Hakim-Lakehal\" target=\"_blank\">
\t\t\t\t\t\tHakim -
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white\" href=\"https://github.com/SuperClodo\" target=\"_blank\">
\t\t\t\t\t\tStephane -
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white\" href=\"https://github.com/jsena21\" target=\"_blank\">
\t\t\t\t\t\tJordan.S</a>
\t\t\t\t</footer>

\t\t\t\t";
        // line 92
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 101
        yield "\t\t\t</body>
\t\t</html>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "LineshoP
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        yield "\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        yield "\t\t\t\t\t";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 96
        yield "\t\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js\"></script>
\t\t\t\t\t<script defer src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t\t\t<script src=\"https://kit.fontawesome.com/c278bb2acf.js\" crossorigin=\"anonymous\"></script>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 93
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        // line 94
        yield "\t\t\t\t\t\t";
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        yield "
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  287 => 94,  277 => 93,  262 => 96,  259 => 93,  249 => 92,  230 => 71,  218 => 11,  208 => 10,  187 => 6,  172 => 101,  170 => 92,  148 => 72,  146 => 71,  136 => 64,  132 => 63,  122 => 55,  116 => 52,  112 => 50,  106 => 47,  101 => 45,  97 => 43,  95 => 42,  64 => 13,  62 => 10,  58 => 8,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}LineshoP
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
\t\t{% block stylesheets %}
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-dark\">
\t\t\t\t<div class=\"container-fluid\">

\t\t\t\t\t<a class=\"navbar-brand text-white\" href=\"/\">
\t\t\t\t\t\tLineshoP
\t\t\t\t\t\t<small>the best online shop, for real</small>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"align-items-center text-success ms-auto\">
\t\t\t\t\t\t<div class=\"cart-info me-3\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-cart-shopping fa-2x\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div>Items</div>
\t\t\t\t\t\t\t\t<div id=\"item-count\">0</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div>Total</div>
\t\t\t\t\t\t\t\t<div id=\"total-amount\">0.00 €</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t<div class=\"container-fluid py-3 mt-0 bg-secondary text-center \">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">


\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\tWelcome
\t\t\t\t\t\t\t\t\t\t{{ app.user.email }}
\t\t\t\t\t\t\t\t\t\t! You can
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\tUser not connected ! You can
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">Login</a>.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"container-fluid py-3 mt-0 ms-1 bg-white\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-success text-white text-decoration-none me-3\" href=\"/\" role=\"button\">All Categories</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-success text-white text-decoration-none me-3\" href=\"{{ path('category_consoles') }}\" role=\"button\">Consoles</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-success text-white text-decoration-none\" href=\"{{ path('category_jeux') }}\" role=\"button\">Games</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>

\t\t\t\t<main>
\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t</main>

\t\t\t\t<footer
\t\t\t\t\tclass=\"bg-dark text-center text-white py-3 fw-bold mt-auto\">
\t\t\t\t\t<!-- Copyright -->

\t\t\t\t\t© 2024 Copyright :
\t\t\t\t\t<a class=\"text-white\" href=\"https://github.com/sikourix\" target=\"_blank\">
\t\t\t\t\t\tFarid -
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white\" href=\"https://github.com/Hakim-Lakehal\" target=\"_blank\">
\t\t\t\t\t\tHakim -
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white\" href=\"https://github.com/SuperClodo\" target=\"_blank\">
\t\t\t\t\t\tStephane -
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"text-white\" href=\"https://github.com/jsena21\" target=\"_blank\">
\t\t\t\t\t\tJordan.S</a>
\t\t\t\t</footer>

\t\t\t\t{% block javascripts %}
\t\t\t\t\t{% block importmap %}
\t\t\t\t\t\t{{ importmap('app') }}
\t\t\t\t\t{% endblock %}
\t\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
\t\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js\"></script>
\t\t\t\t\t<script defer src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t\t\t<script src=\"https://kit.fontawesome.com/c278bb2acf.js\" crossorigin=\"anonymous\"></script>
\t\t\t\t{% endblock %}
\t\t\t</body>
\t\t</html>
\t</body>
</html>
", "base.html.twig", "/Users/jordan/Library/Mobile Documents/com~apple~CloudDocs/Formation/AFPA Dev Web/Back/Symfony/lineshop/templates/base.html.twig");
    }
}
