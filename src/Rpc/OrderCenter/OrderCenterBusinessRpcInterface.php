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

interface OrderCenterBusinessRpcInterface
{
    /**
     * sales ranking
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function orderCenterTopSalesRank(int $platformId, string $startAt, string $endAt): array;

    /**
     * Turnover of the month
     *
     * @param int $platformId
     * @param string $monthStartAt
     * @param string $monthEndAt
     *
     * @return array
     */
    public function theMonthTurnover(int $platformId, string $monthStartAt, string $monthEndAt): array;

    /**
     * Turnover for the day
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayTurnover(int $platformId, string $startAt, string $endAt): array;

    /**
     * Number of payments on the day
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayPayment(int $platformId, string $startAt, string $endAt): array;

    /**
     * New Fans Transaction of the Day
     *   i.e: New Fans Transaction of the Day = Transaction Amount of New Fans Followed Today
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayFansTurnover(int $platformId, string $startAt, string $endAt): array;

    /**
     * A few days' turnover
     *    i.e: Three days' new fan turnover = Three days' follower's turnover today's turnover amount
     *
     * @param int $platformId
     * @param string $somedayStartAt
     * @param string $somedayEndAt
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theSomedayTurnover(int $platformId, string $somedayStartAt, string $somedayEndAt, string $startAt, string $endAt): array;

    /**
     * Customer unit price = amount of business / number of users purchased
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function perCustomerTransaction(int $platformId, string $startAt, string $endAt): array;

    /**
     * New fan conversion rate = the number of followers followed and traded on the day / the total number of followers followed on the day
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayFansConversionRate(int $platformId, string $startAt, string $endAt): array;

    /**
     * New fans monetization = transaction amount of new fans followed on the day / total number of fans followed on the day
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayFansPayment(int $platformId, string $startAt, string $endAt): array;

    /**
     * Follow the fans’ backstage transactions during the time period
     *
     * @param int $platformId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array [ ['time' => '2021-04-29 00' , 'turnover' => 168 ],  [ 'time' => '2021-04-29 01', 'turnover' => 168 ] ]
     */
    public function turnoverTimeIntervalRank(int $platformId, array $openid, string $startAt, string $endAt): array;

    /**
     * Number of deals
     *
     * @param int $platformId
     * @param array  $openidTurnover
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function orderCenterTurnoverTimeOrderNum(int $platformId, array $openidTurnover, string $startAt, string $endAt): array;

    /**
     * Openid traded in the time period
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array ['openid', 'openid', 'openid']
     */
    public function turnoverOpenid(int $platformId, string $startAt, string $endAt): array;
}
