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
        $__internal_9d1b4df8e513e636006c10bd60b977563cf8912f119743a2170c5e847dc645f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1b4df8e513e636006c10bd60b977563cf8912f119743a2170c5e847dc645f8->enter($__internal_9d1b4df8e513e636006c10bd60b977563cf8912f119743a2170c5e847dc645f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1b4df8e513e636006c10bd60b977563cf8912f119743a2170c5e847dc645f8->leave($__internal_9d1b4df8e513e636006c10bd60b977563cf8912f119743a2170c5e847dc645f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51ec26b50fac9ce6e57a8e434c48f903ed998cee4b9d2857c9e67163d2e523a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ec26b50fac9ce6e57a8e434c48f903ed998cee4b9d2857c9e67163d2e523a0->enter($__internal_51ec26b50fac9ce6e57a8e434c48f903ed998cee4b9d2857c9e67163d2e523a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_51ec26b50fac9ce6e57a8e434c48f903ed998cee4b9d2857c9e67163d2e523a0->leave($__internal_51ec26b50fac9ce6e57a8e434c48f903ed998cee4b9d2857c9e67163d2e523a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_97decb0f15135e20f774505d99e830076580bf76356cad681812b2bba452467e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97decb0f15135e20f774505d99e830076580bf76356cad681812b2bba452467e->enter($__internal_97decb0f15135e20f774505d99e830076580bf76356cad681812b2bba452467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97decb0f15135e20f774505d99e830076580bf76356cad681812b2bba452467e->leave($__internal_97decb0f15135e20f774505d99e830076580bf76356cad681812b2bba452467e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ea5ceaa5947a07a096b1839e42765e2c4fc599a34ebd1cd260b833d09a27143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea5ceaa5947a07a096b1839e42765e2c4fc599a34ebd1cd260b833d09a27143->enter($__internal_9ea5ceaa5947a07a096b1839e42765e2c4fc599a34ebd1cd260b833d09a27143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ea5ceaa5947a07a096b1839e42765e2c4fc599a34ebd1cd260b833d09a27143->leave($__internal_9ea5ceaa5947a07a096b1839e42765e2c4fc599a34ebd1cd260b833d09a27143_prof);

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
