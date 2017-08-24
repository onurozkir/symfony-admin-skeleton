<?php

/* base.html.twig */
class __TwigTemplate_a0f3b1451aa7186d364cafb1dc804af043d4ac4c8dc03c864c0c5ac68f32fd7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d5ef45ae4c64500296d534ae597c57e4d1441e6ec13b0eaac715b3c67b82311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5ef45ae4c64500296d534ae597c57e4d1441e6ec13b0eaac715b3c67b82311->enter($__internal_6d5ef45ae4c64500296d534ae597c57e4d1441e6ec13b0eaac715b3c67b82311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ee4e51b50f86ac06b9f525b10c4634cfff253ee3dc01c3178d1bad40fa0ab6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4e51b50f86ac06b9f525b10c4634cfff253ee3dc01c3178d1bad40fa0ab6c7->enter($__internal_ee4e51b50f86ac06b9f525b10c4634cfff253ee3dc01c3178d1bad40fa0ab6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        if ($this->getAttribute((isset($context["page_title"]) ? $context["page_title"] : null), "desc", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "desc", array()), "html", null, true);
        } else {
            echo "Symfony";
        }
        echo "\">
        <meta name=\"author\" content=\"Symfony\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">
        ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 25
        echo "        <div class=\"content-wrapper\">
            ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        </div>

        ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </div>
    </body>
</html>
";
        
        $__internal_6d5ef45ae4c64500296d534ae597c57e4d1441e6ec13b0eaac715b3c67b82311->leave($__internal_6d5ef45ae4c64500296d534ae597c57e4d1441e6ec13b0eaac715b3c67b82311_prof);

        
        $__internal_ee4e51b50f86ac06b9f525b10c4634cfff253ee3dc01c3178d1bad40fa0ab6c7->leave($__internal_ee4e51b50f86ac06b9f525b10c4634cfff253ee3dc01c3178d1bad40fa0ab6c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fb1b95030016fffa14e8b5ecd874deecb8077a18303fc2081e156f08e3ca732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb1b95030016fffa14e8b5ecd874deecb8077a18303fc2081e156f08e3ca732->enter($__internal_6fb1b95030016fffa14e8b5ecd874deecb8077a18303fc2081e156f08e3ca732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d2f1886ef9c51ed180dc61f0477f00d92157d6a3e989f0163b6da9431283270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2f1886ef9c51ed180dc61f0477f00d92157d6a3e989f0163b6da9431283270->enter($__internal_1d2f1886ef9c51ed180dc61f0477f00d92157d6a3e989f0163b6da9431283270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        if ($this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : null), "page_title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "page_title", array()), "html", null, true);
        }
        
        $__internal_1d2f1886ef9c51ed180dc61f0477f00d92157d6a3e989f0163b6da9431283270->leave($__internal_1d2f1886ef9c51ed180dc61f0477f00d92157d6a3e989f0163b6da9431283270_prof);

        
        $__internal_6fb1b95030016fffa14e8b5ecd874deecb8077a18303fc2081e156f08e3ca732->leave($__internal_6fb1b95030016fffa14e8b5ecd874deecb8077a18303fc2081e156f08e3ca732_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f6419e81ae17e43a3127267f81e9bf7c1adde4d37523f229ef4879853a6cc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6419e81ae17e43a3127267f81e9bf7c1adde4d37523f229ef4879853a6cc21->enter($__internal_6f6419e81ae17e43a3127267f81e9bf7c1adde4d37523f229ef4879853a6cc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f21f81d4814da2ccfaee824180d3bc0d3c7c88f77a1eafcf9d83001b13c618a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21f81d4814da2ccfaee824180d3bc0d3c7c88f77a1eafcf9d83001b13c618a5->enter($__internal_f21f81d4814da2ccfaee824180d3bc0d3c7c88f77a1eafcf9d83001b13c618a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            ";
        $this->loadTemplate("includes/styles.html.twig", "base.html.twig", 10)->display($context);
        // line 11
        echo "                ";
        if ($this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : null), "page_styles", array(), "any", true, true)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "page_styles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["styles"]) {
                // line 12
                echo "                    <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/"), "html", null, true);
                echo twig_escape_filter($this->env, $context["styles"], "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 14
        echo "        ";
        
        $__internal_f21f81d4814da2ccfaee824180d3bc0d3c7c88f77a1eafcf9d83001b13c618a5->leave($__internal_f21f81d4814da2ccfaee824180d3bc0d3c7c88f77a1eafcf9d83001b13c618a5_prof);

        
        $__internal_6f6419e81ae17e43a3127267f81e9bf7c1adde4d37523f229ef4879853a6cc21->leave($__internal_6f6419e81ae17e43a3127267f81e9bf7c1adde4d37523f229ef4879853a6cc21_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_a76de1dbeada83e7540bf7d608f72d1f38115838b2155b2aec96324348c4743d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76de1dbeada83e7540bf7d608f72d1f38115838b2155b2aec96324348c4743d->enter($__internal_a76de1dbeada83e7540bf7d608f72d1f38115838b2155b2aec96324348c4743d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_6c4da4a2978c32e7c37a7bb2ef3214843c8fde6a4314651cfb7561c2b527515d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4da4a2978c32e7c37a7bb2ef3214843c8fde6a4314651cfb7561c2b527515d->enter($__internal_6c4da4a2978c32e7c37a7bb2ef3214843c8fde6a4314651cfb7561c2b527515d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "            ";
        $this->loadTemplate("includes/header.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "        ";
        
        $__internal_6c4da4a2978c32e7c37a7bb2ef3214843c8fde6a4314651cfb7561c2b527515d->leave($__internal_6c4da4a2978c32e7c37a7bb2ef3214843c8fde6a4314651cfb7561c2b527515d_prof);

        
        $__internal_a76de1dbeada83e7540bf7d608f72d1f38115838b2155b2aec96324348c4743d->leave($__internal_a76de1dbeada83e7540bf7d608f72d1f38115838b2155b2aec96324348c4743d_prof);

    }

    // line 22
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_963a431d9aa3fdde3aefd9d1831fa3cc4b0122d49073a141d1ce2d9ed395bb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963a431d9aa3fdde3aefd9d1831fa3cc4b0122d49073a141d1ce2d9ed395bb8a->enter($__internal_963a431d9aa3fdde3aefd9d1831fa3cc4b0122d49073a141d1ce2d9ed395bb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_c4e1a9ca7f69fd37490008d3efdefcc17d1681285d628c86e3833cb54531bce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e1a9ca7f69fd37490008d3efdefcc17d1681285d628c86e3833cb54531bce8->enter($__internal_c4e1a9ca7f69fd37490008d3efdefcc17d1681285d628c86e3833cb54531bce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 23
        echo "            ";
        $this->loadTemplate("includes/sidebar.html.twig", "base.html.twig", 23)->display($context);
        // line 24
        echo "        ";
        
        $__internal_c4e1a9ca7f69fd37490008d3efdefcc17d1681285d628c86e3833cb54531bce8->leave($__internal_c4e1a9ca7f69fd37490008d3efdefcc17d1681285d628c86e3833cb54531bce8_prof);

        
        $__internal_963a431d9aa3fdde3aefd9d1831fa3cc4b0122d49073a141d1ce2d9ed395bb8a->leave($__internal_963a431d9aa3fdde3aefd9d1831fa3cc4b0122d49073a141d1ce2d9ed395bb8a_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_5df22966c030b955d8226082ab598835170db4ea05d1d3841d0c1343a3301179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df22966c030b955d8226082ab598835170db4ea05d1d3841d0c1343a3301179->enter($__internal_5df22966c030b955d8226082ab598835170db4ea05d1d3841d0c1343a3301179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73f3b3dfbfb35c0818d97c0ed5b4cb678c7b998387096f92cd8ddb0e2fd35c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f3b3dfbfb35c0818d97c0ed5b4cb678c7b998387096f92cd8ddb0e2fd35c86->enter($__internal_73f3b3dfbfb35c0818d97c0ed5b4cb678c7b998387096f92cd8ddb0e2fd35c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "

            ";
        
        $__internal_73f3b3dfbfb35c0818d97c0ed5b4cb678c7b998387096f92cd8ddb0e2fd35c86->leave($__internal_73f3b3dfbfb35c0818d97c0ed5b4cb678c7b998387096f92cd8ddb0e2fd35c86_prof);

        
        $__internal_5df22966c030b955d8226082ab598835170db4ea05d1d3841d0c1343a3301179->leave($__internal_5df22966c030b955d8226082ab598835170db4ea05d1d3841d0c1343a3301179_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c7b11bd29f48c7ee2a404d8b789478fab343ddaa72c5b5602eb6d8d6449b1c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b11bd29f48c7ee2a404d8b789478fab343ddaa72c5b5602eb6d8d6449b1c29->enter($__internal_c7b11bd29f48c7ee2a404d8b789478fab343ddaa72c5b5602eb6d8d6449b1c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_650fcfb648b647c2d9b0d044584e677e245d5a63073d21938fd3cb2575730dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650fcfb648b647c2d9b0d044584e677e245d5a63073d21938fd3cb2575730dd2->enter($__internal_650fcfb648b647c2d9b0d044584e677e245d5a63073d21938fd3cb2575730dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 33
        echo "            ";
        $this->loadTemplate("includes/footer.html.twig", "base.html.twig", 33)->display($context);
        // line 34
        echo "        ";
        
        $__internal_650fcfb648b647c2d9b0d044584e677e245d5a63073d21938fd3cb2575730dd2->leave($__internal_650fcfb648b647c2d9b0d044584e677e245d5a63073d21938fd3cb2575730dd2_prof);

        
        $__internal_c7b11bd29f48c7ee2a404d8b789478fab343ddaa72c5b5602eb6d8d6449b1c29->leave($__internal_c7b11bd29f48c7ee2a404d8b789478fab343ddaa72c5b5602eb6d8d6449b1c29_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74c99c5928d6ba6b4d16bb9cd2076d1f4b3f4d9ca69c3732375b82551092e7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c99c5928d6ba6b4d16bb9cd2076d1f4b3f4d9ca69c3732375b82551092e7a8->enter($__internal_74c99c5928d6ba6b4d16bb9cd2076d1f4b3f4d9ca69c3732375b82551092e7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0ceb954463fb2b78245314764ac41daab5522c24542d5386c3554c040439433b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ceb954463fb2b78245314764ac41daab5522c24542d5386c3554c040439433b->enter($__internal_0ceb954463fb2b78245314764ac41daab5522c24542d5386c3554c040439433b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "            ";
        $this->loadTemplate("includes/scripts.html.twig", "base.html.twig", 36)->display($context);
        // line 37
        echo "            ";
        if ($this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : null), "page_script", array(), "any", true, true)) {
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page_header"]) ? $context["page_header"] : $this->getContext($context, "page_header")), "page_script", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["scripts"]) {
                // line 39
                echo "                    ";
                if ((twig_slice($this->env, $context["scripts"], 0, 4) == "http")) {
                    // line 40
                    echo "                        <script src=\"";
                    echo twig_escape_filter($this->env, $context["scripts"], "html", null, true);
                    echo "\"></script>
                    ";
                } else {
                    // line 42
                    echo "                    <script src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/"), "html", null, true);
                    echo twig_escape_filter($this->env, $context["scripts"], "html", null, true);
                    echo "\"></script>
                        ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scripts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        }
        // line 46
        echo "        ";
        
        $__internal_0ceb954463fb2b78245314764ac41daab5522c24542d5386c3554c040439433b->leave($__internal_0ceb954463fb2b78245314764ac41daab5522c24542d5386c3554c040439433b_prof);

        
        $__internal_74c99c5928d6ba6b4d16bb9cd2076d1f4b3f4d9ca69c3732375b82551092e7a8->leave($__internal_74c99c5928d6ba6b4d16bb9cd2076d1f4b3f4d9ca69c3732375b82551092e7a8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 46,  282 => 45,  276 => 44,  269 => 42,  263 => 40,  260 => 39,  255 => 38,  252 => 37,  249 => 36,  240 => 35,  230 => 34,  227 => 33,  218 => 32,  206 => 27,  197 => 26,  187 => 24,  184 => 23,  175 => 22,  165 => 21,  162 => 20,  153 => 19,  143 => 14,  132 => 12,  126 => 11,  123 => 10,  114 => 9,  94 => 5,  81 => 47,  78 => 35,  76 => 32,  72 => 30,  70 => 26,  67 => 25,  64 => 22,  62 => 19,  54 => 15,  52 => 9,  42 => 6,  38 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% if page_header.page_title is defined %}{{ page_header.page_title }}{% endif %}{% endblock %}</title>
        <meta name=\"description\" content=\"{% if page_title.desc is defined %}{{ page_title.desc }}{% else %}Symfony{% endif %}\">
        <meta name=\"author\" content=\"Symfony\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        {% block stylesheets %}
            {% include 'includes/styles.html.twig' %}
                {% if page_header.page_styles is defined %}{% for styles in page_header.page_styles %}
                    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/\") }}{{ styles }}\">
                {% endfor %}{% endif %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">
        {% block header %}
            {% include 'includes/header.html.twig' %}
        {% endblock %}
        {% block sidebar %}
            {% include 'includes/sidebar.html.twig' %}
        {% endblock %}
        <div class=\"content-wrapper\">
            {% block body %}


            {% endblock %}
        </div>

        {% block footer %}
            {% include 'includes/footer.html.twig' %}
        {% endblock %}
        {% block javascripts %}
            {% include 'includes/scripts.html.twig' %}
            {% if page_header.page_script is defined %}
                {% for scripts in page_header.page_script %}
                    {% if scripts|slice(0,4) == \"http\" %}
                        <script src=\"{{ scripts }}\"></script>
                    {% else %}
                    <script src=\"{{ asset('assets/') }}{{ scripts }}\"></script>
                        {% endif %}
                {% endfor %}
            {% endif %}
        {% endblock %}
    </div>
    </body>
</html>
", "base.html.twig", "/var/www/html/symfony/app/Resources/views/base.html.twig");
    }
}
