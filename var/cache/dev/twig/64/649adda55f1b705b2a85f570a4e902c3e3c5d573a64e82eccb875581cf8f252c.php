<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_b08f78ae83d2a9687ef1d7af9008620e6d8a970c028be7d84e9e8280e9cb016a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08f78ae83d2a9687ef1d7af9008620e6d8a970c028be7d84e9e8280e9cb016a->enter($__internal_b08f78ae83d2a9687ef1d7af9008620e6d8a970c028be7d84e9e8280e9cb016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_720464ba780d847e7b03682dc4ecc5c4e9a7c159504a69c480ab23563f269b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720464ba780d847e7b03682dc4ecc5c4e9a7c159504a69c480ab23563f269b15->enter($__internal_720464ba780d847e7b03682dc4ecc5c4e9a7c159504a69c480ab23563f269b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b08f78ae83d2a9687ef1d7af9008620e6d8a970c028be7d84e9e8280e9cb016a->leave($__internal_b08f78ae83d2a9687ef1d7af9008620e6d8a970c028be7d84e9e8280e9cb016a_prof);

        
        $__internal_720464ba780d847e7b03682dc4ecc5c4e9a7c159504a69c480ab23563f269b15->leave($__internal_720464ba780d847e7b03682dc4ecc5c4e9a7c159504a69c480ab23563f269b15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bbb438cfa39214552974468f5fbe37d0e2f013cbf429b1f450590f92571b647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbb438cfa39214552974468f5fbe37d0e2f013cbf429b1f450590f92571b647->enter($__internal_3bbb438cfa39214552974468f5fbe37d0e2f013cbf429b1f450590f92571b647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55374d75d4ac769e4f57013ffc748fa2cb1cfc4f60f1351e0d733d0e7f01d829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55374d75d4ac769e4f57013ffc748fa2cb1cfc4f60f1351e0d733d0e7f01d829->enter($__internal_55374d75d4ac769e4f57013ffc748fa2cb1cfc4f60f1351e0d733d0e7f01d829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55374d75d4ac769e4f57013ffc748fa2cb1cfc4f60f1351e0d733d0e7f01d829->leave($__internal_55374d75d4ac769e4f57013ffc748fa2cb1cfc4f60f1351e0d733d0e7f01d829_prof);

        
        $__internal_3bbb438cfa39214552974468f5fbe37d0e2f013cbf429b1f450590f92571b647->leave($__internal_3bbb438cfa39214552974468f5fbe37d0e2f013cbf429b1f450590f92571b647_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4768481ae8709b67a134a2d221b7ad33ed4e060d6d22908519d463de8e3fec16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4768481ae8709b67a134a2d221b7ad33ed4e060d6d22908519d463de8e3fec16->enter($__internal_4768481ae8709b67a134a2d221b7ad33ed4e060d6d22908519d463de8e3fec16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7be2c08df72a67369615f3db59da5f35be5dd1fffef535a3db4285c004522173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be2c08df72a67369615f3db59da5f35be5dd1fffef535a3db4285c004522173->enter($__internal_7be2c08df72a67369615f3db59da5f35be5dd1fffef535a3db4285c004522173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7be2c08df72a67369615f3db59da5f35be5dd1fffef535a3db4285c004522173->leave($__internal_7be2c08df72a67369615f3db59da5f35be5dd1fffef535a3db4285c004522173_prof);

        
        $__internal_4768481ae8709b67a134a2d221b7ad33ed4e060d6d22908519d463de8e3fec16->leave($__internal_4768481ae8709b67a134a2d221b7ad33ed4e060d6d22908519d463de8e3fec16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19c9a340f2789f1ffb70e3e3cb41936bfb99d54e74ed015abf40232cde069bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c9a340f2789f1ffb70e3e3cb41936bfb99d54e74ed015abf40232cde069bc6->enter($__internal_19c9a340f2789f1ffb70e3e3cb41936bfb99d54e74ed015abf40232cde069bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c152baad02ef118893a0f8aa6f18ee6c94f4af77f130ccbac220a90ddb58696d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c152baad02ef118893a0f8aa6f18ee6c94f4af77f130ccbac220a90ddb58696d->enter($__internal_c152baad02ef118893a0f8aa6f18ee6c94f4af77f130ccbac220a90ddb58696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c152baad02ef118893a0f8aa6f18ee6c94f4af77f130ccbac220a90ddb58696d->leave($__internal_c152baad02ef118893a0f8aa6f18ee6c94f4af77f130ccbac220a90ddb58696d_prof);

        
        $__internal_19c9a340f2789f1ffb70e3e3cb41936bfb99d54e74ed015abf40232cde069bc6->leave($__internal_19c9a340f2789f1ffb70e3e3cb41936bfb99d54e74ed015abf40232cde069bc6_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/faustine/blog-omics/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
