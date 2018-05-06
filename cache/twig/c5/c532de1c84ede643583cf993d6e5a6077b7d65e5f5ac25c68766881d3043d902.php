<?php

/* modular/orchestrating.html.twig */
class __TwigTemplate_1891b309df05b1c704780fcb1ca3b60285db0b5e6125e04668a0579ce46dcb80 extends Twig_Template
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
        echo "<section id=\"orchestrating\">
    <div class=\"row section-head\">
      <h2>";
        // line 3
        echo $this->getAttribute(($context["header"] ?? null), "sectiontitle", array());
        echo "</h2>
      <p>";
        // line 4
        echo $this->getAttribute(($context["header"] ?? null), "sectionblurb", array());
        echo "</p>
    </div>
  <div class=\"row\">
    <div class=\"twelve columns\">
      <div id=\"screenshots-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "highlights", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "        <div class=\"columns item\">
          <div class=\"item-wrap\">
            <a href=\"";
            // line 12
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["item"], "image", array());
            echo "\" data-imagelightbox=\"a\" >
              ";
            // line 13
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "cropZoom", array(0 => 700, 1 => 700), "method"), "html", array(0 => $this->getAttribute($context["item"], "highlightdescription", array()), 1 => $this->getAttribute($context["item"], "highlightdescription", array())), "method");
            echo "
              <div class=\"overlay\"></div>
              <div class=\"link-icon\">
                <i class=\"icon-plus\"></i>
              </div>
            </a>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/orchestrating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  49 => 13,  43 => 12,  39 => 10,  35 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"orchestrating\">
    <div class=\"row section-head\">
      <h2>{{ header.sectiontitle }}</h2>
      <p>{{ header.sectionblurb }}</p>
    </div>
  <div class=\"row\">
    <div class=\"twelve columns\">
      <div id=\"screenshots-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
        {% for item in page.header.highlights %}
        <div class=\"columns item\">
          <div class=\"item-wrap\">
            <a href=\"{{ page.url(true) }}/{{ item.image }}\" data-imagelightbox=\"a\" >
              {{ page.media[item.image].cropZoom(700, 700).html( item.highlightdescription, item.highlightdescription) }}
              <div class=\"overlay\"></div>
              <div class=\"link-icon\">
                <i class=\"icon-plus\"></i>
              </div>
            </a>
          </div>
        </div>
        {% endfor %}
      </div>
    </div>
  </div>
</section>", "modular/orchestrating.html.twig", "C:\\xampp\\htdocs\\tcm\\user\\themes\\tcmtheme\\templates\\modular\\orchestrating.html.twig");
    }
}
