<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ba1ba7d6326b085dc76af79e683365171a28e394df15e7db85c05e6d3360b0eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_35d5f374a57d5f1c2484b1144f09c9f69892ff37dbe9f7fc934aeec00743da30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d5f374a57d5f1c2484b1144f09c9f69892ff37dbe9f7fc934aeec00743da30->enter($__internal_35d5f374a57d5f1c2484b1144f09c9f69892ff37dbe9f7fc934aeec00743da30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d5f374a57d5f1c2484b1144f09c9f69892ff37dbe9f7fc934aeec00743da30->leave($__internal_35d5f374a57d5f1c2484b1144f09c9f69892ff37dbe9f7fc934aeec00743da30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56ce9bb622020ca3a945b2ef1afb69fc1f9e532432cfa8f9aa2e670df284ec27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ce9bb622020ca3a945b2ef1afb69fc1f9e532432cfa8f9aa2e670df284ec27->enter($__internal_56ce9bb622020ca3a945b2ef1afb69fc1f9e532432cfa8f9aa2e670df284ec27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_56ce9bb622020ca3a945b2ef1afb69fc1f9e532432cfa8f9aa2e670df284ec27->leave($__internal_56ce9bb622020ca3a945b2ef1afb69fc1f9e532432cfa8f9aa2e670df284ec27_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0df10ef019ca0a672511a547da1169a2c9429e27f4fa8c6f41ad8d06c61ab36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df10ef019ca0a672511a547da1169a2c9429e27f4fa8c6f41ad8d06c61ab36f->enter($__internal_0df10ef019ca0a672511a547da1169a2c9429e27f4fa8c6f41ad8d06c61ab36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0df10ef019ca0a672511a547da1169a2c9429e27f4fa8c6f41ad8d06c61ab36f->leave($__internal_0df10ef019ca0a672511a547da1169a2c9429e27f4fa8c6f41ad8d06c61ab36f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9466a43fb2e8af85d01df7b4483e3c4c278bfb298f9ec176786d18ac71af6d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9466a43fb2e8af85d01df7b4483e3c4c278bfb298f9ec176786d18ac71af6d9c->enter($__internal_9466a43fb2e8af85d01df7b4483e3c4c278bfb298f9ec176786d18ac71af6d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9466a43fb2e8af85d01df7b4483e3c4c278bfb298f9ec176786d18ac71af6d9c->leave($__internal_9466a43fb2e8af85d01df7b4483e3c4c278bfb298f9ec176786d18ac71af6d9c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/cabox/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
