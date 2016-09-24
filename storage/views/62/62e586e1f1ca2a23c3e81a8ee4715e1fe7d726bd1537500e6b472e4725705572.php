<?php

/* layouts/default.twig.php */
class __TwigTemplate_ed230b75f19999e3d739c1fd87b3e8c8cf894ead86d2e3bc561d5eeb0117e548 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 5
        echo $this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "get", array(0 => "title"), "method");
        echo "</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
  ";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "asset", array(), "method"), "styles", array(), "method");
        echo "
  ";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "asset", array(), "method"), "scripts", array(), "method");
        echo "
</head>
<body>
  <header class=\"header\">
    <!-- hero -->
    <div class=\"container\">
      <div class=\"hero-unit\">
        <div class=\"row\">
          <div class=\"hidden-xs col-md-6 col-lg-6 text-center\">
            <img src=\"";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "asset", array(), "method"), "url", array(0 => "img/flash-cms.png"), "method");
        echo "\" 
                 alt=\"Flash CMS - A starter application for your MVP Product\">
          </div>
          <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-5\">
            <div class=\"content\">
              <h1>Flash CMS</h1>
              <h3>A starter application for your MVP product</h3>
              <p class=\"description\">Speed up your MVP product using Flash CMS. <br> Built in minutes and running your product right now.</p>
              <p>
                <a href=\"#\" 
                   target=\"_blank\"
                   class=\"btn btn-primary btn-large\">Documentation</a>
              </p>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //hero -->
  </header>
  <!-- <div class=\"services\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h1 class=\"text-center\">We’re Ready to Help You Grow</h1>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-2\">
          <div class=\"box-footer\">
            <h5>Connect With Us</h5>
            <ul class=\"social-icons\">
              <li>
                <a href=\"//facebook.com/kodrindonesia/\" target=\"_blank\">
                  <i class=\"fa fa-facebook-official\"></i>
                </a>
              </li>
              <li>
                <a href=\"https://www.linkedin.com/company/kodr-indonesia\" target=\"_blank\">
                  <i class=\"fa fa-linkedin\"></i>
                </a>
              </li>
              <li>
                <a href=\"https://github.com/kodrindonesia\" target=\"_blank\">
                  <i class=\"fa fa-github\"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"box-footer\">
            <h5>Our Location</h5>
            <i class=\"fa fa-map-marker\"></i> 
            <p>Bumi Panyileukan E8 No. 22 <br>
            Panyileukan - Bandung <br>
            West Java - Indonesia</p>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"box-footer\">
            <h5>Need Technical Consultation?</h5>
            <i class=\"fa fa-phone\"></i> 
            <p>Get a quick consultation for your MVP without charges, <a href=\"tel:+6281221123901\">Call Now +6281221123901</a></p>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"box-footer\">
            <h5>Need a Quote?</h5>
            <i class=\"fa fa-envelope\"></i> 
            <p>
              Get a quote for your MVP, send your requirements to <a href=\"mailto:halo@kodrindonesia.com\">halo@kodrindonesia.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  ";
        // line 94
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "asset", array(), "method"), "container", array(0 => "footer"), "method"), "scripts", array(), "method");
        echo "
</body>
</html>

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 101
        echo $this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "get", array(0 => "title"), "method");
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"keywords\" content=\"";
        // line 103
        echo $this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "get", array(0 => "keywords"), "method");
        echo "\">
        <meta name=\"description\" content=\"";
        // line 104
        echo $this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "get", array(0 => "description"), "method");
        echo "\">
        ";
        // line 105
        echo $this->getAttribute($this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "asset", array(), "method"), "styles", array(), "method");
        echo "
        ";
        // line 106
        echo $this->getAttribute($this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "asset", array(), "method"), "scripts", array(), "method");
        echo "
    </head>
    <body>
        ";
        // line 109
        echo $this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "partial", array(0 => "header"), "method");
        echo "

        <div class=\"container\">
            ";
        // line 112
        echo $this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "content", array(), "method");
        echo "
        </div>

        ";
        // line 115
        echo $this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "partial", array(0 => "footer"), "method");
        echo "

        ";
        // line 117
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["Theme"]) ? $context["Theme"] : null), "asset", array(), "method"), "container", array(0 => "footer"), "method"), "scripts", array(), "method");
        echo "
    </body>
</html> -->";
    }

    public function getTemplateName()
    {
        return "layouts/default.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 117,  171 => 115,  165 => 112,  159 => 109,  153 => 106,  149 => 105,  145 => 104,  141 => 103,  136 => 101,  126 => 94,  46 => 17,  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>{{ Theme.get('title') }}</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
  {{ Theme.asset().styles() }}
  {{ Theme.asset().scripts() }}
</head>
<body>
  <header class=\"header\">
    <!-- hero -->
    <div class=\"container\">
      <div class=\"hero-unit\">
        <div class=\"row\">
          <div class=\"hidden-xs col-md-6 col-lg-6 text-center\">
            <img src=\"{{ Theme.asset().url('img/flash-cms.png') }}\" 
                 alt=\"Flash CMS - A starter application for your MVP Product\">
          </div>
          <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-5\">
            <div class=\"content\">
              <h1>Flash CMS</h1>
              <h3>A starter application for your MVP product</h3>
              <p class=\"description\">Speed up your MVP product using Flash CMS. <br> Built in minutes and running your product right now.</p>
              <p>
                <a href=\"#\" 
                   target=\"_blank\"
                   class=\"btn btn-primary btn-large\">Documentation</a>
              </p>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //hero -->
  </header>
  <!-- <div class=\"services\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h1 class=\"text-center\">We’re Ready to Help You Grow</h1>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-2\">
          <div class=\"box-footer\">
            <h5>Connect With Us</h5>
            <ul class=\"social-icons\">
              <li>
                <a href=\"//facebook.com/kodrindonesia/\" target=\"_blank\">
                  <i class=\"fa fa-facebook-official\"></i>
                </a>
              </li>
              <li>
                <a href=\"https://www.linkedin.com/company/kodr-indonesia\" target=\"_blank\">
                  <i class=\"fa fa-linkedin\"></i>
                </a>
              </li>
              <li>
                <a href=\"https://github.com/kodrindonesia\" target=\"_blank\">
                  <i class=\"fa fa-github\"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"box-footer\">
            <h5>Our Location</h5>
            <i class=\"fa fa-map-marker\"></i> 
            <p>Bumi Panyileukan E8 No. 22 <br>
            Panyileukan - Bandung <br>
            West Java - Indonesia</p>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"box-footer\">
            <h5>Need Technical Consultation?</h5>
            <i class=\"fa fa-phone\"></i> 
            <p>Get a quick consultation for your MVP without charges, <a href=\"tel:+6281221123901\">Call Now +6281221123901</a></p>
          </div>
        </div>
        <div class=\"col-md-3\">
          <div class=\"box-footer\">
            <h5>Need a Quote?</h5>
            <i class=\"fa fa-envelope\"></i> 
            <p>
              Get a quote for your MVP, send your requirements to <a href=\"mailto:halo@kodrindonesia.com\">halo@kodrindonesia.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  {{ Theme.asset().container('footer').scripts() }}
</body>
</html>

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme.get('title') }}</title>
        <meta charset=\"utf-8\">
        <meta name=\"keywords\" content=\"{{ Theme.get('keywords') }}\">
        <meta name=\"description\" content=\"{{ Theme.get('description') }}\">
        {{ Theme.asset().styles() }}
        {{ Theme.asset().scripts() }}
    </head>
    <body>
        {{ Theme.partial('header') }}

        <div class=\"container\">
            {{ Theme.content() }}
        </div>

        {{ Theme.partial('footer') }}

        {{ Theme.asset().container('footer').scripts() }}
    </body>
</html> -->";
    }
}
