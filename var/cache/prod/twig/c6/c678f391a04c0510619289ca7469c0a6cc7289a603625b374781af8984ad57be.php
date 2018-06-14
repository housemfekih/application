<?php

/* MgiletNotificationBundle::notifications.html.twig */
class __TwigTemplate_5d4a8856f58f22c6b4249aae12e402517fac7711ad129e486525f14d0e0c9585 extends Twig_Template
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
        echo "Notifications :
<form action=\"";
        // line 2
        echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_all_as_seen", $this->getAttribute(twig_first($this->env, ($context["notifiableNotifications"] ?? null)), "notifiableEntity", array()));
        echo "\"
      method=\"post\">
    <button type=\"submit\">Mark all as seen</button>
</form>
<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifiableNotifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["notifiableNotification"]) {
            // line 8
            echo "        <li>
            <b>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["notifiableNotification"], "notification", array()), "html", null, true);
            echo "</b>
            <br>
            seen : ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["notifiableNotification"], "seen", array()), "html", null, true);
            echo "
            <form action=\"";
            // line 12
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_seen", $this->getAttribute($context["notifiableNotification"], "notifiableEntity", array()), $this->getAttribute($context["notifiableNotification"], "notification", array()));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"";
            // line 16
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_as_unseen", $this->getAttribute($context["notifiableNotification"], "notifiableEntity", array()), $this->getAttribute($context["notifiableNotification"], "notification", array()));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifiableNotification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "MgiletNotificationBundle::notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  53 => 16,  46 => 12,  42 => 11,  37 => 9,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MgiletNotificationBundle::notifications.html.twig", "/home/houssem/myApp/vendor/mgilet/notification-bundle/Resources/views/notifications.html.twig");
    }
}
