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

interface UserCenterOrderEventRpcInterface
{
    /**
     * Event: User create order event
     *
     * @param string $openid
     * @param string $orderNo
     * @param array  $order
     */
    public function orderCreateByUser(string $openid, string $orderNo, array $order): void;

    /**
     * Event: Sales valet orders
     *
     * @param int $customerId
     * @param string $orderNo
     * @param array  $order
     */
    public function orderCreateByCustomer(int $customerId, string $orderNo, array $order): void;

    /**
     * Event: payment successful
     *
     * @param string $outTradeNo
     * @param string $transactionId
     * @param array  $order
     */
    public function orderPaymentSuccess(string $outTradeNo, string $transactionId, array $order): void;

    /**
     * Event: Order Shipment
     *
     * @param string $orderNo
     * @param array  $order
     */
    public function orderExpress(string $orderNo, array $order): void;

    /**
     * Event: Sign for express
     *
     * @param string $orderNo
     * @param array  $order
     */
    public function orderSignForExpress(string $orderNo, array $order): void;

    /**
     * Event: Order message notification
     *
     * @param string $orderNo
     * @param int $customerId
     * @param string $customer
     * @param string $openid
     * @param string $message
     */
    public function orderNotification(string $orderNo, int $customerId, string $customer, string $openid, string $message): void;
}
