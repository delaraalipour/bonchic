<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_2524f8bed01c70cd3219f0cee83ee7ca70ce514fa76b8baa75498db12fdb2e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1deab3bba69aca74c14146f49c8c0a6d352880660491c1e884801206172de944 = $this->env->getExtension("native_profiler");
        $__internal_1deab3bba69aca74c14146f49c8c0a6d352880660491c1e884801206172de944->enter($__internal_1deab3bba69aca74c14146f49c8c0a6d352880660491c1e884801206172de944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_1deab3bba69aca74c14146f49c8c0a6d352880660491c1e884801206172de944->leave($__internal_1deab3bba69aca74c14146f49c8c0a6d352880660491c1e884801206172de944_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_b7500f8ac063bc62be11649d2277fe81a5efe2c323224d0602f359cfc1767584 = $this->env->getExtension("native_profiler");
        $__internal_b7500f8ac063bc62be11649d2277fe81a5efe2c323224d0602f359cfc1767584->enter($__internal_b7500f8ac063bc62be11649d2277fe81a5efe2c323224d0602f359cfc1767584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 5
        echo "
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"submit\">
            <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b7500f8ac063bc62be11649d2277fe81a5efe2c323224d0602f359cfc1767584->leave($__internal_b7500f8ac063bc62be11649d2277fe81a5efe2c323224d0602f359cfc1767584_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  48 => 7,  44 => 6,  41 => 5,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {%  block content %}*/
/*     {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/*     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         <div class="submit">*/
/*             <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
