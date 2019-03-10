<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use Doctrine\Common\Persistence\ObjectManager;

class QuotesLines extends MaderaFixtures {

    public function load(ObjectManager $manager) {
        // TODO: Implement load() method.
    }
    public function getOrder() {
        return MaderaFixtures::QUOTES_LINES;
    }
}