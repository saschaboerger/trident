<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 *
 * @defgroup    TridentCore Trident Core
 * @{
 */

/**
 * System services related to ACL.
 */
class BxBaseAclServices extends BxDol
{
    public function __construct()
    {
        parent::__construct();
    }

    public function serviceGetMemberships($bPurchasableOnly = false, $bActiveOnly = false, $isTranslate = true)
    {
        bx_import('BxDolAcl');
        return BxDolAcl::getInstance()->getMemberships($bPurchasableOnly, $bActiveOnly, $isTranslate);
    }
}

/** @} */
