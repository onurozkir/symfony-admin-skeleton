<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eb8993fdb1d0acc4349505225f5007f5cc70ee9c68ddd72b5b7e5b821646c174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e016eb5076463ccb0eedf3f65c109b45c1dcf25e160f955d81870b93dd90dfc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e016eb5076463ccb0eedf3f65c109b45c1dcf25e160f955d81870b93dd90dfc8->enter($__internal_e016eb5076463ccb0eedf3f65c109b45c1dcf25e160f955d81870b93dd90dfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_da603460c57f190dd116724170636c43310807bb0c192612e2966115677caa17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da603460c57f190dd116724170636c43310807bb0c192612e2966115677caa17->enter($__internal_da603460c57f190dd116724170636c43310807bb0c192612e2966115677caa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e016eb5076463ccb0eedf3f65c109b45c1dcf25e160f955d81870b93dd90dfc8->leave($__internal_e016eb5076463ccb0eedf3f65c109b45c1dcf25e160f955d81870b93dd90dfc8_prof);

        
        $__internal_da603460c57f190dd116724170636c43310807bb0c192612e2966115677caa17->leave($__internal_da603460c57f190dd116724170636c43310807bb0c192612e2966115677caa17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a72f1acf5cfd5b887b34c56acf49b5e92eef8b24dfc52994862492d2d25aa88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72f1acf5cfd5b887b34c56acf49b5e92eef8b24dfc52994862492d2d25aa88c->enter($__internal_a72f1acf5cfd5b887b34c56acf49b5e92eef8b24dfc52994862492d2d25aa88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f23b1728ad6778daed1f6e60bbf24912a04f92801e60bcb07b78e7e1ee38b8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23b1728ad6778daed1f6e60bbf24912a04f92801e60bcb07b78e7e1ee38b8a2->enter($__internal_f23b1728ad6778daed1f6e60bbf24912a04f92801e60bcb07b78e7e1ee38b8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f23b1728ad6778daed1f6e60bbf24912a04f92801e60bcb07b78e7e1ee38b8a2->leave($__internal_f23b1728ad6778daed1f6e60bbf24912a04f92801e60bcb07b78e7e1ee38b8a2_prof);

        
        $__internal_a72f1acf5cfd5b887b34c56acf49b5e92eef8b24dfc52994862492d2d25aa88c->leave($__internal_a72f1acf5cfd5b887b34c56acf49b5e92eef8b24dfc52994862492d2d25aa88c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0e74bf8076290592799e6ed00ec13790f88b204e4755745679d72d1273b1294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e74bf8076290592799e6ed00ec13790f88b204e4755745679d72d1273b1294->enter($__internal_b0e74bf8076290592799e6ed00ec13790f88b204e4755745679d72d1273b1294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0058603c8bd5814f4f7f848ecd1a7311b8f0a99c6b53901943687f9feb6b9245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0058603c8bd5814f4f7f848ecd1a7311b8f0a99c6b53901943687f9feb6b9245->enter($__internal_0058603c8bd5814f4f7f848ecd1a7311b8f0a99c6b53901943687f9feb6b9245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0058603c8bd5814f4f7f848ecd1a7311b8f0a99c6b53901943687f9feb6b9245->leave($__internal_0058603c8bd5814f4f7f848ecd1a7311b8f0a99c6b53901943687f9feb6b9245_prof);

        
        $__internal_b0e74bf8076290592799e6ed00ec13790f88b204e4755745679d72d1273b1294->leave($__internal_b0e74bf8076290592799e6ed00ec13790f88b204e4755745679d72d1273b1294_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d407aace437fa2f568b0aa06682dc20911b64a8627c4960dbfc309e855d51ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d407aace437fa2f568b0aa06682dc20911b64a8627c4960dbfc309e855d51ef->enter($__internal_7d407aace437fa2f568b0aa06682dc20911b64a8627c4960dbfc309e855d51ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b2a23cdf51c7438b4d0a973769e6b94e13bba409411cb19e02168a5ef9565e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2a23cdf51c7438b4d0a973769e6b94e13bba409411cb19e02168a5ef9565e4->enter($__internal_3b2a23cdf51c7438b4d0a973769e6b94e13bba409411cb19e02168a5ef9565e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3b2a23cdf51c7438b4d0a973769e6b94e13bba409411cb19e02168a5ef9565e4->leave($__internal_3b2a23cdf51c7438b4d0a973769e6b94e13bba409411cb19e02168a5ef9565e4_prof);

        
        $__internal_7d407aace437fa2f568b0aa06682dc20911b64a8627c4960dbfc309e855d51ef->leave($__internal_7d407aace437fa2f568b0aa06682dc20911b64a8627c4960dbfc309e855d51ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
