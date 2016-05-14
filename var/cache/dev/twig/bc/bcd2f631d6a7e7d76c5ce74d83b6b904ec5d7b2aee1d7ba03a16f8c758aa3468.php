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
        $__internal_21c106934304b279aeffb306766c3606883214450527ba65f5fbf1d5389a557e = $this->env->getExtension("native_profiler");
        $__internal_21c106934304b279aeffb306766c3606883214450527ba65f5fbf1d5389a557e->enter($__internal_21c106934304b279aeffb306766c3606883214450527ba65f5fbf1d5389a557e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:layout.html.twig"));

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
    <script>\$(document).ready(function() {
            \$('button').click(function() {
                var toAdd = \$(\"input[name=message]\").val();
                \$('#messages').append(\"<p>\"+toAdd+\"</p>\");
            });
        });</script>
</head>
<body>
    <div class=\"admin-header\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</p></a>
            <ul class=\"admin-menu\">
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo " </a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_news_list");
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_slide_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.slidelist"), "html", null, true);
        echo "</a></li>
            </ul>
        <div class=\"login\">
            ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 32
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <div class=\"content\">
        ";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "notice"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 41
                echo "                <div id=\"FlashMessageBox\" class=\"ui message
                 ";
                // line 42
                echo twig_escape_filter($this->env, ((($context["type"] == "error")) ? ("negative") : (((($context["type"] == "notice")) ? ("info") : ($context["type"])))), "html", null, true);
                echo "\">
                    <div class=\"flash-message\">
                        ";
                // line 44
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
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "    </div>
    <div class=\"footer\">
        ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "    </div>
</body>
</html>";
        
        $__internal_21c106934304b279aeffb306766c3606883214450527ba65f5fbf1d5389a557e->leave($__internal_21c106934304b279aeffb306766c3606883214450527ba65f5fbf1d5389a557e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bafca432ddbcb98c8b0db1e4c2e01962d24b44f26ac3ccfc4610125b8b1e1956 = $this->env->getExtension("native_profiler");
        $__internal_bafca432ddbcb98c8b0db1e4c2e01962d24b44f26ac3ccfc4610125b8b1e1956->enter($__internal_bafca432ddbcb98c8b0db1e4c2e01962d24b44f26ac3ccfc4610125b8b1e1956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bafca432ddbcb98c8b0db1e4c2e01962d24b44f26ac3ccfc4610125b8b1e1956->leave($__internal_bafca432ddbcb98c8b0db1e4c2e01962d24b44f26ac3ccfc4610125b8b1e1956_prof);

    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
        $__internal_59466545b69fc89b7a4b05589b8f9ca6ec63d1fa9b7b826b16d4f8b585308b43 = $this->env->getExtension("native_profiler");
        $__internal_59466545b69fc89b7a4b05589b8f9ca6ec63d1fa9b7b826b16d4f8b585308b43->enter($__internal_59466545b69fc89b7a4b05589b8f9ca6ec63d1fa9b7b826b16d4f8b585308b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_59466545b69fc89b7a4b05589b8f9ca6ec63d1fa9b7b826b16d4f8b585308b43->leave($__internal_59466545b69fc89b7a4b05589b8f9ca6ec63d1fa9b7b826b16d4f8b585308b43_prof);

    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        $__internal_bcd0c883708ea4e06123d8ec767dbfca228c483fe0e210c80bcb92c02c28dbcc = $this->env->getExtension("native_profiler");
        $__internal_bcd0c883708ea4e06123d8ec767dbfca228c483fe0e210c80bcb92c02c28dbcc->enter($__internal_bcd0c883708ea4e06123d8ec767dbfca228c483fe0e210c80bcb92c02c28dbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bcd0c883708ea4e06123d8ec767dbfca228c483fe0e210c80bcb92c02c28dbcc->leave($__internal_bcd0c883708ea4e06123d8ec767dbfca228c483fe0e210c80bcb92c02c28dbcc_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d87ca9cbb924fba874f354ff30c1a35f23db28a65ee5f777ac03cbe101cecca9 = $this->env->getExtension("native_profiler");
        $__internal_d87ca9cbb924fba874f354ff30c1a35f23db28a65ee5f777ac03cbe101cecca9->enter($__internal_d87ca9cbb924fba874f354ff30c1a35f23db28a65ee5f777ac03cbe101cecca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d87ca9cbb924fba874f354ff30c1a35f23db28a65ee5f777ac03cbe101cecca9->leave($__internal_d87ca9cbb924fba874f354ff30c1a35f23db28a65ee5f777ac03cbe101cecca9_prof);

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
        return array (  215 => 56,  204 => 53,  193 => 38,  182 => 5,  173 => 57,  171 => 56,  167 => 54,  165 => 53,  162 => 52,  156 => 51,  143 => 44,  138 => 42,  135 => 41,  130 => 40,  125 => 39,  123 => 38,  117 => 34,  109 => 32,  103 => 29,  99 => 28,  94 => 27,  92 => 26,  84 => 23,  78 => 22,  72 => 21,  66 => 20,  60 => 19,  53 => 17,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>{% block title %}{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.css') }}" type="text/css" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/main.css') }}" type="text/css" />*/
/*     <script>$(document).ready(function() {*/
/*             $('button').click(function() {*/
/*                 var toAdd = $("input[name=message]").val();*/
/*                 $('#messages').append("<p>"+toAdd+"</p>");*/
/*             });*/
/*         });</script>*/
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
