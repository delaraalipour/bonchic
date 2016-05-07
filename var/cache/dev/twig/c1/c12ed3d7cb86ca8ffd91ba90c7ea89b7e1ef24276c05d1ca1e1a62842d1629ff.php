<?php

/* :Admin/index.html.twig */
class __TwigTemplate_2a975972943aedbdffc999d0d4784b6f58bbaec407b54a25374278f3483bd08c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9f0db81d8542f6d4bbf5ccb81237d111318730bb5e3e30d5d4cd1d4a607feef = $this->env->getExtension("native_profiler");
        $__internal_b9f0db81d8542f6d4bbf5ccb81237d111318730bb5e3e30d5d4cd1d4a607feef->enter($__internal_b9f0db81d8542f6d4bbf5ccb81237d111318730bb5e3e30d5d4cd1d4a607feef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9f0db81d8542f6d4bbf5ccb81237d111318730bb5e3e30d5d4cd1d4a607feef->leave($__internal_b9f0db81d8542f6d4bbf5ccb81237d111318730bb5e3e30d5d4cd1d4a607feef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f256d2fb2df7c5544fa9fdb7d1ba7861e255b6967219e80cacd6d3a3ae36b3ff = $this->env->getExtension("native_profiler");
        $__internal_f256d2fb2df7c5544fa9fdb7d1ba7861e255b6967219e80cacd6d3a3ae36b3ff->enter($__internal_f256d2fb2df7c5544fa9fdb7d1ba7861e255b6967219e80cacd6d3a3ae36b3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
        
        $__internal_f256d2fb2df7c5544fa9fdb7d1ba7861e255b6967219e80cacd6d3a3ae36b3ff->leave($__internal_f256d2fb2df7c5544fa9fdb7d1ba7861e255b6967219e80cacd6d3a3ae36b3ff_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_f7c47d3523e27fd3da7ef90954de0d8fa4c0089fcf9995db62686fea80aedd13 = $this->env->getExtension("native_profiler");
        $__internal_f7c47d3523e27fd3da7ef90954de0d8fa4c0089fcf9995db62686fea80aedd13->enter($__internal_f7c47d3523e27fd3da7ef90954de0d8fa4c0089fcf9995db62686fea80aedd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-home\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</span></div>
    </div>
";
        
        $__internal_f7c47d3523e27fd3da7ef90954de0d8fa4c0089fcf9995db62686fea80aedd13->leave($__internal_f7c47d3523e27fd3da7ef90954de0d8fa4c0089fcf9995db62686fea80aedd13_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a59e02d0d35abf5a5e92810067b9cce2a21ac24312aa8227d62b8fc783f318d = $this->env->getExtension("native_profiler");
        $__internal_6a59e02d0d35abf5a5e92810067b9cce2a21ac24312aa8227d62b8fc783f318d->enter($__internal_6a59e02d0d35abf5a5e92810067b9cce2a21ac24312aa8227d62b8fc783f318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class=\"welcome-logo\">
        <div class=\"welcome-message\">
            <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.welcome.message"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_6a59e02d0d35abf5a5e92810067b9cce2a21ac24312aa8227d62b8fc783f318d->leave($__internal_6a59e02d0d35abf5a5e92810067b9cce2a21ac24312aa8227d62b8fc783f318d_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  73 => 12,  67 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.controlpanel' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name"><span><i class="glyphicon glyphicon-home"></i>{{ 'app.homepage' | trans }}</span></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="welcome-logo">*/
/*         <div class="welcome-message">*/
/*             <span>{{ 'app.welcome.message' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
