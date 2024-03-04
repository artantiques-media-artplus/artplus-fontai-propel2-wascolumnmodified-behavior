<?php
namespace Fontai\Propel\Behavior\WasColumnModified;

use Propel\Generator\Builder\Om\ObjectBuilder;
use Propel\Generator\Model\Behavior;


class WasColumnModifiedBehavior extends Behavior
{
  public function objectAttributes(ObjectBuilder $builder)
  {
    return $this->renderTemplate('objectAttributes');
  }

  public function objectMethods(ObjectBuilder $builder)
  {
    return $this->renderTemplate('objectSetLastModifiedColumns')
    . $this->renderTemplate('objectWasColumnModified');
  }

  public function preSave(ObjectBuilder $builder)
  {
    return $this->renderTemplate('preSave');
  }
}