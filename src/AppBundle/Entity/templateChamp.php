<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * templateChamp
 *
 * @ORM\Table(name="template_champ")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\templateChampRepository")
 */
class templateChamp
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="templateId", type="integer")
     */
    private $templateId;

    /**
     * @var int
     *
     * @ORM\Column(name="sectionId", type="integer")
     */
    private $sectionId;

    /**
     * @var int
     *
     * @ORM\Column(name="champId", type="integer")
     */
    private $champId;

    /**
     * @var text
     *
     * @ORM\Column(name="contenu", type="text",nullable=true)
     */
    private $contenu;
	
	/**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cv",cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $cvID;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return templateChamp
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set templateId
     *
     * @param integer $templateId
     *
     * @return templateChamp
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * Get templateId
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set sectionId
     *
     * @param integer $sectionId
     *
     * @return templateChamp
     */
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;

        return $this;
    }

    /**
     * Get sectionId
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * Set champId
     *
     * @param integer $champId
     *
     * @return templateChamp
     */
    public function setChampId($champId)
    {
        $this->champId = $champId;

        return $this;
    }

    /**
     * Get champId
     *
     * @return int
     */
    public function getChampId()
    {
        return $this->champId;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return templateChamp
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set cvID
     *
     * @param \AppBundle\Entity\Cv $cvID
     *
     * @return templateChamp
     */
    public function setCvID(\AppBundle\Entity\Cv $cvID)
    {
        $this->cvID = $cvID;

        return $this;
    }

    /**
     * Get cvID
     *
     * @return \AppBundle\Entity\Cv
     */
    public function getCvID()
    {
        return $this->cvID;
    }
}
