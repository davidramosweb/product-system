<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle::class => ['all' => true],
    Sentry\SentryBundle\SentryBundle::class => ['prod' => true, 'dev' => true, 'test' => false],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
];
