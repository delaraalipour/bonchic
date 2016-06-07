<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fdc7e9326ade42fd7b0e1dd105ce6339e6c98d77ab3eadc280df7bd07ab2cd71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68641ed1339a47bcca84cae5a85fb543709f8049cf50cc85cf0b26e307fcea0d = $this->env->getExtension("native_profiler");
        $__internal_68641ed1339a47bcca84cae5a85fb543709f8049cf50cc85cf0b26e307fcea0d->enter($__internal_68641ed1339a47bcca84cae5a85fb543709f8049cf50cc85cf0b26e307fcea0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68641ed1339a47bcca84cae5a85fb543709f8049cf50cc85cf0b26e307fcea0d->leave($__internal_68641ed1339a47bcca84cae5a85fb543709f8049cf50cc85cf0b26e307fcea0d_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_43a459977752306a24205d33270edb9fd02588010e1b9c9fc2e7ad3939167ae6 = $this->env->getExtension("native_profiler");
        $__internal_43a459977752306a24205d33270edb9fd02588010e1b9c9fc2e7ad3939167ae6->enter($__internal_43a459977752306a24205d33270edb9fd02588010e1b9c9fc2e7ad3939167ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.login"), "html", null, true);
        
        $__internal_43a459977752306a24205d33270edb9fd02588010e1b9c9fc2e7ad3939167ae6->leave($__internal_43a459977752306a24205d33270edb9fd02588010e1b9c9fc2e7ad3939167ae6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43293be85534b375bf204a6dd3c37c101fc6bf9c672f550e0be15f717bf9b4fd = $this->env->getExtension("native_profiler");
        $__internal_43293be85534b375bf204a6dd3c37c101fc6bf9c672f550e0be15f717bf9b4fd->enter($__internal_43293be85534b375bf204a6dd3c37c101fc6bf9c672f550e0be15f717bf9b4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <div class=\"shop-name\"><span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</span></div>

<div class=\"login-input\">
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" autocomplete=\"off\">
        <div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        </div>

        <div class=\"login-form\">
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Email\" />
        </div>

        <div class=\"login-form\">
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" />
        </div>

        <div>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" />
        </div>
    </form>
    <div class=\"checkbox\">
        <label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    </div>
</div>
";
        
        $__internal_43293be85534b375bf204a6dd3c37c101fc6bf9c672f550e0be15f717bf9b4fd->leave($__internal_43293be85534b375bf204a6dd3c37c101fc6bf9c672f550e0be15f717bf9b4fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  94 => 27,  83 => 19,  76 => 15,  71 => 13,  65 => 10,  62 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 1,  11 => 3,);
    }
}
/* {% block title %}{{ 'app.login' | trans }}{% endblock %}*/
/* */
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div class="shop-name"><span>{{ 'app.site_title' | trans ({}, 'messages') }}</span></div>*/
/* */
/* <div class="login-input">*/
/*     <form action="{{ path("fos_user_security_check") }}" method="post" autocomplete="off">*/
/*         <div>*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         </div>*/
/* */
/*         <div class="login-form">*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="Email" />*/
/*         </div>*/
/* */
/*         <div class="login-form">*/
/*             <input type="password" id="password" name="_password" required="required" placeholder="Password" />*/
/*         </div>*/
/* */
/*         <div>*/
/*             <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*         </div>*/
/*     </form>*/
/*     <div class="checkbox">*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
