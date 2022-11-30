<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e8eb9384c6f024dac93e01e3c564a01ef7e642be7e38cb56a752949e59c8f65a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e4b70b9b4ab573b87cd3c9e8c2b394e8be6336744cc61024deb96de646ac4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4b70b9b4ab573b87cd3c9e8c2b394e8be6336744cc61024deb96de646ac4a5->enter($__internal_8e4b70b9b4ab573b87cd3c9e8c2b394e8be6336744cc61024deb96de646ac4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e4b70b9b4ab573b87cd3c9e8c2b394e8be6336744cc61024deb96de646ac4a5->leave($__internal_8e4b70b9b4ab573b87cd3c9e8c2b394e8be6336744cc61024deb96de646ac4a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_308f40ca80504aec5a71b6aa8ecdfcd268288dde162bcc2c3f7f5411b665a3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308f40ca80504aec5a71b6aa8ecdfcd268288dde162bcc2c3f7f5411b665a3d0->enter($__internal_308f40ca80504aec5a71b6aa8ecdfcd268288dde162bcc2c3f7f5411b665a3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_308f40ca80504aec5a71b6aa8ecdfcd268288dde162bcc2c3f7f5411b665a3d0->leave($__internal_308f40ca80504aec5a71b6aa8ecdfcd268288dde162bcc2c3f7f5411b665a3d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cb24bde75e7d0b8f214452c46c48dc78b289adcc682461a659a89e178049b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb24bde75e7d0b8f214452c46c48dc78b289adcc682461a659a89e178049b43->enter($__internal_1cb24bde75e7d0b8f214452c46c48dc78b289adcc682461a659a89e178049b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1cb24bde75e7d0b8f214452c46c48dc78b289adcc682461a659a89e178049b43->leave($__internal_1cb24bde75e7d0b8f214452c46c48dc78b289adcc682461a659a89e178049b43_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8ae9905881fccb2142872b6cf9a0623f96f052c16bbd267e6cf540f4749282e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ae9905881fccb2142872b6cf9a0623f96f052c16bbd267e6cf540f4749282e->enter($__internal_c8ae9905881fccb2142872b6cf9a0623f96f052c16bbd267e6cf540f4749282e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8ae9905881fccb2142872b6cf9a0623f96f052c16bbd267e6cf540f4749282e->leave($__internal_c8ae9905881fccb2142872b6cf9a0623f96f052c16bbd267e6cf540f4749282e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/homepages/15/d701691074/htdocs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
