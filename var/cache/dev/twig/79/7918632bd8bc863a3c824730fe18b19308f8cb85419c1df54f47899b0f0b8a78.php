<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_571a581b7d15b5683ef703c52719ea0c1d27156fd5705f78eaf12f5ca9f40852 extends Twig_Template
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
        $__internal_625dabc9a0e6f66e85d7f5ffcf3dc8b1b54aba6477a0f8bea9ec4f07038476f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625dabc9a0e6f66e85d7f5ffcf3dc8b1b54aba6477a0f8bea9ec4f07038476f1->enter($__internal_625dabc9a0e6f66e85d7f5ffcf3dc8b1b54aba6477a0f8bea9ec4f07038476f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0934a38c85bcca1cf4174bcc25575de8b2e981eb8a72dd33b967de62165e63da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0934a38c85bcca1cf4174bcc25575de8b2e981eb8a72dd33b967de62165e63da->enter($__internal_0934a38c85bcca1cf4174bcc25575de8b2e981eb8a72dd33b967de62165e63da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_625dabc9a0e6f66e85d7f5ffcf3dc8b1b54aba6477a0f8bea9ec4f07038476f1->leave($__internal_625dabc9a0e6f66e85d7f5ffcf3dc8b1b54aba6477a0f8bea9ec4f07038476f1_prof);

        
        $__internal_0934a38c85bcca1cf4174bcc25575de8b2e981eb8a72dd33b967de62165e63da->leave($__internal_0934a38c85bcca1cf4174bcc25575de8b2e981eb8a72dd33b967de62165e63da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be8ad27f8f72cdfdcc8737f9ac17002946ed3b0deb620501b0a828c6ca5c2363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8ad27f8f72cdfdcc8737f9ac17002946ed3b0deb620501b0a828c6ca5c2363->enter($__internal_be8ad27f8f72cdfdcc8737f9ac17002946ed3b0deb620501b0a828c6ca5c2363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9bb67877ffad204f41ca791d7021aa913fd251d84fecf00ff04fcdaa00a7848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bb67877ffad204f41ca791d7021aa913fd251d84fecf00ff04fcdaa00a7848->enter($__internal_c9bb67877ffad204f41ca791d7021aa913fd251d84fecf00ff04fcdaa00a7848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9bb67877ffad204f41ca791d7021aa913fd251d84fecf00ff04fcdaa00a7848->leave($__internal_c9bb67877ffad204f41ca791d7021aa913fd251d84fecf00ff04fcdaa00a7848_prof);

        
        $__internal_be8ad27f8f72cdfdcc8737f9ac17002946ed3b0deb620501b0a828c6ca5c2363->leave($__internal_be8ad27f8f72cdfdcc8737f9ac17002946ed3b0deb620501b0a828c6ca5c2363_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d43aa51f471a08ca2501a69af2b86b3d87004c41ca88dd3f00d827e5b2926628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43aa51f471a08ca2501a69af2b86b3d87004c41ca88dd3f00d827e5b2926628->enter($__internal_d43aa51f471a08ca2501a69af2b86b3d87004c41ca88dd3f00d827e5b2926628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95a6acc72f4f3155645fb5904817df7424aa64f43e466866def444318c2e3878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a6acc72f4f3155645fb5904817df7424aa64f43e466866def444318c2e3878->enter($__internal_95a6acc72f4f3155645fb5904817df7424aa64f43e466866def444318c2e3878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95a6acc72f4f3155645fb5904817df7424aa64f43e466866def444318c2e3878->leave($__internal_95a6acc72f4f3155645fb5904817df7424aa64f43e466866def444318c2e3878_prof);

        
        $__internal_d43aa51f471a08ca2501a69af2b86b3d87004c41ca88dd3f00d827e5b2926628->leave($__internal_d43aa51f471a08ca2501a69af2b86b3d87004c41ca88dd3f00d827e5b2926628_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ba6c7c20e690baf688518a53295172b971bda9f2dfd19f65322225ead638832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba6c7c20e690baf688518a53295172b971bda9f2dfd19f65322225ead638832->enter($__internal_1ba6c7c20e690baf688518a53295172b971bda9f2dfd19f65322225ead638832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5302591eaeba5461c01b16a1a83a3ba7613445f1ec3525578482f81ac079d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5302591eaeba5461c01b16a1a83a3ba7613445f1ec3525578482f81ac079d9f->enter($__internal_e5302591eaeba5461c01b16a1a83a3ba7613445f1ec3525578482f81ac079d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5302591eaeba5461c01b16a1a83a3ba7613445f1ec3525578482f81ac079d9f->leave($__internal_e5302591eaeba5461c01b16a1a83a3ba7613445f1ec3525578482f81ac079d9f_prof);

        
        $__internal_1ba6c7c20e690baf688518a53295172b971bda9f2dfd19f65322225ead638832->leave($__internal_1ba6c7c20e690baf688518a53295172b971bda9f2dfd19f65322225ead638832_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
