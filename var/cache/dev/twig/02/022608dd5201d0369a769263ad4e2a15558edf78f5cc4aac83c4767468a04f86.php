<?php

/* admin/contact/index.html.twig */
class __TwigTemplate_b0b956dcf2e1bb90bef9b1b00c4a6209bd28e5ef9b5de37a0ac0ab68c12a3c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/contact/index.html.twig", 1);
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
        $__internal_2b9c2e7058f2584116f307c0ba637b726a88b7cb8cc6f90c12dd64cff2fe1422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9c2e7058f2584116f307c0ba637b726a88b7cb8cc6f90c12dd64cff2fe1422->enter($__internal_2b9c2e7058f2584116f307c0ba637b726a88b7cb8cc6f90c12dd64cff2fe1422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact/index.html.twig"));

        $__internal_04fa30a0f8aafd61337c7117252ea665b60f9a11b7a93f0c75e68a75aa551cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fa30a0f8aafd61337c7117252ea665b60f9a11b7a93f0c75e68a75aa551cf5->enter($__internal_04fa30a0f8aafd61337c7117252ea665b60f9a11b7a93f0c75e68a75aa551cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9c2e7058f2584116f307c0ba637b726a88b7cb8cc6f90c12dd64cff2fe1422->leave($__internal_2b9c2e7058f2584116f307c0ba637b726a88b7cb8cc6f90c12dd64cff2fe1422_prof);

        
        $__internal_04fa30a0f8aafd61337c7117252ea665b60f9a11b7a93f0c75e68a75aa551cf5->leave($__internal_04fa30a0f8aafd61337c7117252ea665b60f9a11b7a93f0c75e68a75aa551cf5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b47ff56c96983cab744905360f9ec23cae4b4a0ff8ae156a4089302249144500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47ff56c96983cab744905360f9ec23cae4b4a0ff8ae156a4089302249144500->enter($__internal_b47ff56c96983cab744905360f9ec23cae4b4a0ff8ae156a4089302249144500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cb8f08acdb3d1e1b1b934f681d2af319b1e325e3dc54d4c2b453e2380f18775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb8f08acdb3d1e1b1b934f681d2af319b1e325e3dc54d4c2b453e2380f18775->enter($__internal_0cb8f08acdb3d1e1b1b934f681d2af319b1e325e3dc54d4c2b453e2380f18775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

    <section class=\"content-header\"><h1>";
        // line 5
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
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "href", array()), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "level", array()), "html", null, true);
        echo "</a>
            </li>
            <li class=\"active\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "herePage", array()), "html", null, true);
        echo "</li>
        </ol>

    </section>
    <section class=\"content container-fluid\">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "href", array()), "html", null, true);
        echo "/add\" data-toggle=\"New Record\" title=\"New Record\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-plus\"></i>  New Record</a>
        <hr>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <form action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contact_index");
        echo "\" method=\"post\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "herePage", array()), "html", null, true);
        echo " Tables</h3>
                            ";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "filterContactAddress"), "method")) > 0)) {
            // line 25
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "href", array()), "html", null, true);
            echo "/reset-filter/clean/\"  class=\"btn btn-sm btn-warning pull-right\" style=\"margin-right: 160px; margin-top: -5px;\">Clear</a>
                            ";
        }
        // line 27
        echo "                            <div class=\"box-tools\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                    <input type=\"text\" name=\"table-search\" autofocus class=\"form-control pull-right table-search\" placeholder=\"Search\" value=\"";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "filterContactAddress"), "method") != "")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "filterContactAddress"), "method"), "html", null, true);
        } else {
        }
        echo "\">
                                    <div class=\"input-group-btn\">
                                        <input type=\"submit\" class=\"btn btn-default\" name=\"filterKeys\" id=\"filterKeys\" value=\"Bul..\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.box-header -->
                    <div class=\"box-body table-responsive no-padding\">
                        <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactaddress_bulkDelete");
        echo "\" method=\"post\" id=\"frm-list\">
                            <table class=\"table table-hover\">
                                <tr>
                                    <th width=\"75\"><input type=\"submit\" class=\"btn btn-danger\" value=\"Bulk Delete\" id=\"btn_bulkDelete\" name=\"btn_bulkDelete\" onclick=\"javascipt:return confirm('Seçili kayıtları silmek istediğinize emin misiniz?\\nUyarı: Bir üst kategori silerseniz, tüm alt kategorileri de otomatik olarak silinir.');\" /></th>
                                    <th width=\"300\"><i class=\"fa fa-sort-alpha-asc\"></i> ";
        // line 43
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["contactAddress"]) ? $context["contactAddress"] : $this->getContext($context, "contactAddress")), "Company Name", "cca.title");
        echo "</th>
                                    <th width=\"250\">Address</th>
                                    <th width=\"150\">Phone</th>
                                    <th width=\"200\"><i class=\"fa fa-sort-alpha-asc\"></i> ";
        // line 46
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["contactAddress"]) ? $context["contactAddress"] : $this->getContext($context, "contactAddress")), "Auth Person", "cca.authPerson");
        echo "</th>
                                    <th width=\"150\"><i class=\"fa fa-sort-alpha-asc\"></i> ";
        // line 47
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["contactAddress"]) ? $context["contactAddress"] : $this->getContext($context, "contactAddress")), "City", "cca.cityId");
        echo "</th>
                                    <th width=\"150\">Status</th>
                                    <th>Process</th>
                                </tr>
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactAddress"]) ? $context["contactAddress"] : $this->getContext($context, "contactAddress")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 52
            echo "                                    <tr class=\"category-bundle\">

                                        <td class=\"text-center\"><label for=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\"><input type=\"checkbox\" name=\"bulkDelete_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" id=\"bulkDelete_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\" /></label></td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "address", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "phone", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "authPerson", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "cityId", array()), "html", null, true);
            echo "</td>
                                        <td><input type=\"checkbox\"
                                                   class=\"data-toogle-check\"
                                                    ";
            // line 62
            if (($this->getAttribute($context["value"], "active", array()) == 1)) {
                echo " checked ";
            } else {
            }
            // line 63
            echo "                                                   dataID = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "id", array()), "html", null, true);
            echo "\"
                                                   name=\"active\"
                                                   data-toggle=\"toggle\"
                                                   data-on=\"Active\"
                                                   data-off=\"Passive\"
                                                   data-onstyle=\"success\"
                                                   data-offstyle=\"danger\"
                                                   data-size=\"small\"
                                                   data-ajax-url=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactaddress_activeSetter", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\"
                                            />
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactaddress_edit", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\" title=\"Edit\">
                                                <i class=\"fa fa-edit\"></i> Edit
                                            </a>
                                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactaddress_detail", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\" title=\"Detail\">
                                                <i class=\"fa fa-eye\"></i> Detail
                                            </a>
                                            <a dataUrl=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_contactaddress_delete", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger removeBtn\" title=\"Delete\">
                                                <i class=\"fa fa-remove\"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                            </table>
                        </form>
                    </div>
                    <div class=\"navigation text-right\">
                        ";
        // line 91
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["contactAddress"]) ? $context["contactAddress"] : $this->getContext($context, "contactAddress")));
        echo "
                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- /.box -->
            </div>
        </div>
    </section>
    <script type=\"text/javascript\">
        //<![CDATA[
        \$(document).ready(function(){
            \$('input[type=checkbox]').iCheck({
                checkboxClass: 'icheckbox_flat-blue'
            });
            \$('#frm-list input[type=checkbox]').on('ifChanged', function(event){
                var count = \$('#frm-list input[type=checkbox]:checked').length;
                if (count > 0) \$('#btn_bulkDelete').removeAttr('disabled'); else { \$('#btn_bulkDelete').attr({'disabled':'disabled'}); }
            });
            \$('body').data('editModule', 'blog');
        });
        //]]>
    </script>
";
        
        $__internal_0cb8f08acdb3d1e1b1b934f681d2af319b1e325e3dc54d4c2b453e2380f18775->leave($__internal_0cb8f08acdb3d1e1b1b934f681d2af319b1e325e3dc54d4c2b453e2380f18775_prof);

        
        $__internal_b47ff56c96983cab744905360f9ec23cae4b4a0ff8ae156a4089302249144500->leave($__internal_b47ff56c96983cab744905360f9ec23cae4b4a0ff8ae156a4089302249144500_prof);

    }

    public function getTemplateName()
    {
        return "admin/contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 91,  238 => 87,  226 => 81,  220 => 78,  214 => 75,  207 => 71,  195 => 63,  190 => 62,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  168 => 55,  158 => 54,  154 => 52,  150 => 51,  143 => 47,  139 => 46,  133 => 43,  126 => 39,  110 => 29,  106 => 27,  100 => 25,  98 => 24,  94 => 23,  89 => 21,  80 => 15,  72 => 10,  65 => 8,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <a href=\"{{ page_header.href }}/add\" data-toggle=\"New Record\" title=\"New Record\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-plus\"></i>  New Record</a>
        <hr>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <form action=\"{{ path(\"admin_contact_index\") }}\" method=\"post\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">{{ page_header.herePage }} Tables</h3>
                            {% if app.session.get('filterContactAddress')|length > 0 %}
                                <a href=\"{{ page_header.href }}/reset-filter/clean/\"  class=\"btn btn-sm btn-warning pull-right\" style=\"margin-right: 160px; margin-top: -5px;\">Clear</a>
                            {% endif %}
                            <div class=\"box-tools\">
                                <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                    <input type=\"text\" name=\"table-search\" autofocus class=\"form-control pull-right table-search\" placeholder=\"Search\" value=\"{% if app.session.get('filterContactAddress') != '' %}{{ app.session.get('filterContactAddress') }}{% else %}{% endif %}\">
                                    <div class=\"input-group-btn\">
                                        <input type=\"submit\" class=\"btn btn-default\" name=\"filterKeys\" id=\"filterKeys\" value=\"Bul..\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.box-header -->
                    <div class=\"box-body table-responsive no-padding\">
                        <form action=\"{{ path('admin_contactaddress_bulkDelete') }}\" method=\"post\" id=\"frm-list\">
                            <table class=\"table table-hover\">
                                <tr>
                                    <th width=\"75\"><input type=\"submit\" class=\"btn btn-danger\" value=\"Bulk Delete\" id=\"btn_bulkDelete\" name=\"btn_bulkDelete\" onclick=\"javascipt:return confirm('Seçili kayıtları silmek istediğinize emin misiniz?\\nUyarı: Bir üst kategori silerseniz, tüm alt kategorileri de otomatik olarak silinir.');\" /></th>
                                    <th width=\"300\"><i class=\"fa fa-sort-alpha-asc\"></i> {{ knp_pagination_sortable(contactAddress, 'Company Name', 'cca.title') }}</th>
                                    <th width=\"250\">Address</th>
                                    <th width=\"150\">Phone</th>
                                    <th width=\"200\"><i class=\"fa fa-sort-alpha-asc\"></i> {{ knp_pagination_sortable(contactAddress, 'Auth Person', 'cca.authPerson') }}</th>
                                    <th width=\"150\"><i class=\"fa fa-sort-alpha-asc\"></i> {{ knp_pagination_sortable(contactAddress, 'City', 'cca.cityId') }}</th>
                                    <th width=\"150\">Status</th>
                                    <th>Process</th>
                                </tr>
                                {% for value in contactAddress %}
                                    <tr class=\"category-bundle\">

                                        <td class=\"text-center\"><label for=\"{{ value.id }}\"><input type=\"checkbox\" name=\"bulkDelete_{{ value.id }}\" id=\"bulkDelete_{{ value.id }}\" value=\"{{ value.id }}\" /></label></td>
                                        <td>{{ value.title }}</td>
                                        <td>{{ value.address }}</td>
                                        <td>{{ value.phone }}</td>
                                        <td>{{ value.authPerson }}</td>
                                        <td>{{ value.cityId }}</td>
                                        <td><input type=\"checkbox\"
                                                   class=\"data-toogle-check\"
                                                    {% if value.active == 1 %} checked {% else %}{% endif %}
                                                   dataID = \"{{ value.id }}\"
                                                   name=\"active\"
                                                   data-toggle=\"toggle\"
                                                   data-on=\"Active\"
                                                   data-off=\"Passive\"
                                                   data-onstyle=\"success\"
                                                   data-offstyle=\"danger\"
                                                   data-size=\"small\"
                                                   data-ajax-url=\"{{ path('admin_contactaddress_activeSetter',{id:value.id}) }}\"
                                            />
                                        </td>
                                        <td>
                                            <a href=\"{{ path('admin_contactaddress_edit', {id: value.id}) }}\" class=\"btn btn-success\" title=\"Edit\">
                                                <i class=\"fa fa-edit\"></i> Edit
                                            </a>
                                            <a href=\"{{ path('admin_contactaddress_detail', {id: value.id}) }}\" class=\"btn btn-default\" title=\"Detail\">
                                                <i class=\"fa fa-eye\"></i> Detail
                                            </a>
                                            <a dataUrl=\"{{ path('admin_contactaddress_delete', {id: value.id}) }}\" class=\"btn btn-danger removeBtn\" title=\"Delete\">
                                                <i class=\"fa fa-remove\"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </form>
                    </div>
                    <div class=\"navigation text-right\">
                        {{ knp_pagination_render(contactAddress) }}
                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- /.box -->
            </div>
        </div>
    </section>
    <script type=\"text/javascript\">
        //<![CDATA[
        \$(document).ready(function(){
            \$('input[type=checkbox]').iCheck({
                checkboxClass: 'icheckbox_flat-blue'
            });
            \$('#frm-list input[type=checkbox]').on('ifChanged', function(event){
                var count = \$('#frm-list input[type=checkbox]:checked').length;
                if (count > 0) \$('#btn_bulkDelete').removeAttr('disabled'); else { \$('#btn_bulkDelete').attr({'disabled':'disabled'}); }
            });
            \$('body').data('editModule', 'blog');
        });
        //]]>
    </script>
{% endblock %}

", "admin/contact/index.html.twig", "/var/www/html/symfony/app/Resources/views/admin/contact/index.html.twig");
    }
}
