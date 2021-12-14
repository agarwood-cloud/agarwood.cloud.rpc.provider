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
 * 更新订单支付的状态
 */
interface OrderCenterOrderPaidRpcInterface
{
    /**
     * Update payment status information
     *
     * @param string $token
     * @param string $outTradeNo    订单号
     * @param string $transactionId 微信支付单号
     * @param string $paidAt        订单支付时间
     *
     * @return array
     */
    public function orderPaid(string $token, string $outTradeNo, string $transactionId, string $paidAt): array;
}
