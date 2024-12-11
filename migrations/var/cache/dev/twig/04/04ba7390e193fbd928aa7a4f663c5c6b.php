<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front/index.html.twig */
class __TwigTemplate_1a7b85cb3f4397ad72aac967227ae47c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'heroSection' => [$this, 'block_heroSection'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "front/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " - Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_heroSection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heroSection"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "heroSection"));

        // line 6
        echo "    <section id=\"hero\" class=\"d-flex justify-content-center align-items-center\">
        <div class=\"container position-relative\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <h1>Learning Today,<br>Leading Tomorrow</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href=\"courses.html\" class=\"btn-get-started\">Get Started</a>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    
    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">
          <div class=\"col-lg-6 order-1 order-lg-2\" data-aos=\"fade-left\" data-aos-delay=\"100\">
            <img src=\"assets/img/about.jpg\" class=\"img-fluid\" alt=\"\">
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class=\"fst-italic\">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"bi bi-check-circle\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class=\"bi bi-check-circle\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class=\"bi bi-check-circle\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts section-bg\">
      <div class=\"container\">

        <div class=\"row counters\">

          <div class=\"col-lg-3 col-6 text-center\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"1232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Students</p>
          </div>

          <div class=\"col-lg-3 col-6 text-center\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"64\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Courses</p>
          </div>

          <div class=\"col-lg-3 col-6 text-center\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"42\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Anciens sujets</p>
          </div>

          <div class=\"col-lg-3 col-6 text-center\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">
          <div class=\"col-lg-4 d-flex align-items-stretch\">
            <div class=\"content\">
              <h3>Pourquoi Choisir Kulmapeck?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class=\"text-center\">
                <a href=\"about.html\" class=\"more-btn\">Learn More <i class=\"bx bx-chevron-right\"></i></a>
              </div>
            </div>
          </div>
          <div class=\"col-lg-8 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"icon-boxes d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-receipt\"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-cube-alt\"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-images\"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id=\"features\" class=\"features\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
          <div class=\"col-lg-3 col-md-4\">
            <div class=\"icon-box\">
              <i class=\"ri-store-line\" style=\"color: #ffbb2c;\"></i>
              <h3><a href=\"\">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-bar-chart-box-line\" style=\"color: #5578ff;\"></i>
              <h3><a href=\"\">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-calendar-todo-line\" style=\"color: #e80368;\"></i>
              <h3><a href=\"\">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-lg-0\">
            <div class=\"icon-box\">
              <i class=\"ri-paint-brush-line\" style=\"color: #e361ff;\"></i>
              <h3><a href=\"\">Magni Dolores</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-database-2-line\" style=\"color: #47aeff;\"></i>
              <h3><a href=\"\">Nemo Enim</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-gradienter-line\" style=\"color: #ffa76e;\"></i>
              <h3><a href=\"\">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-file-list-3-line\" style=\"color: #11dbcf;\"></i>
              <h3><a href=\"\">Midela Teren</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-price-tag-2-line\" style=\"color: #4233ff;\"></i>
              <h3><a href=\"\">Pira Neve</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-anchor-line\" style=\"color: #b2904f;\"></i>
              <h3><a href=\"\">Dirada Pack</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-disc-line\" style=\"color: #b20969;\"></i>
              <h3><a href=\"\">Moton Ideal</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-base-station-line\" style=\"color: #ff5828;\"></i>
              <h3><a href=\"\">Verdo Park</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-fingerprint-line\" style=\"color: #29cc61;\"></i>
              <h3><a href=\"\">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id=\"popular-courses\" class=\"courses\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-title\">
                <h2>Courses</h2>
                <p>Popular Courses</p>
            </div>

            <div class=\"row\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    ";
        // line 219
        echo twig_include($this->env, $context, "front/includes/course_item.html.twig");
        echo "
                </div>
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    ";
        // line 222
        echo twig_include($this->env, $context, "front/includes/course_item.html.twig");
        echo "
                </div>
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    ";
        // line 225
        echo twig_include($this->env, $context, "front/includes/course_item.html.twig");
        echo "
                </div>
            </div>

        </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id=\"trainers\" class=\"trainers\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    ";
        // line 238
        echo twig_include($this->env, $context, "front/includes/teacher_item.html.twig");
        echo "
                </div>
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    ";
        // line 241
        echo twig_include($this->env, $context, "front/includes/teacher_item.html.twig");
        echo "
                </div>
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    ";
        // line 244
        echo twig_include($this->env, $context, "front/includes/teacher_item.html.twig");
        echo "
                </div>
            </div>

        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 244,  355 => 241,  349 => 238,  333 => 225,  327 => 222,  321 => 219,  116 => 16,  106 => 15,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %} - Index{% endblock %}

{% block heroSection %}
    <section id=\"hero\" class=\"d-flex justify-content-center align-items-center\">
        <div class=\"container position-relative\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <h1>Learning Today,<br>Leading Tomorrow</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href=\"courses.html\" class=\"btn-get-started\">Get Started</a>
        </div>
    </section>
{% endblock %}

{% block main %}
    
    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">
          <div class=\"col-lg-6 order-1 order-lg-2\" data-aos=\"fade-left\" data-aos-delay=\"100\">
            <img src=\"assets/img/about.jpg\" class=\"img-fluid\" alt=\"\">
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class=\"fst-italic\">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"bi bi-check-circle\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class=\"bi bi-check-circle\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class=\"bi bi-check-circle\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts section-bg\">
      <div class=\"container\">

        <div class=\"row counters\">

          <div class=\"col-lg-3 col-6 text-center\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"1232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Students</p>
          </div>

          <div class=\"col-lg-3 col-6 text-center\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"64\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Courses</p>
          </div>

          <div class=\"col-lg-3 col-6 text-center\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"42\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Anciens sujets</p>
          </div>

          <div class=\"col-lg-3 col-6 text-center\">
            <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">
          <div class=\"col-lg-4 d-flex align-items-stretch\">
            <div class=\"content\">
              <h3>Pourquoi Choisir Kulmapeck?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class=\"text-center\">
                <a href=\"about.html\" class=\"more-btn\">Learn More <i class=\"bx bx-chevron-right\"></i></a>
              </div>
            </div>
          </div>
          <div class=\"col-lg-8 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"icon-boxes d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-receipt\"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-cube-alt\"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-images\"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id=\"features\" class=\"features\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
          <div class=\"col-lg-3 col-md-4\">
            <div class=\"icon-box\">
              <i class=\"ri-store-line\" style=\"color: #ffbb2c;\"></i>
              <h3><a href=\"\">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-bar-chart-box-line\" style=\"color: #5578ff;\"></i>
              <h3><a href=\"\">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-calendar-todo-line\" style=\"color: #e80368;\"></i>
              <h3><a href=\"\">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-lg-0\">
            <div class=\"icon-box\">
              <i class=\"ri-paint-brush-line\" style=\"color: #e361ff;\"></i>
              <h3><a href=\"\">Magni Dolores</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-database-2-line\" style=\"color: #47aeff;\"></i>
              <h3><a href=\"\">Nemo Enim</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-gradienter-line\" style=\"color: #ffa76e;\"></i>
              <h3><a href=\"\">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-file-list-3-line\" style=\"color: #11dbcf;\"></i>
              <h3><a href=\"\">Midela Teren</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-price-tag-2-line\" style=\"color: #4233ff;\"></i>
              <h3><a href=\"\">Pira Neve</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-anchor-line\" style=\"color: #b2904f;\"></i>
              <h3><a href=\"\">Dirada Pack</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-disc-line\" style=\"color: #b20969;\"></i>
              <h3><a href=\"\">Moton Ideal</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-base-station-line\" style=\"color: #ff5828;\"></i>
              <h3><a href=\"\">Verdo Park</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-fingerprint-line\" style=\"color: #29cc61;\"></i>
              <h3><a href=\"\">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id=\"popular-courses\" class=\"courses\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"section-title\">
                <h2>Courses</h2>
                <p>Popular Courses</p>
            </div>

            <div class=\"row\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    {{ include('front/includes/course_item.html.twig') }}
                </div>
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    {{ include('front/includes/course_item.html.twig') }}
                </div>
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    {{ include('front/includes/course_item.html.twig') }}
                </div>
            </div>

        </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id=\"trainers\" class=\"trainers\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    {{ include('front/includes/teacher_item.html.twig') }}
                </div>
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    {{ include('front/includes/teacher_item.html.twig') }}
                </div>
                <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch\">
                    {{ include('front/includes/teacher_item.html.twig') }}
                </div>
            </div>

        </div>
    </section>

{% endblock %}
", "front/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\index.html.twig");
    }
}