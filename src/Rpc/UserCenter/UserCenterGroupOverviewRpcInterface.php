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

interface UserCenterGroupOverviewRpcInterface
{
    /**
     * All customer service information under this group
     *
     * @param int $platformId
     * @param array  $filter
     *
     * @return array
     */
    public function groupForCustomer(int $platformId, array $filter): array;

    /**
     * New fans in a certain period of time
     *
     * @param int $platformId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function groupForCustomerOpenid(int $platformId, array $customerId, string $startAt, string $endAt): array;

    /**
     * The number of new fans in each group 【Number of new fans】
     *
     * @param int $platformId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function groupForNewFansSum(int $platformId, array $customerId, string $startAt, string $endAt): array;

    /**
     * Number of fans with transactions
     *
     * @param int $platformId
     * @param array  $customerId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function groupFromSalesFansSum(int $platformId, array $customerId, array $openid, string $startAt, string $endAt): array;
}
