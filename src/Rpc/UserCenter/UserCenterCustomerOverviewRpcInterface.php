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

interface UserCenterCustomerOverviewRpcInterface
{
    /**
     * Customer Service List
     *
     * @param int $platformId
     * @param array  $filter
     *
     * @return array
     */
    public function customerList(int $platformId, array $filter): array;

    /**
     * Number of fans grabbed
     *
     * @param int $platformId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function obtainFans(int $platformId, array $customerId, string $startAt, string $endAt): array;

    /**
     * Total number of fans, including unsubscribe
     *
     * @param int $platformId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function fans(int $platformId, array $customerId, string $startAt, string $endAt): array;

    /**
     * unsubscribe
     *
     * @param int $platformId
     * @param array  $customerId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function unsubscribe(int $platformId, array $customerId, string $startAt, string $endAt): array;

    /**
     * 在xx 时间段内 关注 且 有成交 的粉丝的 openid
     *
     * @param int $platformId
     * @param array  $customerId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function salesNewFansOpenid(int $platformId, array $customerId, array $openid, string $startAt, string $endAt): array;

    /**
     * The number of followers who subscribe and had transactions in a certain period of time
     *
     * @param int $platformId
     * @param array  $customerId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function newFansCash(int $platformId, array $customerId, array $openid, string $startAt, string $endAt): array;
}
