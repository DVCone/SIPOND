<?php

/* auth/login.twig */
class __TwigTemplate_f6dc2819b912fe7681c77cff1a2e56f7036eb6f7bf447b003a62abab85c219a8 extends Twig_Template
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
        echo "<h1>";
        echo lang("login_heading");
        echo "</h1>
<p>";
        // line 2
        echo lang("login_subheading");
        echo "</p>

<div id=\"infoMessage\">
   ";
        // line 5
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "
</div>

";
        // line 8
        echo form_open("auth/login");
        echo "

<p>
   ";
        // line 11
        echo lang("login_identity_label", "identiy");
        echo "
   ";
        // line 12
        echo form_input(($context["identity"] ?? null));
        echo "
</p>

<p>
   ";
        // line 16
        echo lang("login_password_label", "password");
        echo "
   ";
        // line 17
        echo form_input(($context["password"] ?? null));
        echo "
</p>

<p>
   ";
        // line 21
        echo lang("login_remember_label", "remember");
        echo "
   ";
        // line 22
        echo form_checkbox("remember", "1", false, "id=\"remember\"");
        echo "
</p>

<p>
   ";
        // line 26
        echo form_submit("submit", lang("login_submit_btn"));
        echo "
</p>



";
        // line 31
        echo form_close();
        echo "

<p>
   <a href=\"forgot_password\">";
        // line 34
        echo lang("login_forgot_password");
        echo "</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  83 => 31,  75 => 26,  68 => 22,  64 => 21,  57 => 17,  53 => 16,  46 => 12,  42 => 11,  36 => 8,  30 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ lang('login_heading') }}</h1>
<p>{{ lang('login_subheading') }}</p>

<div id=\"infoMessage\">
   {{ message }}
</div>

{{ form_open(\"auth/login\") }}

<p>
   {{ lang('login_identity_label', 'identiy') }}
   {{ form_input(identity) }}
</p>

<p>
   {{ lang('login_password_label', 'password') }}
   {{ form_input(password) }}
</p>

<p>
   {{ lang('login_remember_label', 'remember') }}
   {{ form_checkbox('remember', '1', FALSE, 'id=\"remember\"') }}
</p>

<p>
   {{ form_submit('submit', lang('login_submit_btn')) }}
</p>



{{ form_close() }}

<p>
   <a href=\"forgot_password\">{{ lang('login_forgot_password') }}</a>
</p>
", "auth/login.twig", "/home/sipy1897/public_html/demo/apliku/views/auth/login.twig");
    }
}
