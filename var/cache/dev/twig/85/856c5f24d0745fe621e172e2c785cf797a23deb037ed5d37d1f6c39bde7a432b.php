<?php

/* :Storefront:layout.html.twig */
class __TwigTemplate_977d21b97272f8f18d0cbac758d499eee0ab552ce2cae6cc857967747c7bce98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_577d84e72394dd8b2c73d695e4b0d26995622d6850f41d2c043524df80a39dbe = $this->env->getExtension("native_profiler");
        $__internal_577d84e72394dd8b2c73d695e4b0d26995622d6850f41d2c043524df80a39dbe->enter($__internal_577d84e72394dd8b2c73d695e4b0d26995622d6850f41d2c043524df80a39dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:layout.html.twig"));

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
<div class=\"storefront-header\">
    <div class=\"wrapper clearfix\">
        <div class=\"cell\">
            ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 15
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_index");
                echo "\">
                        ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
                echo "
                    </a>
                    <span class=\"divider\">";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.or"), "html", null, true);
                echo "</span>
                ";
            }
            // line 20
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.logout"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 24
            echo "                <a class=\"signup\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.sign up"), "html", null, true);
            echo "
                </a>
                <span class=\"divider\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.or"), "html", null, true);
            echo "</span>
                <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.login"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 32
        echo "            <span class=\"divider\">/</span>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("cart_list");
        echo "\" >
                <span>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</span>
                <i class=\"glyphicon glyphicon-shopping-cart\"></i>
            </a>
        </div>
    </div>
</div>
<div class=\"storefront-site-header\">
    <div class=\"wrapper clearfix\">
        <div class=\"top-menu\">
            <ul class=\"clearfix\">
                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"shop-logo\">
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>

<div class=\"storefront-content\">
    <div class=\"wrapper clearfix\">
        ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "    </div>
    <div class=\"footer-widgets-top\"></div>
    <div class=\"footer\">
        <div class=\"footer-menu wrapper\">
            <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.links"), "html", null, true);
        echo "</span>
            <ul class=\"clearfix\">
                <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("cart_list");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
    </div>
    <div class=\"site-footer\">
        <div class=\"footer-menu wrapper\">
            <ul class=\"clearfix\">
                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li id=\"slash\">/</li>
                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</a></li>
                <li id=\"slash\">/</li>
                <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("cart_list");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_577d84e72394dd8b2c73d695e4b0d26995622d6850f41d2c043524df80a39dbe->leave($__internal_577d84e72394dd8b2c73d695e4b0d26995622d6850f41d2c043524df80a39dbe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2da3dff864c544bb0fbe107dd7dbaa5dd4e06b9c0974f7a10ae92c7dd0ec10d = $this->env->getExtension("native_profiler");
        $__internal_f2da3dff864c544bb0fbe107dd7dbaa5dd4e06b9c0974f7a10ae92c7dd0ec10d->enter($__internal_f2da3dff864c544bb0fbe107dd7dbaa5dd4e06b9c0974f7a10ae92c7dd0ec10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f2da3dff864c544bb0fbe107dd7dbaa5dd4e06b9c0974f7a10ae92c7dd0ec10d->leave($__internal_f2da3dff864c544bb0fbe107dd7dbaa5dd4e06b9c0974f7a10ae92c7dd0ec10d_prof);

    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        $__internal_b1490ca443d83fb983573d33243394992ec1b9d880338f08afe33b23b6a3a23b = $this->env->getExtension("native_profiler");
        $__internal_b1490ca443d83fb983573d33243394992ec1b9d880338f08afe33b23b6a3a23b->enter($__internal_b1490ca443d83fb983573d33243394992ec1b9d880338f08afe33b23b6a3a23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "        ";
        
        $__internal_b1490ca443d83fb983573d33243394992ec1b9d880338f08afe33b23b6a3a23b->leave($__internal_b1490ca443d83fb983573d33243394992ec1b9d880338f08afe33b23b6a3a23b_prof);

    }

    public function getTemplateName()
    {
        return ":Storefront:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 57,  227 => 56,  216 => 5,  200 => 77,  193 => 75,  186 => 73,  174 => 66,  168 => 65,  162 => 64,  157 => 62,  151 => 58,  149 => 56,  137 => 49,  128 => 45,  122 => 44,  109 => 34,  105 => 33,  102 => 32,  96 => 29,  92 => 28,  88 => 27,  83 => 25,  78 => 24,  72 => 21,  67 => 20,  62 => 18,  57 => 16,  52 => 15,  49 => 14,  47 => 13,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
/* <div class="storefront-header">*/
/*     <div class="wrapper clearfix">*/
/*         <div class="cell">*/
/*             {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                 {% if is_granted('ROLE_ADMIN') %}*/
/*                     <a href="{{ path('admin_index') }}">*/
/*                         {{ 'app.controlpanel' |trans }}*/
/*                     </a>*/
/*                     <span class="divider">{{ 'app.or' | trans }}</span>*/
/*                 {% endif %}*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'app.logout'|trans }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a class="signup" href="{{ path('fos_user_registration_register') }}">*/
/*                     {{ 'app.sign up'|trans }}*/
/*                 </a>*/
/*                 <span class="divider">{{ 'app.or' | trans }}</span>*/
/*                 <a href="{{ path('fos_user_security_login') }}">*/
/*                     {{ 'app.login'|trans }}*/
/*                 </a>*/
/*             {% endif %}*/
/*             <span class="divider">/</span>*/
/*             <a href="{{ path('cart_list') }}" >*/
/*                 <span>{{ 'app.cart' | trans }}</span>*/
/*                 <i class="glyphicon glyphicon-shopping-cart"></i>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="storefront-site-header">*/
/*     <div class="wrapper clearfix">*/
/*         <div class="top-menu">*/
/*             <ul class="clearfix">*/
/*                 <li><a href="{{ path('homepage') }}">{{ 'app.homepage' | trans }}</a></li>*/
/*                 <li><a href="{{ path('storefront_product_list') }}">{{ 'app.productlist' | trans }}</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="shop-logo">*/
/*             <a href="{{ path('homepage') }}">{{ 'app.site_title' | trans }}</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="storefront-content">*/
/*     <div class="wrapper clearfix">*/
/*         {% block content %}*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="footer-widgets-top"></div>*/
/*     <div class="footer">*/
/*         <div class="footer-menu wrapper">*/
/*             <span>{{ 'app.links' | trans }}</span>*/
/*             <ul class="clearfix">*/
/*                 <li><a href="{{ path('homepage') }}">{{ 'app.homepage' | trans }}</a></li>*/
/*                 <li><a href="{{ path('storefront_product_list') }}">{{ 'app.productlist' | trans }}</a></li>*/
/*                 <li><a href="{{ path('cart_list') }}" >{{ 'app.cart' | trans }}</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="site-footer">*/
/*         <div class="footer-menu wrapper">*/
/*             <ul class="clearfix">*/
/*                 <li><a href="{{ path('homepage') }}">{{ 'app.homepage' | trans }}</a></li>*/
/*                 <li id="slash">/</li>*/
/*                 <li><a href="{{ path('storefront_product_list') }}">{{ 'app.productlist' | trans }}</a></li>*/
/*                 <li id="slash">/</li>*/
/*                 <li><a href="{{ path('cart_list') }}" >{{ 'app.cart' | trans }}</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
