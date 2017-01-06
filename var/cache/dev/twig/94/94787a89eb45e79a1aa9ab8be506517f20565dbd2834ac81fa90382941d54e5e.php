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
        $__internal_c094e1e3f7b1e95449b2d794824a77bbabaa9ce65bbb0f1bd9a95de90de90d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c094e1e3f7b1e95449b2d794824a77bbabaa9ce65bbb0f1bd9a95de90de90d65->enter($__internal_c094e1e3f7b1e95449b2d794824a77bbabaa9ce65bbb0f1bd9a95de90de90d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c094e1e3f7b1e95449b2d794824a77bbabaa9ce65bbb0f1bd9a95de90de90d65->leave($__internal_c094e1e3f7b1e95449b2d794824a77bbabaa9ce65bbb0f1bd9a95de90de90d65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95ce97a3e8a5242cdea37e36f82ab901d3878af683218879a5ba5b834b3c6ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ce97a3e8a5242cdea37e36f82ab901d3878af683218879a5ba5b834b3c6ec0->enter($__internal_95ce97a3e8a5242cdea37e36f82ab901d3878af683218879a5ba5b834b3c6ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_95ce97a3e8a5242cdea37e36f82ab901d3878af683218879a5ba5b834b3c6ec0->leave($__internal_95ce97a3e8a5242cdea37e36f82ab901d3878af683218879a5ba5b834b3c6ec0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15f09f1efcf17014697d325aea16368c65cc6cd5057d539b7cc7d811babf466b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f09f1efcf17014697d325aea16368c65cc6cd5057d539b7cc7d811babf466b->enter($__internal_15f09f1efcf17014697d325aea16368c65cc6cd5057d539b7cc7d811babf466b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_15f09f1efcf17014697d325aea16368c65cc6cd5057d539b7cc7d811babf466b->leave($__internal_15f09f1efcf17014697d325aea16368c65cc6cd5057d539b7cc7d811babf466b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8515f1b8ec0ced9c703eadc653326af86546bc1350189a32e639b87ebdf06e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8515f1b8ec0ced9c703eadc653326af86546bc1350189a32e639b87ebdf06e6f->enter($__internal_8515f1b8ec0ced9c703eadc653326af86546bc1350189a32e639b87ebdf06e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8515f1b8ec0ced9c703eadc653326af86546bc1350189a32e639b87ebdf06e6f->leave($__internal_8515f1b8ec0ced9c703eadc653326af86546bc1350189a32e639b87ebdf06e6f_prof);

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
