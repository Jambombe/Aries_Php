<?php

/* Blogs/oneBlog.html */
class __TwigTemplate_12fa5a5218911f6c0fe70a652be5159e44d13c8ccb2b6f28a3379f8db95a440f extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), 0, array()), "title", array()), "html", null, true);
        echo "</h1>
<p> Crée par <b>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), 0, array()), "username", array()), "html", null, true);
        echo "</b> le ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), 0, array()), "creationDate", array()), "html", null, true);
        echo "</p>

<div class=\"articles\">
    ";
        // line 5
        $this->loadTemplate("Articles/artFromBlog.html", "Blogs/oneBlog.html", 5)->display($context);
        // line 6
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "Blogs/oneBlog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  36 => 5,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{blog.0.title}}</h1>
<p> Crée par <b>{{blog.0.username}}</b> le {{blog.0.creationDate}}</p>

<div class=\"articles\">
    {% include 'Articles/artFromBlog.html' %}
</div>


", "Blogs/oneBlog.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\Blogs\\oneBlog.html");
    }
}
