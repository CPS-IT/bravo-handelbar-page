<?php

declare(strict_types=1);

namespace Cpsit\BravoHandlebarsContent\DataProcessing;

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

/*
 * This file is part of the bravo handlebars content package.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */
class HeadlinesDataProcessor implements DataProcessorInterface
{

    /**
     * @inheritDoc
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ): array
    {
        // Dummy data
        $data = [
            'spaceBefore' => 'test-spaceBefore',
            'text' => $processedData['data']['bodytext'],
            'headlinesData' => [
                'h3' => [
                    'headline' => 'renderedContent: headline h2'
                ],
            ]
        ];

        return $data;
    }
}


