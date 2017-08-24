<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7280fba83c26a778bc88c45a07b373f87ef4e154497df9b6706ceadf73540dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14436b510c67b0e59463201f89290dc461ce4bf8200614fb6dc96552469f9ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14436b510c67b0e59463201f89290dc461ce4bf8200614fb6dc96552469f9ca6->enter($__internal_14436b510c67b0e59463201f89290dc461ce4bf8200614fb6dc96552469f9ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3cc7dde8b7d64300fbc6d5a4787cbbd9ade3b9a7d7fe571118df119ef4cc1168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc7dde8b7d64300fbc6d5a4787cbbd9ade3b9a7d7fe571118df119ef4cc1168->enter($__internal_3cc7dde8b7d64300fbc6d5a4787cbbd9ade3b9a7d7fe571118df119ef4cc1168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14436b510c67b0e59463201f89290dc461ce4bf8200614fb6dc96552469f9ca6->leave($__internal_14436b510c67b0e59463201f89290dc461ce4bf8200614fb6dc96552469f9ca6_prof);

        
        $__internal_3cc7dde8b7d64300fbc6d5a4787cbbd9ade3b9a7d7fe571118df119ef4cc1168->leave($__internal_3cc7dde8b7d64300fbc6d5a4787cbbd9ade3b9a7d7fe571118df119ef4cc1168_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4827166a937be8dae90d2ae66aa0aca7ceb97780244af29c7e2ff1e903280531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4827166a937be8dae90d2ae66aa0aca7ceb97780244af29c7e2ff1e903280531->enter($__internal_4827166a937be8dae90d2ae66aa0aca7ceb97780244af29c7e2ff1e903280531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_253fc7de81dcf62d7e1a51f5235069c2ed13b69245d97859ba539170e0dd5eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253fc7de81dcf62d7e1a51f5235069c2ed13b69245d97859ba539170e0dd5eeb->enter($__internal_253fc7de81dcf62d7e1a51f5235069c2ed13b69245d97859ba539170e0dd5eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_253fc7de81dcf62d7e1a51f5235069c2ed13b69245d97859ba539170e0dd5eeb->leave($__internal_253fc7de81dcf62d7e1a51f5235069c2ed13b69245d97859ba539170e0dd5eeb_prof);

        
        $__internal_4827166a937be8dae90d2ae66aa0aca7ceb97780244af29c7e2ff1e903280531->leave($__internal_4827166a937be8dae90d2ae66aa0aca7ceb97780244af29c7e2ff1e903280531_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
