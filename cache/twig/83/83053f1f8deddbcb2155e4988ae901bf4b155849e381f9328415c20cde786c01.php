<?php

/* modular/conducting.html.twig */
class __TwigTemplate_cb804e7566e83368261a599a7253c4c9b5934e9684f1b08ee8e0c52c3beaaf6b extends Twig_Template
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
        echo "<section id='conducting'>
 
  <div class=\"row section-head\">
    <h2>";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
    ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
  </div>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "blurbs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "  <div class=\"row feature ";
            echo $this->getAttribute($context["row"], "blurbheader", array());
            echo "\">

      <div class=\"";
            // line 10
            if (($this->getAttribute($context["row"], "image", array()) || $this->getAttribute($context["row"], "video", array()))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns  ";
            if (($this->getAttribute($context["row"], "align", array()) == true)) {
                echo "left";
            } else {
                echo "right";
            }
            echo "\">
        <h3>";
            // line 11
            echo $this->getAttribute($context["row"], "blurbheader", array());
            echo "</h3>
        <p>";
            // line 12
            echo $this->getAttribute($context["row"], "text", array());
            echo "</p>
      </div>

      <div class=\"";
            // line 15
            if (($this->getAttribute($context["row"], "image", array()) || $this->getAttribute($context["row"], "video", array()))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns feature-media ";
            if (($this->getAttribute($context["row"], "align", array()) == true)) {
                echo "right";
            } else {
                echo "left";
            }
            echo "\">
        ";
            // line 16
            if ($this->getAttribute($context["row"], "image", array())) {
                // line 17
                echo "          ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["row"], "image", array()), array(), "array"), "html", array(), "method");
                echo "
        ";
            }
            // line 19
            echo "        
      </div>

    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "modular/conducting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  89 => 19,  83 => 17,  81 => 16,  67 => 15,  61 => 12,  57 => 11,  43 => 10,  37 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id='conducting'>
 
  <div class=\"row section-head\">
    <h2>{{ page.title }}</h2>
    {{ content }}
  </div>
  {% for row in page.header.blurbs %}
  <div class=\"row feature {{row.blurbheader}}\">

      <div class=\"{% if row.image or row.video %}six{% else %}twelve{% endif %} columns  {% if row.align == true %}left{% else %}right{% endif %}\">
        <h3>{{ row.blurbheader }}</h3>
        <p>{{ row.text }}</p>
      </div>

      <div class=\"{% if row.image or row.video %}six{% else %}twelve{% endif %} columns feature-media {% if row.align == true %}right{% else %}left{% endif %}\">
        {% if row.image %}
          {{ page.media[row.image].html() }}
        {% endif %}
        
      </div>

    </div>
  {% endfor %}

</section>", "modular/conducting.html.twig", "C:\\xampp\\htdocs\\tcm\\user\\themes\\tcmtheme\\templates\\modular\\conducting.html.twig");
    }
}
