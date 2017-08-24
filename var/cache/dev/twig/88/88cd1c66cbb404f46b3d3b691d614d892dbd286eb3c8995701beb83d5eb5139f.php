<?php

/* includes/sidebar.html.twig */
class __TwigTemplate_5118f74a6560892181ab219cb01a4412ed02aff2dc77fafbb16826422af26f84 extends Twig_Template
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
        $__internal_24205115fe06fc1537d52b7e0b4495244935046f74c3ad0a6b677bde2cddfbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24205115fe06fc1537d52b7e0b4495244935046f74c3ad0a6b677bde2cddfbf0->enter($__internal_24205115fe06fc1537d52b7e0b4495244935046f74c3ad0a6b677bde2cddfbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        $__internal_585fa8869f9aaee759c114b897f2b155933e80ea350adda55788d7078a353e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585fa8869f9aaee759c114b897f2b155933e80ea350adda55788d7078a353e83->enter($__internal_585fa8869f9aaee759c114b897f2b155933e80ea350adda55788d7078a353e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                <span class=\"input-group-btn\">
              <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class=\"sidebar-menu\" data-widget=\"tree\">
            <li class=\"header\">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li ";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_news_index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/news\"><i class=\"fa fa-link\"></i> <span>News</span></a></li>
            <li ";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_category_index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/category/1/\"><i class=\"fa fa-link\"></i> <span>Categories</span></a></li>

            <li class=\"treeview";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_contact_index")) {
            echo " menu-open
            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 38
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_contact_message_index")) {
            echo "menu-open
            ";
        } else {
        }
        // line 39
        echo "\">
                <a href=\"javascript:void()\"><i class=\"fa fa-link\"></i> <span>Contact</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li ";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_contact_index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/contact\">Contact Information</a></li>
                    <li ";
        // line 47
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "admin_contactmessage_index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/contactmessage\">Contact Messages</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
";
        
        $__internal_24205115fe06fc1537d52b7e0b4495244935046f74c3ad0a6b677bde2cddfbf0->leave($__internal_24205115fe06fc1537d52b7e0b4495244935046f74c3ad0a6b677bde2cddfbf0_prof);

        
        $__internal_585fa8869f9aaee759c114b897f2b155933e80ea350adda55788d7078a353e83->leave($__internal_585fa8869f9aaee759c114b897f2b155933e80ea350adda55788d7078a353e83_prof);

    }

    public function getTemplateName()
    {
        return "includes/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 47,  95 => 46,  86 => 39,  80 => 38,  76 => 37,  69 => 35,  63 => 34,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"{{ asset('assets/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                <span class=\"input-group-btn\">
              <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class=\"sidebar-menu\" data-widget=\"tree\">
            <li class=\"header\">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li {% if app.request.attributes.get(\"_route\") == \"admin_news_index\" %}class=\"active\"{% endif %}><a href=\"/admin/news\"><i class=\"fa fa-link\"></i> <span>News</span></a></li>
            <li {% if app.request.attributes.get(\"_route\") == \"admin_category_index\" %}class=\"active\"{% endif %}><a href=\"/admin/category/1/\"><i class=\"fa fa-link\"></i> <span>Categories</span></a></li>

            <li class=\"treeview{% if app.request.attributes.get(\"_route\") == \"admin_contact_index\" %} menu-open
            {% elseif app.request.attributes.get(\"_route\") == \"admin_contact_message_index\" %}menu-open
            {% else %}{% endif %}\">
                <a href=\"javascript:void()\"><i class=\"fa fa-link\"></i> <span>Contact</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li {% if app.request.attributes.get(\"_route\") == \"admin_contact_index\" %}class=\"active\"{% endif %}><a href=\"/admin/contact\">Contact Information</a></li>
                    <li {% if app.request.attributes.get(\"_route\") == \"admin_contactmessage_index\" %}class=\"active\"{% endif %}><a href=\"/admin/contactmessage\">Contact Messages</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
", "includes/sidebar.html.twig", "/var/www/html/symfony/app/Resources/views/includes/sidebar.html.twig");
    }
}
