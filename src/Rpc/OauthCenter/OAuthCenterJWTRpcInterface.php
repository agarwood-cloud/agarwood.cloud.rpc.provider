<?php declare(strict_types=1);
/**
 * This file is part of Agarwood Cloud.
 *
 * @link     https://www.agarwood-cloud.com
 * @document https://www.agarwood-cloud.com/docs
 * @contact  676786620@qq.com
 * @author   agarwood
 */

namespace Agarwood\Rpc\OauthCenter;

interface OAuthCenterJWTRpcInterface
{
    /**
     * Verify that the token is available
     *
     * @param string|null $token
     *
     * @return array
     */
    public function validator(?string $token): array;

    /**
     * UserId Or Openid
     *
     * @param string|null $parse
     *
     * @return int|string|null
     */
    public function getUserId(?string $parse): int|string|null;

    /**
     * Customer Service
     *
     * @param string|null $parse
     *
     * @return string|null
     */
    public function getCustomer(?string $parse): string|null;

    /**
     * @param string|null $parse
     *
     * @return int|null
     */
    public function getCustomerId(?string $parse): int|null;

    /**
     * @param string|null $parse
     *
     * @return string|null
     */
    public function getNickname(?string $parse): string|null;

    /**
     * @param string|null $parse
     *
     * @return int|null
     */
    public function getOfficialAccountId(?string $parse): int|null;
}
