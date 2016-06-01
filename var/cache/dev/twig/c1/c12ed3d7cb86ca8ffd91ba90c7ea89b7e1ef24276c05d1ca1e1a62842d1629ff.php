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
        $__internal_b946f56cfef6a7c748c42aeb45b24b3a3ae5578df5699c62614675630a9b723d = $this->env->getExtension("native_profiler");
        $__internal_b946f56cfef6a7c748c42aeb45b24b3a3ae5578df5699c62614675630a9b723d->enter($__internal_b946f56cfef6a7c748c42aeb45b24b3a3ae5578df5699c62614675630a9b723d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b946f56cfef6a7c748c42aeb45b24b3a3ae5578df5699c62614675630a9b723d->leave($__internal_b946f56cfef6a7c748c42aeb45b24b3a3ae5578df5699c62614675630a9b723d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34dafac6dc4b3c96f1e33bf74797a5bbd46104cfcdcb0c697a35892f815a31e3 = $this->env->getExtension("native_profiler");
        $__internal_34dafac6dc4b3c96f1e33bf74797a5bbd46104cfcdcb0c697a35892f815a31e3->enter($__internal_34dafac6dc4b3c96f1e33bf74797a5bbd46104cfcdcb0c697a35892f815a31e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
        
        $__internal_34dafac6dc4b3c96f1e33bf74797a5bbd46104cfcdcb0c697a35892f815a31e3->leave($__internal_34dafac6dc4b3c96f1e33bf74797a5bbd46104cfcdcb0c697a35892f815a31e3_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_14f89e666942f6b91d2ea5a2521a180f5dd359b107239ad46098209a041a57b3 = $this->env->getExtension("native_profiler");
        $__internal_14f89e666942f6b91d2ea5a2521a180f5dd359b107239ad46098209a041a57b3->enter($__internal_14f89e666942f6b91d2ea5a2521a180f5dd359b107239ad46098209a041a57b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-home\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</span></div>
    </div>
";
        
        $__internal_14f89e666942f6b91d2ea5a2521a180f5dd359b107239ad46098209a041a57b3->leave($__internal_14f89e666942f6b91d2ea5a2521a180f5dd359b107239ad46098209a041a57b3_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e2428a8b245cf46594215186a8bd713258a16af8685eee3e56f3da0b3249fba = $this->env->getExtension("native_profiler");
        $__internal_9e2428a8b245cf46594215186a8bd713258a16af8685eee3e56f3da0b3249fba->enter($__internal_9e2428a8b245cf46594215186a8bd713258a16af8685eee3e56f3da0b3249fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class=\"welcome-logo\">
        <div class=\"welcome-message\">
            <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.welcome.message"), "html", null, true);
        echo "</span>
        </div>
    </div>
    <form>
        <input type=\"text\" name=\"message\" placeholder=\"Type your text here!\" />
    </form>
    <button>Add!</button>
    <div id=\"messages\"></div>
";
        
        $__internal_9e2428a8b245cf46594215186a8bd713258a16af8685eee3e56f3da0b3249fba->leave($__internal_9e2428a8b245cf46594215186a8bd713258a16af8685eee3e56f3da0b3249fba_prof);

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
/*     <form>*/
/*         <input type="text" name="message" placeholder="Type your text here!" />*/
/*     </form>*/
/*     <button>Add!</button>*/
/*     <div id="messages"></div>*/
/* {% endblock %}*/
