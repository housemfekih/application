<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_message.validator.reply_authorization' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Validator/ReplyAuthorizationValidator.php';

return $this->services['fos_message.validator.reply_authorization'] = new \FOS\MessageBundle\Validator\ReplyAuthorizationValidator(${($_ = isset($this->services['fos_message.authorizer']) ? $this->services['fos_message.authorizer'] : $this->getFosMessage_AuthorizerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_message.participant_provider']) ? $this->services['fos_message.participant_provider'] : $this->getFosMessage_ParticipantProviderService()) && false ?: '_'});
