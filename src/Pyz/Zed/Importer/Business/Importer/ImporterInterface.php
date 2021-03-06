<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Importer\Business\Importer;

interface ImporterInterface
{

    /**
     * @return void
     */
    public function afterImport();

    /**
     * @return void
     */
    public function beforeImport();

    /**
     * @param array $data
     *
     * @return void
     */
    public function import(array $data);

    /**
     * @return bool
     */
    public function isImported();

    /**
     * @return string
     */
    public function getTitle();

}
