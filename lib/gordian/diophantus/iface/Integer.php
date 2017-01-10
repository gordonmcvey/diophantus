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

namespace gordian\diophantus\iface;

/**
 *
 * @author gordonmcvey
 */
interface Integer
{
	/**
	 * Add other value to this one
	 * 
	 * @param \gordian\diophantus\iface\Integer $other
	 * @return \gordian\diophantus\iface\Integer
	 */
	public function add (Integer $other) : Integer;
	
	/**
	 * Subtract other value from this one
	 * 
	 * @param \gordian\diophantus\iface\Integer $other
	 * @return \gordian\diophantus\iface\Integer
	 */
	public function sub (Integer $other) : Integer;
	
	/**
	 * Multiply this value by the other one
	 * 
	 * @param \gordian\diophantus\iface\Integer $multiplier
	 * @return \gordian\diophantus\iface\Integer
	 */
	public function mul (Integer $multiplier) : Integer;
	
	/**
	 * Divide this value by the other one
	 * 
	 * @param \gordian\diophantus\iface\Integer $divisor
	 * @return \gordian\diophantus\iface\Integer
	 */
	public function div (Integer $divisor) : Integer;
	
	/**
	 * Return the modulus (remainder) of the division of this value and the divisor
	 * 
	 * @param \gordian\diophantus\iface\Integer $divisor
	 * @return \gordian\diophantus\iface\Integer
	 */
	public function mod (Integer $divisor) : Integer;
	
	/**
	 * Return the absolute value (without sign) of this value
	 * 
	 * @return \gordian\diophantus\iface\Integer
	 */
	public function abs () : Integer;
	
	/**
	 * Raise this value to the given power
	 * 
	 * @param \gordian\diophantus\iface\Integer $power
	 * @return \gordian\diophantus\iface\Integer
	 */
	public function pow (Integer $power) : Integer;
}
