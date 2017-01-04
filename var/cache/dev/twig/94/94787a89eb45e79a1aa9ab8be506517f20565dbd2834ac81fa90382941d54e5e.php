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
        $__internal_66ed354a08972eae5d6bf2076b657d0423a2c834e41d9461d5b4c0ebe7d84483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ed354a08972eae5d6bf2076b657d0423a2c834e41d9461d5b4c0ebe7d84483->enter($__internal_66ed354a08972eae5d6bf2076b657d0423a2c834e41d9461d5b4c0ebe7d84483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66ed354a08972eae5d6bf2076b657d0423a2c834e41d9461d5b4c0ebe7d84483->leave($__internal_66ed354a08972eae5d6bf2076b657d0423a2c834e41d9461d5b4c0ebe7d84483_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_baf48a839958405cd18f390a75dbfe7642d9d86f4c7912d1712ee0557c6c5829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf48a839958405cd18f390a75dbfe7642d9d86f4c7912d1712ee0557c6c5829->enter($__internal_baf48a839958405cd18f390a75dbfe7642d9d86f4c7912d1712ee0557c6c5829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_baf48a839958405cd18f390a75dbfe7642d9d86f4c7912d1712ee0557c6c5829->leave($__internal_baf48a839958405cd18f390a75dbfe7642d9d86f4c7912d1712ee0557c6c5829_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4e965646f70652842765593ae1874e738b5390757c0b8d5a331a93d5fc7726c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e965646f70652842765593ae1874e738b5390757c0b8d5a331a93d5fc7726c1->enter($__internal_4e965646f70652842765593ae1874e738b5390757c0b8d5a331a93d5fc7726c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4e965646f70652842765593ae1874e738b5390757c0b8d5a331a93d5fc7726c1->leave($__internal_4e965646f70652842765593ae1874e738b5390757c0b8d5a331a93d5fc7726c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67c62ad3822957f2cfe6f877b9d142ce55629224bb10f4ef9f52d85c289de4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c62ad3822957f2cfe6f877b9d142ce55629224bb10f4ef9f52d85c289de4a7->enter($__internal_67c62ad3822957f2cfe6f877b9d142ce55629224bb10f4ef9f52d85c289de4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67c62ad3822957f2cfe6f877b9d142ce55629224bb10f4ef9f52d85c289de4a7->leave($__internal_67c62ad3822957f2cfe6f877b9d142ce55629224bb10f4ef9f52d85c289de4a7_prof);

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
