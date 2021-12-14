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

interface OrderCenterCustomerOverviewRpcInterface
{
    /**
     * Performance
     *
     * @param int $officialAccountsId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function sales(int $officialAccountsId, array $customerId, string $startAt, string $endAt): array;

    /**
     * New fans with deals
     *
     * @param int $officialAccountsId
     * @param array  $customerId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function newFansSales(int $officialAccountsId, array $customerId, array $openid, string $startAt, string $endAt): array;

    /**
     * The openid of the fan who has a deal in a certain period of time
     *
     * @param int $officialAccountsId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function salesFansOpenid(int $officialAccountsId, array $customerId, string $startAt, string $endAt): array;

    /**
     * Fans who have purchased
     *
     * @param int $officialAccountsId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return mixed
     */
    public function buyFans(int $officialAccountsId, array $customerId, string $startAt, string $endAt): array;

    /**
     * Get customer service performance for several days
     *
     * @param int $customerId
     * @param int    $days
     *
     * @return array
     */
    public function customerDaysTrade(int $customerId, int $days): array;
}
