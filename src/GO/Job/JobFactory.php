<?php namespace GO\Job;

use GO\Job\Closure;
use GO\Job\Php;
use GO\Job\Raw;
use GO\Job\Exceptions\InvalidFactoryException;

class JobFactory
{
  private function __construct() {}

    /**
     * Factory method
     *
     * @param $class
     * @param $command
     * @param array $args
     * @return instance of GO\Job\Job
     *
     * @throws InvalidFactoryException
     */
      public static function factory($class, $command, array $args = array())
      {
        if (!class_exists($class)) {
          throw new InvalidFactoryException("Class $class doesn't exists");
        }

        return new $class($command, $args);
      }
}
