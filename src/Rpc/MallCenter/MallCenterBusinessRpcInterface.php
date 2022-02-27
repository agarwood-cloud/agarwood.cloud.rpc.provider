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
     * @param int $platformId
     *
     * @return array
     */
    public function onHandleFeedback(int $platformId): array;

    /**
     * All unhandled complaints in the time period
     *
     * @param int $platformId
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function totalFeedback(int $platformId, string $startAt, string $endAt): array;
}
