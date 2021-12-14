<?php declare(strict_types=1);
/**
 * This file is part of Agarwood Cloud.
 *
 * @link     https://www.agarwood-cloud.com
 * @document https://www.agarwood-cloud.com/docs
 * @contact  676786620@qq.com
 * @author   agarwood
 */

namespace Agarwood\Rpc\UserCenter;

interface UserCenterCustomerRpcInterface
{
    /**
     * Number of fans obtain
     *
     * @param int $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function customerObtainFans(int $customerId, string $startAt, string $endAt): array;

    /**
     * Get customer service list
     *
     * @param int $officialAccountId
     * @param int $pge
     * @param int $perPage
     *
     * @return array
     */
    public function index(int $officialAccountId, int $pge = 1, int $perPage = 10): array;

    /**
     * Get customer service details
     *
     * @param int $id
     *
     * @return array
     */
    public function view(int $id): array;
}
