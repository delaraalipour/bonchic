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
        $__internal_5ccf4d4cd352162e3b4a07db16e431a64595defd9db13406e5a70cc601b80b84 = $this->env->getExtension("native_profiler");
        $__internal_5ccf4d4cd352162e3b4a07db16e431a64595defd9db13406e5a70cc601b80b84->enter($__internal_5ccf4d4cd352162e3b4a07db16e431a64595defd9db13406e5a70cc601b80b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ccf4d4cd352162e3b4a07db16e431a64595defd9db13406e5a70cc601b80b84->leave($__internal_5ccf4d4cd352162e3b4a07db16e431a64595defd9db13406e5a70cc601b80b84_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_674bf4f24cbc25b2041ed89334a74e5a15b0c20c91833984d15d5231a0a2f364 = $this->env->getExtension("native_profiler");
        $__internal_674bf4f24cbc25b2041ed89334a74e5a15b0c20c91833984d15d5231a0a2f364->enter($__internal_674bf4f24cbc25b2041ed89334a74e5a15b0c20c91833984d15d5231a0a2f364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.login"), "html", null, true);
        
        $__internal_674bf4f24cbc25b2041ed89334a74e5a15b0c20c91833984d15d5231a0a2f364->leave($__internal_674bf4f24cbc25b2041ed89334a74e5a15b0c20c91833984d15d5231a0a2f364_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_722d0a5acac767e066c53dd86c34f1efc6c6f6f8c29e73d1e9445a8269577e39 = $this->env->getExtension("native_profiler");
        $__internal_722d0a5acac767e066c53dd86c34f1efc6c6f6f8c29e73d1e9445a8269577e39->enter($__internal_722d0a5acac767e066c53dd86c34f1efc6c6f6f8c29e73d1e9445a8269577e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
    <div class=\"username\"><span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</span></div>

<div class=\"login-input\">
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
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
        
        $__internal_722d0a5acac767e066c53dd86c34f1efc6c6f6f8c29e73d1e9445a8269577e39->leave($__internal_722d0a5acac767e066c53dd86c34f1efc6c6f6f8c29e73d1e9445a8269577e39_prof);

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
/*     <div class="username"><span>{{ 'app.site_title' | trans ({}, 'messages') }}</span></div>*/
/* */
/* <div class="login-input">*/
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
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
