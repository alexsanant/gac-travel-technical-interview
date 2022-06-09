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

/* stock_historic/show.html.twig */
class __TwigTemplate_5641e027d58e3735d9b98d68a4e5cc0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock_historic/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock_historic/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock_historic/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Stock historic";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("security/logout.html.twig", "stock_historic/show.html.twig", 7)->display($context);
        // line 8
        echo "

    <center><h1 class=\"display-4\">Stock historic info</h1></center></br>

    <div class=\"buttons\" style=\"margin-bottom:2em\">
        <div class=\"buttons\" style=\"margin-bottom:2em\">
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_historic_index");
        echo "\"><button class=\"btn btn-outline-secondary\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 14, $this->source); })()), "Products")) : ("Products")), "html", null, true);
        echo "</button></a>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_historic_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["stock_historic"]) || array_key_exists("stock_historic", $context) ? $context["stock_historic"] : (function () { throw new RuntimeError('Variable "stock_historic" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\"><button class=\"btn btn-outline-warning\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 15, $this->source); })()), "Edit")) : ("Edit")), "html", null, true);
        echo "</button></a>
        
    </div>

    
    <table class=\"table table-success table-hover text-center\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stock_historic"]) || array_key_exists("stock_historic", $context) ? $context["stock_historic"] : (function () { throw new RuntimeError('Variable "stock_historic" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>User</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stock_historic"]) || array_key_exists("stock_historic", $context) ? $context["stock_historic"] : (function () { throw new RuntimeError('Variable "stock_historic" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Product</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stock_historic"]) || array_key_exists("stock_historic", $context) ? $context["stock_historic"] : (function () { throw new RuntimeError('Variable "stock_historic" does not exist.', 32, $this->source); })()), "product", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["stock_historic"]) || array_key_exists("stock_historic", $context) ? $context["stock_historic"] : (function () { throw new RuntimeError('Variable "stock_historic" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stock_historic"]) || array_key_exists("stock_historic", $context) ? $context["stock_historic"] : (function () { throw new RuntimeError('Variable "stock_historic" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stock_historic"]) || array_key_exists("stock_historic", $context) ? $context["stock_historic"] : (function () { throw new RuntimeError('Variable "stock_historic" does not exist.', 40, $this->source); })()), "stock", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "stock_historic/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 40,  142 => 36,  135 => 32,  128 => 28,  121 => 24,  107 => 15,  101 => 14,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Stock historic{% endblock %}

{% block body %}

    {% include 'security/logout.html.twig' %}


    <center><h1 class=\"display-4\">Stock historic info</h1></center></br>

    <div class=\"buttons\" style=\"margin-bottom:2em\">
        <div class=\"buttons\" style=\"margin-bottom:2em\">
        <a href=\"{{ path('app_stock_historic_index') }}\"><button class=\"btn btn-outline-secondary\">{{ button_label|default('Products') }}</button></a>
        <a href=\"{{ path('app_stock_historic_edit', {'id': stock_historic.id} ) }}\"><button class=\"btn btn-outline-warning\">{{ button_label|default('Edit') }}</button></a>
        
    </div>

    
    <table class=\"table table-success table-hover text-center\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ stock_historic.id }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ stock_historic.user}}</td>
            </tr>
            <tr>
                <th>Product</th>
                <td>{{ stock_historic.product }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ stock_historic.createdAt ? stock_historic.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>{{ stock_historic.stock }}</td>
            </tr>
        </tbody>
    </table>

    
{% endblock %}
", "stock_historic/show.html.twig", "/Users/alex/Desktop/gac-travel-technical-interview/templates/stock_historic/show.html.twig");
    }
}
