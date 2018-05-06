<?php

/* forms/fields/pagemediaselect/pagemediaselect.html.twig */
class __TwigTemplate_686e58ee840019af7da2f5efa5e39a69f69e48d220a5c1f04397351047ad1172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/pagemediaselect/pagemediaselect.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemediaselect/pagemediaselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/fields/filepicker/filepicker.html.twig\" %}

", "forms/fields/pagemediaselect/pagemediaselect.html.twig", "C:\\xampp\\htdocs\\tcm\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\pagemediaselect\\pagemediaselect.html.twig");
    }
}
