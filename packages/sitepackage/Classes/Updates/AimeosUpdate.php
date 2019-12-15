<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\Zwergenfabrik\Updates;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\Restriction\DeletedRestriction;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * AimeosUpdate
 */
class AimeosUpdate extends AbstractAimeosUpdate
{
    /**
     * @var string
     */
    protected $title = '[Zwergenfabrik] Aimeos Update';

    /**
     * Performs the database update
     *
     * @param array &$databaseQueries Queries done in this update
     * @param string &$customMessage Custom message
     * @return bool
     */
    public function performUpdate(array &$databaseQueries, &$customMessage)
    {
        $updateCount = 0;

        ob_start();
        $exectimeStart = microtime(true);

        do {
            try {
                \Aimeos\Aimeos\Setup::execute();
                $output .= ob_get_contents();
                $updateCount++;
            } catch (\Aimeos\MW\DB\Exception $e) {
                $updateCount = 0;

                if ($lastExceptionMessage == $e->getMessage()) {
                    $message = 'Continuous exception found:' . PHP_EOL .
                        ob_get_contents() . PHP_EOL .
                        $e->getMessage() . PHP_EOL .
                        $e->getTraceAsString();
                    throw new \Exception($message, $e->getCode, $e);
                } else {
                    $lastExceptionMessage = $e->getMessage();
                }
            } catch (Exception $e) {
                $message = 'Unexpected exception found:' . PHP_EOL .
                    ob_get_contents() . PHP_EOL .
                    $e->getMessage() . PHP_EOL .
                    $e->getTraceAsString();
                throw new \Exception($message, $e->getCode, $e);
            }
        } while ($updateCount < 5);
        
        ob_end_clean();
    
        $customMessage = '<pre>' . $output . '</pre>' . PHP_EOL .
            sprintf("Setup process lasted %1\$f sec</br>\n", (microtime(true) - $exectimeStart));

        $this->markWizardAsDone();

        return true;
    }
}
