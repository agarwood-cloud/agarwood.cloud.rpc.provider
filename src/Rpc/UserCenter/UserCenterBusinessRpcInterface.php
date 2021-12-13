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
     * @param int $officialAccountsId
     *
     * @return array
     */
    public function allSubscribeFans(int $officialAccountsId): array;

    /**
     * Fans added fans today
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayFans(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * Fans who unfollowed today
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayUnsubscribeFans(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * Follow the openid of fans during the time subscribe
     *
     * @param int $officialAccountsId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array [ 'openid', 'openid', 'openid' ]
     */
    public function turnoverTimeIntervalOpenid(int $officialAccountsId, array $openid, string $startAt, string $endAt): array;

    /**
     * Time analysis: add fans
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function userCenterTurnoverTimeFans(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * Time analysis：Number of users with transactions
     *
     * @param int $officialAccountsId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function userCenterTurnoverTimeBuyFans(int $officialAccountsId, array $openid, string $startAt, string $endAt): array;
}
