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

interface MallCenterOfficialAccountsRpcInterface
{
    /**
     * Get the config of the EasyWechat.
     *
     * @param int $platformId
     *
     * @return array
     */
    public function officialAccountsConfig(int $platformId): array;

    /**
     * Get all official account information
     *
     *
     * @param int $enterpriseId
     *
     * @return array
     */
    public function officialAccounts(int $enterpriseId): array;

    /**
     * Get the details of the official account
     *
     * @param int $platformId
     *
     * @return array
     */
    public function officialAccountsInfo(int $platformId): array;
}
