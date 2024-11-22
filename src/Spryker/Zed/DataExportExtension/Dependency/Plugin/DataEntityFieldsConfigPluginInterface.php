<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\DataExportExtension\Dependency\Plugin;

interface DataEntityFieldsConfigPluginInterface
{
    /**
     * Specification:
     * - Returns an array of fields configuration.
     *
     * @api
     *
     * @return array
     */
    public function getFieldsConfig(): array;
}
