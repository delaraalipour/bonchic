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
        $__internal_0707175d97705e9f8519eaefbe3dc62447ec1d8352bee60e42fb29ffe887cf2f = $this->env->getExtension("native_profiler");
        $__internal_0707175d97705e9f8519eaefbe3dc62447ec1d8352bee60e42fb29ffe887cf2f->enter($__internal_0707175d97705e9f8519eaefbe3dc62447ec1d8352bee60e42fb29ffe887cf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:layout.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("admin_news_list");
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_slide_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.slidelist"), "html", null, true);
        echo "</a></li>
            </ul>
        <div class=\"login\">
            ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 26
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 28
        echo "        </div>
    </div>

    <div class=\"content\">
        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "        ";
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
        
        $__internal_0707175d97705e9f8519eaefbe3dc62447ec1d8352bee60e42fb29ffe887cf2f->leave($__internal_0707175d97705e9f8519eaefbe3dc62447ec1d8352bee60e42fb29ffe887cf2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01633e5dc8610678d48eee6f742a044fab41e0eaa0e37fe2ca33da592b7692ec = $this->env->getExtension("native_profiler");
        $__internal_01633e5dc8610678d48eee6f742a044fab41e0eaa0e37fe2ca33da592b7692ec->enter($__internal_01633e5dc8610678d48eee6f742a044fab41e0eaa0e37fe2ca33da592b7692ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_01633e5dc8610678d48eee6f742a044fab41e0eaa0e37fe2ca33da592b7692ec->leave($__internal_01633e5dc8610678d48eee6f742a044fab41e0eaa0e37fe2ca33da592b7692ec_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_1734c7b4e91e3dbbec6714d2a23186fd5f9160c0649d76280bcfc2b7df80d27f = $this->env->getExtension("native_profiler");
        $__internal_1734c7b4e91e3dbbec6714d2a23186fd5f9160c0649d76280bcfc2b7df80d27f->enter($__internal_1734c7b4e91e3dbbec6714d2a23186fd5f9160c0649d76280bcfc2b7df80d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_1734c7b4e91e3dbbec6714d2a23186fd5f9160c0649d76280bcfc2b7df80d27f->leave($__internal_1734c7b4e91e3dbbec6714d2a23186fd5f9160c0649d76280bcfc2b7df80d27f_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_7bbe7302919c24b92adcf9142f8ca42906aae5bf2889936eeb71d24dee28c502 = $this->env->getExtension("native_profiler");
        $__internal_7bbe7302919c24b92adcf9142f8ca42906aae5bf2889936eeb71d24dee28c502->enter($__internal_7bbe7302919c24b92adcf9142f8ca42906aae5bf2889936eeb71d24dee28c502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7bbe7302919c24b92adcf9142f8ca42906aae5bf2889936eeb71d24dee28c502->leave($__internal_7bbe7302919c24b92adcf9142f8ca42906aae5bf2889936eeb71d24dee28c502_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b2509910e06df39572815e30fcdf7db7f99791f92ade2c5c869a026ae7894217 = $this->env->getExtension("native_profiler");
        $__internal_b2509910e06df39572815e30fcdf7db7f99791f92ade2c5c869a026ae7894217->enter($__internal_b2509910e06df39572815e30fcdf7db7f99791f92ade2c5c869a026ae7894217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b2509910e06df39572815e30fcdf7db7f99791f92ade2c5c869a026ae7894217->leave($__internal_b2509910e06df39572815e30fcdf7db7f99791f92ade2c5c869a026ae7894217_prof);

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
        return array (  209 => 50,  198 => 47,  187 => 32,  176 => 5,  167 => 51,  165 => 50,  161 => 48,  159 => 47,  156 => 46,  150 => 45,  137 => 38,  132 => 36,  129 => 35,  124 => 34,  119 => 33,  117 => 32,  111 => 28,  103 => 26,  97 => 23,  93 => 22,  88 => 21,  86 => 20,  78 => 17,  72 => 16,  66 => 15,  60 => 14,  54 => 13,  47 => 11,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*                 <li><a href="{{ path('admin_news_list')}}"><i class="glyphicon glyphicon-edit"></i>{{ 'app.newslist' |trans }}</a></li>*/
/*                 <li><a href="{{ path('admin_slide_list')}}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.slidelist' |trans }}</a></li>*/
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
