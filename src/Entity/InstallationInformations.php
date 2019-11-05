<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class InstallationState
 * @package App\Entity
 *
 * @ORM\Table(name="InstallationInformations")
 * @ORM\Entity()
 */
class InstallationInformations
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
     * @var string $databasetype
     * @ORM\Column(name="dbtype", type="string")
     */
    private $databasetype;

    /**
     * @var string $adress
     * @ORM\Column(name="dbadress", type="string", nullable=true)
     */
    private $adress;

    /**
     * @var string $username
     * @ORM\Column(name="dbusername", type="string", nullable=true)
     */
    private $username;

    /**
     * @var string $databasename
     * @ORM\Column(name="dbname", type="string", nullable=true)
     */
    private $databasename;

    // To hash, please !
    /**
     * @var string $password
     * @ORM\Column(name="dbpassword", type="string", nullable=true)
     */
    private $password;

    /**
     * @var string $arguments
     * @ORM\Column(name="arguments", type="string", nullable=true)
     */
    private $arguments;

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
     * @return string
     */
    public function getDatabasetype(): string
    {
        return $this->databasetype;
    }

    /**
     * @param string $databasetype
     */
    public function setDatabasetype(string $databasetype): void
    {
        $this->databasetype = $databasetype;
    }

    /**
     * @return string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getDatabasename(): string
    {
        return $this->databasename;
    }

    /**
     * @param string $databasename
     */
    public function setDatabasename(string $databasename): void
    {
        $this->databasename = $databasename;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getArguments(): string
    {
        return $this->arguments;
    }

    /**
     * @param string $arguments
     */
    public function setArguments(string $arguments): void
    {
        $this->arguments = $arguments;
    }

}