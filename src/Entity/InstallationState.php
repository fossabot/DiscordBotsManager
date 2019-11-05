<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class InstallationState
 * @package App\Entity
 *
 * @ORM\Table(name="InstallationState")
 * @ORM\Entity()
 */
class InstallationState
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean $installed
     * @ORM\Column(name="installed", type="boolean", nullable=false)
     */
    private $installed;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isInstalled(): bool
    {
        return $this->installed;
    }

    /**
     * @param bool $installed
     */
    public function setInstalled(bool $installed): void
    {
        $this->installed = $installed;
    }
}