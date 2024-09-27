<?php

namespace App\Interfaces;

/**
 * Interface GeoapifyInterface
 * Contains all reusable functions within the application
 * @package App\Repositories\Interfaces
 */
interface LocationInterface
{
	public function getLocation(mixed $data);
}