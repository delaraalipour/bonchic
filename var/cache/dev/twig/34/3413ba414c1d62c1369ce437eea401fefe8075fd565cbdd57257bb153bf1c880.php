<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fdc7e9326ade42fd7b0e1dd105ce6339e6c98d77ab3eadc280df7bd07ab2cd71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a582c0b60914714a62bc4c50033482d89ceb1ce49cdcfdcd7d883620b805145 = $this->env->getExtension("native_profiler");
        $__internal_3a582c0b60914714a62bc4c50033482d89ceb1ce49cdcfdcd7d883620b805145->enter($__internal_3a582c0b60914714a62bc4c50033482d89ceb1ce49cdcfdcd7d883620b805145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a582c0b60914714a62bc4c50033482d89ceb1ce49cdcfdcd7d883620b805145->leave($__internal_3a582c0b60914714a62bc4c50033482d89ceb1ce49cdcfdcd7d883620b805145_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f8fcdf8f6e11283d147e8f7540230b565849691623e1374944f55b3c253acfe = $this->env->getExtension("native_profiler");
        $__internal_7f8fcdf8f6e11283d147e8f7540230b565849691623e1374944f55b3c253acfe->enter($__internal_7f8fcdf8f6e11283d147e8f7540230b565849691623e1374944f55b3c253acfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>
    <div class=\"checkbox\">
        <label for=\"remember_me\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    </div>
</div>
";
        
        $__internal_7f8fcdf8f6e11283d147e8f7540230b565849691623e1374944f55b3c253acfe->leave($__internal_7f8fcdf8f6e11283d147e8f7540230b565849691623e1374944f55b3c253acfe_prof);

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
        return array (  88 => 31,  81 => 27,  70 => 19,  63 => 15,  58 => 13,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
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
