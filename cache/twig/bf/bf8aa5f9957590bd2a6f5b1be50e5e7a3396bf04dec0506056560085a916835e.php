<?php

/* modular/brass.html.twig */
class __TwigTemplate_8ff8c3a5488c721f11a1722f710b629b6b090cb15dbc4879862ec95a0314c807 extends Twig_Template
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
        echo "<section id=\"brass-teaching\">

  <div class=\"row section-head\">
    <h2>";
        // line 4
        echo $this->getAttribute(($context["header"] ?? null), "sectiontitle", array());
        echo "</h2>
    <p>";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "sectionblurb", array());
        echo "</p>
  </div>

  <div class=\"row\">
    <div class=\"pricing-tables bgrid-quarters s-bgrid-halves\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "lessons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        <div class=\"column\">
          <div class=\"price-block\">
            <h3 class=\"plan-title\">
              <span class=\"";
            // line 14
            echo $this->getAttribute($context["column"], "lessonicon", array());
            echo "\"></span>
            </h3>
            <h3>";
            // line 16
            echo $this->getAttribute($context["column"], "lessonheader", array());
            echo "</h3>
            <p class=\"plan-price\"><span>";
            // line 17
            echo $this->getAttribute($context["column"], "lessonnote", array());
            echo "</span></p>

            <ul class=\"features\">
             
               <li>";
            // line 21
            echo $this->getAttribute($context["column"], "text", array());
            echo "</li> 

            </ul>

            <footer class=\"plan-sign-up\">
               <a class=\"button\" href=\"#contact\">Sign up now</a>
            </footer>
       </div> 
     </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " </div>
</div>

</section> ";
    }

    public function getTemplateName()
    {
        return "modular/brass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  61 => 21,  54 => 17,  50 => 16,  45 => 14,  40 => 11,  36 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"brass-teaching\">

  <div class=\"row section-head\">
    <h2>{{ header.sectiontitle }}</h2>
    <p>{{ header.sectionblurb }}</p>
  </div>

  <div class=\"row\">
    <div class=\"pricing-tables bgrid-quarters s-bgrid-halves\">
      {% for column in page.header.lessons %}
        <div class=\"column\">
          <div class=\"price-block\">
            <h3 class=\"plan-title\">
              <span class=\"{{column.lessonicon}}\"></span>
            </h3>
            <h3>{{ column.lessonheader }}</h3>
            <p class=\"plan-price\"><span>{{ column.lessonnote }}</span></p>

            <ul class=\"features\">
             
               <li>{{ column.text }}</li> 

            </ul>

            <footer class=\"plan-sign-up\">
               <a class=\"button\" href=\"#contact\">Sign up now</a>
            </footer>
       </div> 
     </div>
   {% endfor %}
 </div>
</div>

</section> ", "modular/brass.html.twig", "C:\\xampp\\htdocs\\tcm\\user\\themes\\tcmtheme\\templates\\modular\\brass.html.twig");
    }
}
