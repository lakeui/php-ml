<?php

declare(strict_types=1);

namespace Phpml\Tests\NeuralNetwork\ActivationFunction;

use Phpml\NeuralNetwork\ActivationFunction\BinaryStep;
use PHPUnit\Framework\TestCase;

class BinaryStepTest extends TestCase
{
    /**
     * @dataProvider binaryStepProvider
     */
    public function testBinaryStepActivationFunction($expected, $value): void
    {
        $binaryStep = new BinaryStep();

        $this->assertEquals($expected, $binaryStep->compute($value));
    }

    public function binaryStepProvider(): array
    {
        return [
            [1, 1],
            [1, 0],
            [0, -0.1],
        ];
    }
}
