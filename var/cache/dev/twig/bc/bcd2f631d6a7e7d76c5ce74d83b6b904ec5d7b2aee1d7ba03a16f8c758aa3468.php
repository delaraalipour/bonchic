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
        $__internal_102c56b083802b26d9250eaa736d998597fcfaf36b8d40f7e0b2c37d389ea47f = $this->env->getExtension("native_profiler");
        $__internal_102c56b083802b26d9250eaa736d998597fcfaf36b8d40f7e0b2c37d389ea47f->enter($__internal_102c56b083802b26d9250eaa736d998597fcfaf36b8d40f7e0b2c37d389ea47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:layout.html.twig"));

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
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</p>
            <ul class=\"admin-menu\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo " </a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        echo "</a></li>
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

        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "notice"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 30
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 31
                echo "                <div id=\"FlashMessageBox\" class=\"ui message
                 ";
                // line 32
                echo twig_escape_filter($this->env, ((($context["type"] == "error")) ? ("negative") : (((($context["type"] == "notice")) ? ("info") : ($context["type"])))), "html", null, true);
                echo "\">
                    <div class=\"flash-message\">
                        ";
                // line 34
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
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>

    <div class=\"content\">
        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "    </div>
    <div class=\"footer\">
        ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "    </div>
</body>
</html>";
        
        $__internal_102c56b083802b26d9250eaa736d998597fcfaf36b8d40f7e0b2c37d389ea47f->leave($__internal_102c56b083802b26d9250eaa736d998597fcfaf36b8d40f7e0b2c37d389ea47f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c7fb5ed2d681892a748800b4af915648d3d209421b23a327fb988cb743e16fe = $this->env->getExtension("native_profiler");
        $__internal_7c7fb5ed2d681892a748800b4af915648d3d209421b23a327fb988cb743e16fe->enter($__internal_7c7fb5ed2d681892a748800b4af915648d3d209421b23a327fb988cb743e16fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7c7fb5ed2d681892a748800b4af915648d3d209421b23a327fb988cb743e16fe->leave($__internal_7c7fb5ed2d681892a748800b4af915648d3d209421b23a327fb988cb743e16fe_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_cf7bb5c6b87ae692b0af277f537e662bd11843ee9b2f5e8550cc23abf55ae3b0 = $this->env->getExtension("native_profiler");
        $__internal_cf7bb5c6b87ae692b0af277f537e662bd11843ee9b2f5e8550cc23abf55ae3b0->enter($__internal_cf7bb5c6b87ae692b0af277f537e662bd11843ee9b2f5e8550cc23abf55ae3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_cf7bb5c6b87ae692b0af277f537e662bd11843ee9b2f5e8550cc23abf55ae3b0->leave($__internal_cf7bb5c6b87ae692b0af277f537e662bd11843ee9b2f5e8550cc23abf55ae3b0_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_943926876a5d1b709dbe2537d3fd5fe9cd14259a55ac0daff06d58616f743225 = $this->env->getExtension("native_profiler");
        $__internal_943926876a5d1b709dbe2537d3fd5fe9cd14259a55ac0daff06d58616f743225->enter($__internal_943926876a5d1b709dbe2537d3fd5fe9cd14259a55ac0daff06d58616f743225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_943926876a5d1b709dbe2537d3fd5fe9cd14259a55ac0daff06d58616f743225->leave($__internal_943926876a5d1b709dbe2537d3fd5fe9cd14259a55ac0daff06d58616f743225_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_359f90d52a522bc307a73b0d4a0cdf7225740d54599b0f305df5eb9ead7d4b35 = $this->env->getExtension("native_profiler");
        $__internal_359f90d52a522bc307a73b0d4a0cdf7225740d54599b0f305df5eb9ead7d4b35->enter($__internal_359f90d52a522bc307a73b0d4a0cdf7225740d54599b0f305df5eb9ead7d4b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_359f90d52a522bc307a73b0d4a0cdf7225740d54599b0f305df5eb9ead7d4b35->leave($__internal_359f90d52a522bc307a73b0d4a0cdf7225740d54599b0f305df5eb9ead7d4b35_prof);

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
        return array (  196 => 49,  185 => 46,  174 => 45,  163 => 5,  154 => 50,  152 => 49,  148 => 47,  145 => 46,  143 => 45,  138 => 42,  132 => 41,  119 => 34,  114 => 32,  111 => 31,  106 => 30,  102 => 29,  98 => 27,  90 => 25,  84 => 22,  80 => 21,  75 => 20,  73 => 19,  65 => 16,  59 => 15,  53 => 14,  48 => 12,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/* */
/*     <div class="admin-header">*/
/*         <p>{{ 'app.site_title'|trans ({}, 'messages') }}</p>*/
/*             <ul class="admin-menu">*/
/*                 <li><a href="{{ path('admin_homepage')}}"><i class="glyphicon glyphicon-home"></i>{{ 'app.homepage' | trans }}</a></li>*/
/*                 <li><a href="{{ path('admin_product_list')}}"><i class="glyphicon glyphicon-tags"></i> {{ 'app.productlist' | trans }} </a></li>*/
/*                 <li><a href="{{ path('admin_category_list')}}"><i class="glyphicon glyphicon-pencil"></i>{{ 'app.categorylist' | trans }}</a></li>*/
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
/*     </div>*/
/* */
/*     <div class="content">*/
/*         {% block header %}{% endblock %}*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="footer">*/
/*         {% block footer %}{% endblock %}*/
/*     </div>*/
/* </body>*/
/* </html>*/
