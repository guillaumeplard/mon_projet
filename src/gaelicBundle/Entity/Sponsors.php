<?php

namespace gaelicBundle\Entity;

/**
 * Sponsors
 */
class Sponsors
{
    /**
     * @var string
     */
    private $Titre;

    /**
     * @var string
     */
    private $Contenu;

    /**
     * @var string
     */
    private $Image;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Sponsors
     */
    public function setTitre($titre)
    {
        $this->Titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Sponsors
     */
    public function setContenu($contenu)
    {
        $this->Contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->Contenu;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Sponsors
     */
    public function setImage($image)
    {
        $this->Image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
