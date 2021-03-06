<?php

namespace EspritEntreAide\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Demande
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="EspritEntreAide\StoreBundle\Repository\DemandeRepository")
 */
class Demande
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
     * @ORM\ManyToOne(targetEntity="EspritEntreAide\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity="EspritEntreAide\StoreBundle\Entity\Store")
     * @ORM\JoinColumn(name="id_store",referencedColumnName="id")
     */
    private $idStore;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_demande", type="string", length=255, nullable=true)
     */
    private $etatDemande;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_copie", type="integer", nullable=true)
     */
    private $nbrCopie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="date", nullable=true)
     */
    private $dateModif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deadline", type="datetime", nullable=true)
     */
    private $deadline;

    /**
     * @ORM\ManyToMany(targetEntity="EspritEntreAide\StoreBundle\Entity\Document",inversedBy="demande")
     */
    private $document;



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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Demande
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idStore
     *
     * @param integer $idStore
     *
     * @return Demande
     */
    public function setIdStore($idStore)
    {
        $this->idStore = $idStore;

        return $this;
    }

    /**
     * Get idStore
     *
     * @return int
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * Set etatDemande
     *
     * @param string $etatDemande
     *
     * @return Demande
     */
    public function setEtatDemande($etatDemande)
    {
        $this->etatDemande = $etatDemande;

        return $this;
    }

    /**
     * Get etatDemande
     *
     * @return string
     */
    public function getEtatDemande()
    {
        return $this->etatDemande;
    }

    /**
     * Set nbrCopie
     *
     * @param integer $nbrCopie
     *
     * @return Demande
     */
    public function setNbrCopie($nbrCopie)
    {
        $this->nbrCopie = $nbrCopie;

        return $this;
    }

    /**
     * Get nbrCopie
     *
     * @return int
     */
    public function getNbrCopie()
    {
        return $this->nbrCopie;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Demande
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * @param mixed $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     *
     * @return Demande
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     *
     * @return Demande
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime
     */
    public function getDeadline()
    {
        return $this->deadline;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreation=new \DateTime();
        $this->etatDemande="En attente";
    }

    /**
     * Add document
     *
     * @param \EspritEntreAide\StoreBundle\Entity\Document $document
     *
     * @return Demande
     */
    public function addDocument(\EspritEntreAide\StoreBundle\Entity\Document $document)
    {
        $this->document[] = $document;
    
        return $this;
    }

    /**
     * Remove document
     *
     * @param \EspritEntreAide\StoreBundle\Entity\Document $document
     */
    public function removeDocument(\EspritEntreAide\StoreBundle\Entity\Document $document)
    {
        $this->document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocument()
    {
        return $this->document;
    }
}
