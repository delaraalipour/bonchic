<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_68c069c1f16dbfa3156b23db7e8b36e9ebe8f9e8ef09c977f8fb5dc984438da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26747013bb03bf5aa5092b7a3fb0eeca06ca39a94821a04a43bf82ec0634f66f = $this->env->getExtension("native_profiler");
        $__internal_26747013bb03bf5aa5092b7a3fb0eeca06ca39a94821a04a43bf82ec0634f66f->enter($__internal_26747013bb03bf5aa5092b7a3fb0eeca06ca39a94821a04a43bf82ec0634f66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_26747013bb03bf5aa5092b7a3fb0eeca06ca39a94821a04a43bf82ec0634f66f->leave($__internal_26747013bb03bf5aa5092b7a3fb0eeca06ca39a94821a04a43bf82ec0634f66f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
