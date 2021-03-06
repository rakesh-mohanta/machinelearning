<?php

namespace League\MachineLearning\Utility\Model;

use League\MachineLearning\Data\Entity\Dataset;

interface BaseLearningModel
{
    public function setTrainingData(Dataset $dataset);
    public function setTestData(Dataset $dataset);
    public function train();
    public function test();
}
