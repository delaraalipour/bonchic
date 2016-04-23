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
        $__internal_dffeefcee398fe8f2ec766306738b3840f060177727658c993963d1358588aef = $this->env->getExtension("native_profiler");
        $__internal_dffeefcee398fe8f2ec766306738b3840f060177727658c993963d1358588aef->enter($__internal_dffeefcee398fe8f2ec766306738b3840f060177727658c993963d1358588aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:layout.html.twig"));

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
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</p>
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
            </ul>
        <div class=\"login\">
            ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 24
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 26
        echo "        </div>
    </div>

    <div class=\"content\">
        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "notice"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 33
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 34
                echo "                <div id=\"FlashMessageBox\" class=\"ui message
                 ";
                // line 35
                echo twig_escape_filter($this->env, ((($context["type"] == "error")) ? ("negative") : (((($context["type"] == "notice")) ? ("info") : ($context["type"])))), "html", null, true);
                echo "\">
                    <div class=\"flash-message\">
                        ";
                // line 37
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
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
        ";
        // line 46
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
        
        $__internal_dffeefcee398fe8f2ec766306738b3840f060177727658c993963d1358588aef->leave($__internal_dffeefcee398fe8f2ec766306738b3840f060177727658c993963d1358588aef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb6147893a856cf339d1033a174fb914d0b5c5a55920d72f6db1e1c3548d7c7b = $this->env->getExtension("native_profiler");
        $__internal_bb6147893a856cf339d1033a174fb914d0b5c5a55920d72f6db1e1c3548d7c7b->enter($__internal_bb6147893a856cf339d1033a174fb914d0b5c5a55920d72f6db1e1c3548d7c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bb6147893a856cf339d1033a174fb914d0b5c5a55920d72f6db1e1c3548d7c7b->leave($__internal_bb6147893a856cf339d1033a174fb914d0b5c5a55920d72f6db1e1c3548d7c7b_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_803304a8a084cf0c3039887d8d8048d2e9398e815bed1e5090efc471edca25da = $this->env->getExtension("native_profiler");
        $__internal_803304a8a084cf0c3039887d8d8048d2e9398e815bed1e5090efc471edca25da->enter($__internal_803304a8a084cf0c3039887d8d8048d2e9398e815bed1e5090efc471edca25da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_803304a8a084cf0c3039887d8d8048d2e9398e815bed1e5090efc471edca25da->leave($__internal_803304a8a084cf0c3039887d8d8048d2e9398e815bed1e5090efc471edca25da_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a26c7d5f9565d0efdb41c89e2dba6fe2a899679a77cc2c7e598dc39c3e2932e = $this->env->getExtension("native_profiler");
        $__internal_5a26c7d5f9565d0efdb41c89e2dba6fe2a899679a77cc2c7e598dc39c3e2932e->enter($__internal_5a26c7d5f9565d0efdb41c89e2dba6fe2a899679a77cc2c7e598dc39c3e2932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5a26c7d5f9565d0efdb41c89e2dba6fe2a899679a77cc2c7e598dc39c3e2932e->leave($__internal_5a26c7d5f9565d0efdb41c89e2dba6fe2a899679a77cc2c7e598dc39c3e2932e_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a124046f7503326c72f65e75807fb98133c577f7122efa8238729c30e2701793 = $this->env->getExtension("native_profiler");
        $__internal_a124046f7503326c72f65e75807fb98133c577f7122efa8238729c30e2701793->enter($__internal_a124046f7503326c72f65e75807fb98133c577f7122efa8238729c30e2701793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a124046f7503326c72f65e75807fb98133c577f7122efa8238729c30e2701793->leave($__internal_a124046f7503326c72f65e75807fb98133c577f7122efa8238729c30e2701793_prof);

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
        return array (  197 => 49,  186 => 46,  175 => 30,  164 => 5,  155 => 50,  153 => 49,  149 => 47,  147 => 46,  144 => 45,  138 => 44,  125 => 37,  120 => 35,  117 => 34,  112 => 33,  108 => 32,  105 => 31,  103 => 30,  97 => 26,  89 => 24,  83 => 21,  79 => 20,  74 => 19,  72 => 18,  64 => 15,  58 => 14,  52 => 13,  47 => 11,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <p>{{ 'app.site_title'|trans ({}, 'messages') }}</p>*/
/*             <ul class="admin-menu">*/
/*                 <li><a href="{{ path('admin_index')}}"><i class="glyphicon glyphicon-home"></i>{{ 'app.homepage' | trans }}</a></li>*/
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
