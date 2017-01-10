<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
