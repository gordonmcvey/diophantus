<?php

/*
 * Copyright 2017 gordonmcvey.
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

use gordian\diophantus\Integer;

/**
 * Description of Rational
 *
 * @author gordonmcvey
 */
class Rational
{
	/**
	 * The numerator of the number (or the actual value of the number if it is an integer)
	 * 
	 * @var Integer
	 */
	private $numerator		= 0;
	
	/**
	 * The denominator of the number if it's not an integer
	 * 
	 * If the number is an integer then the denominator is 1.  The denominator
	 * cannot be 0. 
	 * 
	 * @var Integer
	 */
	private $denominator	= 1;
	
	public function add (Number $other)
	{
		
	}
	
	public function sub (Number $other)
	{
		
	}
	
	public function mul (Number $other)
	{
		
	}
	
	public function div (Number $other)
	{
		
	}
	
	/**
	 * Reduce the number to its simplest terms
	 * 
	 * This method attempts to reduce the number down to the simplest terms, for
	 * example if the number is currently 500/1000 it will be simplified to 1/2
	 * which is the simplest equivalent fraction
	 */
	public function simplify ()
	{
		
	}
	
	/**
	 * Fluent setter for numerator
	 * 
	 * @param \gordian\diophantus\Integer $numerator
	 * @return $this
	 */
	public function numeratorIs (Integer $numerator)
	{
		$this -> numerator = $numerator;
		return $this;
	}
	
	/**
	 * Fluent setter for denominator
	 * 
	 * @param \gordian\diophantus\Integer $denominator
	 * @return $this
	 * @throws \InvalidArgumentException
	 */
	public function denominatorIs (Integer $denominator)
	{
		if (0 === $denominator -> get ())
		{
			throw new \InvalidArgumentException ("Denominator cannot be 0");
		}
		
		$this -> denominator = $denominator;
		return $this;
	}
		
	/**
	 * Helper fluent setter for setting both the numerator and denominator at once
	 * 
	 * @param \gordian\diophantus\Integer $numerator
	 * @param \gordian\diophantus\Integer $denominator
	 * @return $this
	 * @throws \InvalidArgumentException
	 */
	public function fractionIs (Integer $numerator, Integer $denominator)
	{
		return $this -> numeratorIs($numerator) -> denominatorIs($denominator);
	}
	
	/**
	 * Helper fluent setter for setting the number's value when it's an integer
	 * 
	 * @param \gordian\diophantus\Integer Integer
	 * @return $this
	 */
	public function numberIs (Integer $number)
	{
		return $this -> fractionIs($number, 1);
	}
}
