<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\DemoOXIDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ONGR\OXIDConnectorBundle\Entity\ArticleExtension as Base;

/**
 * A class to test ONGR\OXIDConnectorBundle\Entity\ArticleExtension abstract class.
 *
 * @ORM\Entity
 * @ORM\Table(name="oxartextends")
 */
class ArticleExtension extends Base
{
}
