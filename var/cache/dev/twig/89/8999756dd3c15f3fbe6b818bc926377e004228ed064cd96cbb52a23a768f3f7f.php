<?php

/* includes/header.html.twig */
class __TwigTemplate_ba1f2d905e8e021d0288f21e0f62df9c8ba2f813b58a60dab839b2fc90831988 extends Twig_Template
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
        $__internal_00ece330ee6e0811f8a2dfb03fb0e791e598e514252bcd6f53a1b0236b8b5d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ece330ee6e0811f8a2dfb03fb0e791e598e514252bcd6f53a1b0236b8b5d44->enter($__internal_00ece330ee6e0811f8a2dfb03fb0e791e598e514252bcd6f53a1b0236b8b5d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_d720c4ef7e529940e7bb39d5a3c1738de996fd398b6a27149a7b98635a32fe4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d720c4ef7e529940e7bb39d5a3c1738de996fd398b6a27149a7b98635a32fe4d->enter($__internal_d720c4ef7e529940e7bb39d5a3c1738de996fd398b6a27149a7b98635a32fe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "<header class=\"main-header\">

    <!-- Logo -->
    <a href=\"#\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- Messages: style can be found in dropdown.less-->
                <li class=\"dropdown messages-menu\">
                    <!-- Menu toggle button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"label label-success\">4</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class=\"menu\">
                                <li><!-- start message -->
                                    <a href=\"#\">
                                        <div class=\"pull-left\">
                                            <!-- User Image -->
                                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                        </li>
                        <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class=\"dropdown notifications-menu\">
                    <!-- Menu toggle button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"label label-warning\">10</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class=\"menu\">
                                <li><!-- start notification -->
                                    <a href=\"#\">
                                        <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class=\"dropdown tasks-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-flag-o\"></i>
                        <span class=\"label label-danger\">9</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class=\"menu\">
                                <li><!-- Task item -->
                                    <a href=\"#\">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class=\"pull-right\">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class=\"progress xs\">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                                                 aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <span class=\"sr-only\">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class=\"footer\">
                            <a href=\"#\">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class=\"dropdown user user-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <!-- The user image in the navbar-->
                        <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class=\"hidden-xs\">Alexander Pierce</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- The user image in the menu -->
                        <li class=\"user-header\">
                            <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class=\"user-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Followers</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Sales</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>";
        
        $__internal_00ece330ee6e0811f8a2dfb03fb0e791e598e514252bcd6f53a1b0236b8b5d44->leave($__internal_00ece330ee6e0811f8a2dfb03fb0e791e598e514252bcd6f53a1b0236b8b5d44_prof);

        
        $__internal_d720c4ef7e529940e7bb39d5a3c1738de996fd398b6a27149a7b98635a32fe4d->leave($__internal_d720c4ef7e529940e7bb39d5a3c1738de996fd398b6a27149a7b98635a32fe4d_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 128,  150 => 121,  62 => 36,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header\">

    <!-- Logo -->
    <a href=\"#\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- Messages: style can be found in dropdown.less-->
                <li class=\"dropdown messages-menu\">
                    <!-- Menu toggle button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"label label-success\">4</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class=\"menu\">
                                <li><!-- start message -->
                                    <a href=\"#\">
                                        <div class=\"pull-left\">
                                            <!-- User Image -->
                                            <img src=\"{{ asset('assets/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                        </li>
                        <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class=\"dropdown notifications-menu\">
                    <!-- Menu toggle button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"label label-warning\">10</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class=\"menu\">
                                <li><!-- start notification -->
                                    <a href=\"#\">
                                        <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class=\"dropdown tasks-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-flag-o\"></i>
                        <span class=\"label label-danger\">9</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class=\"menu\">
                                <li><!-- Task item -->
                                    <a href=\"#\">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class=\"pull-right\">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class=\"progress xs\">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                                                 aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <span class=\"sr-only\">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class=\"footer\">
                            <a href=\"#\">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class=\"dropdown user user-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <!-- The user image in the navbar-->
                        <img src=\"{{ asset('assets/img/user2-160x160.jpg') }}\" class=\"user-image\" alt=\"User Image\">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class=\"hidden-xs\">Alexander Pierce</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- The user image in the menu -->
                        <li class=\"user-header\">
                            <img src=\"{{ asset('assets/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">

                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class=\"user-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Followers</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Sales</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>", "includes/header.html.twig", "/var/www/html/symfony/app/Resources/views/includes/header.html.twig");
    }
}
