<?php

namespace gaelicBundle\Entity;

/**
 * Media
 */
class Media
{
    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $video;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Media
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set video
     *
     * @param string $video
     *
     * @return Media
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
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
