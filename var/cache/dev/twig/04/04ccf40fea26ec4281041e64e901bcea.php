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

/* security/login.html.twig */
class __TwigTemplate_746b4833946bd6a6e0ee14e8db7d1643 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "<form method=\"post\">
    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
<body style=\"background-color:darkgray\">
    <div class=\"container align-items-center\" style=\"display:flex; justify-content:center; min-height:100vh;\">
        <div class=\"row\">
                <div class=\"card badge text-bg-dark p-3 border border-dark rounded\" style=\"font-size:18px; text-align:left; width:600px; height:600px\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title text-center\" style=\"margin-bottom:1.5em\">Sign in</h1>
                            <Form method=\"post\">
                                <div class=\"mb-3\">
                                    <!--<label for=\"aUsername\" class=\"form-label\">Username</label>-->
                                    <input type=\"text\" name=\"username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" id=\"username\" placeholder=\"Username:\" autocomplete=\"username\" required autofocus/>
                                </div>

                                <div class=\"mb-3\">
                                    <!--<label for=\"aPassword\" class=\"form-label\">Password</label>-->
                                    <input type=\"password\" name=\"password\" class=\"form-control\" id=\"aPassword\" placeholder=\"Password:\" autocomplete=\"password\" required autofocus/>
                                
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                </div>



                                <div class=\"form-check form-switch\" style=\"margin-top:3em\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" role=\"switch\" id=\"flexSwitchCheckDefault\">
                                    <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Remember me</label>
                                </div>


                                <div class=\"d-grid gap-2\" style=\"margin-top:3em;\">
                                    <button class=\"btn btn-secondary\" type=\"submit\">Log in</button>
                                </div>
                            </Form>

                            <div class=\"d-grid gap-2 col-6 mx-auto\" style=\"margin-top:5em;\">
                                <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-outline-light\" tabindex=\"-1\" role=\"button\" aria-disabled=\"true\">REGISTER</a>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  121 => 27,  111 => 20,  99 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

<body style=\"background-color:darkgray\">
    <div class=\"container align-items-center\" style=\"display:flex; justify-content:center; min-height:100vh;\">
        <div class=\"row\">
                <div class=\"card badge text-bg-dark p-3 border border-dark rounded\" style=\"font-size:18px; text-align:left; width:600px; height:600px\">
                    <div class=\"card-body\">
                        <h1 class=\"card-title text-center\" style=\"margin-bottom:1.5em\">Sign in</h1>
                            <Form method=\"post\">
                                <div class=\"mb-3\">
                                    <!--<label for=\"aUsername\" class=\"form-label\">Username</label>-->
                                    <input type=\"text\" name=\"username\" value=\"{{ last_username }}\" class=\"form-control\" id=\"username\" placeholder=\"Username:\" autocomplete=\"username\" required autofocus/>
                                </div>

                                <div class=\"mb-3\">
                                    <!--<label for=\"aPassword\" class=\"form-label\">Password</label>-->
                                    <input type=\"password\" name=\"password\" class=\"form-control\" id=\"aPassword\" placeholder=\"Password:\" autocomplete=\"password\" required autofocus/>
                                
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                </div>



                                <div class=\"form-check form-switch\" style=\"margin-top:3em\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" role=\"switch\" id=\"flexSwitchCheckDefault\">
                                    <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Remember me</label>
                                </div>


                                <div class=\"d-grid gap-2\" style=\"margin-top:3em;\">
                                    <button class=\"btn btn-secondary\" type=\"submit\">Log in</button>
                                </div>
                            </Form>

                            <div class=\"d-grid gap-2 col-6 mx-auto\" style=\"margin-top:5em;\">
                                <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-light\" tabindex=\"-1\" role=\"button\" aria-disabled=\"true\">REGISTER</a>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</body>
{% endblock %}", "security/login.html.twig", "/Users/alex/Desktop/gac-travel-technical-interview/templates/security/login.html.twig");
    }
}
