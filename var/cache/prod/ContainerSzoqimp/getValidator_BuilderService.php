<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.builder' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ContainerConstraintValidatorFactory.php';
include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/AdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/PruneableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/ResettableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/ProxyTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/PhpArrayTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/PhpArrayAdapter.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Mapping/Cache/CacheInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Mapping/Cache/Psr6Cache.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ObjectInitializerInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Validator/Initializer.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Validation.php';

$this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

$instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('FOS\\MessageBundle\\Validator\\AuthorizationValidator' => function () {
    return ${($_ = isset($this->services['fos_message.validator.authorization']) ? $this->services['fos_message.validator.authorization'] : $this->load('getFosMessage_Validator_AuthorizationService.php')) && false ?: '_'};
}, 'FOS\\MessageBundle\\Validator\\ReplyAuthorizationValidator' => function () {
    return ${($_ = isset($this->services['fos_message.validator.reply_authorization']) ? $this->services['fos_message.validator.reply_authorization'] : $this->load('getFosMessage_Validator_ReplyAuthorizationService.php')) && false ?: '_'};
}, 'FOS\\MessageBundle\\Validator\\SelfRecipientValidator' => function () {
    return ${($_ = isset($this->services['fos_message.validator.self_recipient']) ? $this->services['fos_message.validator.self_recipient'] : $this->load('getFosMessage_Validator_SelfRecipientService.php')) && false ?: '_'};
}, 'FOS\\MessageBundle\\Validator\\SpamValidator' => function () {
    return ${($_ = isset($this->services['fos_message.validator.spam']) ? $this->services['fos_message.validator.spam'] : $this->load('getFosMessage_Validator_SpamService.php')) && false ?: '_'};
}, 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
    return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
    return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
    return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false)) && false ?: '_'};
}, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
    return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
}, 'doctrine.orm.validator.unique' => function () {
    return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load('getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
}, 'fos_message.validator.authorization' => function () {
    return ${($_ = isset($this->services['fos_message.validator.authorization']) ? $this->services['fos_message.validator.authorization'] : $this->load('getFosMessage_Validator_AuthorizationService.php')) && false ?: '_'};
}, 'fos_message.validator.reply_authorization' => function () {
    return ${($_ = isset($this->services['fos_message.validator.reply_authorization']) ? $this->services['fos_message.validator.reply_authorization'] : $this->load('getFosMessage_Validator_ReplyAuthorizationService.php')) && false ?: '_'};
}, 'fos_message.validator.self_recipient' => function () {
    return ${($_ = isset($this->services['fos_message.validator.self_recipient']) ? $this->services['fos_message.validator.self_recipient'] : $this->load('getFosMessage_Validator_SelfRecipientService.php')) && false ?: '_'};
}, 'fos_message.validator.spam' => function () {
    return ${($_ = isset($this->services['fos_message.validator.spam']) ? $this->services['fos_message.validator.spam'] : $this->load('getFosMessage_Validator_SpamService.php')) && false ?: '_'};
}, 'security.validator.user_password' => function () {
    return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
}, 'validator.expression' => function () {
    return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
}))));
$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
$instance->setTranslationDomain('validators');
$instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/config/validation.xml')));
$instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
$instance->addMethodMapping('loadValidatorMetadata');
$instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->load('getCache_ValidatorService.php')) && false ?: '_'})));
$instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->load('getDoctrine_Orm_ValidatorInitializerService.php')) && false ?: '_'}, 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'})));
$instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

return $instance;
