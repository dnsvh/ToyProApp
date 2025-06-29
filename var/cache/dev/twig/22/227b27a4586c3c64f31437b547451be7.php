<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Maker/security/Voter.tpl.php */
class __TwigTemplate_ee65700d0f83c9f880df659182e558aa extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/security/Voter.tpl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Maker/security/Voter.tpl.php"));

        // line 1
        yield "<?= \"<?php\\n\" ?>

namespace <?= \$class_data->getNamespace(); ?>;

<?= \$class_data->getUseStatements(); ?>

<?= \$class_data->getClassDeclaration() ?>

{
    public const EDIT = 'POST_EDIT';
    public const VIEW = 'POST_VIEW';

    protected function supports(string \$attribute, mixed \$subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array(\$attribute, [self::EDIT, self::VIEW])
            && \$subject instanceof \\App\\Entity\\<?= str_replace('Voter', null, \$class_data->getClassName()) ?>;
    }

    protected function voteOnAttribute(string \$attribute, mixed \$subject, TokenInterface \$token): bool
    {
        \$user = \$token->getUser();
        // if the user is anonymous, do not grant access
        if (!\$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch (\$attribute) {
            case self::EDIT:
                // logic to determine if the user can EDIT
                // return true or false
                break;
            case self::VIEW:
                // logic to determine if the user can VIEW
                // return true or false
                break;
        }

        return false;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Maker/security/Voter.tpl.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$class_data->getNamespace(); ?>;

<?= \$class_data->getUseStatements(); ?>

<?= \$class_data->getClassDeclaration() ?>

{
    public const EDIT = 'POST_EDIT';
    public const VIEW = 'POST_VIEW';

    protected function supports(string \$attribute, mixed \$subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array(\$attribute, [self::EDIT, self::VIEW])
            && \$subject instanceof \\App\\Entity\\<?= str_replace('Voter', null, \$class_data->getClassName()) ?>;
    }

    protected function voteOnAttribute(string \$attribute, mixed \$subject, TokenInterface \$token): bool
    {
        \$user = \$token->getUser();
        // if the user is anonymous, do not grant access
        if (!\$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch (\$attribute) {
            case self::EDIT:
                // logic to determine if the user can EDIT
                // return true or false
                break;
            case self::VIEW:
                // logic to determine if the user can VIEW
                // return true or false
                break;
        }

        return false;
    }
}
", "@Maker/security/Voter.tpl.php", "C:\\Projects\\TP\\ToyProApp\\vendor\\symfony\\maker-bundle\\templates\\security\\Voter.tpl.php");
    }
}
