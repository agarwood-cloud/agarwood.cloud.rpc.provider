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
     * 销售排行榜
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function orderCenterTopSalesRank(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * 当月的营业额
     *
     * @param int $officialAccountsId
     * @param string $monthStartAt
     * @param string $monthEndAt
     *
     * @return array
     */
    public function theMonthTurnover(int $officialAccountsId, string $monthStartAt, string $monthEndAt): array;

    /**
     * 当天的营业额
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayTurnover(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * 当天支付的笔数
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayPayment(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * 当天的新粉成交 i.e: 当天新粉成交 = 今天关注的新粉的成交金额
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayFansTurnover(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * 某几天的营业额  i.e: 三天的新粉成交 = 三天内关注的粉丝的成交 在今天的成交 金额
     *
     * @param int $officialAccountsId
     * @param string $somedayStartAt
     * @param string $somedayEndAt
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theSomedayTurnover(int $officialAccountsId, string $somedayStartAt, string $somedayEndAt, string $startAt, string $endAt): array;

    /**
     * 客单价 = 额业额 / 购买用户数
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function perCustomerTransaction(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * 新粉转化率 = 当天关注且有成交的粉丝数 / 当天关注的总粉丝数
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayFansConversionRate(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * 新粉变现 = 当天关注的新粉的成交金额 / 当天关注的总粉丝数量
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function theDayFansPayment(int $officialAccountsId, string $startAt, string $endAt): array;

    /**
     * 时间段内关注粉丝的后台成交情况
     *
     * @param int $officialAccountsId
     * @param array  $openid
     * @param string $startAt
     * @param string $endAt
     *
     * @return array [ ['time' => '2021-04-29 00' , 'turnover' => 168 ],  [ 'time' => '2021-04-29 01', 'turnover' => 168 ] ]
     */
    public function turnoverTimeIntervalRank(int $officialAccountsId, array $openid, string $startAt, string $endAt): array;

    /**
     * 成交单数
     *
     * @param int $officialAccountsId
     * @param array  $openidTurnover
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function orderCenterTurnoverTimeOrderNum(int $officialAccountsId, array $openidTurnover, string $startAt, string $endAt): array;

    /**
     * 时间段内成交的openid
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array ['openid', 'openid', 'openid']
     */
    public function turnoverOpenid(int $officialAccountsId, string $startAt, string $endAt): array;
}
