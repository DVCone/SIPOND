<?php

/* layouts/auth.php */
class __TwigTemplate_bb67b82282d6f5544da4df67849bd8f932a7e63911bfd1f6e1b3b8355b09f28c extends Twig_Template
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
        echo "<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed tidak');
//session_start();

\$pengguna = \$this->session->userdata('username');
if ( \$pengguna == \"\"){
\t\$this->load->view('signin');
\texit;//('Maaf. Alamat Yang Anda Ketikan Salah');
}
?>
";
    }

    public function getTemplateName()
    {
        return "layouts/auth.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed tidak');
//session_start();

\$pengguna = \$this->session->userdata('username');
if ( \$pengguna == \"\"){
\t\$this->load->view('signin');
\texit;//('Maaf. Alamat Yang Anda Ketikan Salah');
}
?>
", "layouts/auth.php", "/home/sipy1897/public_html/demo/apliku/views/layouts/auth.php");
    }
}
