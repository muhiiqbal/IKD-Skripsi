<?php

namespace App\Http\Services;

use Rubix\ML\Extractors\CSV;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Datasets\Unlabeled;
use Rubix\ML\Transformers\Transformer;
use Rubix\ML\Kernels\Distance\Euclidean;

use function PHPUnit\Framework\returnSelf;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\Transformers\NumericStringConverter;
use Rubix\ML\CrossValidation\Reports\ConfusionMatrix;


class knnprediction
{
    public $filename,$input,$samples=[],$targets=[];


    public function __construct($filename,$input)
    {
        $this->filename = $filename;
        $this->input = $input;
    }

    public function predikresult()
    {
        $this->readFile();


        $estimator = new KNearestNeighbors(5, true, new Euclidean());
        $dataset= new Labeled($this->samples, $this->targets);

        $estimator->train($dataset);


        $inputDataSet = new Unlabeled($this->input);

        return $estimator->predict($inputDataSet);

        // return $predictions;

    }

    public function readFile()
    {
        $file = fopen($this->filename, 'r');

        $row = 1;
        $tempArray = [];
        $converter = new NumericStringConverter($tempArray);

        if($file !== false)
        {
            while(($data = fgetcsv($file)) !==false)
            {
                if($row !=1)
                {
                    $num = count($data);
                    for($c=1; $c<$num; $c++)
                    {
                        if($c<15)
                        {
                            array_push($tempArray, $data[$c]);
                        }
                        else if($c == 15)
                        {
                            array_push($this->targets, $data[$c]);
                        }
                    }
                    array_push($this->samples, $tempArray);
                    $tempArray = [];
                }
                $row ++;
                $converter->transform($this->samples);
            }

        }
        fclose($file);
    }

}
