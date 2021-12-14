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

interface OrderCenterFansTimelineOrderRpcInterface
{
    /**
     * Fan order
     *
     * @param string $openid
     *
     * @return array
     */
    public function timelineOrderByOpenid(string $openid): array;
}
