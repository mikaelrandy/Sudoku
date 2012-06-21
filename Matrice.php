<?php

namespace Sudoku;

/**
 *	Sudolu matrice
 *
 *	@author Mikael Randy <mikael.randy@gmail.com>
 */
class Matrice
{

	/**
	 *	Array representation for matrice. A list of Section 
	 *	
	 * 	@var Matrice\Section[]
	 */
	protected $matrice;

	/**
	 *	@var int
	 */
	protected $width;

	/**
	 *	@var int
	 */
	protected $height;

	/**
	 *	Matrice construction
	 *
	 *	@author Mikael Randy <mikael.randy@gmail.com>
	 * 	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com> 
	 */
	public function __construct($height, $width)
	{
		$this->height 	= $height;
		$this->width 	= $width;

		$this->init();
	}

	/**
	 *	Matrice initialisation
	 *
	 *	@author Mikael Randy <mikael.randy@gmail.com>
	 * 	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com> 
	 */
	protected function init()
	{
		for( $i=1; $i<=$this->height; $i++ )
		{
			for( $j=1; $j<=$this->width; $j++ )
			{
				$this->matrice[$i][$j] = new Matrice\Section($this->getHeight(), $this->getWidth());
			}			
		}
	}

	/**
	 *	Is the matrice resolved
	 *
	 *	@author Mikael Randy <mikael.randy@gmail.com>
	 * 	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 */
	public function isResolved()
	{
		// If one section isn't resolved, matrice isn't resolved
		for( $i=1; $i<=$this->height; $i++ )
		{
			for( $j=1; $j<=$this->width; $j++ )
			{
				if( !$this->matrice[$i][$j]->isResolved() )
					return false;
			}			
		}

		return true
	}

	/**
	 *	Getter for height attribute
	 *
	 *	@author Mikael Randy <mikael.randy@gmail.com>
	 * 	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com> 
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 *	Getter for width attribute
	 *
	 *	@author Mikael Randy <mikael.randy@gmail.com>
	 * 	@since 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com>
	 * 	@version 1.0 - 21 jun 2012 - Mikael Randy <mikael.randy@gmail.com> 
	 */
	public function getWidth()
	{
		return $this->width;
	}
}

