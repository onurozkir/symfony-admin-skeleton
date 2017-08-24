<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_10b82dac3a4611c38de0300d2b54a2c3a52280abc144aa53519758ebe45acd06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3e46140d1421e8ef8a471321f536cc0e9f4edf48349074beea514e85726605c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e46140d1421e8ef8a471321f536cc0e9f4edf48349074beea514e85726605c->enter($__internal_c3e46140d1421e8ef8a471321f536cc0e9f4edf48349074beea514e85726605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_7bfddb9d4b032d1794a81341f1197a65f76d0bb391c0d77418d73ada9cce6516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfddb9d4b032d1794a81341f1197a65f76d0bb391c0d77418d73ada9cce6516->enter($__internal_7bfddb9d4b032d1794a81341f1197a65f76d0bb391c0d77418d73ada9cce6516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")";
        }
        // line 4
        if (( !twig_test_empty((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array()), "")) : (""))) &&  !twig_test_empty((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array()), "")) : (""))))) {
            // line 5
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? ("
     (") : ("at "));
            echo twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array()), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array()))), array((" at line " . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array())) => ""));
            echo ":";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) ? (")") : (""));
        }
        
        $__internal_c3e46140d1421e8ef8a471321f536cc0e9f4edf48349074beea514e85726605c->leave($__internal_c3e46140d1421e8ef8a471321f536cc0e9f4edf48349074beea514e85726605c_prof);

        
        $__internal_7bfddb9d4b032d1794a81341f1197a65f76d0bb391c0d77418d73ada9cce6516->leave($__internal_7bfddb9d4b032d1794a81341f1197a65f76d0bb391c0d77418d73ada9cce6516_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
