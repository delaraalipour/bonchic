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
        $__internal_3348fbfd08ae1cf3d75d5e5e58d636afbdbad69c663666ad5c2ae208971c8498 = $this->env->getExtension("native_profiler");
        $__internal_3348fbfd08ae1cf3d75d5e5e58d636afbdbad69c663666ad5c2ae208971c8498->enter($__internal_3348fbfd08ae1cf3d75d5e5e58d636afbdbad69c663666ad5c2ae208971c8498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:layout.html.twig"));

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
    <div class=\"admin-header\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</p></a>
            <ul class=\"admin-menu\">
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo " </a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_news_list");
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_slide_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.slidelist"), "html", null, true);
        echo "</a></li>
            </ul>
        <div class=\"login\">
            ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 28
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 30
        echo "        </div>
    </div>

    <div class=\"content\">
        ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "notice"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 36
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 37
                echo "                <div id=\"FlashMessageBox\" class=\"ui message
                 ";
                // line 38
                echo twig_escape_filter($this->env, ((($context["type"] == "error")) ? ("negative") : (((($context["type"] == "notice")) ? ("info") : ($context["type"])))), "html", null, true);
                echo "\">
                    <div class=\"flash-message\">
                        ";
                // line 40
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
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "        <div class=\"wrapper\">
            <div class=\"quick-access__overlay\"></div>
            <div class=\"quick-access\">
                <ul class=\"quick-access__menu\">
                    <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("admin_product_new");
        echo "\">Product<i class=\"glyphicon glyphicon-tags\"></i></a></li>
                    <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("admin_category_new");
        echo "\">Category<i class=\"glyphicon glyphicon-pencil\"></i></a></li>
                    <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_news_new");
        echo "\">News<i class=\"glyphicon glyphicon-edit\"></i></a></li>
                    <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("admin_slide_new");
        echo "\">Slide<i class=\"glyphicon glyphicon-tags\"></i></a></li>
                </ul>
                <div class=\"quick-access__opener\">+</div>
            </div>
        </div>
    </div>
    <div class=\"footer\">
        ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "    </div>
</body>
</html>";
        
        $__internal_3348fbfd08ae1cf3d75d5e5e58d636afbdbad69c663666ad5c2ae208971c8498->leave($__internal_3348fbfd08ae1cf3d75d5e5e58d636afbdbad69c663666ad5c2ae208971c8498_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d93938bad7216f175d5a6968063ba804d3800c26ff50e0643ff8d5add439d81 = $this->env->getExtension("native_profiler");
        $__internal_3d93938bad7216f175d5a6968063ba804d3800c26ff50e0643ff8d5add439d81->enter($__internal_3d93938bad7216f175d5a6968063ba804d3800c26ff50e0643ff8d5add439d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3d93938bad7216f175d5a6968063ba804d3800c26ff50e0643ff8d5add439d81->leave($__internal_3d93938bad7216f175d5a6968063ba804d3800c26ff50e0643ff8d5add439d81_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_cf52926e3debdc3021f86a195a25657ab70667f2525786d8529e8c660bdddaf7 = $this->env->getExtension("native_profiler");
        $__internal_cf52926e3debdc3021f86a195a25657ab70667f2525786d8529e8c660bdddaf7->enter($__internal_cf52926e3debdc3021f86a195a25657ab70667f2525786d8529e8c660bdddaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_cf52926e3debdc3021f86a195a25657ab70667f2525786d8529e8c660bdddaf7->leave($__internal_cf52926e3debdc3021f86a195a25657ab70667f2525786d8529e8c660bdddaf7_prof);

    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        $__internal_e8b4fee529e757ddefdd7028528f71b6c8e8391165ca441a5eae84ce39579895 = $this->env->getExtension("native_profiler");
        $__internal_e8b4fee529e757ddefdd7028528f71b6c8e8391165ca441a5eae84ce39579895->enter($__internal_e8b4fee529e757ddefdd7028528f71b6c8e8391165ca441a5eae84ce39579895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e8b4fee529e757ddefdd7028528f71b6c8e8391165ca441a5eae84ce39579895->leave($__internal_e8b4fee529e757ddefdd7028528f71b6c8e8391165ca441a5eae84ce39579895_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_39c16941a302d135de3286dc83a5a8b2bbaed970681b74f253b959e034269830 = $this->env->getExtension("native_profiler");
        $__internal_39c16941a302d135de3286dc83a5a8b2bbaed970681b74f253b959e034269830->enter($__internal_39c16941a302d135de3286dc83a5a8b2bbaed970681b74f253b959e034269830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_39c16941a302d135de3286dc83a5a8b2bbaed970681b74f253b959e034269830->leave($__internal_39c16941a302d135de3286dc83a5a8b2bbaed970681b74f253b959e034269830_prof);

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
        return array (  241 => 64,  230 => 49,  219 => 34,  208 => 5,  199 => 65,  197 => 64,  187 => 57,  183 => 56,  179 => 55,  175 => 54,  169 => 50,  167 => 49,  164 => 48,  158 => 47,  145 => 40,  140 => 38,  137 => 37,  132 => 36,  127 => 35,  125 => 34,  119 => 30,  111 => 28,  105 => 25,  101 => 24,  96 => 23,  94 => 22,  86 => 19,  80 => 18,  74 => 17,  68 => 16,  62 => 15,  55 => 13,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <div class="wrapper">*/
/*             <div class="quick-access__overlay"></div>*/
/*             <div class="quick-access">*/
/*                 <ul class="quick-access__menu">*/
/*                     <li><a href="{{ path('admin_product_new') }}">Product<i class="glyphicon glyphicon-tags"></i></a></li>*/
/*                     <li><a href="{{ path('admin_category_new') }}">Category<i class="glyphicon glyphicon-pencil"></i></a></li>*/
/*                     <li><a href="{{ path('admin_news_new') }}">News<i class="glyphicon glyphicon-edit"></i></a></li>*/
/*                     <li><a href="{{ path('admin_slide_new') }}">Slide<i class="glyphicon glyphicon-tags"></i></a></li>*/
/*                 </ul>*/
/*                 <div class="quick-access__opener">+</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="footer">*/
/*         {% block footer %}{% endblock %}*/
/*     </div>*/
/* </body>*/
/* </html>*/
