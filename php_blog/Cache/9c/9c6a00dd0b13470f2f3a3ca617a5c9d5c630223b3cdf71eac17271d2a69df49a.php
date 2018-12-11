<?php

/* Blogs/newBlog.html */
class __TwigTemplate_650f65f9debcfc9a64ef033129fadfcf29e53927f20ae1443f89fb4bf2ce608f extends Twig_Template
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
<form action=\"Lib/createBlog.php\" method=\"POST\">
    <label>Title <input type=\"text\" maxlength=\"64\" name=\"title\" required></label> </br>
    <label>Owner id <input type=\"number\" maxlength=\"64\" name=\"ownerid\" required></label> </br>
    <input type=\"submit\" name=\"Valider\">
</form>";
    }

    public function getTemplateName()
    {
        return "Blogs/newBlog.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<form action=\"Lib/createBlog.php\" method=\"POST\">
    <label>Title <input type=\"text\" maxlength=\"64\" name=\"title\" required></label> </br>
    <label>Owner id <input type=\"number\" maxlength=\"64\" name=\"ownerid\" required></label> </br>
    <input type=\"submit\" name=\"Valider\">
</form>", "Blogs/newBlog.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\Blogs\\newBlog.html");
    }
}
