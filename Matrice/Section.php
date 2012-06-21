<?php

namespace Sudoku\Matrice;

/**
 *	Sudoku matrice section
 *
 *	A section is an array who contain a range a value between 1 and max value.
 *	This max value is calculated by height box number multiplicated by width box number
 *
 * 	@author Mikael Randy <mikael.randy@gmail.com>
 */
class Section 
{
	/**
	 *	Array representation of the section
	 *
	 * 	@var array
	 */
	protected $section;

	/**
	 *	@var array
	 */
	protected $rangeValue;

	/**
	 *	@var int
	 */
	protected $height;

	/**
	 *	@var int
	 */
	protected $width;

	/**
	 *	Section construction
	 *
	 *	@author Mikael Randy <mikael.randy@gmail.com>
	 *	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com> 
	 */
	public function __construct($$height, $width)
	{
		$this->height 	= $height;
		$this->width 	= $width;

		// Range values are calculated by each value between 1 and boxes number
		$this->rangeValue = range(1, $height*$width);

		$this->init();
	}

	/**
	 *	Section initialisation
	 *
	 *	@author Mikael Randy <mikael.randy@gmail.com>
	 *	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 *	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 */
	public function init()
	{
		for( $i=1; $i<=$this->height; $i++ )
		{
			for( $j=1; $j<=$this->width; $j++ )
			{
				// Null value mean this box is not resolved
				$this->section[$i][$j] = null;
			}			
		}
	}

	/**
	 *	Return true if section is resolved
	 *
	 *  A section is resolved when all boxes are filled with a value
	 *
	 * 	@author Mikael Randy <mikael.randy@gmail.com>
	 * 	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 */
	public function isResolved()
	{
		for( $i=1; $i<=$this->height; $i++ )
		{
			for( $j=1; $j<=$this->width; $j++ )
			{
				if( is_null($this->section[$i][$j])
					return false;
			}			
		}

		return true;
	}

	/**
	 *	Getter for height value
	 *
	 * 	@author Mikael Randy <mikael.randy@gmail.com>
	 * 	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 *	Getter for width value
	 *
	 * 	@author Mikael Randy <mikael.randy@gmail.com>
	 * 	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 */
	public function getWidth()
	{
		return $this->width;
	}
}