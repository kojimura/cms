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

namespace Plugin\ProductReview42\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\ProductReview42\Entity\ProductReviewConfig;
use Doctrine\Persistence\ManagerRegistry; 

/**
 * ProductReview Config.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductReviewConfigRepository extends AbstractRepository
{
    /**
     * ProductReviewConfigRepository constructor.
     *
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductReviewConfig::class);
    }

    /**
     * @param int $id
     *
     * @return ProductReviewConfig|null
     */
    public function get($id = 1)
    {
        return $this->find($id);
    }
}
