<?php

/* core/modules/system/templates/page.html.twig */
class __TwigTemplate_ef37ae4e33d37db92fb76fdfe8aeca5a5cee1118cb3218f322c98284dfbf1289 extends Twig_Template
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
        // line 64
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 67
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 68
            echo "      <a href=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 69
            echo twig_drupal_escape_filter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 72
        echo "
    ";
        // line 73
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 74
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 77
            echo "        ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 78
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 79
                echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 82
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 83
                echo twig_drupal_escape_filter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 86
            echo "
        ";
            // line 87
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 88
                echo "          <div class=\"site-slogan\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "</div>
        ";
            }
            // line 90
            echo "      </div>";
            // line 91
            echo "    ";
        }
        // line 92
        echo "
    ";
        // line 93
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
  </header>

  ";
        // line 96
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
  ";
        // line 97
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true);
        echo "

  ";
        // line 99
        echo twig_drupal_escape_filter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true);
        echo "

  ";
        // line 101
        echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
        echo "

  ";
        // line 103
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 107
        echo "
    <div class=\"layout-content\">
      ";
        // line 109
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "

      ";
        // line 111
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 112
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 113
            echo "        <h1>";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 115
        echo "      ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

      ";
        // line 117
        echo twig_drupal_escape_filter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
        echo "

      ";
        // line 119
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 120
            echo "        <nav class=\"action-links\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</nav>
      ";
        }
        // line 122
        echo "
      ";
        // line 123
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
    </div>";
        // line 125
        echo "
    ";
        // line 126
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 127
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 128
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 131
        echo "
    ";
        // line 132
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 133
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 134
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 137
        echo "
  </main>

  ";
        // line 140
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 141
            echo "    <footer role=\"contentinfo\">
      ";
            // line 142
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 145
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 145,  214 => 142,  211 => 141,  209 => 140,  204 => 137,  198 => 134,  195 => 133,  193 => 132,  190 => 131,  184 => 128,  181 => 127,  179 => 126,  176 => 125,  172 => 123,  169 => 122,  163 => 120,  161 => 119,  156 => 117,  150 => 115,  144 => 113,  142 => 112,  138 => 111,  133 => 109,  129 => 107,  123 => 103,  118 => 101,  113 => 99,  108 => 97,  104 => 96,  98 => 93,  95 => 92,  92 => 91,  90 => 90,  84 => 88,  82 => 87,  79 => 86,  69 => 83,  66 => 82,  56 => 79,  53 => 78,  50 => 77,  46 => 74,  44 => 73,  41 => 72,  33 => 69,  26 => 68,  24 => 67,  19 => 64,);
    }
}
