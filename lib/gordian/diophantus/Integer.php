<?php

/*
 * Copyright 2017 Gordon McVey.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace gordian\diophantus;

use gordian\diophantus\iface\Integer as iInteger;

/**
 * Integer field class
 *
 * @author Gordon McVey
 */
class Integer implements iInteger
{
	/**
	 * Largest value that can be represented by a PHP integer
	 */
	const MAX = PHP_INT_MAX;
	
	/**
	 * Smallest value that can be represented by a PHP integer
	 */
	const MIN = PHP_INT_MIN;
	
	/**
	 * The value being stored
	 * 
	 * @var \int|\GMP
	 */
	private $value = 0;

	/**
	 * @inheritdoc
	 */
	public function abs (): iface\Integer
	{
		
	}

	public function add (iface\Integer $other): iInteger
	{
		$value = $this -> value + $other -> value;
		
		// If both values were integers but their sum exceeded the the limits 
		// of PHP's integer type then we need to re-do the sum with GMP
		if (is_float ($value))
		{
			$value = gmp_add ($this -> value, $other);
		}
		
		// Store the result
		$this -> value = $this -> minimise ($value);
		return $this;
	}

	public function div (iface\Integer $divisor): iInteger
	{
		
	}

	public function mod (iface\Integer $divisor): iInteger
	{
		
	}

	public function mul (iface\Integer $multiplier): iInteger
	{
		
	}

	public function pow (iface\Integer $power): iInteger
	{
		
	}

	public function sub (iface\Integer $other): iInteger
	{
		$value = $this -> value - $other -> value;
		
		// If both values were integers but their subtraction exceeded the the 
		// limits of PHP's integer type then we need to re-do the subtraction 
		// with GMP
		if (is_float ($value))
		{
			$value = gmp_sub ($this -> value, $other);
		}
		
		// Store the result
		$this -> value = $this -> minimise ($value);
		return $this;
	}
	
	/**
	 * Set the value
	 * 
	 * @param \int|\GMP $value
	 * @return $this
	 * @throws \InvalidArgumentException
	 */
	public function set ($value) : iInteger
	{
		if ((!is_int ($value)) && (!$value instanceof \GMP))
		{
			throw new \InvalidArgumentException ("Value must be an integer or an instance of GMP");
		}
		
		$this -> value = $value;
		return $this;
	}
	
	/**
	 * Get the value
	 * 
	 * @return \int|\GMP
	 */
	public function get ()
	{
		return $this -> value;
	}
		
	/**
	 * Minimise the given value into its simplest type
	 * 
	 * This method checks if the given value can be downgraded to an integer 
	 * without loss.  If it can it will be converted to an integer type.  
	 * Otherwise the original value is returned unchanged.  
	 * 
	 * GMP has a significant overhead compared to plain integers, both in terms
	 * of memory usage and in terms of computational load, so if we can get away 
	 * with storing the result of any operation as an integer then we should.  
	 * 
	 * @param \int|\GMP $value
	 * @return \int|\GMP
	 */
	private function minimise ($value)
	{
		if (($value instanceof \GMP) 
		&& ($value <= static::MAX) 
		&& ($value >= static::MIN))
		{
			$value = gmp_intval ($value);
		}
		
		return $value;
	}
	
	/**
	 * Instantiate the object
	 * 
	 * @param \int|\GMP $value
	 */
	public function __construct ($value)
	{
		$this -> set ($value);
	}

}
