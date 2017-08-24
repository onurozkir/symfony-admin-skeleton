<?php

/* admin/contact-message/detail.html.twig */
class __TwigTemplate_0e5707ce722f173c7c422997bacd6a674795f30cf846e2dcf25138750ea2e0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/contact-message/detail.html.twig", 1);
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
        $__internal_8b88abc30453e2516521735ce356b5f4127ab81d92b26cb02a75c1f8ce2fdbca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b88abc30453e2516521735ce356b5f4127ab81d92b26cb02a75c1f8ce2fdbca->enter($__internal_8b88abc30453e2516521735ce356b5f4127ab81d92b26cb02a75c1f8ce2fdbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact-message/detail.html.twig"));

        $__internal_c8d0b38989a4afeb9c3471d7c4f16fe55e283877bef86686491eee2e092d5096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d0b38989a4afeb9c3471d7c4f16fe55e283877bef86686491eee2e092d5096->enter($__internal_c8d0b38989a4afeb9c3471d7c4f16fe55e283877bef86686491eee2e092d5096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact-message/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b88abc30453e2516521735ce356b5f4127ab81d92b26cb02a75c1f8ce2fdbca->leave($__internal_8b88abc30453e2516521735ce356b5f4127ab81d92b26cb02a75c1f8ce2fdbca_prof);

        
        $__internal_c8d0b38989a4afeb9c3471d7c4f16fe55e283877bef86686491eee2e092d5096->leave($__internal_c8d0b38989a4afeb9c3471d7c4f16fe55e283877bef86686491eee2e092d5096_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5177cfe57645784818d37bab58e43acacf2c2949388bbf8df4b8eeae0984b890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5177cfe57645784818d37bab58e43acacf2c2949388bbf8df4b8eeae0984b890->enter($__internal_5177cfe57645784818d37bab58e43acacf2c2949388bbf8df4b8eeae0984b890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8f7ae09540f3970fdaa80079a3ba93fc134c1cf989ba2fdd21254e5c0104daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f7ae09540f3970fdaa80079a3ba93fc134c1cf989ba2fdd21254e5c0104daa->enter($__internal_c8f7ae09540f3970fdaa80079a3ba93fc134c1cf989ba2fdd21254e5c0104daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "level", array()), "html", null, true);
        echo " Detail Page</h3>
                </div>
                <div class=\"box-body no-padding\">
                    <div class=\"mailbox-read-info\">
                        <h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "messageTitle", array()), "html", null, true);
        echo "</h3>
                        <h5>From: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "email", array()), "html", null, true);
        echo "
                            <span class=\"mailbox-read-time pull-right\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "sendDate", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</span></h5>
                        ";
        // line 25
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "important", array()) == 1)) {
            // line 26
            echo "                            <p> <span class=\"text-green\">Important Message</span> </p>
                        ";
        }
        // line 28
        echo "                    </div>
                    <div class=\"mailbox-read-message\">
                        <p>Hello Admin,</p>
                        <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "message", array()), "html", null, true);
        echo "</p>
                        <hr>
                        <p> From to : <strong>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "nameSurname", array()), "html", null, true);
        echo "</strong></p>
                        <p> Address : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "address", array()), "html", null, true);
        echo "</p>
                        <p> İp Address : ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "ipAddress", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">
                    ";
        // line 40
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "attachment", array()) != "")) {
            // line 41
            echo "                    <ul class=\"mailbox-attachments clearfix\">
                        <li>
                            ";
            // line 43
            if (((isset($context["attachmentExt"]) ? $context["attachmentExt"] : $this->getContext($context, "attachmentExt")) == "document")) {
                // line 44
                echo "                            <span class=\"mailbox-attachment-icon\">
                                <i class=\"fa fa-file-pdf-o\"></i>
                            </span>
                            <div class=\"mailbox-attachment-info\">
                                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/uploads/document/" . $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "attachment", array()))), "html", null, true);
                echo "\" class=\"mailbox-attachment-name\"><i class=\"fa fa-paperclip\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "attachment", array()), "html", null, true);
                echo "</a>
                            </div>
                            ";
            }
            // line 51
            echo "                        </li>
                    </ul>
                    ";
        }
        // line 54
        echo "                </div>
                            <!-- /.box-footer -->
                <div class=\"box-footer\">
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactmessage_backpost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\" style=\"width: 250px\" title=\"Reply\"><i class=\"fa fa-reply\"></i> Reply</a>
                    </div>
                    <a dataUrl=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactmessage_delete", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger removeBtn\" title=\"Delete\">
                        <i class=\"fa fa-trash-o\"></i> Delete
                    </a>
                    <button type=\"button\" value=\"print-page\" onclick=\"window.print();\" class=\"btn btn-default\" title=\"Print Page\"><i class=\"fa fa-print\"></i> Print</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <div class=\"dump\">
            ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")));
        echo "
            ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["attachmentExt"]) ? $context["attachmentExt"] : $this->getContext($context, "attachmentExt")));
        echo "
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_c8f7ae09540f3970fdaa80079a3ba93fc134c1cf989ba2fdd21254e5c0104daa->leave($__internal_c8f7ae09540f3970fdaa80079a3ba93fc134c1cf989ba2fdd21254e5c0104daa_prof);

        
        $__internal_5177cfe57645784818d37bab58e43acacf2c2949388bbf8df4b8eeae0984b890->leave($__internal_5177cfe57645784818d37bab58e43acacf2c2949388bbf8df4b8eeae0984b890_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact-message/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 69,  182 => 68,  171 => 60,  166 => 58,  160 => 54,  155 => 51,  147 => 48,  141 => 44,  139 => 43,  135 => 41,  133 => 40,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  107 => 28,  103 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  82 => 18,  69 => 8,  62 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">{{ page_header.level }} Detail Page</h3>
                </div>
                <div class=\"box-body no-padding\">
                    <div class=\"mailbox-read-info\">
                        <h3>{{ post.messageTitle }}</h3>
                        <h5>From: {{ post.email }}
                            <span class=\"mailbox-read-time pull-right\">{{ post.sendDate|date(\"d-m-Y H:i:s\") }}</span></h5>
                        {% if post.important == 1 %}
                            <p> <span class=\"text-green\">Important Message</span> </p>
                        {% endif %}
                    </div>
                    <div class=\"mailbox-read-message\">
                        <p>Hello Admin,</p>
                        <p>{{ post.message }}</p>
                        <hr>
                        <p> From to : <strong>{{ post.nameSurname }}</strong></p>
                        <p> Address : {{ post.address }}</p>
                        <p> İp Address : {{ post.ipAddress }}</p>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer\">
                    {% if post.attachment != \"\" %}
                    <ul class=\"mailbox-attachments clearfix\">
                        <li>
                            {% if attachmentExt == \"document\" %}
                            <span class=\"mailbox-attachment-icon\">
                                <i class=\"fa fa-file-pdf-o\"></i>
                            </span>
                            <div class=\"mailbox-attachment-info\">
                                <a href=\"{{ asset('assets/uploads/document/' ~ post.attachment) }}\" class=\"mailbox-attachment-name\"><i class=\"fa fa-paperclip\"></i> {{ post.attachment }}</a>
                            </div>
                            {% endif %}
                        </li>
                    </ul>
                    {% endif %}
                </div>
                            <!-- /.box-footer -->
                <div class=\"box-footer\">
                    <div class=\"pull-right\">
                        <a href=\"{{ path('admin_contactmessage_backpost', {id: post.id}) }}\" class=\"btn btn-success\" style=\"width: 250px\" title=\"Reply\"><i class=\"fa fa-reply\"></i> Reply</a>
                    </div>
                    <a dataUrl=\"{{ path('admin_contactmessage_delete', {id: post.id}) }}\" class=\"btn btn-danger removeBtn\" title=\"Delete\">
                        <i class=\"fa fa-trash-o\"></i> Delete
                    </a>
                    <button type=\"button\" value=\"print-page\" onclick=\"window.print();\" class=\"btn btn-default\" title=\"Print Page\"><i class=\"fa fa-print\"></i> Print</button>
                </div>
                <!-- /.box-footer -->
            </div>
            <div class=\"dump\">
            {{ dump(post) }}
            {{ dump(attachmentExt) }}
            </div>
        </div>
    </div>
</section>
{% endblock %}", "admin/contact-message/detail.html.twig", "/var/www/html/symfony/app/Resources/views/admin/contact-message/detail.html.twig");
    }
}
