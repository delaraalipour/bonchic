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
        $__internal_bde8e5d3be6512938ab897033316d6f4af90ba4bd1046f6768509bb7ec1d7fb4 = $this->env->getExtension("native_profiler");
        $__internal_bde8e5d3be6512938ab897033316d6f4af90ba4bd1046f6768509bb7ec1d7fb4->enter($__internal_bde8e5d3be6512938ab897033316d6f4af90ba4bd1046f6768509bb7ec1d7fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:layout.html.twig"));

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
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
</head>
<body>
<div class=\"storefront-header\">
    <div class=\"wrapper clearfix\">
        <div class=\"cell\">
            ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 17
                echo "                    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_index");
                echo "\">
                        ";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
                echo "
                    </a>
                    <span class=\"divider\">";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.or"), "html", null, true);
                echo "</span>
                ";
            }
            // line 22
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.logout"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 26
            echo "                <a class=\"signup\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.sign up"), "html", null, true);
            echo "
                </a>
                <span class=\"divider\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.or"), "html", null, true);
            echo "</span>
                <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.login"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 34
        echo "            <span class=\"divider\">/</span>
            <a id=\"cart\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("cart_list");
        echo "\" >
                <span>";
        // line 36
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
        // line 46
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("storefront_news_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"shop-logo\">
            <a href=\"";
        // line 52
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
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "    </div>
    <div class=\"footer-widgets-top\"></div>
    <div class=\"footer\">
        <div class=\"footer-menu wrapper\">
            <span>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.links"), "html", null, true);
        echo "</span>
            <ul class=\"clearfix\">
                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("cart_list");
        echo "\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("storefront_news_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
    </div>
    <div class=\"site-footer\">
        <div class=\"footer-menu wrapper\">
            <ul class=\"clearfix\">
                <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li id=\"slash\">/</li>
                <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</a></li>
                <li id=\"slash\">/</li>
                <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("storefront_news_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</a></li>
                <li id=\"slash\">/</li>
                <li><a href=\"";
        // line 83
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
        
        $__internal_bde8e5d3be6512938ab897033316d6f4af90ba4bd1046f6768509bb7ec1d7fb4->leave($__internal_bde8e5d3be6512938ab897033316d6f4af90ba4bd1046f6768509bb7ec1d7fb4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cdd9be37a5559a26f9949f14f15dffaa1e5e3f6b8f9c0b51e4847db5e350c49 = $this->env->getExtension("native_profiler");
        $__internal_4cdd9be37a5559a26f9949f14f15dffaa1e5e3f6b8f9c0b51e4847db5e350c49->enter($__internal_4cdd9be37a5559a26f9949f14f15dffaa1e5e3f6b8f9c0b51e4847db5e350c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4cdd9be37a5559a26f9949f14f15dffaa1e5e3f6b8f9c0b51e4847db5e350c49->leave($__internal_4cdd9be37a5559a26f9949f14f15dffaa1e5e3f6b8f9c0b51e4847db5e350c49_prof);

    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        $__internal_03f8e54139a86868085ddf9add510e46e38523021e3d3e75f607e4f4602980ca = $this->env->getExtension("native_profiler");
        $__internal_03f8e54139a86868085ddf9add510e46e38523021e3d3e75f607e4f4602980ca->enter($__internal_03f8e54139a86868085ddf9add510e46e38523021e3d3e75f607e4f4602980ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 60
        echo "        ";
        
        $__internal_03f8e54139a86868085ddf9add510e46e38523021e3d3e75f607e4f4602980ca->leave($__internal_03f8e54139a86868085ddf9add510e46e38523021e3d3e75f607e4f4602980ca_prof);

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
        return array (  260 => 60,  254 => 59,  243 => 5,  227 => 83,  220 => 81,  213 => 79,  206 => 77,  194 => 70,  188 => 69,  182 => 68,  176 => 67,  171 => 65,  165 => 61,  163 => 59,  151 => 52,  142 => 48,  136 => 47,  130 => 46,  117 => 36,  113 => 35,  110 => 34,  104 => 31,  100 => 30,  96 => 29,  91 => 27,  86 => 26,  80 => 23,  75 => 22,  70 => 20,  65 => 18,  60 => 17,  57 => 16,  55 => 15,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>{% block title %}{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.css') }}" type="text/css" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/main.css') }}" type="text/css" />*/
/*     <script src="{{ asset('bundles/app/js/jquery.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{ asset('bundles/app/js/main.js') }}" type="text/javascript"></script>*/
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
/*             <a id="cart" href="{{ path('cart_list') }}" >*/
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
/*                 <li><a href="{{ path('storefront_news_list') }}">{{ 'app.newslist' | trans }}</a></li>*/
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
/*                 <li><a href="{{ path('storefront_news_list') }}">{{ 'app.newslist' | trans }}</a></li>*/
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
/*                 <li><a href="{{ path('storefront_news_list') }}">{{ 'app.newslist' | trans }}</a></li>*/
/*                 <li id="slash">/</li>*/
/*                 <li><a href="{{ path('cart_list') }}" >{{ 'app.cart' | trans }}</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
