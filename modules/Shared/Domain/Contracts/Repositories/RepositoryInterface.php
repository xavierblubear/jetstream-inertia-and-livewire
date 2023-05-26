<?php

namespace Modules\Shared\Domain\Contracts\Repositories;

interface RepositoryInterface
{
  public function mapper();
  public function entity();
  public function all();
}