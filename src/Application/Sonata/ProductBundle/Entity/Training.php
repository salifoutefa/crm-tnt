<?php
/*
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\ProductBundle\Entity;

/**
 * This file has been generated by the Sonata product generation command ( http://sonata-project.org/ )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author <yourname> <youremail>
 */
class Training extends Product
{
    const LEVEL_BEGINNER  = 'training.level.beginner';
    const LEVEL_CONFIRMED = 'training.level.confirmed';
    const LEVEL_EXPERT    = 'training.level.expert';

    /**
     * @var string
     */
    protected $level;

    /**
     * @var string
     */
    protected $instructorName;

    /**
     * @var string
     */
    protected $duration;

    /**
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $instructorName
     */
    public function setInstructorName($instructorName)
    {
        $this->instructorName = $instructorName;
    }

    /**
     * @return string
     */
    public function getInstructorName()
    {
        return $this->instructorName;
    }

    /**
     * Return the Training levels list.
     *
     * @return array
     */
    public static function getLevelList()
    {
        return array(
            self::LEVEL_BEGINNER  => self::LEVEL_BEGINNER,
            self::LEVEL_CONFIRMED => self::LEVEL_CONFIRMED,
            self::LEVEL_EXPERT    => self::LEVEL_EXPERT,
        );
    }
}