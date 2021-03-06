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

interface UserCenterBusinessRpcInterface
{
    /**
     * All fans following the current official account
     *
     * @param int $platformId
     *
     * @return array
     */
    public function allSubscribeFans(int $platformId): array;

    /**
     * Fans added fans today
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayFans(int $platformId, string $startAt, string $endAt): array;

    /**
     * Fans who unfollowed today
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayUnsubscribeFans(int $platformId, string $startAt, string $endAt): array;

    /**
     * Follow the openid of fans during the time subscribe
     *
     * @param int $platformId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array [ 'openid', 'openid', 'openid' ]
     */
    public function turnoverTimeIntervalOpenid(int $platformId, array $openid, string $startAt, string $endAt): array;

    /**
     * Time analysis: add fans
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function userCenterTurnoverTimeFans(int $platformId, string $startAt, string $endAt): array;

    /**
     * Time analysis：Number of users with transactions
     *
     * @param int $platformId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function userCenterTurnoverTimeBuyFans(int $platformId, array $openid, string $startAt, string $endAt): array;

    /**
     * The openid of fans who sold in a certain period of time
     *
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayTurnoverFansOpenid(array $openid, string $startAt, string $endAt): array;
}
