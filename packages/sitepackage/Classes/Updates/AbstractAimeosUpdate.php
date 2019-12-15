<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\Zwergenfabrik\Updates;

use Aimoes\Aimeos\Base;
use Aimoes\Aimeos\Setup;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\Restriction\DeletedRestriction;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Updates\AbstractUpdate;

/**
 * AbstractAimeosUpdate
 */
abstract class AbstractAimeosUpdate extends AbstractUpdate
{
    /**
     * Returns the version of the Aimeos TYPO3 extension
     *
     * @return string Version string
     */
    protected function getVersion()
    {
        return Base::getVersion();
    }

    /**
     * Checks if an update is needed
     *
     * @param string &$description The description for the update
     * @return bool Whether an update is needed (TRUE) or not (FALSE)
     */
    public function checkForUpdate(&$description)
    {
        if ($this->isWizardDone()) {
            return false;
        }

        return true;
    }
}
