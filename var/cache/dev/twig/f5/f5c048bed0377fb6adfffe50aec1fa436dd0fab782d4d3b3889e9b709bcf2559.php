<?php

/* Blog/homepage.html.twig */
class __TwigTemplate_7f184394b1ebd9958ef3343ee5633602318a8795f219bbe2737d0a30368221c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Blog/homepage.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1900c923ae921f3cb8df6e39106991f97df4ee1b068fb03df93f37e8267fa8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1900c923ae921f3cb8df6e39106991f97df4ee1b068fb03df93f37e8267fa8f->enter($__internal_b1900c923ae921f3cb8df6e39106991f97df4ee1b068fb03df93f37e8267fa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/homepage.html.twig"));

        $__internal_aa9ed152ce0d11cf39c46900561eac2059d248f4589f0502cba4723a0167d1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9ed152ce0d11cf39c46900561eac2059d248f4589f0502cba4723a0167d1b5->enter($__internal_aa9ed152ce0d11cf39c46900561eac2059d248f4589f0502cba4723a0167d1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Blog/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1900c923ae921f3cb8df6e39106991f97df4ee1b068fb03df93f37e8267fa8f->leave($__internal_b1900c923ae921f3cb8df6e39106991f97df4ee1b068fb03df93f37e8267fa8f_prof);

        
        $__internal_aa9ed152ce0d11cf39c46900561eac2059d248f4589f0502cba4723a0167d1b5->leave($__internal_aa9ed152ce0d11cf39c46900561eac2059d248f4589f0502cba4723a0167d1b5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a5116cb8bcea5ca6ecf4ef47386b158adbf25b02ce6723c8510938ed4d8789b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5116cb8bcea5ca6ecf4ef47386b158adbf25b02ce6723c8510938ed4d8789b->enter($__internal_0a5116cb8bcea5ca6ecf4ef47386b158adbf25b02ce6723c8510938ed4d8789b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a99067ae781fa1d6f847c86bbaa3a441671e1663153062d5e0e296aeaec2fde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99067ae781fa1d6f847c86bbaa3a441671e1663153062d5e0e296aeaec2fde8->enter($__internal_a99067ae781fa1d6f847c86bbaa3a441671e1663153062d5e0e296aeaec2fde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image:url(' ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/home-bg.jpg"), "html", null, true);
        echo "')\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"site-heading\">
              <h1>Omics News  </h1>
              <h3><br/> Les dernières actualités omiques</h3>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            echo "          <div class=\"post-preview\">
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_post", array("postid" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
              <h2 class=\"post-title\">
               ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "
              </h2>
              <h3 class=\"post-subtitle\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "
              </h3>
            </a>
            <p class=\"post-meta\">Posté par
               ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "auteur", array()), "html", null, true);
            echo "
             le ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published", array()), "d-m-Y"), "html", null, true);
            echo "</p>
          </div>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "            <div class=\"warning\"> Il n'y a pas d'article ici </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "          <!-- Pager -->
          <div class=\"clearfix\">
               ";
        // line 43
        if ((($context["page"] ?? $this->getContext($context, "page")) != 1)) {
            // line 44
            echo "                 ";
            $context["previous"] = (($context["page"] ?? $this->getContext($context, "page")) - 2);
            // line 45
            echo "                        <a  class=\"btn btn-primary float-left\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => ($context["previous"] ?? $this->getContext($context, "previous")))), "html", null, true);
            echo "\">&larr; Plus récents</a>
                    
               ";
        }
        // line 48
        echo "               ";
        if (((($context["page"] ?? $this->getContext($context, "page")) * 3) < ($context["totalPostCount"] ?? $this->getContext($context, "totalPostCount")))) {
            // line 49
            echo "                    
                       <a  class=\"btn btn-primary float-right\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage", array("page" => ($context["page"] ?? $this->getContext($context, "page")))), "html", null, true);
            echo "\"> Plus anciens &rarr;</a>
               ";
        }
        // line 52
        echo "           
          </div>
          </div>
        </div>
      </div>
    </div>

   ";
        
        $__internal_a99067ae781fa1d6f847c86bbaa3a441671e1663153062d5e0e296aeaec2fde8->leave($__internal_a99067ae781fa1d6f847c86bbaa3a441671e1663153062d5e0e296aeaec2fde8_prof);

        
        $__internal_0a5116cb8bcea5ca6ecf4ef47386b158adbf25b02ce6723c8510938ed4d8789b->leave($__internal_0a5116cb8bcea5ca6ecf4ef47386b158adbf25b02ce6723c8510938ed4d8789b_prof);

    }

    public function getTemplateName()
    {
        return "Blog/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  141 => 50,  138 => 49,  135 => 48,  128 => 45,  125 => 44,  123 => 43,  119 => 41,  112 => 39,  104 => 36,  100 => 35,  93 => 31,  87 => 28,  82 => 26,  79 => 25,  74 => 24,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}

    <!-- Page Header -->
    <header class=\"masthead\" style=\"background-image:url(' {{ asset('img/home-bg.jpg') }}')\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"site-heading\">
              <h1>Omics News  </h1>
              <h3><br/> Les dernières actualités omiques</h3>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            {% for post in posts %}
          <div class=\"post-preview\">
            <a href=\"{{ path('blog_post',{'postid' : post.id}) }}\">
              <h2 class=\"post-title\">
               {{ post.titre  }}
              </h2>
              <h3 class=\"post-subtitle\">
                {{ post.description}}
              </h3>
            </a>
            <p class=\"post-meta\">Posté par
               {{ post.auteur }}
             le {{ post.published|date('d-m-Y') }}</p>
          </div>
          {% else %}
            <div class=\"warning\"> Il n'y a pas d'article ici </div>
          {% endfor %}
          <!-- Pager -->
          <div class=\"clearfix\">
               {% if page != 1 %}
                 {% set previous  = page -2 %}
                        <a  class=\"btn btn-primary float-left\" href=\"{{path('homepage',{'page' : previous})}}\">&larr; Plus récents</a>
                    
               {% endif %}
               {% if page*3 < totalPostCount %}
                    
                       <a  class=\"btn btn-primary float-right\" href=\"{{path('homepage',{'page' : page})}}\"> Plus anciens &rarr;</a>
               {% endif %}
           
          </div>
          </div>
        </div>
      </div>
    </div>

   {% endblock %}
", "Blog/homepage.html.twig", "/home/faustine/blog-omics/app/Resources/views/Blog/homepage.html.twig");
    }
}
