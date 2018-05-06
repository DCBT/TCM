<?php

/* modular/contact.html.twig */
class __TwigTemplate_7e0b839614f11e09c97b9a84c6a1c65824dacd8cd22911851d768d42b5b04e6a extends Twig_Template
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
        // line 1
        echo "<section id=\"contact\">
  ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
  BLAH BLAH CONTACT
</section>";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\">
  {{ content }}
  BLAH BLAH CONTACT
</section>", "modular/contact.html.twig", "C:\\xampp\\htdocs\\tcm\\user\\themes\\tcmtheme\\templates\\modular\\contact.html.twig");
    }
}
