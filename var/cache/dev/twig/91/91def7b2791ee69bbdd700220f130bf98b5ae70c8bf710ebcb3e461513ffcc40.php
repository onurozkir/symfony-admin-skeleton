<?php

/* admin/contact-message/index.html.twig */
class __TwigTemplate_b726dadbd331657af644bc0ce5648ff9a27c06df3ed4c74dc0ab8515a033b8c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/contact-message/index.html.twig", 1);
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
        $__internal_c5e1729f325b25c94f1ba95ae2ec0d0bc41f9258f5f55e2a7fae323663d57d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e1729f325b25c94f1ba95ae2ec0d0bc41f9258f5f55e2a7fae323663d57d37->enter($__internal_c5e1729f325b25c94f1ba95ae2ec0d0bc41f9258f5f55e2a7fae323663d57d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact-message/index.html.twig"));

        $__internal_cbdd5bccb8e455bd99891a43c6404bb705a1e08a24759f673c7e5a85b47316a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdd5bccb8e455bd99891a43c6404bb705a1e08a24759f673c7e5a85b47316a1->enter($__internal_cbdd5bccb8e455bd99891a43c6404bb705a1e08a24759f673c7e5a85b47316a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact-message/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e1729f325b25c94f1ba95ae2ec0d0bc41f9258f5f55e2a7fae323663d57d37->leave($__internal_c5e1729f325b25c94f1ba95ae2ec0d0bc41f9258f5f55e2a7fae323663d57d37_prof);

        
        $__internal_cbdd5bccb8e455bd99891a43c6404bb705a1e08a24759f673c7e5a85b47316a1->leave($__internal_cbdd5bccb8e455bd99891a43c6404bb705a1e08a24759f673c7e5a85b47316a1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a91c41a2617e6426f9b172d18c6392b51c23b400a223a80985ef84f4f4ee3297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91c41a2617e6426f9b172d18c6392b51c23b400a223a80985ef84f4f4ee3297->enter($__internal_a91c41a2617e6426f9b172d18c6392b51c23b400a223a80985ef84f4f4ee3297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be5a99c4ec2ab799642649c828c8a90503fc8ca730b80b5dff9b3375e0c333af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5a99c4ec2ab799642649c828c8a90503fc8ca730b80b5dff9b3375e0c333af->enter($__internal_be5a99c4ec2ab799642649c828c8a90503fc8ca730b80b5dff9b3375e0c333af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section class=\"content-header\"><h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "page_header", array()), "html", null, true);
        $context["childUrl"] = twig_split_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "href", array()), "/");
        if ((twig_length_filter($this->env, (isset($context["childUrl"]) ? $context["childUrl"] : $this->getContext($context, "childUrl"))) >= 3)) {
            echo "<small>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "childUrl", array()), "html", null, true);
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
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "href", array()), "html", null, true);
        echo "/add\" data-toggle=\"New Record\" title=\"New Record\" class=\"btn btn-warning pull-right\">  Test Message</a>
        <hr>
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["contactMessage"]) ? $context["contactMessage"] : $this->getContext($context, "contactMessage")));
        echo "
        <div class=\"row\">
            <div class=\"col-md-12\">

                <div class=\"box box-primary\">
                    <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactmessage_index");
        echo "\" method=\"post\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "herePage", array()), "html", null, true);
        echo " Tables</h3>
                            ";
        // line 23
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "filterContactMessage"), "method")) > 0)) {
            // line 24
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "href", array()), "html", null, true);
            echo "/reset-filter/clean/\"  class=\"btn btn-sm btn-warning pull-right\" style=\"margin-right: 160px; margin-top: -5px;\">Clear</a>
                            ";
        }
        // line 26
        echo "                            <div class=\"box-tools\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                    <input type=\"text\" name=\"table-search\" autofocus class=\"form-control pull-right table-search\" placeholder=\"Search\" value=\"";
        // line 28
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "filterContactMessage"), "method") != "")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "filterContactMessage"), "method"), "html", null, true);
        } else {
        }
        echo "\">
                                    <div class=\"input-group-btn\">
                                        <input type=\"submit\" class=\"btn btn-default\" name=\"filterKeys\" id=\"filterKeys\" value=\"Search..\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <!-- /.box-header -->
                    <div class=\"box-body no-padding\">
                        ";
        // line 41
        echo "                            ";
        // line 42
        echo "                                ";
        // line 43
        echo "                            ";
        // line 44
        echo "                        ";
        // line 45
        echo "                        <div class=\"table-responsive mailbox-messages\">
                            <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactmessage_bulkDelete");
        echo "\" method=\"post\" id=\"frm-list\">
                                <table class=\"table table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th width=\"160\" class=\"text-center\">
                                            <button type=\"button\" class=\"btn btn-default btn-sm checkbox-toggle\" title=\"Choice\"><i class=\"fa fa-square-o\"></i>
                                            </button>
                                            <div class=\"btn-group\">
                                                <button type=\"submit\" title=\"Bulk Delete\" value=\"Bulk Delete\" id=\"btn_bulkDelete\" name=\"btn_bulkDelete\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\" onclick=\"javascipt:return confirm('Seçili kayıtları silmek istediğinize emin misiniz?\\nUyarı: Bir üst kategori silerseniz, tüm alt kategorileri de otomatik olarak silinir.');\"></i></button>
                                            </div>
                                            ";
        // line 56
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_show_important")) {
            // line 57
            echo "                                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactmessage_index");
            echo "\"><button type=\"button\" class=\"btn btn-default btn-sm\" title=\"Show All\"><i class=\"fa fa-refresh\"></i></button></a>
                                            ";
        }
        // line 59
        echo "                                            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_show_important", array("reference" => "u"));
        echo "\"><button type=\"button\" class=\"btn btn-default btn-sm\" title=\"Show Important\"><i class=\"fa fa-star\"></i></button></a>
                                        </th>
                                        <th width=\"100\"> ";
        // line 61
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["contactMessage"]) ? $context["contactMessage"] : $this->getContext($context, "contactMessage")), "Important", "ccm.important");
        echo "</th>
                                        <th width=\"200\"><i class=\"fa fa-sort-alpha-asc\"></i> ";
        // line 62
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["contactMessage"]) ? $context["contactMessage"] : $this->getContext($context, "contactMessage")), "Name Surname", "ccm.nameSurname");
        echo "</th>
                                        <th width=\"400\">Message</th>
                                        <th width=\"200\"><i class=\"fa fa-sort-alpha-asc\"></i> ";
        // line 64
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["contactMessage"]) ? $context["contactMessage"] : $this->getContext($context, "contactMessage")), "Date", "ccm.sendDate");
        echo "</th>
                                        <th width=\"150\">Attachment </th>
                                        <th width=\"150\">Mail</th>
                                        <th>Process</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactMessage"]) ? $context["contactMessage"] : $this->getContext($context, "contactMessage")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 72
            echo "                                        <tr ";
            if (($this->getAttribute($context["value"], "readByAdmin", array()) == 0)) {
                echo "class=\"bg-light-blue-gradient\"";
            }
            echo ">
                                            <td class=\"text-center\"><input type=\"checkbox\" name=\"bulkDelete_";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" id=\"bulkDelete_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" /></td>
                                            <td class=\"mailbox-star\">
                                                <a data-important-url=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactmessage_importantSetter", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\"
                                                   class=\"toggle-important\"
                                                   data-important-id=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\"
                                                   data-important-prop=\"";
            // line 78
            if (($this->getAttribute($context["value"], "important", array()) == 1)) {
                echo "checked";
            } else {
                echo "non-checked";
            }
            echo "\" >
                                                    ";
            // line 79
            if (($this->getAttribute($context["value"], "important", array()) == 1)) {
                // line 80
                echo "                                                        <i class=\"fa fa-star text-yellow\"></i>
                                                    ";
            } else {
                // line 82
                echo "                                                        <i class=\"fa fa-star-o text-yellow\"></i>
                                                    ";
            }
            // line 84
            echo "                                                </a>
                                            </td>
                                            <td class=\"mailbox-name\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "nameSurname", array()), "html", null, true);
            echo "</td></td>
                                            <td class=\"mailbox-subject\"><b>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "messageTitle", array()), "html", null, true);
            echo "</b> - ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["value"], "message", array())) > 50)) {
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["value"], "message", array()), 0, 50), "html", null, true);
                echo "...";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "message", array()), "html", null, true);
            }
            // line 88
            echo "                                            </td>
                                            <td class=\"mailbox-date\">";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "sendDate", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                                            <td class=\"mailbox-attachment\">";
            // line 90
            if (($this->getAttribute($context["value"], "attachment", array()) != "")) {
                echo "<i class=\"fa fa-paperclip\"></i>";
            } else {
                echo "--not attachment";
            }
            echo "</td>
                                            <td class=\"mailbox-mail\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "email", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactmessage_detail", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\" title=\"Detail\">
                                                <i class=\"fa fa-eye\"></i> Detail
                                                </a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                    </tbody>
                                </table>
                            </form>
                            <!-- /.table -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class=\"box-footer no-padding\">
                        <div class=\"mailbox-controls\">
                            <div class=\"navigation text-right\">
                                ";
        // line 109
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["contactMessage"]) ? $context["contactMessage"] : $this->getContext($context, "contactMessage")));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. box -->

            </div>
        </div>
    </section>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.toggle-important').click(function () {
                var dataImportantId = \$(this).attr('data-important-id');
                var dataAjaxUrl = \$(this).attr('data-important-url');
                var dataImportantValue = \$(this).attr('data-important-prop');
                \$.ajax({
                    type: \"POST\",
                    url: dataAjaxUrl,
                    data: {
                        active: dataImportantValue,
                        dataId: dataImportantId
                    }
                });
            });
        })
    </script>
    <script type=\"text/javascript\">
        //<![CDATA[
        \$(document).ready(function() {
            \$('input[type=checkbox]').iCheck({
                checkboxClass: 'icheckbox_flat-blue'
            });
            \$('#frm-list input[type=checkbox]').on('ifChanged', function (event) {
                var count = \$('#frm-list input[type=checkbox]:checked').length;
                if (count > 0) \$('#btn_bulkDelete').removeAttr('disabled'); else {
                    \$('#btn_bulkDelete').attr({'disabled': 'disabled'});
                }
            });
            \$('body').data('editModule', 'blog');
        });
       //]]>
    </script>
    <script type=\"text/javascript\">
        \$(function () {
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            \$('.mailbox-messages input[type=\"checkbox\"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });

            //Enable check and uncheck all functionality
            \$(\".checkbox-toggle\").click(function () {
                var clicks = \$(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    \$(\".mailbox-messages input[type='checkbox']\").iCheck(\"uncheck\");
                    \$(\".fa\", this).removeClass(\"fa-check-square-o\").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    \$(\".mailbox-messages input[type='checkbox']\").iCheck(\"check\");
                    \$(\".fa\", this).removeClass(\"fa-square-o\").addClass('fa-check-square-o');
                }
                \$(this).data(\"clicks\", !clicks);
            });

            //Handle starring for glyphicon and font awesome
            \$(\".mailbox-star\").click(function (e) {
                e.preventDefault();
                //detect type
                var \$this = \$(this).find(\"a > i\");
                var fa = \$this.hasClass(\"fa\");
                //Switch states
                if (fa) {
                    \$this.toggleClass(\"fa-star\");
                    \$this.toggleClass(\"fa-star-o\");
                }
            });
        });
    </script>
";
        
        $__internal_be5a99c4ec2ab799642649c828c8a90503fc8ca730b80b5dff9b3375e0c333af->leave($__internal_be5a99c4ec2ab799642649c828c8a90503fc8ca730b80b5dff9b3375e0c333af_prof);

        
        $__internal_a91c41a2617e6426f9b172d18c6392b51c23b400a223a80985ef84f4f4ee3297->leave($__internal_a91c41a2617e6426f9b172d18c6392b51c23b400a223a80985ef84f4f4ee3297_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact-message/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 109,  282 => 99,  270 => 93,  265 => 91,  257 => 90,  253 => 89,  250 => 88,  241 => 87,  237 => 86,  233 => 84,  229 => 82,  225 => 80,  223 => 79,  215 => 78,  211 => 77,  206 => 75,  197 => 73,  190 => 72,  186 => 71,  176 => 64,  171 => 62,  167 => 61,  161 => 59,  155 => 57,  153 => 56,  140 => 46,  137 => 45,  135 => 44,  133 => 43,  131 => 42,  129 => 41,  111 => 28,  107 => 26,  101 => 24,  99 => 23,  95 => 22,  90 => 20,  82 => 15,  77 => 13,  69 => 8,  62 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
    <section class=\"content-header\"><h1>{{ page_header.page_header }}{% set childUrl = page_header.href|split('/') %}{% if childUrl|length >= 3 %}<small>{{ page_header.childUrl }}</small>{% endif %}</h1>
        <ol class=\"breadcrumb\">
            <li>
                <a href=\"{{ page_header.href }}\"><i class=\"fa fa-dashboard\"></i>{{ page_header.level }}</a>
            </li>
            <li class=\"active\">{{ page_header.herePage }}</li>
        </ol>

    </section>
    <section class=\"content container-fluid\">
        <a href=\"{{ page_header.href }}/add\" data-toggle=\"New Record\" title=\"New Record\" class=\"btn btn-warning pull-right\">  Test Message</a>
        <hr>
        {{ dump(contactMessage) }}
        <div class=\"row\">
            <div class=\"col-md-12\">

                <div class=\"box box-primary\">
                    <form action=\"{{ path(\"admin_contactmessage_index\") }}\" method=\"post\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">{{ page_header.herePage }} Tables</h3>
                            {% if app.session.get('filterContactMessage')|length > 0 %}
                                <a href=\"{{ page_header.href }}/reset-filter/clean/\"  class=\"btn btn-sm btn-warning pull-right\" style=\"margin-right: 160px; margin-top: -5px;\">Clear</a>
                            {% endif %}
                            <div class=\"box-tools\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                    <input type=\"text\" name=\"table-search\" autofocus class=\"form-control pull-right table-search\" placeholder=\"Search\" value=\"{% if app.session.get('filterContactMessage') != '' %}{{ app.session.get('filterContactMessage') }}{% else %}{% endif %}\">
                                    <div class=\"input-group-btn\">
                                        <input type=\"submit\" class=\"btn btn-default\" name=\"filterKeys\" id=\"filterKeys\" value=\"Search..\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <!-- /.box-header -->
                    <div class=\"box-body no-padding\">
                        {#<div class=\"mailbox-controls\">#}
                            {#<div class=\"navigation text-right\">#}
                                {#{{ knp_pagination_render(contactMessage) }}#}
                            {#</div>#}
                        {#</div>#}
                        <div class=\"table-responsive mailbox-messages\">
                            <form action=\"{{ path('admin_contactmessage_bulkDelete') }}\" method=\"post\" id=\"frm-list\">
                                <table class=\"table table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th width=\"160\" class=\"text-center\">
                                            <button type=\"button\" class=\"btn btn-default btn-sm checkbox-toggle\" title=\"Choice\"><i class=\"fa fa-square-o\"></i>
                                            </button>
                                            <div class=\"btn-group\">
                                                <button type=\"submit\" title=\"Bulk Delete\" value=\"Bulk Delete\" id=\"btn_bulkDelete\" name=\"btn_bulkDelete\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\" onclick=\"javascipt:return confirm('Seçili kayıtları silmek istediğinize emin misiniz?\\nUyarı: Bir üst kategori silerseniz, tüm alt kategorileri de otomatik olarak silinir.');\"></i></button>
                                            </div>
                                            {% if app.request.attributes.get(\"_route\") == \"admin_show_important\" %}
                                            <a href=\"{{ path('admin_contactmessage_index') }}\"><button type=\"button\" class=\"btn btn-default btn-sm\" title=\"Show All\"><i class=\"fa fa-refresh\"></i></button></a>
                                            {% endif %}
                                            <a href=\"{{ path('admin_show_important',{reference: \"u\"}) }}\"><button type=\"button\" class=\"btn btn-default btn-sm\" title=\"Show Important\"><i class=\"fa fa-star\"></i></button></a>
                                        </th>
                                        <th width=\"100\"> {{ knp_pagination_sortable(contactMessage, 'Important', 'ccm.important') }}</th>
                                        <th width=\"200\"><i class=\"fa fa-sort-alpha-asc\"></i> {{ knp_pagination_sortable(contactMessage, 'Name Surname', 'ccm.nameSurname') }}</th>
                                        <th width=\"400\">Message</th>
                                        <th width=\"200\"><i class=\"fa fa-sort-alpha-asc\"></i> {{ knp_pagination_sortable(contactMessage, 'Date', 'ccm.sendDate') }}</th>
                                        <th width=\"150\">Attachment </th>
                                        <th width=\"150\">Mail</th>
                                        <th>Process</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for value in contactMessage %}
                                        <tr {% if value.readByAdmin == 0 %}class=\"bg-light-blue-gradient\"{% endif %}>
                                            <td class=\"text-center\"><input type=\"checkbox\" name=\"bulkDelete_{{ value.id }}\" id=\"bulkDelete_{{ value.id }}\" value=\"{{ value.id }}\" /></td>
                                            <td class=\"mailbox-star\">
                                                <a data-important-url=\"{{ path('admin_contactmessage_importantSetter',{id:value.id}) }}\"
                                                   class=\"toggle-important\"
                                                   data-important-id=\"{{ value.id }}\"
                                                   data-important-prop=\"{% if value.important == 1 %}checked{% else %}non-checked{% endif %}\" >
                                                    {% if value.important == 1 %}
                                                        <i class=\"fa fa-star text-yellow\"></i>
                                                    {% else %}
                                                        <i class=\"fa fa-star-o text-yellow\"></i>
                                                    {% endif %}
                                                </a>
                                            </td>
                                            <td class=\"mailbox-name\">{{ value.nameSurname }}</td></td>
                                            <td class=\"mailbox-subject\"><b>{{ value.messageTitle }}</b> - {% if value.message|length > 50 %}{{ value.message|slice(0,50) }}...{% else %}{{ value.message }}{% endif %}
                                            </td>
                                            <td class=\"mailbox-date\">{{ value.sendDate|date('d-m-Y H:i:s') }}</td>
                                            <td class=\"mailbox-attachment\">{% if value.attachment != \"\" %}<i class=\"fa fa-paperclip\"></i>{% else %}--not attachment{% endif %}</td>
                                            <td class=\"mailbox-mail\">{{ value.email }}</td>
                                            <td>
                                                <a href=\"{{ path('admin_contactmessage_detail', {id: value.id}) }}\" class=\"btn btn-default\" title=\"Detail\">
                                                <i class=\"fa fa-eye\"></i> Detail
                                                </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </form>
                            <!-- /.table -->
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class=\"box-footer no-padding\">
                        <div class=\"mailbox-controls\">
                            <div class=\"navigation text-right\">
                                {{ knp_pagination_render(contactMessage) }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. box -->

            </div>
        </div>
    </section>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.toggle-important').click(function () {
                var dataImportantId = \$(this).attr('data-important-id');
                var dataAjaxUrl = \$(this).attr('data-important-url');
                var dataImportantValue = \$(this).attr('data-important-prop');
                \$.ajax({
                    type: \"POST\",
                    url: dataAjaxUrl,
                    data: {
                        active: dataImportantValue,
                        dataId: dataImportantId
                    }
                });
            });
        })
    </script>
    <script type=\"text/javascript\">
        //<![CDATA[
        \$(document).ready(function() {
            \$('input[type=checkbox]').iCheck({
                checkboxClass: 'icheckbox_flat-blue'
            });
            \$('#frm-list input[type=checkbox]').on('ifChanged', function (event) {
                var count = \$('#frm-list input[type=checkbox]:checked').length;
                if (count > 0) \$('#btn_bulkDelete').removeAttr('disabled'); else {
                    \$('#btn_bulkDelete').attr({'disabled': 'disabled'});
                }
            });
            \$('body').data('editModule', 'blog');
        });
       //]]>
    </script>
    <script type=\"text/javascript\">
        \$(function () {
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            \$('.mailbox-messages input[type=\"checkbox\"]').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });

            //Enable check and uncheck all functionality
            \$(\".checkbox-toggle\").click(function () {
                var clicks = \$(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    \$(\".mailbox-messages input[type='checkbox']\").iCheck(\"uncheck\");
                    \$(\".fa\", this).removeClass(\"fa-check-square-o\").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    \$(\".mailbox-messages input[type='checkbox']\").iCheck(\"check\");
                    \$(\".fa\", this).removeClass(\"fa-square-o\").addClass('fa-check-square-o');
                }
                \$(this).data(\"clicks\", !clicks);
            });

            //Handle starring for glyphicon and font awesome
            \$(\".mailbox-star\").click(function (e) {
                e.preventDefault();
                //detect type
                var \$this = \$(this).find(\"a > i\");
                var fa = \$this.hasClass(\"fa\");
                //Switch states
                if (fa) {
                    \$this.toggleClass(\"fa-star\");
                    \$this.toggleClass(\"fa-star-o\");
                }
            });
        });
    </script>
{% endblock %}

", "admin/contact-message/index.html.twig", "/var/www/html/symfony/app/Resources/views/admin/contact-message/index.html.twig");
    }
}
