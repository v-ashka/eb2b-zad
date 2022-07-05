<?php

declare(strict_types=1);

class PhoneKeyboardConverter{
    private string $convertedVal;
    private array $dictionary = [
        "0"=>" ",
        "2"=>"a",
        "22"=>"b",
        "222"=>"c",
        "3"=>"d",
        "33"=>"e",
        "333"=>"f",
        "4"=>"g",
        "44"=>"h",
        "444"=>"i",
        "5"=>"j",
        "55"=>"k",
        "555"=>"l",
        "6"=>"m",
        "66"=>"n",
        "666"=>"o",
        "7"=>"p",
        "77"=>"q",
        "777"=>"r",
        "7777"=>"s",
        "8"=>"t",
        "88"=>"u",
        "888"=>"v",
        "9"=>"w",
        "99"=>"x",
        "999"=>"y",
        "9999"=> "z",
    ];
    public function convertToNumeric(string $content): string{
//        'Ela nie ma kota' ==> '33,555,2,0,66,444,33,0,6,2,0,55,666,8,2';
//                          ==> '33,555,2,0,66,444,33,0,6,2,0,55,666,8,2'
        $content = strtolower($content);
        $contentArr = explode(',', $content);

        $convertedValue = '';
        foreach($contentArr as $letter){
            $searchKey = array_search($letter, $this->dictionary);
            $convertedValue .= $searchKey . ',';
        }
        $convertedValue = substr_replace($convertedValue, "", -1);

        $this->setConvertedVal( (string) $convertedValue);
        return $this->convertedVal;
        return '';
    }

    public function convertToString(string $content): string{
//        '5,2,22,555,33,222,9999,66,444,55' => 'jablecznik'
        $contentArr = explode(',', $content);
        $convertedValue = '';
        foreach ($contentArr as $number){
            $convertedValue .= $this->dictionary[$number] ?? '';
        }
        $this->setConvertedVal( (string) $convertedValue);
        return $this->convertedVal;
    }

    /**
     * @param string $convertedVal
     */
    public function setConvertedVal(string $convertedVal): void
    {
        $this->convertedVal = $convertedVal;
    }

    public function showResult(string $val, $functionHandler): string{
        return <<<HTML
            <p>Otrzymany rezultat:</p>
            <p>$val ===> $this->convertedVal</p>
        HTML;
    }
}