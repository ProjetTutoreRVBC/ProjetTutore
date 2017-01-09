<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_38a5b9e0e98eca64e67726835438aaadf71b5dc740cdc0fdfc2d1f2366dfcf96 extends Twig_Template
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
        $__internal_a4a4abe1cf499c3168caafda1c4300143dc2d405d9fd2db2658f320b60aad40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a4abe1cf499c3168caafda1c4300143dc2d405d9fd2db2658f320b60aad40a->enter($__internal_a4a4abe1cf499c3168caafda1c4300143dc2d405d9fd2db2658f320b60aad40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a4abe1cf499c3168caafda1c4300143dc2d405d9fd2db2658f320b60aad40a->leave($__internal_a4a4abe1cf499c3168caafda1c4300143dc2d405d9fd2db2658f320b60aad40a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a669c5c9686a2b9a6f029353bc68cfd80a6861c03e07525d8e2fa406cf86f21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a669c5c9686a2b9a6f029353bc68cfd80a6861c03e07525d8e2fa406cf86f21e->enter($__internal_a669c5c9686a2b9a6f029353bc68cfd80a6861c03e07525d8e2fa406cf86f21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_a669c5c9686a2b9a6f029353bc68cfd80a6861c03e07525d8e2fa406cf86f21e->leave($__internal_a669c5c9686a2b9a6f029353bc68cfd80a6861c03e07525d8e2fa406cf86f21e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb5a41d542eb44fab5c34c845f6c16433a3021091f37064645fa7e2c660175a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5a41d542eb44fab5c34c845f6c16433a3021091f37064645fa7e2c660175a9->enter($__internal_bb5a41d542eb44fab5c34c845f6c16433a3021091f37064645fa7e2c660175a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb5a41d542eb44fab5c34c845f6c16433a3021091f37064645fa7e2c660175a9->leave($__internal_bb5a41d542eb44fab5c34c845f6c16433a3021091f37064645fa7e2c660175a9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5839392729ff538b822dec67582fc58db6345fda94bc48ee523df4dbaa5d88d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5839392729ff538b822dec67582fc58db6345fda94bc48ee523df4dbaa5d88d8->enter($__internal_5839392729ff538b822dec67582fc58db6345fda94bc48ee523df4dbaa5d88d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5839392729ff538b822dec67582fc58db6345fda94bc48ee523df4dbaa5d88d8->leave($__internal_5839392729ff538b822dec67582fc58db6345fda94bc48ee523df4dbaa5d88d8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/cabox/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
