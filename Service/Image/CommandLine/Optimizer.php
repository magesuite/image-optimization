<?php

namespace MageSuite\ImageOptimization\Service\Image\CommandLine;

class Optimizer implements \MageSuite\ImageOptimization\Service\Image\Optimizer
{
    /**
     * @var \ImageOptimizer\OptimizerFactory
     */
    private $optimizerFactory;

    public function __construct(\ImageOptimizer\OptimizerFactory $optimizerFactory)
    {
        $this->optimizerFactory = $optimizerFactory;
    }

    /**
     * Optimizes image
     * @param $filePath
     * @return mixed
     */
    public function optimize($filePath)
    {
        $optimizer = $this->optimizerFactory->get();

        $optimizer->optimize($filePath);
    }
}
