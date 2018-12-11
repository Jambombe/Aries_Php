<?php

/* Articles/artFromBlog.html */
class __TwigTemplate_7583c1c14b9bbbdf15ee41c627df3a5060e709d5ae6d39b070405ad9cda95f05 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!--
    Template inclus dans Blogs/oneBlog.html
    L'array 'articles' existe là-bas
-->
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 7
            echo "        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", array()), "html", null, true);
            echo "</h5>
            <h6 class=\"card-subtitle mb-2 text-muted\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "artDate", array()), "html", null, true);
            echo "</h6>
            <p class=\"card-text\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "content", array()), "html", null, true);
            echo "</p>
          </div>
        </div>
        </br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Articles/artFromBlog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  38 => 9,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!--
    Template inclus dans Blogs/oneBlog.html
    L'array 'articles' existe là-bas
-->
    {% for a in articles %}
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">{{a.title}}</h5>
            <h6 class=\"card-subtitle mb-2 text-muted\">{{a.artDate}}</h6>
            <p class=\"card-text\">{{a.content}}</p>
          </div>
        </div>
        </br>
    {% endfor %}", "Articles/artFromBlog.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\Articles\\artFromBlog.html");
    }
}
