<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_message.recipients_selector' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/DataTransformerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/DataTransformer/RecipientsDataTransformer.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/FormType/RecipientsType.php';

return $this->services['fos_message.recipients_selector'] = new \FOS\MessageBundle\FormType\RecipientsType(new \FOS\MessageBundle\DataTransformer\RecipientsDataTransformer(${($_ = isset($this->services['fos_user.user_to_username_transformer']) ? $this->services['fos_user.user_to_username_transformer'] : $this->load('getFosUser_UserToUsernameTransformerService.php')) && false ?: '_'}));
