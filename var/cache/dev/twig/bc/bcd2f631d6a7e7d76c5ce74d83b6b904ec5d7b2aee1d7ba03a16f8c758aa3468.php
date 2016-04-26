<?php

/* :Admin:layout.html.twig */
class __TwigTemplate_016a68cd6c00744177976899c54bb6e70ecda6e832b4caeb9adc3d3bdc91a229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03fed701fc565d9727f4405eadec5588a2fe3857cc99742b263bd907721d34b2 = $this->env->getExtension("native_profiler");
        $__internal_03fed701fc565d9727f4405eadec5588a2fe3857cc99742b263bd907721d34b2->enter($__internal_03fed701fc565d9727f4405eadec5588a2fe3857cc99742b263bd907721d34b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
</head>
<body>
    <div class=\"admin-header\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</p></a>
            <ul class=\"admin-menu\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo " </a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_slide_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>اسلاید</a></li>
            </ul>
        <div class=\"login\">
            ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 25
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 27
        echo "        </div>
    </div>

    <div class=\"content\">
        ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "notice"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 34
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 35
                echo "                <div id=\"FlashMessageBox\" class=\"ui message
                 ";
                // line 36
                echo twig_escape_filter($this->env, ((($context["type"] == "error")) ? ("negative") : (((($context["type"] == "notice")) ? ("info") : ($context["type"])))), "html", null, true);
                echo "\">
                    <div class=\"flash-message\">
                        ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flash"]), "html", null, true);
                echo "
                    </div>
                    <div class=\"flash-icon\">
                        <i class=\"icon close\"></i>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "    </div>
    <div class=\"footer\">
        ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "    </div>
</body>
</html>";
        
        $__internal_03fed701fc565d9727f4405eadec5588a2fe3857cc99742b263bd907721d34b2->leave($__internal_03fed701fc565d9727f4405eadec5588a2fe3857cc99742b263bd907721d34b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd3e17d539bfea4b9523ac92c44c4b3e296bb6b2921075625446079bf138e4ad = $this->env->getExtension("native_profiler");
        $__internal_bd3e17d539bfea4b9523ac92c44c4b3e296bb6b2921075625446079bf138e4ad->enter($__internal_bd3e17d539bfea4b9523ac92c44c4b3e296bb6b2921075625446079bf138e4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bd3e17d539bfea4b9523ac92c44c4b3e296bb6b2921075625446079bf138e4ad->leave($__internal_bd3e17d539bfea4b9523ac92c44c4b3e296bb6b2921075625446079bf138e4ad_prof);

    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        $__internal_9552fc293ea510f259c6ead2372d672d9324dd78f4a4fc7a4b4a08f0338ec4e7 = $this->env->getExtension("native_profiler");
        $__internal_9552fc293ea510f259c6ead2372d672d9324dd78f4a4fc7a4b4a08f0338ec4e7->enter($__internal_9552fc293ea510f259c6ead2372d672d9324dd78f4a4fc7a4b4a08f0338ec4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9552fc293ea510f259c6ead2372d672d9324dd78f4a4fc7a4b4a08f0338ec4e7->leave($__internal_9552fc293ea510f259c6ead2372d672d9324dd78f4a4fc7a4b4a08f0338ec4e7_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_697bd50517e3ba8fd2aaed55cd96d4e3a02db4bde4adfdb9f93db690898e891d = $this->env->getExtension("native_profiler");
        $__internal_697bd50517e3ba8fd2aaed55cd96d4e3a02db4bde4adfdb9f93db690898e891d->enter($__internal_697bd50517e3ba8fd2aaed55cd96d4e3a02db4bde4adfdb9f93db690898e891d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_697bd50517e3ba8fd2aaed55cd96d4e3a02db4bde4adfdb9f93db690898e891d->leave($__internal_697bd50517e3ba8fd2aaed55cd96d4e3a02db4bde4adfdb9f93db690898e891d_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dd0b6a2435014f9f87de6c7898ea128cbd574044d587b452798727e246a46f16 = $this->env->getExtension("native_profiler");
        $__internal_dd0b6a2435014f9f87de6c7898ea128cbd574044d587b452798727e246a46f16->enter($__internal_dd0b6a2435014f9f87de6c7898ea128cbd574044d587b452798727e246a46f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_dd0b6a2435014f9f87de6c7898ea128cbd574044d587b452798727e246a46f16->leave($__internal_dd0b6a2435014f9f87de6c7898ea128cbd574044d587b452798727e246a46f16_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 50,  192 => 47,  181 => 31,  170 => 5,  161 => 51,  159 => 50,  155 => 48,  153 => 47,  150 => 46,  144 => 45,  131 => 38,  126 => 36,  123 => 35,  118 => 34,  114 => 33,  111 => 32,  109 => 31,  103 => 27,  95 => 25,  89 => 22,  85 => 21,  80 => 20,  78 => 19,  72 => 16,  66 => 15,  60 => 14,  54 => 13,  47 => 11,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>{% block title %}{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.css') }}" type="text/css" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/main.css') }}" type="text/css" />*/
/* </head>*/
/* <body>*/
/*     <div class="admin-header">*/
/*         <a href="{{ path('homepage') }}"><p>{{ 'app.site_title'|trans ({}, 'messages') }}</p></a>*/
/*             <ul class="admin-menu">*/
/*                 <li><a href="{{ path('admin_index')}}"><i class="glyphicon glyphicon-home"></i>{{ 'app.homepage' | trans }}</a></li>*/
/*                 <li><a href="{{ path('admin_product_list')}}"><i class="glyphicon glyphicon-tags"></i> {{ 'app.productlist' | trans }} </a></li>*/
/*                 <li><a href="{{ path('admin_category_list')}}"><i class="glyphicon glyphicon-pencil"></i>{{ 'app.categorylist' | trans }}</a></li>*/
/*                 <li><a href="{{ path('admin_slide_list')}}"><i class="glyphicon glyphicon-tags"></i>اسلاید</a></li>*/
/*             </ul>*/
/*         <div class="login">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as' | trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_login') }}">*/
/*                     {{ 'layout.logout' | trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login' | trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="content">*/
/*         {% block header %}{% endblock %}*/
/* */
/*         {% for type in ['success', 'error', 'notice'] %}*/
/*             {% for flash in app.session.flashbag.get(type) %}*/
/*                 <div id="FlashMessageBox" class="ui message*/
/*                  {{ type == 'error' ? 'negative' : type == 'notice' ? 'info' : type }}">*/
/*                     <div class="flash-message">*/
/*                         {{ flash | trans }}*/
/*                     </div>*/
/*                     <div class="flash-icon">*/
/*                         <i class="icon close"></i>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="footer">*/
/*         {% block footer %}{% endblock %}*/
/*     </div>*/
/* </body>*/
/* </html>*/
