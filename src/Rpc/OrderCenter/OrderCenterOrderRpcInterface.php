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

interface OrderCenterOrderRpcInterface
{
    /**
     * Transaction data of the official account within a certain period of time
     *
     * @param int $platformId
     * @param string $startAd
     * @param string $endAt
     *
     * @return array
     */
    public function timeSaleCount(int $platformId, string $startAd, string $endAt): array;
}
