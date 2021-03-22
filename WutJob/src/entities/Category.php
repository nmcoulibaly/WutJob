<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="categorie")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $nom;
    /**
     * One product has many features. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Offre", mappedBy="categories")
     */
    private $offres;

    public function __construct()
    {
        $this->offres = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return ArrayCollection
     */
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * @param ArrayCollection $offres
     */
    public function setOffres($offres)
    {
        $this->offres = $offres;
    }
}