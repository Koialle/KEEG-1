<?php

namespace KEEG\ArticleBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{

// Depuis un repository

	public function myFind()
	{
	  $qb = $this->createQueryBuilder('a');

	  // On peut ajouter ce qu'on veut avant
	  $qb
		->where('a.author LIKE motcle')
		->setParameter('author', $motcle)
	  ;

	  // On applique notre condition sur le QueryBuilder
	  //$this->whereCurrentYear($qb);

	  // On peut ajouter ce qu'on veut après
	  $qb->orderBy('a.date', 'DESC');

	  return $qb
		->getQuery()
		->getResult()
	  ;
	}
	
	
	

}