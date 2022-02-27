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

/**
 * 货品销量统计
 */
interface OrderCenterProductSalesRpcInterface
{
    /**
     * Total sales of goods
     *
     * @param int $platformId
     * @param array  $productUuids
     *
     * @return array
     */
    public function sales(int $platformId, array $productUuids): array;

    /**
     * Sales of goods in a certain period of time
     *
     * @param int $platformId
     * @param array  $productUuids
     * @param string $startAt
     * @param string $endAt
     *
     * @return array
     */
    public function timeSales(int $platformId, array $productUuids, string $startAt, string $endAt): array;
}
