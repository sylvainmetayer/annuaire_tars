<?php
namespace TARS\AnnuaireTars\Query;


/**
 * ContactSearch
 */
class ContactSearch
{

    /**
     * keywords
     *
     * @var string
     */
    private $keywords;
    
    /**
     *
     * @return string $keywords
     */
    public function getKeywords(){
        return $this->keywords;
    }


    /**
     * @param string $keywords
     * @return void
     */
    public function setKeywords($keywords){
        $this->keywords = $keywords;
    }

}