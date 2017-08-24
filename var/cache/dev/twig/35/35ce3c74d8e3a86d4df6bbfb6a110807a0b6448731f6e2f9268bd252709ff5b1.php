<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_d796ea9791d52bb1d7d03a20a57c14509ff22231443ebf1728188c07c75788e3 extends Twig_Template
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
        $__internal_939e0ec919a2a8bac6be3e536665e945475da7ebe9b562b46f4315052e296b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939e0ec919a2a8bac6be3e536665e945475da7ebe9b562b46f4315052e296b7b->enter($__internal_939e0ec919a2a8bac6be3e536665e945475da7ebe9b562b46f4315052e296b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_1dfc89485dacc4e960c692dcbc5ce5cb51cf92dfb3e96c1d5fb5d764291037a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfc89485dacc4e960c692dcbc5ce5cb51cf92dfb3e96c1d5fb5d764291037a1->enter($__internal_1dfc89485dacc4e960c692dcbc5ce5cb51cf92dfb3e96c1d5fb5d764291037a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_939e0ec919a2a8bac6be3e536665e945475da7ebe9b562b46f4315052e296b7b->leave($__internal_939e0ec919a2a8bac6be3e536665e945475da7ebe9b562b46f4315052e296b7b_prof);

        
        $__internal_1dfc89485dacc4e960c692dcbc5ce5cb51cf92dfb3e96c1d5fb5d764291037a1->leave($__internal_1dfc89485dacc4e960c692dcbc5ce5cb51cf92dfb3e96c1d5fb5d764291037a1_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/var/www/html/symfony/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
