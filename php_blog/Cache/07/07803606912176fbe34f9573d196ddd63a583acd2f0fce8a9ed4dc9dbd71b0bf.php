<?php

/* default.html */
class __TwigTemplate_213e40b0264f7d48c060dbe62832d99306a8c7b17e0c29eed20f2964b028b79f extends Twig_Template
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
        echo "<h1>Bienvenue sur Blog du Ciel !</h1>
<p>Venez raconter votre vie, même si tout le monde s'en fout</p>";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Bienvenue sur Blog du Ciel !</h1>
<p>Venez raconter votre vie, même si tout le monde s'en fout</p>", "default.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\default.html");
    }
}
