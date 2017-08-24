<?php

/* mail/email.html.twig */
class __TwigTemplate_bb10075e4bdadeca247dcf77d5587f4cb026431944f19ae78513cfadd65afe43 extends Twig_Template
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
        $__internal_6881ba7a3b2f662a612d779cf2b58462d45f3723d45e25258c331c8183a97a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6881ba7a3b2f662a612d779cf2b58462d45f3723d45e25258c331c8183a97a9c->enter($__internal_6881ba7a3b2f662a612d779cf2b58462d45f3723d45e25258c331c8183a97a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail/email.html.twig"));

        $__internal_7edd788b2d6180ee973f900fee3ad1589675b4c0ba092c182f6793d1f525fdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edd788b2d6180ee973f900fee3ad1589675b4c0ba092c182f6793d1f525fdb6->enter($__internal_7edd788b2d6180ee973f900fee3ad1589675b4c0ba092c182f6793d1f525fdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail/email.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["who"]) ? $context["who"] : $this->getContext($context, "who")), "html", null, true);
        echo "
<br>
<br>
";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
<br>
<br>
";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "m-d-Y"), "html", null, true);
        echo "
<br>
";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html", null, true);
        echo "

";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        
        $__internal_6881ba7a3b2f662a612d779cf2b58462d45f3723d45e25258c331c8183a97a9c->leave($__internal_6881ba7a3b2f662a612d779cf2b58462d45f3723d45e25258c331c8183a97a9c_prof);

        
        $__internal_7edd788b2d6180ee973f900fee3ad1589675b4c0ba092c182f6793d1f525fdb6->leave($__internal_7edd788b2d6180ee973f900fee3ad1589675b4c0ba092c182f6793d1f525fdb6_prof);

    }

    public function getTemplateName()
    {
        return "mail/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  42 => 9,  37 => 7,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ who }}
<br>
<br>
{{ message }}
<br>
<br>
{{ date|date('m-d-Y') }}
<br>
{{ phone }}

{{ mail }}", "mail/email.html.twig", "/var/www/html/symfony/app/Resources/views/mail/email.html.twig");
    }
}
