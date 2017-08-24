<?php

/* admin/contact-message/backpost.html.twig */
class __TwigTemplate_fc0de6f71191fc7a1ce82371f6b87ad96187d4695ec25bcd77ed12b15cb97c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/contact-message/backpost.html.twig", 1);
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
        $__internal_1cf7c8179dc8d2381a79414ce678425f8df8123254c41f4966f87d46daa141d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf7c8179dc8d2381a79414ce678425f8df8123254c41f4966f87d46daa141d3->enter($__internal_1cf7c8179dc8d2381a79414ce678425f8df8123254c41f4966f87d46daa141d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact-message/backpost.html.twig"));

        $__internal_fb7d243fb875ff1eaf84855b258182910f93289668d39cd43a0385f6d7c81cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7d243fb875ff1eaf84855b258182910f93289668d39cd43a0385f6d7c81cad->enter($__internal_fb7d243fb875ff1eaf84855b258182910f93289668d39cd43a0385f6d7c81cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact-message/backpost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf7c8179dc8d2381a79414ce678425f8df8123254c41f4966f87d46daa141d3->leave($__internal_1cf7c8179dc8d2381a79414ce678425f8df8123254c41f4966f87d46daa141d3_prof);

        
        $__internal_fb7d243fb875ff1eaf84855b258182910f93289668d39cd43a0385f6d7c81cad->leave($__internal_fb7d243fb875ff1eaf84855b258182910f93289668d39cd43a0385f6d7c81cad_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc482e330ac144ce1f4b4d981d6297e917a3ba065bc8d8ab25e49bd91c407e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc482e330ac144ce1f4b4d981d6297e917a3ba065bc8d8ab25e49bd91c407e7b->enter($__internal_dc482e330ac144ce1f4b4d981d6297e917a3ba065bc8d8ab25e49bd91c407e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_659108e6e16d7887790c4810087053c2dbfc5ca57c198a784bdc1f6b29d2253f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659108e6e16d7887790c4810087053c2dbfc5ca57c198a784bdc1f6b29d2253f->enter($__internal_659108e6e16d7887790c4810087053c2dbfc5ca57c198a784bdc1f6b29d2253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"content-header\"><h1>";
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
    <a href=\"javascript:history.back();\" class=\"btn btn-small btn-primary pull-right back-button\" title=\"Back\"><i class=\"icon-arrow-left icon-white\"></i> Back</a>
    <hr>
    <div class=\"row\">

        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <form action=\"\">
                    <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "level", array()), "html", null, true);
        echo " Page</h3>
                </div>
                    <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label for=\"mailto\" > <strong> To: </strong></label>
                        <input class=\"form-control\" id=\"mailto\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "email", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"mailAbout\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "messageTitle", array()), "html", null, true);
        echo " About\">
                    </div>
                    <div class=\"form-group\">
                        <textarea id=\"compose-textarea\" class=\"form-control\" style=\"height: 300px\">
                            <h2>Dear ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "nameSurname", array()), "html", null, true);
        echo ",</h2>

                        </textarea>
                        <script>
                            \$(function () {
                                //Add text editor
                                \$(\"#compose-textarea\").wysihtml5();
                            });
                        </script>
                    </div>
                </div>
                    <!-- /.box-body -->
                    <div class=\"box-footer\">
                    <div class=\"pull-right\">
                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-envelope-o\"></i> Send</button>
                    </div>
                </div>
                </form>
                <!-- /.box-footer -->
            </div>
            <!-- /. box -->
            <div class=\"dump\">
                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")));
        echo "
            </div>
        </div>

        <div class=\"col-md-3\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "nameSurname", array()), "html", null, true);
        echo "' s Message</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label>About ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "messageTitle", array()), "html", null, true);
        echo "</label><br>
                        <i>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "sendDate", array()), "d-m-Y"), "html", null, true);
        echo "</i>
                    </div>
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" cols=\"10\" rows=\"23\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "message", array()), "html", null, true);
        echo "</textarea>
                    </div>

                </div>
        </div>
    </div>
    </div>
</section>
";
        
        $__internal_659108e6e16d7887790c4810087053c2dbfc5ca57c198a784bdc1f6b29d2253f->leave($__internal_659108e6e16d7887790c4810087053c2dbfc5ca57c198a784bdc1f6b29d2253f_prof);

        
        $__internal_dc482e330ac144ce1f4b4d981d6297e917a3ba065bc8d8ab25e49bd91c407e7b->leave($__internal_dc482e330ac144ce1f4b4d981d6297e917a3ba065bc8d8ab25e49bd91c407e7b_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact-message/backpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 69,  151 => 66,  147 => 65,  140 => 61,  130 => 54,  105 => 32,  98 => 28,  92 => 25,  84 => 20,  69 => 8,  62 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
    <a href=\"javascript:history.back();\" class=\"btn btn-small btn-primary pull-right back-button\" title=\"Back\"><i class=\"icon-arrow-left icon-white\"></i> Back</a>
    <hr>
    <div class=\"row\">

        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <form action=\"\">
                    <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">{{ page_header.level }} Page</h3>
                </div>
                    <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label for=\"mailto\" > <strong> To: </strong></label>
                        <input class=\"form-control\" id=\"mailto\" value=\"{{ post.email }}\">
                    </div>
                    <div class=\"form-group\">
                        <input class=\"form-control\" id=\"mailAbout\" value=\"{{ post.messageTitle }} About\">
                    </div>
                    <div class=\"form-group\">
                        <textarea id=\"compose-textarea\" class=\"form-control\" style=\"height: 300px\">
                            <h2>Dear {{ post.nameSurname }},</h2>

                        </textarea>
                        <script>
                            \$(function () {
                                //Add text editor
                                \$(\"#compose-textarea\").wysihtml5();
                            });
                        </script>
                    </div>
                </div>
                    <!-- /.box-body -->
                    <div class=\"box-footer\">
                    <div class=\"pull-right\">
                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-envelope-o\"></i> Send</button>
                    </div>
                </div>
                </form>
                <!-- /.box-footer -->
            </div>
            <!-- /. box -->
            <div class=\"dump\">
                {{ dump(post) }}
            </div>
        </div>

        <div class=\"col-md-3\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">{{ post.nameSurname }}' s Message</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label>About {{ post.messageTitle }}</label><br>
                        <i>{{ post.sendDate|date('d-m-Y') }}</i>
                    </div>
                    <div class=\"form-group\">
                        <textarea class=\"form-control\" cols=\"10\" rows=\"23\">{{ post.message }}</textarea>
                    </div>

                </div>
        </div>
    </div>
    </div>
</section>
{% endblock %}", "admin/contact-message/backpost.html.twig", "/var/www/html/symfony/app/Resources/views/admin/contact-message/backpost.html.twig");
    }
}
