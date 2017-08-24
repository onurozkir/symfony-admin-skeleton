<?php

/* includes/scripts.html.twig */
class __TwigTemplate_d2e3a248559615b97e823f46dd31af319377511ce089ffd7368947a0a700cc1c extends Twig_Template
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
        $__internal_7d5166b7ae9a00d72dc7ae102a18647086d0d5c355b6dbcdb29d21af8dfa2c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5166b7ae9a00d72dc7ae102a18647086d0d5c355b6dbcdb29d21af8dfa2c34->enter($__internal_7d5166b7ae9a00d72dc7ae102a18647086d0d5c355b6dbcdb29d21af8dfa2c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/scripts.html.twig"));

        $__internal_9d9557df4c0cf9e18c4db8e3a833ec7b784559ee3a0e5c24b8533e3f7dfcca9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9557df4c0cf9e18c4db8e3a833ec7b784559ee3a0e5c24b8533e3f7dfcca9a->enter($__internal_9d9557df4c0cf9e18c4db8e3a833ec7b784559ee3a0e5c24b8533e3f7dfcca9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/scripts.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.removeBtn').click(function () {
            var dataURL = \$(this).attr('dataURL');
            var myCallback = function(choice){
                if(choice){
                    \$.post(dataURL,{},function (response) {
                        window.location.reload();
                    })
                }
            };
            notif_confirm({
                'message': 'Kaydı Silmek İstediğinizden Emin misiniz?',
                'textaccept': 'Evet',
                'textcancel': 'Hayır',
                'callback': myCallback
            })
        });

        \$('.data-toogle-check').change(function () {
            var dataId = \$(this).attr('dataID');
            var dataActiveValue = \$(this).prop('checked');
            var dataAjaxUrl = \$(this).attr('data-ajax-url');
            \$.ajax({
                type: \"POST\",
                url: dataAjaxUrl,
                data: {
                    active: dataActiveValue,
                    dataId: dataId
                }
            });
        });
        \$.widget.bridge('uibutton', \$.ui.button);
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 35
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 36
                echo "
            \$(document).ready(function () {
                notif({
                    msg: \" ";
                // line 39
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "\",
                    type: \"";
                // line 40
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\",
                    timeout: 2000,
                    opacity: 1,
                    clickable: false
                });
            });
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    });
</script>
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
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/notifIt.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7d5166b7ae9a00d72dc7ae102a18647086d0d5c355b6dbcdb29d21af8dfa2c34->leave($__internal_7d5166b7ae9a00d72dc7ae102a18647086d0d5c355b6dbcdb29d21af8dfa2c34_prof);

        
        $__internal_9d9557df4c0cf9e18c4db8e3a833ec7b784559ee3a0e5c24b8533e3f7dfcca9a->leave($__internal_9d9557df4c0cf9e18c4db8e3a833ec7b784559ee3a0e5c24b8533e3f7dfcca9a_prof);

    }

    public function getTemplateName()
    {
        return "includes/scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 73,  132 => 72,  128 => 71,  123 => 69,  119 => 68,  97 => 48,  91 => 47,  78 => 40,  74 => 39,  69 => 36,  64 => 35,  60 => 34,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.removeBtn').click(function () {
            var dataURL = \$(this).attr('dataURL');
            var myCallback = function(choice){
                if(choice){
                    \$.post(dataURL,{},function (response) {
                        window.location.reload();
                    })
                }
            };
            notif_confirm({
                'message': 'Kaydı Silmek İstediğinizden Emin misiniz?',
                'textaccept': 'Evet',
                'textcancel': 'Hayır',
                'callback': myCallback
            })
        });

        \$('.data-toogle-check').change(function () {
            var dataId = \$(this).attr('dataID');
            var dataActiveValue = \$(this).prop('checked');
            var dataAjaxUrl = \$(this).attr('data-ajax-url');
            \$.ajax({
                type: \"POST\",
                url: dataAjaxUrl,
                data: {
                    active: dataActiveValue,
                    dataId: dataId
                }
            });
        });
        \$.widget.bridge('uibutton', \$.ui.button);
        {% for label, messages  in app.flashes %}
            {% for flashMessage in messages  %}

            \$(document).ready(function () {
                notif({
                    msg: \" {{ flashMessage }}\",
                    type: \"{{ label }}\",
                    timeout: 2000,
                    opacity: 1,
                    clickable: false
                });
            });
            {% endfor %}
        {% endfor %}
    });
</script>
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
<!-- Bootstrap 3.3.7 -->
<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/notifIt.js') }}\"></script>
<script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
<script src=\"{{ asset('assets/js/adminlte.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/pages/dashboard.js') }}\"></script>
<script src=\"{{ asset('assets/js/demo.js') }}\"></script>
", "includes/scripts.html.twig", "/var/www/html/symfony/app/Resources/views/includes/scripts.html.twig");
    }
}
