<?php

/* admin/contact-message/add.html.twig */
class __TwigTemplate_a72833f35f69e93037d682566d8808d99539a323cf218c467c45ca8ef4129045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/contact-message/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a3d73b8cb18a4e33684de4152c942a67d795cca343ca748db64650d4f0effdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3d73b8cb18a4e33684de4152c942a67d795cca343ca748db64650d4f0effdb->enter($__internal_6a3d73b8cb18a4e33684de4152c942a67d795cca343ca748db64650d4f0effdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact-message/add.html.twig"));

        $__internal_83f38da39f84579f624d235db7b1258b51230193380c36b5a95f10b9a9429c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f38da39f84579f624d235db7b1258b51230193380c36b5a95f10b9a9429c91->enter($__internal_83f38da39f84579f624d235db7b1258b51230193380c36b5a95f10b9a9429c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact-message/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3d73b8cb18a4e33684de4152c942a67d795cca343ca748db64650d4f0effdb->leave($__internal_6a3d73b8cb18a4e33684de4152c942a67d795cca343ca748db64650d4f0effdb_prof);

        
        $__internal_83f38da39f84579f624d235db7b1258b51230193380c36b5a95f10b9a9429c91->leave($__internal_83f38da39f84579f624d235db7b1258b51230193380c36b5a95f10b9a9429c91_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_23ff440f7ed450d4172b4e236f9a063cebbb100f964d77744c9af3c7f0cbedb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ff440f7ed450d4172b4e236f9a063cebbb100f964d77744c9af3c7f0cbedb6->enter($__internal_23ff440f7ed450d4172b4e236f9a063cebbb100f964d77744c9af3c7f0cbedb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da559b99fcf8bf2ce3aa897e0784b98c24aca2c99aa832a9602bc4a46689145b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da559b99fcf8bf2ce3aa897e0784b98c24aca2c99aa832a9602bc4a46689145b->enter($__internal_da559b99fcf8bf2ce3aa897e0784b98c24aca2c99aa832a9602bc4a46689145b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section class=\"content-header\"><h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "page_header", array()), "html", null, true);
        $context["childUrl"] = twig_split_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "href", array()), "/");
        if ((twig_length_filter($this->env, (isset($context["childUrl"]) ? $context["childUrl"] : $this->getContext($context, "childUrl"))) >= 3)) {
            echo "<small>> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "herePage", array()), "html", null, true);
            echo "</small>";
        }
        echo "</h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "href", array()), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "level", array()), "html", null, true);
        echo "</a>
            </li>
            <li class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "herePage", array()), "html", null, true);
        echo "</li>
        </ol>
    </section>
    <section class=\"content container-fluid\">
        <a href=\"javascript:history.back();\" class=\"btn btn-small btn-primary pull-right\"><i class=\"icon-arrow-left icon-white\"></i> Back</a>
        <hr>
        <div class=\"row\">
            <!-- left column -->
            <div class=\"col-md-12\">
                <!-- general form elements -->
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "level", array()), "html", null, true);
        echo " Test Page</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST"));
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"box-body\">
                        <div class=\"col-md-6\">
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nameSurname", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attachment", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-12\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "messageTitle", array()), 'row');
        echo "
                        </div>
                        <div style=\"margin-top: 10px;\" class=\"col-md-12\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row');
        echo "
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class=\"box-footer\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("style" => "margin-top:10px;")));
        echo "
                    </div>
                    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_da559b99fcf8bf2ce3aa897e0784b98c24aca2c99aa832a9602bc4a46689145b->leave($__internal_da559b99fcf8bf2ce3aa897e0784b98c24aca2c99aa832a9602bc4a46689145b_prof);

        
        $__internal_23ff440f7ed450d4172b4e236f9a063cebbb100f964d77744c9af3c7f0cbedb6->leave($__internal_23ff440f7ed450d4172b4e236f9a063cebbb100f964d77744c9af3c7f0cbedb6_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact-message/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 53,  145 => 51,  137 => 46,  131 => 43,  125 => 40,  119 => 37,  113 => 34,  107 => 31,  101 => 28,  95 => 25,  91 => 24,  84 => 20,  69 => 8,  62 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}
    <section class=\"content-header\"><h1>{{ page_header.page_header }}{% set childUrl = page_header.href|split('/') %}{% if childUrl|length >= 3 %}<small>> {{ page_header.herePage }}</small>{% endif %}</h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"{{ page_header.href }}\"><i class=\"fa fa-dashboard\"></i>{{ page_header.level }}</a>
            </li>
            <li class=\"active\">{{ page_header.herePage }}</li>
        </ol>
    </section>
    <section class=\"content container-fluid\">
        <a href=\"javascript:history.back();\" class=\"btn btn-small btn-primary pull-right\"><i class=\"icon-arrow-left icon-white\"></i> Back</a>
        <hr>
        <div class=\"row\">
            <!-- left column -->
            <div class=\"col-md-12\">
                <!-- general form elements -->
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">{{ page_header.level }} Test Page</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {{ form_start(form, { 'method': 'POST' }) }}
                    {{ form_errors(form) }}
                    <div class=\"box-body\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.nameSurname) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.email) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.phone) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.attachment) }}
                        </div>
                        <div class=\"col-md-12\">
                            {{ form_row(form.address) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.messageTitle) }}
                        </div>
                        <div style=\"margin-top: 10px;\" class=\"col-md-12\">
                            {{ form_row(form.message) }}
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class=\"box-footer\">
                        {{ form_row(form.save, { 'attr': { 'style': 'margin-top:10px;'}}) }}
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "admin/contact-message/add.html.twig", "/var/www/html/symfony/app/Resources/views/admin/contact-message/add.html.twig");
    }
}
