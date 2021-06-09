<?php
declare(strict_types=1);
/**
 * Repository Pattern Interface
 * @package     Ticaje_Contract
 * @author      Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\Contract\Persistence\Repository;

use Ticaje\Contract\Persistence\Entity\EntityInterface;

/**
 * Interface RepositoryInterface
 * @package Ticaje\Contract\Persistence\Repository
 */
interface RepositoryInterface
{
    /**
     * @param EntityInterface $object
     *
     * @return EntityInterface
     */
    public function save(EntityInterface $object): EntityInterface;

    /**
     * @param int $id
     *
     * @return EntityInterface|null
     */
    public function getById(int $id): ?EntityInterface;

    /**
     * @param $criteria
     *
     * @return EntityInterface|null
     */
    public function getSingle($criteria): ?EntityInterface;

    /**
     * @param $criteria
     *
     * @return mixed
     */
    public function getList($criteria);

    /**
     * @param EntityInterface $object
     *
     * @return array
     */
    public function delete(EntityInterface $object): array;

    /**
     * @param int $id
     *
     * @return array
     */
    public function deleteById(int $id): array;
}
