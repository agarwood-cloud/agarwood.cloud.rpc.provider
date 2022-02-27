<?php declare(strict_types=1);
/**
 * This file is part of Agarwood Cloud.
 *
 * @link     https://www.agarwood-cloud.com
 * @document https://www.agarwood-cloud.com/docs
 * @contact  676786620@qq.com
 * @author   agarwood
 */

namespace Agarwood\Rpc\OrderCenter;

interface OrderCenterGroupOverviewRpcInterface
{
    /**
     * The openid of the deal in a certain period of time
     *
     * @param int $platformId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function timeSalesForOpenid(int $platformId, array $customerId, string $startAt, string $endAt): array;

    /**
     * Group Transaction [Performance]
     *
     * @param int $platformId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function groupForSales(int $platformId, array $customerId, string $startAt, string $endAt): array;

    /**
     * The group’s new fan transaction [new fan performance]
     *
     * @param int $platformId
     * @param array  $customerId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function groupForNewFansSales(int $platformId, array $customerId, array $openid, string $startAt, string $endAt): array;
}
