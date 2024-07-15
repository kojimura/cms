<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Repository;

use Carbon\Carbon;
use Doctrine\ORM\NoResultException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry as RegistryInterface;
use Eccube\Entity\Calendar;

/**
 * CalendarRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CalendarRepository extends AbstractRepository
{
    /**
     * CalendarRepository constructor.
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Calendar::class);
    }

    /**
     * @param int $id
     *
     * @return Calendar
     *
     * @throws \Exception
     */
    public function get($id = 1)
    {
        $calendar = $this->find($id);

        if (null === $calendar) {
            throw new \Exception('Calendar not found. id = '.$id);
        }

        return $calendar;
    }

    /**
     * getListOrderByIdDesc
     *
     * @return array|null
     */
    public function getListOrderByIdDesc()
    {
        $qb = $this->createQueryBuilder('c')
            ->orderBy('c.id', 'DESC');

        return $qb
            ->getQuery()
            ->getResult();
    }

    /**
     * getHolidayList
     *
     * @param Carbon $startDate 取得開始日
     * @param Carbon $endDate 取得終了日
     *
     * @return array|null
     */
    public function getHolidayList(Carbon $startDate, Carbon $endDate)
    {
        $qb = $this->createQueryBuilder('c')
            ->orderBy('c.id', 'DESC')
            ->andWhere('c.holiday >= :startDate')
            ->andWhere('c.holiday <= :endDate')
            ->setParameter(':startDate', $startDate->copy())
            ->setParameter(':endDate', $endDate->copy())
            ->orderBy('c.holiday');

        return $qb
            ->getQuery()
            ->getResult();
    }

    /**
     * delete.
     *
     * @param int|Calendar $Calendar
     *
     * @throws NoResultException
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete($Calendar)
    {
        if (!$Calendar instanceof Calendar) {
            $Calendar = $this->find($Calendar);
        }
        if (!$Calendar) {
            throw new NoResultException();
        }
        $em = $this->getEntityManager();
        $em->remove($Calendar);
        $em->flush();
    }
}
