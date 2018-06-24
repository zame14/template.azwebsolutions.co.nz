<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/24/2018
 * Time: 8:28 PM
 */
class Service extends AZBase
{
    public function getFeatureImage()
    {
        return $this->getPostMeta('feature-image');
    }
}