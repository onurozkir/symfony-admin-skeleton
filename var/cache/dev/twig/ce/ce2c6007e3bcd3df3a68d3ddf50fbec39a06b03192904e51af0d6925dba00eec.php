<?php

/* includes/footer.html.twig */
class __TwigTemplate_c82ad4b648361a26d94fa6724f80a93bc34a591a750fad4dcc83c1f7ba3c464c extends Twig_Template
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
        $__internal_7cb91f72fe08cf1ad5944b8cf64b89144a066111469f69b8a7060537cceac107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb91f72fe08cf1ad5944b8cf64b89144a066111469f69b8a7060537cceac107->enter($__internal_7cb91f72fe08cf1ad5944b8cf64b89144a066111469f69b8a7060537cceac107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_405677ed83f95b4a2bfc23f206aa73016671157668df25100c3edd5c04e1122e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405677ed83f95b4a2bfc23f206aa73016671157668df25100c3edd5c04e1122e->enter($__internal_405677ed83f95b4a2bfc23f206aa73016671157668df25100c3edd5c04e1122e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"https://adminlte.io\">Onur Ozkir</a>.</strong> All rights
    reserved.
</footer>



";
        
        $__internal_7cb91f72fe08cf1ad5944b8cf64b89144a066111469f69b8a7060537cceac107->leave($__internal_7cb91f72fe08cf1ad5944b8cf64b89144a066111469f69b8a7060537cceac107_prof);

        
        $__internal_405677ed83f95b4a2bfc23f206aa73016671157668df25100c3edd5c04e1122e->leave($__internal_405677ed83f95b4a2bfc23f206aa73016671157668df25100c3edd5c04e1122e_prof);

    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-{{ \"now\"|date('Y') }} <a href=\"https://adminlte.io\">Onur Ozkir</a>.</strong> All rights
    reserved.
</footer>



", "includes/footer.html.twig", "/var/www/html/symfony/app/Resources/views/includes/footer.html.twig");
    }
}
