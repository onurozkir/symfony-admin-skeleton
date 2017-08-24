<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_200fb595832676a5b64a047cfb39d7462dd1b8348190490843f257be92197a07 extends Twig_Template
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
        $__internal_17c32eca4950d56f57aced3ff06ce919fbb5e4370926ca11c1ed72046085e478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c32eca4950d56f57aced3ff06ce919fbb5e4370926ca11c1ed72046085e478->enter($__internal_17c32eca4950d56f57aced3ff06ce919fbb5e4370926ca11c1ed72046085e478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_77fd0eee8d0a3a0105a711ecb8f038fcdb18e6941701a181c3901aca13c5f734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fd0eee8d0a3a0105a711ecb8f038fcdb18e6941701a181c3901aca13c5f734->enter($__internal_77fd0eee8d0a3a0105a711ecb8f038fcdb18e6941701a181c3901aca13c5f734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c32eca4950d56f57aced3ff06ce919fbb5e4370926ca11c1ed72046085e478->leave($__internal_17c32eca4950d56f57aced3ff06ce919fbb5e4370926ca11c1ed72046085e478_prof);

        
        $__internal_77fd0eee8d0a3a0105a711ecb8f038fcdb18e6941701a181c3901aca13c5f734->leave($__internal_77fd0eee8d0a3a0105a711ecb8f038fcdb18e6941701a181c3901aca13c5f734_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3804aeb748ede0df708f1e2b4c4708d00153d91b06305408cfaeaa7277be20b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3804aeb748ede0df708f1e2b4c4708d00153d91b06305408cfaeaa7277be20b6->enter($__internal_3804aeb748ede0df708f1e2b4c4708d00153d91b06305408cfaeaa7277be20b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_608a8e5b00d463d7f626a6f70551437b72da7a8ea969e33ed07d61004dd9a92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608a8e5b00d463d7f626a6f70551437b72da7a8ea969e33ed07d61004dd9a92b->enter($__internal_608a8e5b00d463d7f626a6f70551437b72da7a8ea969e33ed07d61004dd9a92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_608a8e5b00d463d7f626a6f70551437b72da7a8ea969e33ed07d61004dd9a92b->leave($__internal_608a8e5b00d463d7f626a6f70551437b72da7a8ea969e33ed07d61004dd9a92b_prof);

        
        $__internal_3804aeb748ede0df708f1e2b4c4708d00153d91b06305408cfaeaa7277be20b6->leave($__internal_3804aeb748ede0df708f1e2b4c4708d00153d91b06305408cfaeaa7277be20b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d427b0873d09220581bb447282e25fed6c413f62c4e5e8791503fc33b56329a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d427b0873d09220581bb447282e25fed6c413f62c4e5e8791503fc33b56329a->enter($__internal_2d427b0873d09220581bb447282e25fed6c413f62c4e5e8791503fc33b56329a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c69966879ed723ecf868f1196634866b22853a6ded97cb3e7fdc4125fb923858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69966879ed723ecf868f1196634866b22853a6ded97cb3e7fdc4125fb923858->enter($__internal_c69966879ed723ecf868f1196634866b22853a6ded97cb3e7fdc4125fb923858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c69966879ed723ecf868f1196634866b22853a6ded97cb3e7fdc4125fb923858->leave($__internal_c69966879ed723ecf868f1196634866b22853a6ded97cb3e7fdc4125fb923858_prof);

        
        $__internal_2d427b0873d09220581bb447282e25fed6c413f62c4e5e8791503fc33b56329a->leave($__internal_2d427b0873d09220581bb447282e25fed6c413f62c4e5e8791503fc33b56329a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e934e5ce7346e4a9e6651a9f76420efbfbf1e7df0df906225c2c6d2191f9878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e934e5ce7346e4a9e6651a9f76420efbfbf1e7df0df906225c2c6d2191f9878->enter($__internal_8e934e5ce7346e4a9e6651a9f76420efbfbf1e7df0df906225c2c6d2191f9878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96d7f0c3904cb573949fe0d37fc709806cfa5b053c94fba405895f1d59629d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d7f0c3904cb573949fe0d37fc709806cfa5b053c94fba405895f1d59629d2e->enter($__internal_96d7f0c3904cb573949fe0d37fc709806cfa5b053c94fba405895f1d59629d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_96d7f0c3904cb573949fe0d37fc709806cfa5b053c94fba405895f1d59629d2e->leave($__internal_96d7f0c3904cb573949fe0d37fc709806cfa5b053c94fba405895f1d59629d2e_prof);

        
        $__internal_8e934e5ce7346e4a9e6651a9f76420efbfbf1e7df0df906225c2c6d2191f9878->leave($__internal_8e934e5ce7346e4a9e6651a9f76420efbfbf1e7df0df906225c2c6d2191f9878_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
