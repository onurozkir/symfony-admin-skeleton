<?php

/* includes/styles.html.twig */
class __TwigTemplate_832a4265f2a30612e0171c68f29684d63c197efeca55404c2c6c485c2c9f602e extends Twig_Template
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
        $__internal_689a137bef52ce14b85c93ba86744ea6e58104d0ed8e8dd796477b5f0ca7fe6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_689a137bef52ce14b85c93ba86744ea6e58104d0ed8e8dd796477b5f0ca7fe6e->enter($__internal_689a137bef52ce14b85c93ba86744ea6e58104d0ed8e8dd796477b5f0ca7fe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/styles.html.twig"));

        $__internal_49989fa3b0926f3c3d26b875794c581379fab9c31488b49bd04f224abeaf21ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49989fa3b0926f3c3d26b875794c581379fab9c31488b49bd04f224abeaf21ab->enter($__internal_49989fa3b0926f3c3d26b875794c581379fab9c31488b49bd04f224abeaf21ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/styles.html.twig"));

        // line 1
        echo "<!-- Bootstrap 3.3.7 -->
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<!-- Ionicon -->
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ionicon.min.css"), "html", null, true);
        echo "\">
<!-- NotifIt Alert -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css//notifIt.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/skins.min.css"), "html", null, true);
        echo "\">
<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
<!-- jQuery 3 -->
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
<!-- Google Font -->
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
<style type=\"text/css\">
    @media print {.content-header,.box-footer,.box-header,.main-footer,.dump,.back-button {display: none; }}
</style>
";
        
        $__internal_689a137bef52ce14b85c93ba86744ea6e58104d0ed8e8dd796477b5f0ca7fe6e->leave($__internal_689a137bef52ce14b85c93ba86744ea6e58104d0ed8e8dd796477b5f0ca7fe6e_prof);

        
        $__internal_49989fa3b0926f3c3d26b875794c581379fab9c31488b49bd04f224abeaf21ab->leave($__internal_49989fa3b0926f3c3d26b875794c581379fab9c31488b49bd04f224abeaf21ab_prof);

    }

    public function getTemplateName()
    {
        return "includes/styles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  57 => 13,  51 => 10,  47 => 9,  43 => 8,  38 => 6,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Bootstrap 3.3.7 -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}\">
<!-- Ionicon -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/ionicon.min.css') }}\">
<!-- NotifIt Alert -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css//notifIt.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/skins.min.css') }}\">
<link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
<!-- jQuery 3 -->
<script src=\"{{ asset('assets/js/jquery/dist/jquery.min.js') }}\"></script>

<!-- jQuery UI 1.11.4 -->
<script src=\"{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}\"></script>

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
<!-- Google Font -->
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
<style type=\"text/css\">
    @media print {.content-header,.box-footer,.box-header,.main-footer,.dump,.back-button {display: none; }}
</style>
", "includes/styles.html.twig", "/var/www/html/symfony/app/Resources/views/includes/styles.html.twig");
    }
}
