<?php

/* MgiletNotificationBundle::notifications.html.twig */
class __TwigTemplate_c03d39668e568d227f34b131977bd8a51719b7dd1f95ff5754b165c52db9b623 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notifications.html.twig"));

        // line 1
        echo "Notifications :
<form action=\"";
        // line 2
        echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->generatePath("notification_mark_all_as_seen", $this->getAttribute(twig_first($this->env, ($context["notifiableNotifications"] ?? $this->getContext($context, "notifiableNotifications"))), "notifiableEntity", array()));
        echo "\"
      method=\"post\">
    <button type=\"submit\">Mark all as seen</button>
</form>
<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notifiableNotifications"] ?? $this->getContext($context, "notifiableNotifications")));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  71 => 22,  59 => 16,  52 => 12,  48 => 11,  43 => 9,  40 => 8,  36 => 7,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Notifications :
<form action=\"{{ mgilet_notification_generate_path('notification_mark_all_as_seen', notifiableNotifications|first.notifiableEntity) }}\"
      method=\"post\">
    <button type=\"submit\">Mark all as seen</button>
</form>
<ul>
    {% for notifiableNotification in notifiableNotifications %}
        <li>
            <b>{{ notifiableNotification.notification }}</b>
            <br>
            seen : {{ notifiableNotification.seen }}
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_seen', notifiableNotification.notifiableEntity, notifiableNotification.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_unseen', notifiableNotification.notifiableEntity, notifiableNotification.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    {% endfor %}
</ul>
", "MgiletNotificationBundle::notifications.html.twig", "/home/houssem/myApp/vendor/mgilet/notification-bundle/Resources/views/notifications.html.twig");
    }
}
