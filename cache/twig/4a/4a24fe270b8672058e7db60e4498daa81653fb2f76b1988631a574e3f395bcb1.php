<?php

/* modular/about.html.twig */
class __TwigTemplate_d7023c21940bf46bbd1c9b4beadb4d5bdc47ac714da6d9d233258f2eae16f504 extends Twig_Template
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
        echo "<section id='about'>
  <div class=\"row section-head feature\">
    <h2>";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
    ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
  </div>
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "    <div class=\"row feature ";
            echo $this->getAttribute($context["row"], "name", array());
            echo "\">

      <div class=\"";
            // line 9
            if (($this->getAttribute($context["row"], "image", array()) || $this->getAttribute($context["row"], "video", array()))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns ";
            echo $this->getAttribute($context["row"], "description_position", array());
            echo "\">
        <h3>";
            // line 10
            echo $this->getAttribute($context["row"], "title", array());
            echo "</h3>
        <p>";
            // line 11
            echo $this->getAttribute($context["row"], "description", array());
            echo "</p>
      </div>

      <div class=\"";
            // line 14
            if (($this->getAttribute($context["row"], "image", array()) || $this->getAttribute($context["row"], "video", array()))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns feature-media ";
            if (($this->getAttribute($context["row"], "description_position", array()) == "right")) {
                echo "left";
            } else {
                echo "right";
            }
            echo "\">
        ";
            // line 15
            if ($this->getAttribute($context["row"], "image", array())) {
                // line 16
                echo "          ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["row"], "image", array()), array(), "array"), "html", array(), "method");
                echo "
        ";
            }
            // line 18
            echo "        ";
            if ($this->getAttribute($context["row"], "video", array())) {
                // line 19
                echo "          <div class=\"fluid-video-wrapper\">
            <iframe src=\"";
                // line 20
                echo $this->getAttribute($context["row"], "video", array());
                echo "?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
          </div>
        ";
            }
            // line 23
            echo "      </div>

    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "modular/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 27,  96 => 23,  90 => 20,  87 => 19,  84 => 18,  78 => 16,  76 => 15,  62 => 14,  56 => 11,  52 => 10,  42 => 9,  36 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id='about'>
  <div class=\"row section-head feature\">
    <h2>{{ page.title }}</h2>
    {{ content }}
  </div>
  {% for row in page.header.rows %}
    <div class=\"row feature {{row.name}}\">

      <div class=\"{% if row.image or row.video %}six{% else %}twelve{% endif %} columns {{ row.description_position }}\">
        <h3>{{ row.title }}</h3>
        <p>{{ row.description }}</p>
      </div>

      <div class=\"{% if row.image or row.video %}six{% else %}twelve{% endif %} columns feature-media {% if row.description_position == 'right' %}left{% else %}right{% endif %}\">
        {% if row.image %}
          {{ page.media[row.image].html() }}
        {% endif %}
        {% if row.video %}
          <div class=\"fluid-video-wrapper\">
            <iframe src=\"{{ row.video }}?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
          </div>
        {% endif %}
      </div>

    </div>
  {% endfor %}

</section>", "modular/about.html.twig", "C:\\xampp\\htdocs\\tcm\\user\\themes\\tcmtheme\\templates\\modular\\about.html.twig");
    }
}
