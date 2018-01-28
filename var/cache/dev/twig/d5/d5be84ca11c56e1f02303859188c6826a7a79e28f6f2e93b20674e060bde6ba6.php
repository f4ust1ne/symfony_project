<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_118d8148a14474ee0271b9dc8ad351b08fcfa79579890cb138487feeb4d7b5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118d8148a14474ee0271b9dc8ad351b08fcfa79579890cb138487feeb4d7b5c5->enter($__internal_118d8148a14474ee0271b9dc8ad351b08fcfa79579890cb138487feeb4d7b5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dc61462dc62656c99efb56c3fac2b6144e6daa6c903bf6464b63f30952a03051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc61462dc62656c99efb56c3fac2b6144e6daa6c903bf6464b63f30952a03051->enter($__internal_dc61462dc62656c99efb56c3fac2b6144e6daa6c903bf6464b63f30952a03051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_118d8148a14474ee0271b9dc8ad351b08fcfa79579890cb138487feeb4d7b5c5->leave($__internal_118d8148a14474ee0271b9dc8ad351b08fcfa79579890cb138487feeb4d7b5c5_prof);

        
        $__internal_dc61462dc62656c99efb56c3fac2b6144e6daa6c903bf6464b63f30952a03051->leave($__internal_dc61462dc62656c99efb56c3fac2b6144e6daa6c903bf6464b63f30952a03051_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_661b14edfddfef889a29733f7b55e9ee7d93de35596a0f714fec6f74f300dca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_661b14edfddfef889a29733f7b55e9ee7d93de35596a0f714fec6f74f300dca4->enter($__internal_661b14edfddfef889a29733f7b55e9ee7d93de35596a0f714fec6f74f300dca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_58df2d16b68deffe86e98a3ab48ee342e6a465c605617503fe0784defe273930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58df2d16b68deffe86e98a3ab48ee342e6a465c605617503fe0784defe273930->enter($__internal_58df2d16b68deffe86e98a3ab48ee342e6a465c605617503fe0784defe273930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_58df2d16b68deffe86e98a3ab48ee342e6a465c605617503fe0784defe273930->leave($__internal_58df2d16b68deffe86e98a3ab48ee342e6a465c605617503fe0784defe273930_prof);

        
        $__internal_661b14edfddfef889a29733f7b55e9ee7d93de35596a0f714fec6f74f300dca4->leave($__internal_661b14edfddfef889a29733f7b55e9ee7d93de35596a0f714fec6f74f300dca4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad6dc93f8c808f3c18bb3b5357931b7048bed7ad7db475978093c7d92c5480b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6dc93f8c808f3c18bb3b5357931b7048bed7ad7db475978093c7d92c5480b9->enter($__internal_ad6dc93f8c808f3c18bb3b5357931b7048bed7ad7db475978093c7d92c5480b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8ef5b905265143272feae79b79eee4e1ae4526bb1e2429609f1d6ee5b69549d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef5b905265143272feae79b79eee4e1ae4526bb1e2429609f1d6ee5b69549d2->enter($__internal_8ef5b905265143272feae79b79eee4e1ae4526bb1e2429609f1d6ee5b69549d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8ef5b905265143272feae79b79eee4e1ae4526bb1e2429609f1d6ee5b69549d2->leave($__internal_8ef5b905265143272feae79b79eee4e1ae4526bb1e2429609f1d6ee5b69549d2_prof);

        
        $__internal_ad6dc93f8c808f3c18bb3b5357931b7048bed7ad7db475978093c7d92c5480b9->leave($__internal_ad6dc93f8c808f3c18bb3b5357931b7048bed7ad7db475978093c7d92c5480b9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9d299be5a04b446cfe61fa794ae361410aa07258202951baaed223c309b24fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d299be5a04b446cfe61fa794ae361410aa07258202951baaed223c309b24fd->enter($__internal_d9d299be5a04b446cfe61fa794ae361410aa07258202951baaed223c309b24fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ba94bf4d4b5ba69f1bb35dabe59fa64d6706cfb18e0ce438513092f48a17e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba94bf4d4b5ba69f1bb35dabe59fa64d6706cfb18e0ce438513092f48a17e5c->enter($__internal_4ba94bf4d4b5ba69f1bb35dabe59fa64d6706cfb18e0ce438513092f48a17e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4ba94bf4d4b5ba69f1bb35dabe59fa64d6706cfb18e0ce438513092f48a17e5c->leave($__internal_4ba94bf4d4b5ba69f1bb35dabe59fa64d6706cfb18e0ce438513092f48a17e5c_prof);

        
        $__internal_d9d299be5a04b446cfe61fa794ae361410aa07258202951baaed223c309b24fd->leave($__internal_d9d299be5a04b446cfe61fa794ae361410aa07258202951baaed223c309b24fd_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "/home/faustine/blog-omics/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
