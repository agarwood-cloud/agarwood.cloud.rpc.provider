<?php declare(strict_types=1);
/**
 * This file is part of Agarwood Cloud.
 *
 * @link     https://www.agarwood-cloud.com
 * @document https://www.agarwood-cloud.com/docs
 * @contact  676786620@qq.com
 * @author   agarwood
 */

namespace Agarwood\Rpc\MallCenter;

interface MallCenterBusinessRpcInterface
{
    /**
     * Unhandled complaint
     *
     * @param int $officialAccountsId
     *
     * @return array
     */
    public function onHandleFeedback(int $officialAccountsId): array;

    /**
     * All unhandled complaints in the time period
     *
     * @param int $officialAccountsId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function totalFeedback(int $officialAccountsId, string $startAt, string $endAt): array;
}
